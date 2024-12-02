<style>
	#colorsider{
		background-color: #e7e5e5;

	}
</style>

<nav class="ts-sidebar" id="colorsider" >
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label" style="color:black">Main</li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
					<li><a href="dashboard.php" style="color:black"><i class="fa fa-desktop"></i>Dashboard</a></li>

<li><a href="attendance.php" style="color:black;"><i class="fa fa-file-o"  ></i>Attendance</a></li>
<li><a href="tickets.php" style="color:black"><i class="fa fa-file-o" ></i>Tickets</a></li>
<li><a href="access-invoice.php" style="color:black"><i class="fa fa-file-o"></i>Invoice</a></li>
<!-- <li><a href="room-details.php"><i class="fa fa-file-o"></i>Room Details</a></li> -->
<li><a href="my-profile.php" style="color:black"><i class="fa fa-user"></i> My Profile</a></li>
<li><a href="change-password.php" style="color:black"><i class="fa fa-files-o"></i>Change Password</a></li>
<li><a href="access-log.php" style="color:black"><i class="fa fa-file-o"></i>Access log</a></li>
<?php } else { ?>
				
				<li><a href="registration.php" style="color:black"><i class="fa fa-files-o"></i>Create Account</a></li>
				<li><a href="index.php" style="color:black"><i class="fa fa-users"></i> User Login</a></li>
				<li><a href="admin" style="color:black"><i class="fa fa-user"></i> Admin Login</a></li>
				<?php } ?>

			</ul>
</nav>