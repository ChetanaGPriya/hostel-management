<?php
	$block = $_POST['block'];
	$room_no = $_POST['room'];
    $year = $_POST['year'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $MF = $_POST['M/F'];
    $course = $_POST['course'];
    $branch = $_POST['branch'];
    $regno = $_POST['regno'];
    $contact = $_POST['contact'];
	$email = $_POST['email'];
	$gname = $_POST['gname'];
	$gcontact = $_POST['gcontact'];
	$add = $_POST['add'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
    $pincode = $_POST['pin'];
	$conn = new mysqli('localhost','root','','bookh');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into booking(block,room,year,fname,lname,gender,course,branch,regno,contact,email,gname,gcontact,addr,address,city,state,pincode) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssssssssssssss", $block,$room_no,$year,$fname,$lname,$MF,$course,$branch,$regno,$contact,$email,$gname,$gcontact,$add,$address,$city,$state,$pincode);
		$execval = $stmt->execute();
		echo $execval;
		echo '<script>
        window.location.href = "book-hostel.php.php";
        </script>';
		$stmt->close();
		$conn->close();
	} 
?>