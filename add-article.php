
<?php
include_once("bootstrap.php");

if (!empty($_POST)) {
    try {
        $post = new Post();
        $post->setUserId($_SESSION["userId"]);
        $post->setTitle($_SESSION["title"]);
        $post->setDescription($_POST["description"]);
        $tags = $post->cleanupTags($_POST["tags"]);
        $post->setTags($tags);
        
        $image = $post->saveImage($_FILES["image"]["name"], $type);
        $post->setImage($image);
        
        $post->save();
        header("Location: index.php");
    } catch (\Throwable $th) {
        $error = $th->getMessage();
    }
}
var_dump($post)
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="app.css">
  <link rel="stylesheet" href="https://use.typekit.net/hay5vbn.css">

  <title>Document</title>
</head>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: white; box-shadow: 0px 3px 3px black; font-family: futura-pt, sans-serif;font-weight: 700;">

  <!-- Navbar brand -->

  <img class="logo" src="img/logo.png" alt="logo" style="margin-left: 10px;">
  <div class="center" style=" ">
    <form class="form-inline ">
      <div class="md-form my-0 ">
        <input class="form-control mr-sm-2 searchbar " style="width: 150%; " type="text" placeholder="Zoek" aria-label="Search">
      </div>
    </form>
  </div>
  <!-- Collapse button -->
  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>




  <div class="navbar-collapse collapse" id="basicExampleNav" style="margin-left: 25%;">

   <!-- Links -->
   <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link waves-effect waves-light" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="choose-article.php">verzoek/toevoegen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="profile.php">profiel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="#">Krediet: 10</a>
      </li>
    </ul>
  </div>
  <!-- Links -->

</nav>
<!-- Navbar -->

<body style="background-color: #F9F7F7;">
  <div class="filter">
    <div class="row" style="--bs-gutter-x: 0rem;">
      <div class="bg-image p-3 text-center shadow-1-strong col-md  text-white flex-item-left" style=" 
        background-size: 110%;  height: 90vh; flex: 1 1 0%;">
    <form action="POST">
        <div class="mb-3 image-upload">
          <h1 class="title-add">Selecteer uw foto</h1>
          <label for="postImage" class="form-label">Image</label>
          <input type="file" class="form-control form-border" name="image" id="postImage">
        </div>
      </div>



      <div class="col-md col-mobile">
        <div>
          
            <label class="title-add" for="">Naam product:</label>
            <input type="name" name="title" class="input-product" placeholder=" type hier iets">
          
        </div>



        <div>
         
            <label class="title-add" for="" id="description">Beschrijving:</label>
            <textarea type="text" name="descriptions" class="textarea-description"placeholder="type hier uw bericht"></textarea>
          <br>
        

        
          <label class="title-add-service" for="" id="tags" >tags:</label>
          <input type="name" name="tags" class="input-tags"placeholder=" #rood">
         
          
          <br>
           <button class="article-button btn-product" type="submit" id="">Zet product online</button>
        </form>
      </div>
</div>
    </div>

  </div>
  </div>
</body>
<footer class="footer bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0); box-shadow: 0px 0px 6px grey;">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<script src="scripts/new_post.js"></script>
</html>