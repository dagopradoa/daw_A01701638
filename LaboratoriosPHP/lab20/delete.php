<?php
    session_start();
    $name=$_POST["nombre"];
    require_once("modelo.php");
    if(delete_by_name($name)){
        header ("location:login.php");
    }else{
        echo 'error';
    }
    
?>