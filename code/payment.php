<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
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
	<title>Payment</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script>
function getDues(val) {
$.ajax({
type: "POST",
url: "get_due.php",
data:'coursecod='+val,
success: function(data){
//alert(data);
$('#cns').val(data);
}
});
$.ajax({
type: "POST",
url: "get_due.php",
data:'coursecode='+val,
success: function(data){
//alert(data);
$('#cnf').val(data);
}
});

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
					
						<h2 class="page-title">Payment </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Make Payment</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">Reg No:</label>
												<div class="col-sm-8">
												<input type="text" name="cc" class="form-control"  onChange="getDues(this.value)" required> 
											</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Your Due </label>
												<div class="col-sm-8">
													<input type="text" name="cns" id="cns"  class="form-control"> 
													
</div>
											</div>

                                            <div class="form-group">
												<label class="col-sm-2 control-label">Upto(mm-yyyy):</label>
												<div class="col-sm-8">
												<input type="text" name="cnf" id="cnf" class="form-control" > 
											</div>
											</div>
                                            <br>
                    <h4>Scan the QR to make payment</h4>
											




												
											</div>

										</form>

									</div>
								</div>
									
							
							</div>
						
									
							

							</div>
						</div>

					</div>
				</div> 	
				

			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</script>
</body>

</html>