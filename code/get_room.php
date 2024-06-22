<?php
include('roompdoconfig.php');
if(!empty($_POST["cont"])) 
{	
$id=$_POST['cont'];
$stmt = $DB_con->prepare("SELECT * FROM book WHERE contact= :id");
$stmt->execute(array(':id' => $id));
?>
 <?php
 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 {
  ?>
 <?php echo htmlentities($row['room']); ?>
  <?php
 }
}

?>