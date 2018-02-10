<?php include("partials/_header.html"); ?>
<?php include("partials/_bodynav.html");?>
    <div class = "container-fluid">
        <div class="had">
            <h1 class="had-r1">LABS <span class="had-amp">&amp;</span> INVESTIGATIONS</h1>
        </div>
    </div>
    <p></p>
    <div class="jumbotron jumbotron-fluid" style="background-color:darkgray;">
      <div class="container">
        <h1 class="text-white">Laboratorio 9</h1>      
        <p class="text-white" style="text-align: center">Introducción a PHP</p>
      </div>
    </div>
    <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-primary" onclick="promediarnueve()">Promedio</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-primary">Mediana</button>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-primary">Enlistar</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-primary">Tabular</button>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-primary">Libre</button>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
            </div>
    </div>
    <div class="jumbotron mt-4" id="labnine">
    </div>
    <div class = "container" style = "background-color: slategray">
        <section>
            <h2 style="color:aliceblue">Questions</h2>
            <h3 class="pregunta" style="color:aliceblue">¿Qué hace la función phpinfo()? Describe y discute 3 datos que llamen tu atención.</h3>
            <p style="color:aliceblue"> [1] Se utiliza para revisar opciones de configuración y variables predefinidas en el sistema.</p>
            <h3 class="pregunta" style="color:aliceblue">¿Qué cambios tendrías que hacer en la configuración del servidor para que pudiera ser apto en un ambiente de producción?</h3>
            <p style="color:aliceblue">[2] Se deberán definir los permisos, configurar los permisos y crear la conexión a la base de datos.</p>
            <h3 class="pregunta" style="color:aliceblue">¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica.</h3>
            <p style="color:aliceblue">[3] Mediante el navegador, se envía una petición a un servidor, este servidor localiza la página y envía el archivo en formato HTML, de lo contrario despliega un error. Posteriormente, el documento HTML es interpretado por el navegador.</p>
            <h2 style="color:aliceblue">REFERENCIAS</h2>
            <p style="color:aliceblue">1.- http://php.net/manual/es/function.phpinfo.php<br>
            2.- http://www.scriptcase.net/docs/es_es/v81/publicacion/ambiente-de-produccion/configuracion-del-entorno-de-produccion<br>
            3.- http://www.adelat.org/media/docum/nuke_publico/lenguajes_del_lado_servidor_o_cliente.html
            </p>
        </section>
    </div>
<?php include("partials/_footer.html"); ?>