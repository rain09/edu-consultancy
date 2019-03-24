<?php

class Admin{
    private $db;
    public $username;
     public $password;

function __construct ($DB_CON){
    $this->db=$DB_CON;
}

public function login ($username, $password){
    $sql=$this->db->prepare("SELECT * FROM admin WHERE username= ?");
    $sql-> execute ([$username]);
    if ($sql->rowCount()>0){
        $row=$sql->fetch(PDO::FETCH_ASSOC);
        
        if(password_verify($password,$row['password'])){ 
            $_SESSION['admin_ID']=$row['admin_ID'];
            return true;
        }
    }
    else{
    return false;
}
}
public function logout(){
	session_destroy();
	unset($_SESSION['admin_ID']);
	return true;
}
public function is_loggedin(){
	if(isset($_SESSION['admin_ID'])){
		return true;
	}
}

public function addUniCourse($universityname,$coursename){
    $sql=$this-> db-> prepare("INSERT INTO unicourses (uni_ID,course_ID) VALUE (?,?)");
    $sql-> execute([$universityname,$coursename]);
    return true;
}
}
/*
public function getAdminDetail($adminID){
	$sql= $this->db->prepare("SELECT*FROM admin where admin_ID=?");
	$sql->execute ([$adminID]);
	$row=$sql->fetch(PDO::FETCH_ASSOC);
	$this->email=$row['email'];
	$this->password=$row['password'];
	$this->username=$row['username'];
	

}
public function changePassword($password,$adminID){
	$sql=$this->db->prepare("UPDATE admin SET password=? WHERE admin_ID=?" );
	$sql->execute([$password,$adminID]);
	return true;
}
public function updateProfile($email,$username,$adminID){
    $sql=$this->db->prepare("UPDATE admin SET email=?, username=?  WHERE admin_ID=?");
	$sql-> execute ([$email,$username,$adminID]);
	return true;
}

}
*/