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
						<h2 class="page-title" style="margin-top:4%">Payments</h2>
						<div class="panel panel-default">
							
<div id=form>
    <form action="txconn.php" method="POST">
        <div class="container">
        <div class="hr-dashed"></div>
        
<div class="form-group">
			<label class="col-sm-2 control-label">Date:</label>
            
            <input type="text"  name="date" id="date" required><br><br>

</div>
<div class="form-group">
			<label class="col-sm-2 control-label">Full Name:</label>
            
            <input type="text"  name="name" id="name" required><br><br>

</div>
<div class="form-group">
			<label class="col-sm-2 control-label">Registration No:</label>
            
            <input type="text"  name="regno" id="regno" required><br><br>

</div>
<div class="form-group">
			<label class="col-sm-2 control-label">Course:</label>
            
            <input type="text"  name="course" id="course" required><br><br>

</div>
<div class="form-group">
			<label class="col-sm-2 control-label">Branch:</label>
            
            <input type="text"  name="branch" id="branch" required><br><br>

</div>
<div class="form-group">
			<label class="col-sm-2 control-label">Year of Study:</label>

            <select name="year" id="year" class="form-control" required="required">
<option value="">Select Year</option>
<option value="1/4">1/4</option>
<option value="2/4">2/4</option>
<option value="3/4">3/4</option>
<option value="4/4">4/4</option>
<option value="1/6">1/6</option>
<option value="2/6">2/6</option>
<option value="3/6">3/6</option>
<option value="4/6">4/6</option>
<option value="1/2">1/2</option>
<option value="2/2">2/2</option>
</select>

</div>
<div class="form-group">
			<label class="col-sm-2 control-label">Transaction ID:</label>
            
            <input type="text"  name="txid" id="txid" required><br><br>

</div>
<div class="form-group">
			<label class="col-sm-2 control-label">Amount:</label>
            
            <input type="text"  name="amount" id="amount" required><br><br>

</div>


		
            <div class="col-sm-8 col-sm-offset-2">
            <button type="submit" class="registerbtn">Add Transation</button><br><br>
           
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