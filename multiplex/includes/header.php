
<style>
	.heading{
		display: flex;
		flex-direction:row;
		font-size:20px; 
		color:black;
		margin-left: 25px;
		margin-top:15px;
		height:45px;
	}
</style>
<?php if($_SESSION['id'])
{ ?><div class="brand clearfix" style="	background-color:#f47c3c; height:60px">
		<a href="#" class="logo" style="font-size:14px; color: black; text-decoration:none">Multiplex Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#" style="color:black; background-color:#f47c3c; height:50px; text-decoration:none;"><img src="img\Multiplex8-650x433.jpg" style="height:30px ; border-radius:90%; border:2px solid white; margin-left:10px"> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="my-profile.php" style="text-decoration:none; color:black; background-color:#e7e5e5">My Account</a></li>
					<li><a href="logout.php" style="text-decoration:none; color:black; background-color:#e7e5e5">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

<?php
} else { ?>
<div class="brand clearfix"  style="background-color:#F47C3C;">
		<div class="heading">
			<img src="img/logo2.jpg" style="height:40px; width:40px; margin-top:0px; margin-right:20px;border-radius:20px; ">
			<p style="margin-top:5px;">Multiplex Management System</p>
		</div>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		
	</div>
	<?php } ?>