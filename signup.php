<?php

include_once("bootstrap.php");


if (!empty($_POST)) {
    try {
      $user = new User();
  
      $user->setFirstname($_POST["firstname"]);
      $user->setLastname($_POST["lastname"]);
  
      $user->setPassword($_POST["password"]);
      $user->hashPassword();
      $user->setEmail($_POST["email"]);
      $user->checkEmail();
      $user->setStreetname($_POST["streetname"]);
      $user->setStreetnumber($_POST["streetnumber"]);
      $user->setCity($_POST["city"]);
  
      $user->save();
  
      $email = $user->getEmail();
      $currentUser = $user->getLoggedUser($email);
      session_start();
      $_SESSION["userId"] = $currentUser["id"];
  
      header("Location: index.php");
    } catch (\Throwable $th) {
      $error = $th->getMessage();
    }
  }



?>
<!DOCTYPE html>
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
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="justify-content: flex-end; margin-left:-4%;">
            <div class="navbar-nav">
            <a class="nav-link " aria-current="page" href="home.php">Home</a>
            
                <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
                
                <a class="nav-link " href="signup.php">Meld je aan</a>
                <a class="nav-link" href="login.php">Login</a>
            </div>
        </div>
    </div>
</nav>
<body style="background-color: #1E706B; color: white;">

<div class=" wrapper  " >
<div class=" wrapper">
    <form method="POST" class="wrapper-medium-signup">
      <?php if (isset($error)) : ?>
        <div class="user-messages-area">
          <div class="alert alert-danger">
            <ul>
              <li><?php echo $error ?></li>
            </ul>
          </div>
        </div>
      <?php endif; ?>
      
      <div class="mb-3 font ">

        <h1 class="title-left-signup">Meld je aan!</h1>
        <label for="username" class="form-label">Voornaam</label>
        <input type="name" name="firstname" class="form-control black-border w-50" style="border-radius: 10px;" id="username">

      </div>
      <div class="mb-3 font ">

        <label for="username" class="form-label">Achternaam</label>
        <input type="name" name="lastname" class="form-control black-border w-50" style="border-radius: 10px;" id="username">

      </div>
      <div class="mb-3 font ">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control black-border " style="border-radius: 10px;" id="exampleInputPassword1">
      </div>

      <div class="mb-3 font ">
        <label for="exampleInputEmail1" class="form-label">Passwoord</label>
        <input type="password" name="password" class="form-control black-border" style="border-radius: 10px;" id="exampleInputEmail1" aria-describedby="emailHelp">

      </div>

      <div class="mb-3 font ">
        <label for="exampleInputEmail1" class="form-label">Straatnaam</label>
        <input type="ship-address" name="streetname" class="form-control black-border" style="border-radius: 10px;" id="exampleInputEmail1" aria-describedby="emailHelp">

      </div>

      <div class="mb-3 font float-end">
        <label for="exampleInputEmail1" class="form-label">Straat nummer</label>
        <input type="number" name="streetnumber" class="form-control black-border w-50" style="border-radius: 10px;" id="exampleInputEmail1" aria-describedby="emailHelp">

      </div>

      <div class="mb-3 font ">
        <label for="exampleInputEmail1" class="form-label">Postcode</label>
        <input type="ship-zip" name="city" class="form-control black-border w-25" style="border-radius: 10px;" id="exampleInputEmail1" aria-describedby="ship-zip">

      </div>
      <button type="submit" class="btn btn-primary">Submit</button>

    </form>
 
  </div>
  </div>
  <img src="img/background.png" class="img-fluid title-img-signup" alt="background image" >
</body>

<footer class="footer bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center text-white p-3" style="color:white; background-color: #252523; box-shadow: 0px 0px 6px grey;">
           
            <a class="text-white" style="color:white; text-decoration: none;" href="">© 2020 Copyright: Elias Valienne </a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="app.js"></script>
</html>