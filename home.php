

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
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="justify-content: center; margin-left:-4%;">
            <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            
                <a class="nav-link " aria-current="page" href="contact.php">Contact</a>
                
                <a class="nav-link " href="about.php">About Us</a>
                <a class="nav-link" href="login.php">Login</a>
            </div>
        </div>
    </div>
</nav>
<body>
  <h1 class="wrapper title">Needit! <br id="title"> Leer en leen met je buren</h1>
  <h3 class="wrapper title-text">Top markt platform voor u en uw buren <br>Lennen gaat nu nog gemakkelijker!</h3>  
  <img src="img/hero-img.png" class="img-fluid title-img" alt="background image">
  <h1 class="wrapper title title-maxScreen">Hoe doet Needit dit?</h1>
  <p  class="wrapper text-mobile text-maxScreen">Needit biedt een markt platform voor buren om goederen te
kunnen lenen op een bepaalde datum die je ingeeft. Zo gaan
we de circulaire cirkel doorbreken. Door hergebruiken van 
producten en ervoor zorgen voor minder onnodige aankopen.

De hele wereld laten delen is nogal een opgave.
Dat doe je niet even op een namiddag. Het kost veel tijd, geld 
en inspanning. Maar vaak zijn dingen die moeilijk zijn, juist de
moeite waard.</p>

  <img src="img/Mockup.png" alt="mockup" class="mockup" >



  <div class="form-signup wrapper">
  <form method="POST" class="wrapper-medium"> 
  <?php if (isset($error)) : ?>
    <div class="error">
      <h3><?php echo $error ?></h3>
    </div>
  <?php endif; ?>
  <div class="mb-3 font">
    
      <h1 class="title-left">Meld je aan!</h1>
    <label for="username" class="form-label">Gebruikersnaam</label>
    <input type="name" class="form-control black-border" style="border-radius: 10px;" id="username" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3 font ">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control black-border" style="border-radius: 10px;" id="exampleInputPassword1">
  </div>

  <div class="mb-3 font ">
    <label for="exampleInputEmail1" class="form-label">Passwoord</label>
    <input type="password" class="form-control black-border" style="border-radius: 10px;" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>

  <div class="mb-3 font ">
    <label for="exampleInputEmail1" class="form-label">Straatnaam</label>
    <input type="ship-address" class="form-control black-border" style="border-radius: 10px;" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>

  <div class="mb-3 font float-end">
    <label for="exampleInputEmail1" class="form-label">Straat nummer</label>
    <input type="number" class="form-control black-border w-50" style="border-radius: 10px;" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>

  <div class="mb-3 font ">
    <label for="exampleInputEmail1" class="form-label">Postcode</label>
    <input type="ship-zip" class="form-control black-border w-25" style="border-radius: 10px;" id="exampleInputEmail1" aria-describedby="ship-zip">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
 
  </form>
 </div>

 
  <h1 class="title title-mission">Mission statement</h1>
  <p class="text-mobile text-medium title-mission">Vijfduizend euro voor spullen die je nauwelijks gebruikt. Neem bijvoorbeeld een gemiddelde boormachine; die wordt maar zo’n 15 minuten gebruikt tijdens zijn hele levensduur. En dat terwijl zo’n boor wel 8 uur aan een stuk kan boren. 

Dat is alsof je een 10-literpak melk moet kopen terwijl je maar een glaasje wilt drinken. Als we een boormachine delen kunnen er maar liefst 32 mensen plezier van hebben in. En dat scheelt een hoop.</p>
  <h1 class="title title-mission">Over ons</h1>
  <p class="text-mobile text-medium title-mission">Needit is een markt platform gemaakt door 2 studenten van Thomas more. Om mensen weer sociaal contact te zoeken door goederen  en diensten te kunnen lenen tussen buren of onbekende. Hierdoor pakken we ook 
circulaire economie aan en gaan we producten hun levensduur meer gebruiken.

Needit is met geen enkele politieke partij of andere belanghebbers verbonden en We hebben nog geen samenwerkingen. </p>

 
  <img src="img/background.png" alt="background" class="img-fluid background">
</body>
<footer class="footer bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center text-white p-3" style="color:white; background-color: #252523; box-shadow: 0px 0px 6px grey;">
           
            <a class="text-white" style="color:white; text-decoration: none;" href="">© 2020 Copyright: Elias Valienne en Kevin Vanbockryck</a>
        </div>
        <!-- Copyright -->
    </footer>
</html>