<?php
session_start();
if (!isset($_SESSION["admin_username"])) {
    header("Location: login.php");
    exit();
}
include 'db_connect.php';

// Handle filters
$where = [];
$params = [];
if(!empty($_GET['from_date'])) {
    $where[] = 'sr.stationery_date >= ?';
    $params[] = $_GET['from_date'];
}
if(!empty($_GET['to_date'])) {
    $where[] = 'sr.stationery_date <= ?';
    $params[] = $_GET['to_date'];
}
if(!empty($_GET['stationery_name'])) {
    $where[] = 's.stationery_name = ?';
    $params[] = $_GET['stationery_name'];
}
$whereClause = $where ? 'WHERE '.implode(' AND ', $where) : '';

// Prepare Statement
$sql = "
  SELECT s.stationery_date, st.staff_name, s.stationery_name,
    s.stationery_quantity, s.stationery_description, s.stationery_status
  FROM stationery sr
  JOIN staff st ON st.staff_id = st.staff_id
  JOIN stationery s ON sr.stationery_id = s.stationery_id
  $whereClause
  ORDER BY s.stationery_date DESC
";
$stmt = $conn->prepare($sql);
if($params){
    $types = str_repeat('s', count($params));
    $stmt->bind_param($types, ...$params);
}
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADMIN | REPORT</title>
    <link rel="icon" href="stationtrack1.png" type="image/png" sizes="50x50">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
         body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: FloralWhite;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            background-color: #a51717;
            color: white;
            padding: 20px 0;
            transition: transform 0.3s ease-in-out;
        }

        .sidebar.closed {
            transform: translateX(-100%);
        }

        .sidebar a {
            text-decoration: none;
            color: white;
            display: block;
            padding: 10px 20px;
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .sidebar img {
            display: block;
            margin: 0 auto 20px;
            width: 150px;
        }
        .toggle-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: #a51717;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 18px;
            z-index: 1001;
            cursor: pointer;
        }

        .content {
            margin-left: 260px;
            padding: 40px;
        }


        .form-label {
            font-weight: 600;
        }

        .table thead {
            background: #e9ecef;
        }

        .table tfoot {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        .btn-print, .btn-export {
            border-radius: 5px;
        }

        @media print {
            .sidebar, .toggle-btn, .btn, form {
                display: none !important;
            }

            .content {
                margin: 0;
                padding: 0;
            }
        }

        
    </style>
</head>
<body>
<button class="toggle-btn" id="toggleBtn">☰</button>


<div class="sidebar" id="sidebar">
    <br>
    </br>
    <a href="index.php"><img src="stationtrack1.png" alt="StationTrack Logo"></a>
    <a href="admin_dashboard.php"><i class="fa fa-home"></i> Home</a>
    <a href="staff_analysis.php"><i class="fa-solid fa-plus"></i> User Analysis</a>
    <a href="request_list.php"><i class="fa-solid fa-calendar-check"></i> Request Management</a>
    <a href="stationery_list.php"><i class="fa fa-boxes-stacked"></i> Stationery Management</a>
     <a href="supplier.php"><i class="fa fa-bar-chart"></i>Supplier</a>
     <a href="report.php"><i class="fa-solid fa-note-sticky"></i> Report</a>
    <a href="admin_profile.php"><i class="fa fa-user"></i> Profile</a>
    <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
</div>
<br>


<!-- Content -->
<div class="content" id="mainContent">
    <div class="report-header">
        <h2><b>Stationery Usage Report</b></h2>
        
    </div>

    <!-- Filter Form -->
    <form class="row g-3 mb-4" method="get">
      <div class="col-md-3">
        <label>From Date:</label>
        <input type="date" name="from_date" class="form-control" value="<?=htmlspecialchars($_GET['from_date'] ?? '')?>">
      </div>
      <div class="col-md-3">
        <label>To Date:</label>
        <input type="date" name="to_date" class="form-control" value="<?=htmlspecialchars($_GET['to_date'] ?? '')?>">
      </div>
      <div class="col-md-4">
        <label>Stationery:</label>
        <select name="stationery_name" class="form-select">
          <option value="">All Items</option>
          <?php
            $slist = $conn->query("SELECT DISTINCT stationery_name FROM stationery");
            while ($s = $slist->fetch_assoc()):
          ?>
            <option <?=($_GET['stationery_name'] ?? '') === $s['stationery_name'] ? 'selected' : ''?>>
              <?=htmlspecialchars($s['stationery_name'])?>
            </option>
          <?php endwhile;?>
        </select>
      </div>
      <div class="col-md-2 d-flex align-items-end">
        <button type="submit" class="btn btn-primary w-100">Filter</button>
      </div>
    </form>

    <!-- Export Buttons -->
    <div class="mb-3 text-end">
      <button class="btn btn-success me-2" id="downloadCSV">⭳ Export CSV</button>
      <button class="btn btn-secondary" id="printBtn">🖨️ Print</button>
    </div>

    <!-- Report Table -->
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Date</th>
            <th>Staff</th>
            <th>Item</th>
            <th>Qty</th>
            <th>Description</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $totalQty = 0;
            while($row = $result->fetch_assoc()):
              $totalQty += $row['stationery_quantity'];
          ?>
            <tr>
              <td><?=htmlspecialchars($row['stationery_date'])?></td>
              <td><?=htmlspecialchars($row['staff_name'])?></td>
              <td><?=htmlspecialchars($row['stationery_name'])?></td>
              <td><?=htmlspecialchars($row['stationery_quantity'])?></td>
              <td><?=htmlspecialchars($row['stationery_description'])?></td>
              <td><?=htmlspecialchars($row['stationery_status'])?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="3">Total Quantity:</th>
            <th><?=htmlspecialchars($totalQty)?></th>
            <th></th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <script>
    document.getElementById('printBtn').addEventListener('click', () => {
      window.print();
    });

    document.getElementById('downloadCSV').addEventListener('click', () => {
      const rows = [...document.querySelectorAll('table tr')];
      const csv = rows.map(r => [...r.cells].map(c => `"${c.innerText}"`).join(',')).join("\\n");
      const blob = new Blob([csv], { type: 'text/csv' });
      const link = document.createElement('a');
      link.href = URL.createObjectURL(blob);
      link.download = 'stationery_report.csv';
      link.click();
    });
  </script>
</body>
</html>
