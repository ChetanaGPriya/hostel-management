<?php
	
	$regno = $_POST['regno'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $branch = $_POST['branch'];
	$year = $_POST['year'];
    $contact = $_POST['contact'];
	$mail = $_POST['mail'];
	$address = $_POST['address'];
	$conn = new mysqli('localhost','root','','bookh');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into register(regno,name,course,branch,year,contact,mail,address) values(?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssss",$regno,$name,$course,$branch,$year,$contact,$mail,$address,);
		$execval = $stmt->execute();
		echo $execval;
		echo"<script>alert('Registration Successful');</script>";
		$stmt->close();
		$conn->close();
	} 
?>