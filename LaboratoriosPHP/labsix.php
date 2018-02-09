<?php include("partials/_header.html"); ?>
<?php include("partials/_bodynav.html");?>
    <div class = "container-fluid">
        <div class="had">
            <h1 class="had-r1">LABS <span class="had-amp">&amp;</span> INVESTIGATIONS</h1>
        </div>
    </div>
    
    <p></p>
    
    <div class = "container-fluid">
        <div class = "jumbotron jumbotron-fluid" style = "background-color: darkgray" id="question6">
            <section id="questionaire6">
            <h2 style="color:aliceblue" id="pregunta">Questions</h2>
            <h3 class="pregunta" style="color:aliceblue" id="pregunta1">¿Cuáles son las diferencias entre los posibles valores de la propiedad position?</h3>
            <p style="color:aliceblue" id="respuesta1"> [1] Existen 5 tipos de posición, la normal que es 'static' (por default), 'relative' que es relativo a su posición original, 'fixed' que es relativo a la posicion del visor, 'absolute' que es relativo a su elemento anterior y 'sticky' que va relacionado a la posicion del usuario</p>
            <h3 class="pregunta" style="color:aliceblue" id="pregunta2">¿Cuáles son los valores estándar para la propiedad visibility?</h3>
            <p style="color:aliceblue" id="respuesta2">[2] 'Visible' que es el valor default, 'hidden' el elemento es invisible, 'collapse' es usado para tablas y elimina filas y columnas, 'initial' lo establece a su valor inicial, 'inherit' hereda de sus funciones padres.</p>
            <h3 class="pregunta" style="color:aliceblue" id="pregunta3">¿Qué es el z-Index y para qué sirve?</h3>
            <p style="color:aliceblue" id="respuesta3"> [3] Es una propiedad que especifíca la posición de atras para delante de los objetos y solo funciona para elementos posicionados</p>
            <h3 class="pregunta" style="color:aliceblue" id="referees">REFERENCIAS</h3>
            <p style="color:aliceblue" id="referencias"> 1.- https://www.w3schools.com/css/css_positioning.asp<br>
                2.- https://www.w3schools.com/cssref/pr_class_visibility.asp<br>
                3.- https://www.w3schools.com/cssref/pr_pos_z-index.asp</p>
            </section>
            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-secondary" onclick="setTimeout(whitebg,3000)" data-dismiss="modal">Fondo blanco</button>
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-success" onclick="greenletters()" data-dismiss="modal">Letras verdes</button>
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-secondary" onclick="blackletters()" data-dismiss="modal">Letras negras</button>
                </div>
            </div>
        </div>
    </div>
    
    <p></p>
    
    <div class = "container-fluid">
        <div class = "jumbotron jumbotron-fluid">
            <p>Mueve el logo del pie de página al recuadro de abajo y viceversa</p>
            <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <br>
            <a href="#" data-toggle="tooltip" title="Instituto Tecnológico y de Estudios Superiores de Monterrey Campus Querétaro">
                <img id="drag1" src="http://laguiadepuebla.com/wp-content/uploads/Tec-de-Monterrey-Puebla.png" draggable="true" ondragstart="drag(event)" width="80" height="80">
            </a>
        </div>
    </div>
<?php include("partials/_footer.html"); ?>