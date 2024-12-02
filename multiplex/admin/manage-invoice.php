<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

if (isset($_GET['delete_id'])) {
    // Process delete request
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM invoice WHERE id = ?";
    $stmt = $mysqli->prepare($delete_query);
    $stmt->bind_param('i', $delete_id);
    if ($stmt->execute()) {
        // Delete successful, redirect back to this page
        header("Location: manage-invoice.php");
        exit();
    } else {
        // Handle delete error
        echo "Error deleting record: " . $stmt->error;
    }
}

// Fetch invoice records
$aid = $_SESSION['id'];
$ret = "SELECT * FROM invoice";
$stmt = $mysqli->prepare($ret);
$stmt->execute();
$res = $stmt->get_result();
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">
    <title>Manage invoice</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include('includes/header.php');?>

    <div class="ts-main-content">
        <?php include('includes/sidebar.php');?>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title" style="margin-top:4%">Manage invoice</h2>
                        <div class="panel panel-default">
                            <div class="panel-heading">All invoice Details</div>
                            <div class="panel-body">
                                <table id="zctb" class="display table  table-bordered table-hover table-responsive" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Owner</th>
                                            <th>Carno</th>
                                            <th>Payment</th>
                                            <th>Date</th>
                                            <th>Period</th>
                                            <th>Contact No.</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $cnt = 1;
                                        while ($row = $res->fetch_object()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $cnt++; ?></td>
                                                <td><?php echo $row->owner; ?></td>
                                                <td><?php echo $row->carno; ?></td>
                                                <td><?php echo $row->payment; ?></td>
                                                <td><?php echo $row->date; ?></td>
                                                <td><?php echo $row->period; ?></td>
                                                <td><?php echo $row->contactno; ?></td>
                                                <td>
                                                    <a href="?delete_id=<?php echo $row->id; ?>" title="Delete Record" onclick="return confirm('Do you want to delete?');">
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Loading Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
