<?php

include '../inc/dbconfig.php';
include '../class/class.admin.php';

$admin= new Admin($DB_CON);
if (isset($_POST['login'])){
  $username= $_POST['username'];
  $password=$_POST['password'];

  $login=$admin->login ($username, $password);
  if($login){
    if(!empty($_POST["remember"])){
      setcookie("username",$_POST['username'], time()+(60*60*24*30));
      setcookie("password",$_POST['password'], time()+(60*60*24*30));
    }
    header("Location:dashboard.php");
  }
  else{
    echo '<div class="alert alert-danger" role="alert">
  Wrong Username/Email/Password.
</div>';
  }
}
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/styles.css">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>LOGIN</title>
  </head>
  <body>

    <form action="" method="POST">
    <div class="login">
      <h1>Login</h1>
      <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="Username" name="username">
      </div>
      <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="Password" name="password">
      </div>

      <button type="submit" class="btn" name="login" value="login">LOGIN</button>


    </div>
  </form>

  </body>
</html>