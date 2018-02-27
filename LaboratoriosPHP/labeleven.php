<?php
$email = $pswd = $name = $apellidop = $apellidom = "";
$nameErr = "name";
$apellidopErr = "apellidop";
$apellidomErr = "apellidom";
$emailErr = "email";
$pswdErr = "password";
$nFail = $apFail = $amFail = $eFail = $pFail = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  if (empty($_POST["Nombre"])) {
    $nameErr = "Error";
    $nFail = "data-toggle='tooltip' data-placement='bottom' title='Campo Obligatorio'";
  } else {
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Error";
      $nFail = "data-toggle='tooltip' data-placement='bottom' title='Solo admite letras y espacios'";
    }else{
      $name = test_input($_POST["Nombre"]);
      $nameErr = "Succes";
    }
  }  
    
  if (empty($_POST["ApellidoP"])) {
    $apellidopErr = "Error";
    $apFail = "data-toggle='tooltip' data-placement='bottom' title='Campo Obligatorio'";
  } else {
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $apellidopErr = "Error";
      $apFail = "data-toggle='tooltip' data-placement='bottom' title='Solo admite letras y espacios'"; 
    }else{
      $apellidop = test_input($_POST["ApellidoP"]);
      $apellidopErr = "Succes";
    }
  } 
    
  if (empty($_POST["ApellidoM"])) {
    $apellidomErr = "Error";
    $amFail = "data-toggle='tooltip' data-placement='bottom' title='Campo Obligatorio'";
  } else {
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $apellidomErr = "Error";
      $amFail = "data-toggle='tooltip' data-placement='bottom' title='Solo admite letras y espacios'"; 
    }else{
      $apellidom = test_input($_POST["ApellidoM"]);
      $apellidomErr = "Succes";
    }
  }
    
  if (empty($_POST["email"])) {
    $emailErr = "Error";
    $eFail = "data-toggle='tooltip' data-placement='bottom' title='Campo Obligatorio'";
  } else {
    $emailErr = "Succes";
    $email = test_input($_POST["email"]);  
  }
    
  if (empty($_POST["pswd"])) {
    $pswdErr = "Error";
    $pFail = "data-toggle='tooltip' data-placement='bottom' title='Campo Obligatorio'";
  } else {
    $pswd = test_input($_POST["pswd"]);
    $pswdErr = "Succes";
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php include("partials/_header.html"); ?>
<?php include("partials/_bodynav.html");?>

<div class = "container-fluid">
    <div class="had">
        <h1 class="had-r1">LABS <span class="had-amp">&amp;</span> INVESTIGATIONS</h1>
    </div>
</div>

<div class="jumbotron jumbotron-fluid" style="background-color:darkgray;">
  <div class="container">
    <h1 class="text-white">Laboratorio 11</h1>      
    <p class="text-white" style="text-align: center">Manejo de formas con PHP y modelo de capas</p>
  </div>
</div>

<div class="container container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-block">
                    <p></p>
                    <div class="container">
                        <h3 class="card-title">Registrate</h3>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6 col-sm-4">
                                        <label for="name">Nombre:</label>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                        <label for="name">Apellido Paterno:</label>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                        <label for="name">Apellido Materno:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-sm-4">
                                        <input <?php echo $nFail?> class="form-control" type="text" placeholder="Juan" id="<?php echo $nameErr?>" name="Nombre" value="<?php echo $name;?>">
                                    </div>
                                    <div class="col-6 col-sm-4">
                                        <input <?php echo $apFail?> class="form-control" type="text" placeholder="Perez" id="<?php echo $apellidopErr?>" name="ApellidoP" value="<?php echo $apellidop;?>">
                                    </div>
                                    <div class="col-6 col-sm-4">
                                        <input <?php echo $amFail?> class="form-control" type="text" placeholder="Sanchez" id="<?php echo $apellidomErr?>" name="ApellidoM" value="<?php echo $apellidom;?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input <?php echo $eFail?> type="email" class="form-control" id="<?php echo $emailErr?>" placeholder="email@example.com" name="email" value="<?php echo $email;?>">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Contraseña:</label>
                                <input <?php echo $pFail?> type="password" class="form-control" id="<?php echo $pswdErr;?>" placeholder="******" name="pswd" value="<?php echo $pswd;?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-block">
                    <p></p>
                    <div class="container container-fluid">
                        <h3 class="card-title"></h3>
                        <p class="card-text">
                            <?php
                            echo "<h2>Entraste con la siguiente credencial:</h2>";
                            echo $name;
                            echo " ";
                            echo $apellidop;
                            echo " ";
                            echo $apellidom;
                            echo "<br>";
                            echo $email;
                            echo "<br>";
                            echo $pswd;
                            ?>
                        </p>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container container-fluid">
    <div class="jumbotron jumbotron-fluid bg-dark">
        <section>
            <h2 style="color:aliceblue">Questions</h2>
            <h3 class="pregunta" style="color:aliceblue">¿Qué es entonces una base de datos - DB?</h3>
            <p style="color:aliceblue"> [1] Es una herramienta para recopilar y organizar información. Y de acuerdo a lo visto en clase es una coleccion de archivos interrelacionados logicamente.</p>
            <h3 class="pregunta" style="color:aliceblue">¿En qué casos es conveniente usar bases de datos?</h3>
            <p style="color:aliceblue">[1] En su mayoría, las bases de datos comienzan como una lista en una hoja de cálculo. Mientras esta lista va cereciendo comienza a hacer incosistencias en los datos. Cada vez es más difícil realizar busquedas o extracción de información; una vez que estos problemas aparecen es una gran idea crear una base de datos administada por DBMS.</p>
            <h3 class="pregunta" style="color:aliceblue">¿Qué es un sistema de gestión de base de datos - DBMS?</h3>
            <p style="color:aliceblue">Tener una noción de la mediad de cada uno, pues uno esta en pixeles y el otro en puntos</p>
            <h3 class="pregunta" style="color:aliceblue">Enlista y explica las funciones/responsabilidades que tienen los DBMS.</h3>
            <p style="color:aliceblue">[2] Abstracción de datos: ahorra a los usuarios detalles acerca del almacenamiento<br>
            Independencia: se pueden modificar las bases de datos sin cambiar la aplicacion<br>
            Consistencia: los datos que ya estan no se repetirán<br>
            Seguridad: se deben asegurar de que los datos esten protegidos mediante un complejo sistema de permisos<br>
            Integridad: garantizar la validez de los datos almacenados<br>
            Respaldo: los DBMS deben realizar copias de respaldo<br>
            Transacciones: programa que se ejecuta completo o no lo hace<br>
            Tiempo de respuesta: minimizar el tiempo de una base de datos.</p>
            <h3 class="pregunta" style="color:aliceblue">Ejemplifica y justifica en que proyecto de los que has realizado hubiera sido conveniente utilizar una base de datos.</h3>
            <p style="color:aliceblue">En el proyecto de POO, para manejar los objetos en una bases de datos sin que se repitan y jalar la misma imagen de la misma localidad sin necesidad de duplicar las imagenes.</p>
            <h2 style="color:aliceblue">REFERENCIAS</h2>
            <p style="color:aliceblue">1.- https://support.office.com/es-es/article/conceptos-b%C3%A1sicos-sobre-bases-de-datos-a849ac16-07c7-4a31-9948-3c8c94a7c204<br>
            2.- https://aiu.edu/cursos/base%20de%20datos/pdf%20leccion%201/lecci%C3%B3n%201.pdf
            </p>
        </section>
    </div>
</div>

<p></p>

<?php include("partials/_footer.html"); ?>