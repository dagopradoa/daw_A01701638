<?php
session_start();
$name=$_POST["nombre"];
require_once("dbms_14.php");
if(delete_by_name($name)){
    header ("location:session.php");
}else{
    echo 'error';
}
?>