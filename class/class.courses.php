<?php
class Courses{
    private $db;
    public $coursename;

    function __construct ($DB_CON){
		$this->db=$DB_CON;
	}

public function addCourses($coursename){
    $sql=$this-> db-> prepare("INSERT INTO courses (courses_name) VALUE (?)");
    $sql-> execute([$coursename]);
    return true;
}
public function getCoursesDetail($courses_ID){
	$sql= $this->db->prepare("SELECT * FROM courses where courses_ID=?");
	$sql->execute ([$courses_ID]);
	$row=$sql->fetch(PDO::FETCH_ASSOC);
	$this->coursename=$row['courses_name'];	
	
}
public function listCourses(){
	$sql=$this->db->query("SELECT * FROM courses");
	while($row=$sql->fetch (PDO:: FETCH_ASSOC)){
		$data[]=$row;
	}
	return $data;
}
public function deleteCourses($courses_ID){
	$sql= $this->db->prepare("DELETE FROM courses WHERE courses_ID=?");
	$sql->execute([$courses_ID]);
	return true;
}
public function updateCourses($coursesname,$courses_ID){	
	$sql=$this->db->prepare("UPDATE courses SET courses_name = ? WHERE courses_ID=?");
	$sql-> execute ([$coursesname,$courses_ID]);	
	return true;
}
}