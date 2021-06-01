<?php
include_once("bootstrap.php");



    
  $user = new User();
  $currentUserId = $_SESSION["userId"];
  $currentUser = $user->getUserInfo($currentUserId);
 
  $user->setKrediet($currentUser["krediet"] + "50");


  
  $user->updatekrediet($currentUserId);
  header("Location: index.php");

?>