<?php
	
	$room_no = $_POST['room'];
    $name = $_POST['name'];
    $branch = $_POST['branch'];
	$year = $_POST['year'];
    $contact = $_POST['contact'];
	$father = $_POST['father'];
	$fcontact = $_POST['fcontact'];
	$mother = $_POST['mother'];
	$mcontact = $_POST['mcontact'];
	$address = $_POST['address'];
	$conn = new mysqli('localhost','root','','bookh');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into book(room,name,branch,year,contact,father,fcontact,mother,mcontact,address) values(?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssssss",$room_no,$name,$branch,$year,$contact,$father,$fcontact,$mother,$mcontact,$address,);
		$execval = $stmt->execute();
		echo $execval;
		echo"<script>alert('Room Booking Successful');</script>";
		$stmt->close();
		$conn->close();
	} 
?>