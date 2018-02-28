<?php
    session_start();
    
    if(isset($_SESSION["usuario"]) ) {
        include("../partials/_header.html");
        include("../partials/_bodynav.html");
        $user = $_SESSION["usuario"];
        include("_lab13View.html");
        include("../partials/_footer.html"); 
    }else if ($_POST["usuario"]=="Dagoberto" && $_POST["password"]=="123456" ) {
        unset($_SESSION["error"]);
        $_SESSION["usuario"] = $_POST["usuario"];
        $user = $_SESSION["usuario"];
        include("../partials/_header.html");
        include("_lab13View.html");
        include("../partials/_footer.html"); 
    } else if($_POST["usuario"]!="Dagoberto" || $_POST["password"]!="123456") {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: index.php");
    }
    
?>