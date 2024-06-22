<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
    
</head>
<body style="text-align:left">
<?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
        <div class="content-wrapper">
		<div class="container-fluid">
        <div class="row">
					<div class="col-md-12">
						<h2 class="page-title" style="margin-top:4%">Room Booking</h2>
						<div class="panel panel-default">
                        <div class="panel-body">
<div id=form>
    <form action="bookhostelconn.php" method="POST">
        <div class="container">
            <label class="col-sm-2 control-label">Block:</label>
            <input type="text"  name="block" id="block" required><br><br>
			<label class="col-sm-2 control-label">Room No:</label>
            <input type="text"  name="room" id="room" required><br><br>
			<label class="col-sm-2 control-label">Academic Year:</label>
            <input type="text"  name="year" id="year" required><br><br>
			<label class="col-sm-2 control-label">First Name:</label>
            <input type="text"  name="fname" id="fname" required><br><br>
			<label class="col-sm-2 control-label">Last Name:</label>
            <input type="text"  name="lname" id="lname" required><br><br>
			<label class="col-sm-2 control-label">Gender: </label>
            <select name="M/F" id="M/F">
                    <option value=""></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                 </select><br><br>
			<label class="col-sm-2 control-label">Course:</label>
            <input type="text"  name="course" id="course" required><br><br>
			<label class="col-sm-2 control-label">Branch:</label>
            <input type="text"  name="branch" id="branch" required><br><br>
			<label class="col-sm-2 control-label">Registration No:</label>
            <input type="text"  name="regno" id="regno" required><br><br>
			<label class="col-sm-2 control-label">Contact:</label>
            <input type="text"  name="contact" id="contact" required><br><br>
            <label class="col-sm-2 control-label">Email:</label>
            <input type="text"  name="email" id="email" required><br><br>
            <label class="col-sm-2 control-label">Parent/Guardian Name :</label>
            <input type="text"  name="gname" id="gname" required><br><br>
			<label class="col-sm-2 control-label">Parent/Guardian Contact:</label>
            <input type="text"  name="gcontact" id="gcontact" required><br><br>
            <label class="col-sm-2 control-label">Address Line 1:</label>
            <input type="text"  name="add" id="add" required><br><br>
			<label class="col-sm-2 control-label">Address Line 2:</label>
            <input type="text"  name="address" id="address" required><br><br>
			<label class="col-sm-2 control-label">City:</label>
            <input type="text"  name="city" id="city" required><br><br>
			<label class="col-sm-2 control-label">State:</label>
            <input type="text"  name="state" id="state" required><br><br>
			<label class="col-sm-2 control-label">Pincode:</label>
            <input type="text"  name="pin" id="pin" required><br><br>
            <div class="col-sm-8 col-sm-offset-2">
            <button type="submit" class="registerbtn">Book Hostel</button><br><br>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>