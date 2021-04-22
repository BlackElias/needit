<?php

include_once("bootstrap.php");

if (!empty($_POST)) {
  try {
    $user = new User();
    $user->setEmail($_POST["email"]);
    $user->setFirstname($_POST["firstName"]);
    $user->setLastname($_POST["lastName"]);
    $user->setUsername($_POST["username"], "signup");
    $user->setPassword($_POST["password"], "signup");
    $user->save();
    session_start();
    $_SESSION["username"] = $user->getUsername();
    header("Location: index.php");
  } catch (\Throwable $th) {
    $error = $th->getMessage();
  }
}

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-white" style="box-shadow: 0px 3px 3px black;">
    <div class="container-fluid text-center ">
    <img class="logo" src="img/logo.png" alt="logo">



        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="justify-content: center; margin-left:-4%;">
            <div class="navbar-nav">
            <a class="nav-link " aria-current="page" href="home.php">Home</a>
            
                <a class="nav-link " aria-current="page" href="contact.php">Contact</a>
                
                <a class="nav-link " href="about.php">About Us</a>
                <a class="nav-link" href="login.php">Login</a>
            </div>
        </div>
    </div>
</nav>
<body>
  
</body>
<footer class="footer bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0); box-shadow: 0px 0px 6px grey;">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
</html>