<?php
    session_start();
    
    if($_SESSION["username"] == "usuario" ) {
        include(".partials/_header.html");
        include("partials/_upload.html");
        include("partials/_footer.html"); 
    } else {
        header("location:index.php");
    }
?>