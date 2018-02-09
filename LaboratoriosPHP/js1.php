<?php include("partials/_header.html"); ?>
<?php include("partials/_bodynav.html");?>
    <div class = "container-fluid">
        <div class="had">
            <h1 class="had-r1">LABS <span class="had-amp">&amp;</span> INVESTIGATIONS</h1>
        </div>
    </div>
    
    <div class="jumbotron jumbotron-fluid" style="background-color:darkgray;">
      <div class="container">
        <h1 class="text-white">Laboratorio 4</h1>      
        <p class="text-white" style="text-align: center">Fundamentos de JavaScript</p>
      </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-3">
            <button class='btn btn-primary' type='button' onclick="javascript:table()">Prueba 1</button>
        </div>
        <div class="col-sm-3">
            <button class='btn btn-primary' type='button' onclick="javascript:sum()">Prueba 2</button>
        </div>
        <div class="col-sm-3">
            <button class='btn btn-primary' type='button' onclick="javascript:prb3()">Prueba 3</button>
        </div>
        <div class="col-sm-3">
            <button class='btn btn-primary' type='button' onclick="javascript:prb4()">Prueba 4</button>
        </div>
        </div>        
    </div>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
            <button class='btn btn-primary' type='button' onclick="javascript:prb5()">Prueba 5</button>
        </div>
        <div class="col-sm-3">
            <button class='btn btn-primary' type='button' onclick="javascript:prb6()">Prueba 6</button>
        </div>
        <div class="col-sm-3">
        </div>
      </div>
    </div>
 
    <div class="jumbotron mt-4" id="js1">
    </div>
    
    <div class = "container" style = "background-color: slategray">
        <section>
            <h2 style="color:aliceblue">Questions</h2>
            <h3 class="pregunta" style="color:aliceblue">¿Qué diferencias y semejanzas hay entre Java y JavaScript?</h3>
            <p style="color:aliceblue"> [1] Ambos son orientados a objetos, pueden correr en un navegador y fueron influenciadas por C y C++.</p>
            <p style="color:aliceblue">[2] Java es un tipo de lenguaje compilado, mientras que JS está en texto y es interpretado. Java, además de correr en un navegador, también puede correr en máquinas virtuales. Java está basado en clases, mientras que JS es texto interpretado
            </p>
            <h3 class="pregunta" style="color:aliceblue">¿Qué métodos tiene el objeto Date?</h3>
            <p style="color:aliceblue">[4] Date.prtotype.getDate() -> Devuelve el número de día de la fecha especificada<br>
                Date.prototype.getDay() -> Devuelve el día de la semana de la fecha especificada<br>
                Date.prototype.getFullYear() -> Devuelve el año completo de la fecha especificada<br>
                Date.prototype.getMonth() -> Devuelve el nombre del mes de la fecha especificada<br>
                [3] Date.now() -> Devuelve el valor numérico correspondiente a la hora actual
            </p>
            <h3 class="pregunta" style="color:aliceblue">¿Qué métodos tienen los arreglos?</h3>
            <p style="color:aliceblue">[5] Array.from() -> Crea un array de un objeto iterable<br>
                Array.isArray() -> Devuelve true si una variable es un array<br>
                Array.observe() -> Observa los cambios en un array de manera asíncrona<br>
                Array.of() -> Crea un nuevo array con un numero de argumentos variable<br>
                Array.prototype.pop() -> Elimina el último elementos de la matriz unidimensional
            </p>
            <h3 class="pregunta" style="color:aliceblue">¿Cómo se declara una variable con alcance local dentro de una función?</h3>
            <p style="color:aliceblue">[6] Se declara con ‘let’ dentro de la función en la que se quiere utilizar</p>
            <h3 class="pregunta" style="color:aliceblue">¿Qué implicaciones tiene utilizar variables globales dentro de funciones?</h3>
            <p>[7] Que al momento de hacerle un cambio a la variable, este cambio se realiza en todas las funciones</p>
            <h3 class="pregunta" style="color:aliceblue">¿Qué método de String se puede utilizar para buscar patrones con expresiones regulares?¿Para qué podrías utilizar esto en una aplicación web?</h3>
            <p style="color:aliceblue">[8] Se utiliza el método ‘match()’, que como parámetro recibe una expresión regular.</p>
            <p style="color:aliceblue">[9] Se puede utilizar en un buscador; para analizar el texto que se ingresa y buscar si coincide con cualquier otro del texto.
            </p>
            <h2 style="color:aliceblue">REFERENCIAS</h2>
            <p style="color:aliceblue">1.- https://www.java.com/en/download/faq/java_javascript.xml<br>
            2.- https://www.diffen.com/difference/Java_%28programming_language%29_vs_JavaScript<br>
            3.- https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/Date<br>
            4.- https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/Date/prototype#M.C3.A9todos<br>
            5.- https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/Array<br>
            6.- https://msdn.microsoft.com/es-es/library/bzt2dkta(v=vs.94).aspx<br>
            7.- https://docs.microsoft.com/en-us/scripting/javascript/advanced/variable-scope-javascript<br>
            8.- https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/String/match <br>
            9.- https://eloquentjavascript.net/09_regexp.html
            </p>
        </section>
    </div>
<?php include("partials/_footer.html"); ?>