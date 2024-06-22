<?php
	$block = $_POST['block'];
	$room_no = $_POST['room'];
    $year = $_POST['year'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $course = $_POST['course'];
    $branch = $_POST['branch'];
    $regno = $_POST['regno'];
	$due = $_POST['due'];
	$conn = new mysqli('localhost','root','','hostel8');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into bookh(block,room,year,fname,lname,course,branch,regno,due) values(?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssssss", $block,$room_no,$year,$fname,$lname,$course,$branch,$regno,$due);
		$execval = $stmt->execute();
		echo $execval;
		echo"<script>alert('Room Booking Successful');</script>";
		$stmt->close();
		$conn->close();
	} 
?>