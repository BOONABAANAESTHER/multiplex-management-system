<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from registration where regNo=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	   


}
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
	<title>Manage Parking Officers</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+510+',height='+430+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}
</script>

</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title" style="margin-top:4%">Manage Registred parking officers</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All parking officer Details</div>
							<div class="panel-body" style="overflow-x: auto;">
								<table id="zctb" class="display table  table-bordered table-hover" cellspacing="0" width="100%" style="overflow:auto;" >
									<thead>
										<tr>
											<th>Sno.</th>
											<th>Regno</th>
                                            <th>first name</th>
                                            <th>middle Name</th>
											<th>last name</th>
                                            <th>gender </th>
											<th>contact no </th>
                                            <th>email</th>
											<th>nin  </th>
											<th>address </th>
											<th>relative name</th>
                                            <th>relative contact</th>
											<th>Action</th>
										</tr>
									</thead>
									<!-- <tfoot>
										<tr>
                                            <th>Sno.</th>
                                            <th>reg no</th>
											<th>first Name</th>
                                            <th>middle Name</th>
                                            <th>last Name</th>
                                            <th> gender</th>
											<th>contact no </th>
                                            <th>email</th>
											<th>nin  </th>
											<th>address </th>
											<th>relative name</th>
                                            <th>relative contact</th>
											<th>Action</th>  
                                        </tr>
									</tfoot> -->
									<tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select * from registration";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->regno;?></td>
<td><?php echo $row->fname;?></td>
<td><?php echo $row->mname;?></td>
<td><?php echo $row->lname;?></td>
<td><?php echo $row->gender;?></td>
<td><?php echo $row->contactno;?></td>
<td><?php echo $row->emailid;?></td>
<td><?php echo $row->nin;?></td>
<td><?php echo $row->address;?></td>
<td><?php echo $row->relativename;?></td>
<td><?php echo $row->relativecontact;?></td>

<td>
<a href="student-details.php?regno=<?php echo $row->regno;?>" title="View Full Details"><i class="fa fa-desktop"></i></a>&nbsp;&nbsp;
<a href="manage-parking-officers.php?del=<?php echo $row->regno;?>" title="Delete Record" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i></a></td>
										</tr>
									<?php
$cnt=$cnt+1;
									 } ?>
											
										
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
