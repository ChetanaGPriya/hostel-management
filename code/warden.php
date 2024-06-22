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
	<link rel="stylesheet" href="style.css">
    
</head>
<body style="text-align:left">
<?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
        <div class="content-wrapper">
		<div class="container-fluid">
        <div class="row">
					<div class="col-md-12">
						<h2 class="page-title" style="margin-top:4%">Warden Registration</h2>
						<div class="panel panel-default">
							
<div id=form>
    <form action="regconn.php" method="POST">
        <div class="container">
        <div class="hr-dashed"></div>
        
<div class="form-group">
			<label class="col-sm-2 control-label">UserName:</label>
            
            <input type="text"  name="name" id="name" required><br><br>

</div>
<div class="form-group">
			<label class="col-sm-2 control-label">Contact No:</label>
            
            <input type="text"  name="branch" id="branch" required><br><br>

</div>
<div class="form-group">
			<label class="col-sm-2 control-label">email:</label>
            
            <input type="text"  name="year" id="year" required><br><br>

</div>
<div class="form-group">
			<label class="col-sm-2 control-label">Designation:</label>
            
            <input type="text"  name="year" id="year" required><br><br>

</div>
<div class="form-group">
			<label class="col-sm-2 control-label">Adress:</label>
            
            <input type="text"  name="year" id="year" required><br><br>

</div>
<div class="form-group">
			<label class="col-sm-2 control-label">Password:</label>
            
            <input type="text"  name="contact" id="contact" required><br><br>

</div>
<div class="form-group">
            <label class="col-sm-2 control-label">Confirm Password :</label>
            
            <input type="text"  name="father" id="father" required><br><br>

</div>

	
		
            <div class="col-sm-8 col-sm-offset-2">
            <button type="submit" class="registerbtn">Register</button><br><br>
           
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>