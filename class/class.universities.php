<?php
class University{
    private $db;
    public $universityname;

    function __construct ($DB_CON){
		$this->db=$DB_CON;
	}

public function addUniversity($universityname){
    $sql=$this-> db-> prepare("INSERT INTO universities (uni_name) VALUE (?)");
    $sql-> execute([$universityname]);
    return true;
}
public function getUniversityDetail($university_ID){
	$sql= $this->db->prepare("SELECT * FROM universities where uni_ID=?");
	$sql->execute ([$university_ID]);
	$row=$sql->fetch(PDO::FETCH_ASSOC);
	$this->universityname=$row['uni_name'];	
	
}
public function listUniversities(){
	$sql=$this->db->query("SELECT * FROM universities");
	while($row=$sql->fetch (PDO:: FETCH_ASSOC)){
		$data[]=$row;
	}
	return $data;
}
public function deleteUniversity($university_ID){
	$sql= $this->db->prepare("DELETE FROM universities WHERE uni_ID=?");
	$sql->execute([$university_ID]);
	return true;
}
public function updateUniversity($universityname,$university_ID){	
	$sql=$this->db->prepare("UPDATE universities SET uni_name = ? WHERE uni_ID=?");
	$sql-> execute ([$universityname,$university_ID]);	
	return true;
}
public function getUniCourse($course){
	$sql= $this->db->prepare("SELECT * FROM unicourses as UC, universities as U, courses as C where UC.uni_ID=U.uni_ID and UC.course_ID=C.courses_ID and C.courses_name like ?");
	$sql->execute (['%'.$course.'%']);
	while($row=$sql->fetch (PDO:: FETCH_ASSOC)){
		$data[]=$row;
	}
	return $data;	
	
}
}