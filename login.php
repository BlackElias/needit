<?php
include_once("bootstrap.php");

$conn = Db::getConnection();

if (!empty($_POST)) {
    try {
        $user = new User();

        $user->setUsername($_POST["username"], "login");
        $user->setPassword($_POST["password"], "login");
        $user->login();
        session_start();
        $_SESSION["username"] = $user->getUsername();
        var_dump($_SESSION["username"]);
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.typekit.net/hay5vbn.css">
    <link rel="stylesheet" href="https://use.typekit.net/hay5vbn.css">
    <title>Needit</title>
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
                <a class="nav-link active" href="login.php">Login</a>
            </div>
        </div>
    </div>
</nav>
<body style="background-color: #CF8D1E;">

<div class=" wrapper  ">
<form method="POST" class="wrapper-medium form-login"> 
    <h1 class="title-left"> Log in</h1>
  <div class="mb-3 font ">
    <label for="exampleInputPassword1" class="form-label ">Email</label>
    <input type="email" class="form-control black-border w-30" style="border-radius: 10px;" id="exampleInputPassword1">
  </div>

  <div class="mb-3 font ">
    <label for="exampleInputEmail1" class="form-label ">Passwoord</label>
    <input type="email" class="form-control black-border w-30" style="border-radius: 10px;" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  </div>
  <img src="img/background.png" class="img-fluid title-img" alt="background image">
</body>

<footer class="footer bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center text-white p-3" style="color:white; background-color: #252523; box-shadow: 0px 0px 6px grey;">
           
            <a class="text-white" style="color:white; text-decoration: none;" href="">© 2020 Copyright: Elias Valienne en Kevin Vanbockryck</a>
        </div>
        <!-- Copyright -->
    </footer>
</html>