<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('includes/header.php');?>
<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">

<div id=form> 
<form name="form" action="cert.php" method="POST">
<div class="container">
<div class="form-group">
<div class="col-md-12">
					
                    <h2 class="page-title"> </h2>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">No-dues</div>
                                <div class="panel-body">
<label class="col-sm-2 control-label">Regd No: </label>
            <input type="text" id="regdno" name="regdno" required><br><br>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Name: </label>
            <input type="text" id="name" name="name" required><br><br>
</div>
<div class="form-group">
            <label class="col-sm-2 control-label">Course: </label>
            <input type="text" id="class" name="class" required><br><br>
</div>
<div class="form-group">
            <label class="col-sm-2 control-label">Room No: </label>
            <input type="text" id="room" name="room" required><br><br>
</div>
<div class="form-group">
            <label class="col-sm-2 control-label">From:</label>
            <input type="date"  name="from"><br><br>
</div>
<div class="form-group">
            <label class="col-sm-2 control-label">To:</label>
            <input type="date"  id="to" name="to"><br><br>
</div>
<div class="form-group">
            <label class="col-sm-2 control-label">Date: </label>
            <input type="date" id="date" name="date" required>&emsp;<br><br>
</div>  
            

            <button type="submit" name="submit" >submit</button>
</div></div>
</div></div>
</div></div>
</div></div>
</div></div>
</div>
</body>
</html>
