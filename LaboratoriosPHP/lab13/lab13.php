<?php
    session_start();
    if(isset($_SESSION["usuario"]) ) {
        header("location: session.php");    
    } else {
        include("../partials/_header.html");
        include("../partials/_bodynav.html");        
        include("_lab13Login.php");
        include("../partials/_footer.html");
    }
?>