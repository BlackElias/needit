<?php
spl_autoload_register(function () {
    
    include_once("classes/Db.php");
    include_once("classes/Post.php");
    include_once("classes/User.php");
    include_once("classes/Services.php");
});

session_start();
if (isset($_SESSION["userId"]) || preg_match('(home.php|login.php)', $_SERVER['SCRIPT_NAME'])) {
} else {
    header("Location: home.php");
}
