<?php include("partials/_header.html"); ?>
<?php include("partials/_bodynav.html");?>
    <div class = "container-fluid">
        <div class="had">
            <h1 class="had-r1">LABS <span class="had-amp">&amp;</span> INVESTIGATIONS</h1>
        </div>
    </div>
    
    <p></p>
    
    <div class="hadabsolute">
        <h1 class="had-r1absolute" id="watermark">LABS <span class="had-ampabsolute">&amp;</span> INVESTIGATIONS</h1>
    </div>
    
    <div class = "container-fluid">
    <div class="jumbotron jumbotron-fluid">
        <h4>Validar contraseña</h4>
        <div class='form-group row'>
            <div class="col-1"></div>
            <label for='numbers' class = "col-5 col-form-label">Contraseña:</label>
            <div class="col-5">
                <input class="form-control" type="password" value="hunter2" id="psw1">
            </div>
        </div>
        <div class='form-group row'>
            <div class="col-1"></div>
            <label for='numbers' class = "col-5 col-form-label">Validar contraseña:</label>
            <div class="col-5">
                <input class="form-control" type="password" value="hunter2" id="psw2">
            </div>
        </div>
        <div class='input-group-append'>
            <button class='btn btn-primary' type='button' onclick='validar()'>Validar</button>
        </div>
        <div id="five_1"></div>
    </div>
    </div>
    
    <p></p>
    
    <div class = "container-fluid">
        <div class = "jumbotron jumbotron-fluid">
            <div class="puopu">
                <h4 class="puopu-r1">Tienda<span class="puopu-small">de</span>Interes</h4>
            </div>
            
            <div class="row">
                <div class="col-sm-4"><img src="http://salsabor.knorr.com.mx/img/salsas/salsa-verde-cocida.jpg" class="img-thumbnail" alt="Salsa Verde" width="304" height="236"></div>
                <div class="col-sm-4"><img src="http://salsabor.knorr.com.mx/img/salsas/salsa-de-chile-capon-y-cacahuate.jpg" class="img-thumbnail" alt="Salsa de Cacahuate" width="304" height="236"></div>
                <div class="col-sm-4"><img src="http://salsabor.knorr.com.mx/img/salsas/guacamole.jpg" class="img-thumbnail" alt="Guacamole" width="304" height="236"></div>
            </div>
            
            <p></p>
            <div class="row">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" onclick="javascript:remove_salsaverde()"><i class="material-icons">remove</i></button>
                                </span>
                                <input type="text" class="form-control" id="salsa_verde" value="0">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" onclick="javascript:add_salsaverde()"><i class="material-icons">add</i></button>
                                </span>
                        </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" onclick="javascript:remove_salsacacahuate()"><i class="material-icons">remove</i></button>
                                </span>
                                <input type="text" class="form-control" id="salsa_cacahuate" value="0">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" onclick="javascript:add_salsacacahuate()"><i class="material-icons">add</i></button>
                                </span>
                        </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" onclick="javascript:remove_guacamole()"><i class="material-icons">remove</i></button>
                                </span>
                                <input type="text" class="form-control" id="salsa_guacamole" value="0">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" onclick="javascript:add_guacamole()"><i class="material-icons">add</i></button>
                                </span>
                        </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
            </div>
            
            <p></p>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <button class='btn btn-primary' type='button' onclick='precio()'>Cobrar</button>
                </div>
                <div class="col-sm-4"></div>
            </div>
            
            <div class="container" id="cobro"></div>
            
        </div>
    </div>
    
    <p></p>
    
    <div class="container-fluid">
        <div class = "jumbotron jumbotron-fluid">
            <h4>EXTRA</h4>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Ingresar datos
            </button>

            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">DATOS</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="/action_page.php">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email_extra">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Contraseña:</label>
                                    <input type="password" class="form-control" id="pwd_extra">
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="remember_extra"> Recuerdame   
                                    </label>
                                    <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="promo_extra">    Promociones
                                    </label>
                                </div>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" onclick="extra()" data-dismiss="modal">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <p></p>
    
    <div class = "container-fluid">
        <div class = "jumbotron jumbotron-fluid" style = "background-color: darkgray">
            <section>
            <h2 style="color:aliceblue">Questions</h2>
            <h3 class="pregunta" style="color:aliceblue">¿Por qué es una buena práctica usar JavaScript para checar que sean válidos los inputs de las formas antes de enviar los datos al servidor?</h3>
            <p style="color:aliceblue"> De acuerdo a lo visto en clase, ayuda en el mejoramiento de la experiencia de usuario (UX)</p>
            <h3 class="pregunta" style="color:aliceblue">¿Cómo puedes saltarte la seguridad de validaciones hechas con JavaScript?</h3>
            <p style="color:aliceblue">De acuerdo a lo visto en clase, desactivando javascript desde consola; sin embargo, al hacer esto se pierde acceso a la mayor parte de la funcionalidad de la pagina</p>
            <h3 class="pregunta" style="color:aliceblue">Si te puedes saltar la seguridad de las validaciones de JavaScript, entonces ¿por qué la primera pregunta dice que es una buena práctica?</h3>
            <p style="color:aliceblue">Porqué no lo vas a hacer si quieres utilizar las funciones javascript y tener el funcionamiento completo de la página</p>
            </section>
        </div>
    </div>
<?php include("partials/_footer.html"); ?>