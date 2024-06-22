<?php
include('includes/pdoconfig.php');
if(!empty($_POST["coursecod"])) 
{	
$id=$_POST['coursecod'];
$stmt = $DB_con->prepare("SELECT * FROM courses WHERE course_code = :id");
$stmt->execute(array(':id' => $id));
?>
 <?php
 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 {
  ?>
 <?php echo htmlentities($row['course_sn']); ?>
  <?php
 }
}
if(!empty($_POST["coursecode"])) 
{	
$id=$_POST['coursecode'];
$stmt = $DB_con->prepare("SELECT * FROM courses WHERE course_code = :id");
$stmt->execute(array(':id' => $id));
?>
 <?php
 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 {
  ?>
 <?php echo htmlentities($row['course_fn']); ?>
  <?php
 }
}
?>