<?php
include 'inc/dbconfig.php';
include 'class/class.universities.php';
$university= new University($DB_CON);
if (isset($_GET['submit'])){
  
  $course=$_GET['course'];
  foreach($university->getUniCourse($course) as $value) {
  	echo $value['uni_name'];
  	echo "<br/>";
} 
}
?>