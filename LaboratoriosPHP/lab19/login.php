<?php
    session_start();
    require_once("modelo.php");
    include("partials/_header.html");
    if(isset($_SESSION["username"])){
        if($_SESSION["username"]=="usuario"){
            include("partials/_Success.html");
        }
    }
    else if(login(htmlspecialchars($_POST["username"]), htmlspecialchars($_POST["psw"]))){
        unset($_SESSION["error"]);
        $_SESSION["username"]=$_POST["username"];
        $_SESSION["producto"]=" ";
        include("partials/_Success.html");
    }
    else{
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: index.php");
    }
    include("partials/_footer.html");
?>