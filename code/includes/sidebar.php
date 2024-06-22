<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
					<li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
					<li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
<li><a href="change-password.php"><i class="fa fa-files-o"></i>Change Password</a></li>
<li><a href="noticeboard.php"><i class="fa fa-file-o"></i>Notice Board</a></li>
<li><a href="room-details.php"><i class="fa fa-file-o"></i>Room Details</a></li>
<li><a href="complaints.php"><i class="fa fa-file-o"></i>Complaints/Suggestions</a></li>
<li><a href="#"><i class="fa fa-desktop"></i> Applications</a>
					<ul>
						<li><a href="certificate-application.php">Apply for leave</a></li>
						<li><a href="applynodues.php">Apply for no-dues</a></li>
						<li><a href="applybonafide.php">Apply for bonafide</a></li>
						<li><a href="other.php">Other</a></li>
					</ul>
				</li>

<?php } else { ?>
				
				<li><a href="registration.php"><i class="fa fa-files-o"></i>Student Registration</a></li>
				<li><a href="login.php"><i class="fa fa-user"></i>Student Login</a></li>
				<li><a href="admin"><i class="fa fa-user"></i> Chief Warden Login</a></li>
				<li><a href="warden.php"><i class="fa fa-user"></i>Warden Registration</a></li>
				<li><a href="manager.php"><i class="fa fa-user"></i>Manager Registration</a></li>
				<?php } ?>

			</ul>
		</nav>