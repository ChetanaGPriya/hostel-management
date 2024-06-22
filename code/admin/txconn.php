<?php
	
	$date = $_POST['date'];
    $name = $_POST['name'];
    $regno = $_POST['regno'];
    $course = $_POST['course'];
    $branch = $_POST['branch'];
	$year = $_POST['year'];
    $txid = $_POST['txid'];
	$amount = $_POST['amount'];
	$conn = new mysqli('localhost','root','','bookh');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into transaction(date,name,regno,course,branch,year,txid,amount) values(?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssss",$date,$name,$regno,$course,$branch,$year,$txid,$amount);
		$execval = $stmt->execute();
		echo $execval;
		echo"<script>alert('Transaction added Successful');</script>";
		$stmt->close();
		$conn->close();
	} 
?>