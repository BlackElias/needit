<?php
include_once("bootstrap.php");

    
        $user = new User();
        $currentUserId = $_SESSION["userId"];
        $currentUser = $user->getUserInfo($currentUserId);
       
        $user->setKrediet($currentUser["krediet"] + "10");
      
     
        
        $user->updatekrediet($currentUserId);
        header("Location: index.php");
  


?>