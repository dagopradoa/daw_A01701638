<?php
    session_start();
    require_once("modelo<.php");
    if($_SESSION["username"]=="usuario"&& $_POST["producto"]!= NULL){
        unset($_SESSION["error_archivo"]);
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $_SESSION["error_archivo"]= "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            $_SESSION["error_archivo"]= "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            $_SESSION["error_archivo"]= "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $_SESSION["error_archivo"]= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 1){
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                $_SESSION["ruta archivo"]= $target_file;
                $_SESSION["error_archivo"] = "Si se esta procesando el archivo";
                $_SESSION["producto"] = $_POST["producto"];
                crearProducto($_SESSION["producto"], basename($_FILES["fileToUpload"]["name"]));
                header("location:login.php");
            } else {
                $_SESSION["error_archivo"]= "Sorry, there was an error uploading your file.";
            }
        }
        else{
            header("location:add.php");
        }
        
    }
    else{
        header("location:index.php");
    }
    
?>