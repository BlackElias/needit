
<?php
include_once("bootstrap.php");

if (!empty($_POST)) {
    try {
        $lend = new Lend();
        $lend->setUser_id($_SESSION["userId"]);
        $lend->setPost_id($_GET["id"]);
        $lend->setStart_date($_POST['startDate']);
        $lend->setEnd_date($_POST['endDate']);
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        echo $startDate;
        echo $endDate;
        if(strtotime($_POST['startDate']) < strtotime($_POST['endDate'])){
          //als u post = post ni zelfde strat en eind datum
          $feed = Lend::postDate();
          
         $i = 0;
          foreach ($feed as  $post) :  ?>
             <?php if($_POST['startDate'] >= $post["start_date"] && $_POST['startDate'] <= $post["end_date"] ){
              echo "kut";
              $i++;
              }        ?>

          <?php endforeach; 
          if ( $i > 0){
            echo "error";
          }else{
             $lend->saveDate();
        header("Location: index.php");
          }
         ;
        }
         
        
        
      
    } catch (\Throwable $th) {
        $error = $th->getMessage();
    }
}else{ echo $_POST['endDate'];}

var_dump($lend)

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

  <img class="logo" src="img/logo.png" id="logo" alt="logo" style="margin-left: 10px;">
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

<body>
  <div class="filter">
    <div class="row" style="--bs-gutter-x: 0rem;">
      


      <div class="col-md col-mobile">

       
       
        
          <div class="article-detail ">
          
            <img src="img/background.png" alt="" style=" " class="float-start article-image">
            <div class="grey">
            <form action="" method="POST">
            <h4 ><?php echo $_GET["title"]?> </h4>
            <input type="date" name="startDate">
            <input type="date" name="endDate" >
            <?php /* checken if dat 2de datum ni voor eerste datum en wel is error en als da ni is else query insert into
            */?>
            <button class="article-button" id="btn-left"  type="submit">Leen het nu</button>
            </form>
            </div>
          </div>
          
           
          </div>
        

        
        

      </div>
    </div>

  </div>
</div>
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