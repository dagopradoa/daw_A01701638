<?php
session_start();
require_once("modelo.php");
$name=$_POST["producto"];
$image=$_POST["image"];
if(update_by_name($name,$image)){
    header ("location:login.php");
}else{
    echo 'error';
}

?>