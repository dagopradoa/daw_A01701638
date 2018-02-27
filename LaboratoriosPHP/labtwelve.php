<?php session_start(); ?>
<?php include("partials/_header.html"); ?>
<?php include("partials/_bodynav.html");?>

<div class = "container-fluid">
    <div class="had">
        <h1 class="had-r1">LABS <span class="had-amp">&amp;</span> INVESTIGATIONS</h1>
    </div>
</div>

<div class="jumbotron jumbotron-fluid" style="background-color:darkgray;">
  <div class="container">
    <h1 class="text-white">Laboratorio 12</h1>      
    <p class="text-white" style="text-align: center">Manejo de sesiones con PHP</p>
  </div>
</div>

<div class="container container-fluid">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-block">
                    <form class="form-group" action="partials_php/upload.php" enctype="multipart/form-data">
                        <label for="file"><h3>Selecciona una imagen:</h3></label>
                        <input type="file" name="fileToUpload" class="form-control" id="fileToUpload">
                        <p></p>
                        <input type="submit" value="Upload Image" class="btn btn-primary" name="submit">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>

<p></p>

<div class="container container-fluid">
    <div class="jumbotron jumbotron-fluid">
        <section>
            <h2 >Questions</h2>
            <h3 class="pregunta">¿Por qué es importante hacer un session_unset() y luego un session_destroy()?</h3>
            <p>[1] Session_unset() libera todas las variables utilizadas por la sesión.<br>
            [2] Session_destroy() destruye la informacion almacenada por la sesion.<br>
            Es importante hacerlo en ese orden para asegurar que no se deja basura.</p>
            <h3 class="pregunta">¿Cuál es la diferencia entre una variable de sesión y una cookie?</h3>
            <p>El uso de variables de sesión utilizan las cookies, mientras que las cookies no desperdician recursos del servidor. Sin embargo, las variables desesion solo duran una sesión; mientras que las cookies se conservan.</p>
            <h3 class="pregunta">¿Qué técnicas se utilizan en sitios como facebook para que el usuario no sobreescriba sus fotos en el sistema de archivos cuando sube una foto con el mismo nombre?</h3>
            <p></p>
            <h3 class="pregunta">¿Qué es CSRF y cómo puede prevenirse?</h3>
            <p>[4] Es un ataque que forza a un usuario a ejecutar acciones que no quieren ejecutar dentro de una aplicacion en la que ya estan autenticados.<br>
            [5] Una forma de evadir estos ataques es generando un token unico para cada sesión. Guardar cada de cada campo se guarda en una variable de sesión.
            </p>
            <h2>REFERENCIAS</h2>
            1.- http://php.net/manual/en/function.session-unset.php<br>
            2.- http://php.net/manual/en/function.session-destroy.php<br>
            3.-<br>
            4.- https://www.owasp.org/index.php/Cross-Site_Request_Forgery_(CSRF)<br>
            5.- https://www.wikihow.com/Prevent-Cross-Site-Request-Forgery-(CSRF)-Attacks-in-PHP
            <p></p>
        </section>
    </div>
</div>

<p></p>



<?php include("partials/_footer.html"); ?>