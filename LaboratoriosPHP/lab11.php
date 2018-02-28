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
    <div class="jumbotron jumbotron-fluid">
        <section>
            <h2 >Questions</h2>
            <h3 class="pregunta">¿Por qué es una buena práctica separar el controlador de la vista?.</h3>
            <p> Para dividir la complejidad del código y reutilizar el mismo</p>
            <h3 class="pregunta">Aparte de los arreglos $_POST y $_GET, ¿qué otros arreglos están predefinidos en php y cuál es su función?</h3>
            <p> [1] $_SERVER, contiene informacion de rutas, cabeceras,etc.<br>
            $_COOKIE, Asocia variable pasadas mediante uso de cookies<br>
            $_SESSION, Contien variables de sesion<br>
            $_REQUEST, Contiene GET,POST y COOKIE<br>
            $_FILES, asociativo de elementos subidos al script</p>
            <h3 class="pregunta">Explora las funciones de php, y describe 2 que no hayas visto en otro lenguaje y que llamen tu atención.</h3>
            <p>[2] mysql_connect, que abre una extension al servidor SQL<br>
            [3] phpinfo, que despliega información acerca del php que se está utilizando</p>
            <h3 class="pregunta">¿Qué es XSS y cómo se puede prevenir?</h3>
            <p>[4] Es un tipo de inyección, en el que scripts del tipo maligno se insertan en sitios web. Los atacantes utilizan aplicaciones que envia código malicioso.<br>
            [5] Se puede prevenir mediante la codificación de los datos con las funciones 'htmlentities' y 'htmlspecialchars'
            </p>
            <h2>REFERENCIAS</h2>
            <p>1.- http://php.net/manual/es/language.variables.superglobals.php<br>
            2.- http://php.net/manual/es/function.mysql-connect.php<br>
            3.- http://php.net/manual/es/function.phpinfo.php<br>
            4.- https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)<br>
            5.- https://medium.com/@jpmorris/how-to-prevent-xss-attacks-by-escaping-output-in-php-942204bf184
            </p>
        </section>
    </div>
</div>

<p></p>

<?php include("partials/_footer.html"); ?>