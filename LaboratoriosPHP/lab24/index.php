<?php
    session_start();
    if(isset($_SESSION["username"])){
        header("location: login.php");
    }
    else{
        include("partials/_header.html");
        //include("partials/_login_form.html");
        $name="Dagoberto";
        $url = "http://localhost:8080/daw_A01701638/lab24_ws/public/$name";
        $curl= curl_init($url);
        $response = curl_exec($c);
        curl_close($c);
        $url = "http://localhost:8080/daw_A01701638/lab24_ws/public/images/insertar"; //Route to the REST web service
        $c = curl_init($url);
        $response = curl_exec($c);
        curl_close($c);
        include("partials/_footer.html");
    }
 ?>
