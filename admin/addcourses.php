<?php
include '../inc/dbconfig.php';
include '../class/class.courses.php';
include '../class/class.admin.php';
$admin= new Admin($DB_CON);

$courses= new Courses($DB_CON);
if (!$admin->is_loggedin()){
  header("Location:login.php");
}
if(isset($_POST['submit'])){
  
  $coursename= $_POST['coursename'];
  
  
  
  $addCourses=$courses->addCourses($coursename);

  if($addCourses){
    $addMsg= '<div class="alert alert-success" role="alert">
    
  Courses added successfully!!.
  </div>';
  }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/stylesheet.css">
    

    <title>ADD COURSES</title>
  </head>
  <body>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
  <a class="navbar-brand" href="dashboard.php">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Update</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Destinations</a>
          <a class="dropdown-item" href="#">Services</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-right">    
      <li class="nav-item">
        <a class="nav-link" href="#">Welcome Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
</section>

<!--content-->
<section id="content">
  <div class="container">
    <?php if(isset($addMsg)){
      echo $addMsg;
    }
    ?>
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <a href="dashboard.php" class="list-group-item active main-color-bg"><i class="fa fa-cogs" aria-hidden="true"></i></span> Dashboard </a>
          <a href="destination.php" class="list-group-item"><i class="fa fa-flag" aria-hidden="true"></i> Destination </a>
          <a href="services.php" class="list-group-item"><i class="fa fa-wrench" aria-hidden="true"></i> Services</a>
        </div>
      </div>

      <div class="col-md-9" style="text-align:center;">
        <div class="panel panel-default">
          <div class="panel-heading main-color-bg">
            <h4 class="panel-title" align="center" style="color:#27c677;">MAKE UPDATE</h4>
          </div>
          <div class="panel-body">
            <div class="col-md-6 box">
              <div class="blog">
              <i class="fa fa-flag fa-3x" aria-hidden="true"></i>
              <h3>DESTINATIONS</h3>
              </div>
            </div>
            <div class="col-md-6 box">
              <div class="blog"> 
              <i class="fa fa-wrench fa-3x" aria-hidden="true"></i>
              <h3>SERVICES</h3>
              </div>
            </div>
          </div>
       
        </div>
 
<div class="unilist">
  <a href="courselist.php"><p align="right"><i><u>Course List>></u></i></p></a>
</div>

 <section id="add">
  <form action="" method="POST">
 <div class="addcollege">
      <p>Insert Courses Name</p>
      <div class="textbox">
        <i class="fa fa-book" aria-hidden="true"></i>
        <input type="text" placeholder="Insert Courses Name" name="coursename" value="">
      </div>

      <button type="submit" class="btn" name="submit" value="submit">ADD</button>
    </div>
  </form>
  </section>
    </div>
    </div>
  </div>
</section>
</body>
</html>
