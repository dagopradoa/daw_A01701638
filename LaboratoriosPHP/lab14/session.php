<?php
    session_start();
    require_once("dbms_14.php");
    
    if(isset($_SESSION["usuario"]) ) {
        include("partials/_header.html");
        $user = $_SESSION["usuario"];
        include("partials/_bodynav.html")
        include("partials/_preview.html");
        include("partials/_footer.html"); 
    }else if (login($_POST["usuario"], $_POST["password"]) ) {
        unset($_SESSION["error"]);
        $_SESSION["usuario"] = $_POST["usuario"];
        $user = $_SESSION["usuario"];
        include("partials/_header.html");
        include("partials/_bodynav.html")
        include("partials/_preview.html");
        include("partials/_footer.html"); 
    } else if($_POST["usuario"]!="dago" || $_POST["password"]!="1701638") {
        $_SESSION["error"] = "Credenciales inválidas";
        header("location: lab14.php");
    }
    
?>