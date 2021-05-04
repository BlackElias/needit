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
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: white; box-shadow: 0px 3px 3px black;">

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
        <a class="nav-link waves-effect waves-light" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="#">verzoek/toevoegen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="#">profiel</a>
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

        <div class="mb-3 image-upload">
          <h1 class="title-add">Selecteer uw foto</h1>
          <label for="postImage" class="form-label">Image</label>
          <input type="file" class="form-control form-border" name="image" id="postImage" onchange="getImage(this);" />
        </div>
      </div>



      <div class="col-md col-mobile">
        <div>
          <form action="">
            <label class="title-add" for="">Naam product:</label>
            <input type="name" name="name" class="input-product">
          </form>
        </div>



        <div>
          <form action="">
            <label class="title-add" for="" id="description">Beschrijving:</label>
            <textarea type="text" name="text" class="textarea-description"></textarea>
          </form>
        </div>

        <form class="">
          <label class="title-add" for="" id="tags">tags:</label>
          <input  type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
         
          <label  class="title-tags" for="vehicle1"> I have a bike</label>
          <input  type="checkbox" id="vehicle2" name="vehicle2" value="Car">
          <label class="title-tags" for="vehicle2"> I have a car</label>
          <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
          <label class="title-tags" for="vehicle3"> I have a boat</label>
        </form>
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

</html>