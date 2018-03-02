<?php
    session_start();
    
    if(isset($_SESSION["usuario"]) ) {
        include("partials/_header.html");
        include("partials/_add_image.html");
        include("partials/_footer.html"); 
    } else {
        header("location:lab14.php");
    }
?>