<?php include("partials/_header.html"); ?>
<?php include("partials/_bodynav.html");?>
    <div class = "container-fluid">
        <div class="had">
            <h1 class="had-r1">LABS <span class="had-amp">&amp;</span> INVESTIGATIONS</h1>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid" style="background-color:darkgray;">
      <div class="container">
        <h1 class="text-white">Laboratorio 1</h1>      
        <p class="text-white" style="text-align: center">Introducción a las apicaciones web y HTML</p>
      </div>
    </div>

    <div class="container">
        <ul class="nav nav-pills">
        <li><a data-toggle="pill" href="#menu1"> Concepts </a></li>
        <li><a data-toggle="pill" href="#menu2"> Common Errors </a></li>
        <li><a data-toggle="pill" href="#menu3"> Questions </a></li>
      </ul>

      <div class="tab-content">
        <div id="menu1" class="tab-pane fade active">
          <h3>Concepts</h3>
          <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6" style="background-color:darkgray;">
                    <h4 class="tabla-fondooscuro" style="color:aliceblue">URL</h4>
                    <p class = "tabla-fondooscuro" style="color:aliceblue">Son las siglas correspondientes a: "Uniform Resource Locator".</p>
                    <p class = "tabla-fondooscuro" style="color:aliceblue">Se trata de la secuencia de caracteres que sigue un estándar y que permite denominar recursos dentro del entorno de Internet para que puedan ser 		localizados.</p>
                    <p class = "tabla-fondooscuro" style="color:aliceblue">Referencia: Julián Pérez Porto y María Merino. (2010). Definición de URL. 14 de Octubre de 2018, de Definicion.de Sitio web:
                    https://definicion.de/url/</p>
                </div>
                <div class="col-sm-6" style="background-color:dimgray;">
                    <h4 class = "tabla-fondooscuro" style="color:aliceblue">MIME</h4>
                    <p class = "tabla-fondooscuro" style="color:aliceblue">Son las siglas correspondientes a: "Multipurpouse Internet Mail Extensions".</p>
                    <p class = "tabla-fondooscuro" style="color:aliceblue">Permite mejorar la posibilidad de transferencia de texto entre distintos idiomas y alfabetos en el envío de emails, y también sirve para el envío de 		archivos a través del protocolo HTTP.</p>
                    <p class = "tabla-fondooscuro" style="color:aliceblue">Leandro Alegsa. (S.F.). Definición de MIME. 14 de Octubre de 2018, de Alegsa Sitio web: http://www.alegsa.com.ar/Dic/mime.php</p>
                </div>
              </div>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
          <h3>Errors</h3>
          <div class="container-fluid">
              <p>The 5th most commons of each</p>
              <div class="row">
                <div class="col-sm-3" style="background-color:slategray;">
                    <h4 class = "tabla-fondooscuro" style="color:aliceblue">HTTP:</h4>
                    <p class = "tabla-fondooscuro" style="color:aliceblue"><b>401:</b> Unathorized. Sucede cuando se intenta acceder a un sitio restringido.<br>
                    <b>400:</b> Bad request. La solicitud para acceder al servidor falló.<br>
                    <b>403:</b> Forbbiden. Sucede si intentas acceder a un sitio prohibido o inhabilitado.<br>
                    <b>404:</b> Not found. El sitio no ha sido encontrado.<br>
                    <b>505:</b> Internal Server Error. No se pudo cargar el servidor.
                    </p>
                    <p id = "tabla-fondooscuro" style="color:aliceblue">http://royal.pingdom.com/2009/05/06/the-5-most-common-http-errors-according-to-google/</p>
                </div>
                <div class="col-sm-3" style="background-color:darkslategray;">
                    <h4 class = "tabla-fondooscuro" style="color:aliceblue">XML:</h4>
                    <p class = "tabla-fondooscuro" style="color:aliceblue"><b>Forgetten Declaration Statement:</b> Se necesia declarar el lenguaje.<br>
                    <b>Unnested elements:</b> XML trabaja de manera jerarquica. Asegurate de que todo este anidado.<br>
                    <b>Open Tags:</b> Es necesario cerrar todos los tags.<br>
                    <b>No Root Element:</b> Al ser del lenguaje del tipo arbol, es necesario tener una raíz.<br>
                    <b>Multiple White-Space characters</b> XML trata de cuidar la memoria, por lo que reducira todos los espacios a uno solo.
                    </p>
                    <p class = "tabla-fondooscuro" style="color:aliceblue">https://www.thoughtco.com/common-xml-errors-3466605</p>
                </div>
                <div class="col-sm-3" style="background-color:slategray;">
                    <h4 class = "tabla-fondooscuro" style="color:aliceblue">XHTML:</h4>
                    <p class = "tabla-fondooscuro" style="color:aliceblue"><b>Forgetting to terminate entities:</b> Usaste un carácter inválido.<br>
                    <b>Amperstand in URLs</b> Uso no apropiado de los amersands<br>
                    <b>Unproperly tag closing:</b> Es necesario cerrar todos los tags.<br>
                    <b>Overlapping and contex-sensitive tags:</b> Intentar cerrar un tag con el tag que se usa para abrir.<br>
                    </p>
                    <p class = "tabla-fondooscuro" style="color:aliceblue">https://rudd-o.com/archives/common-mistakes-that-lead-to-invalid-xhtml</p>
                </div>
                <div class="col-sm-3" style="background-color:darkslategray;">
                    <h4 class = "tabla-fondooscuro" style="color:aliceblue">HTML5:</h4>
                    <p class = "tabla-fondooscuro" style="color:aliceblue"><b>Trusting local storage:</b> Brechas de seguridad.<br>
                    <b>Expecting compatibility among browsers:</b> Incompativilidad en ciertos browsers.<br>
                    <b>Assuming high performance:</b> Se espera que se corra a igual velocidad en todos los servidores.<br>
                    <b>Limited accessibility:</b> No se utilizan todas las posibilidades de accesibilidad.<br>
                    <b>Not using HTML5 enhancements:</b> Se utilizan limitadas etiquetas.
                    </p>
                    <p class = "tabla-fondooscuro" style="color:aliceblue">https://www.toptal.com/html5/top-5-mistakes-that-html5-developers-make</p>
                </div>
              </div>
            </div>

            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-3" style="background-color:darkslategray;">
                    <h4 class = "tabla-fondooscuro" style="color:aliceblue">JS:</h4>
                    <p class = "tabla-fondooscuro" style="color:aliceblue"><b>Thinking there is block-level scope:</b> Se asume que cada bloque crece, sin ser así.<br>
                    <b>Creating memory leaks:</b> Pérdida de memoria.<br>
                    <b>Assuming high performance:</b> Se espera que se corra a igual velocidad en todos los servidores.<br>
                    <b>Confusion about equality:</b> JavaScript "forza" a las variables a ser del tipo boolean.<br>
                    <b>Inefficient DOM manipulation:</b> El uso del DOM es poco eficiente.
                    </p>
                    <p class = "tabla-fondooscuro" style="color:aliceblue">https://www.toptal.com/javascript/10-most-common-javascript-mistakes</p>
                </div>
                <div class="col-sm-3" style="background-color:slategray;">
                    <h4 class = "tabla-fondooscuro" style="color:aliceblue">PHP:</h4>
                    <p class = "tabla-fondooscuro" style="color:aliceblue"><b>Leaving dangling array references after foreach loops:</b> Si mo se usa de manera adecuada, puede causar problemas.<br>
                    <b>Misunderstanding isset() behavior:</b> Es fácil cometer muchos errores.<br>
                    <b>Confusion about returning by reference vs. by value:</b> Es complicado saber si regresa array por referencia o array por valor.<br>
                    <b>Performing queries in a loop:</b> Cada iteración hace una solicitud a la base de datos.<br>
                    <b>Memory usage headfakes and inefficiencies:</b> Utiliza un proxy que hace trabajo sucio en las bases de datos.
                    </p>
                    <p class = "tabla-fondooscuro" style="color:aliceblue">https://www.toptal.com/php/10-most-common-mistakes-php-programmers-make</p>
                </div>
                <div class="col-sm-3" style="background-color:darkslategray;">
                    <h4 class = "tabla-fondooscuro" style="color:aliceblue">JSP:</h4>
                    <p class = "tabla-fondooscuro" style="color:aliceblue"><b>Leaving dangling array references after foreach loops:</b> Si mo se usa de manera adecuada, puede causar problemas.<br>
                    <b>Misunderstanding isset() behavior:</b> Es fácil cometer muchos errores.<br>
                    <b>Confusion about returning by reference vs. by value:</b> Es complicado saber si regresa array por referencia o array por valor.<br>
                    <b>Performing queries in a loop:</b> Cada iteración hace una solicitud a la base de datos.<br>
                    <b>Memory usage headfakes and inefficiencies:</b> Utiliza un proxy que hace trabajo sucio en las bases de datos.
                    </p>
                    <p class = "tabla-fondooscuro" style="color:aliceblue">https://www.toptal.com/php/10-most-common-mistakes-php-programmers-make</p>
                </div>
                <div class="col-sm-3" style="background-color:slategray;">
                    <h4 class = "tabla-fondooscuro" style="color:aliceblue">AJAX:</h4>
                    <p class = "tabla-fondooscuro" style="color:aliceblue"><b>Leaving dangling array references after foreach loops:</b> Si mo se usa de manera adecuada, puede causar problemas.<br>
                    <b>Misunderstanding isset() behavior:</b> Es fácil cometer muchos errores.<br>
                    <b>Confusion about returning by reference vs. by value:</b> Es complicado saber si regresa array por referencia o array por valor.<br>
                    <b>Performing queries in a loop:</b> Cada iteración hace una solicitud a la base de datos.<br>
                    <b>Memory usage headfakes and inefficiencies:</b> Utiliza un proxy que hace trabajo sucio en las bases de datos.
                    </p>
                    <p class = "tabla-fondooscuro" style="color:aliceblue">https://www.toptal.com/php/10-most-common-mistakes-php-programmers-make</p>
                </div>
              </div>
            </div>
        </div>
        <div id="menu3" class="tab-pane fade">
          <h3>Questions</h3>
            <h4 class="pregunta">¿Cuál es la diferencia entre Internet y la World Wide Web?</h4>
          <p>Internet es la Red de redes, mientras que la WWW es un sistema de hipertextos accesibles mediante Internet.</p>
            <h4 class="pregunta">¿Cuál es el propósito de los métodos HTTP: GET, HEAD, POST, PUT, PATCH, DELETE?</h4>
          <p>Son un conjunto de métodos de petición para indicar la acción que se desea realizar para un recurso determinado.<br>
            El método GET  solicita una representación de un recurso específico. Las peticiones que usan el método GET sólo deben recuperar datos.<br>
            El método HEAD pide una respuesta idéntica a la de una petición GET, pero sin el cuerpo de la respuesta.<br>
            El método POST se utiliza para enviar una entidad a un recurso en específico, causando a menudo un cambio en el estado o efectos secundarios en el servidor.<br>
            El modo PUT reemplaza todas las representaciones actuales del recurso de destino con la carga útil de la petición.<br>
            El método DELETE borra un recurso en específico<br>
            El método PATCH  es utilizado para aplicar modificaciones parciales a un recurso.<br>
            </p>
            <h4 class="pregunta">¿Qué método HTTP se debe utilizar al enviar un formulario HTML, por ejemplo cuando ingresas tu usuario y contraseña en algún sitio? ¿Por qué?</h4>
          <p>Los formularios están delimitados con la etiqueta FORM Esta etiqueta agrupa varios elementos del formulario, como botones y casillas de texto, y posee 2 atributos: METHOD y ACTION.<br>
            Se utiliza está etiqueta debido a los distintos atributos que se pueden utilizar de ella.
            </p>
            <h4 class="pregunta">¿Qué método HTTP se utiliza cuando a través de un navegador web se accede a una página a través de un URL? </h4>
          <p>Se utiliza el método GET, para obtener la información del servidor</p>
            <h4 class="pregunta">Un servidor web devuelve una respuesta HTTP con código 200. ¿Qué significa esto? ¿Ocurrió algún error?</h4>
          <p>Es la respuesta estándar para peticiones correctas. Y no, no es un error es un resultado de petición correcta.</p>
            <h4 class="pregunta">¿Es responsabilidad del desarrollador corregir un sitio web si un usuario reporta que intentó acceder al sitio y se encontró con un error 404? ¿Por qué?</h4>
          <p>Significa que la página no se encontro. El servidor realizó la petición, sin embargo no encontro el recurso solicitado</p>
            <h4 class="pregunta">¿Es responsabilidad del desarrollador corregir un sitio web si un usuario reporta que intentó acceder al sitio y se encontró con un error 500? ¿Por qué?</h4>
          <p>No, ya que el error es un error interno del servidor.</p>
            <h4 class="pregunta">¿Qué significa que un atributo HTML5 esté depreciado o desaprobado (deprecated)? Menciona algunos elementos de HTML 4 que en HTML5 estén desaprobados.</h4>
          <p>Significa que ciertos atributos ya no son utilizados/utilizables en HTML5, si bien puede que hayan desaparecido, también puede ser que ya no se utilicen tanto como en otras versiones HTML.</p>
            <p>Algunos de los nuevos elementos son:<br>
            'article' elemento que nos permite declarar una parte del contenido.<br>
            'aside' representa una parte de contenido que se relaciona muy levemente con lo demás.<br>
            'dialog' nos permite representar conversaciones.<br>
            'figure' se utiliza para relacionar un caption con el contenido.<br>
            'footer' Sección de la página para contener información sobre el autor. <br>
            'header' representa a la sección de cabecera.<br>
            'nav' representa la sección de la página orientada a la navegación.<br>
            'section' indica que es una sección genérica.<br>
            'audio' y 'video' para el contenido multimedia.<br>
            'embed' es un elemento dedicado para contenido de plugins.<br>
            'm' representa el texto.<br>
            'meter' utilizado para representar medidas.<br>
            'time' muestra fechas y/o tiempo.<br>
            'canvas' utilizado para incluir gráficos que se actualicen en tiempo real, por ejemplo gráficos, juegos <br>
            'commnad' comandos que el usuario puede utilizar.<br>
            'datagrid' utilizado para mostrar un arbol o una tabla organizada.<br>
            'details' despliega informacion adicional.<br>
            'datalist' junto con el nuevo atributo list para los 'input' puede ser usado para crear comboboxes<br>
            Entre otros.
            </p>
            <h4 class="pregunta">¿Cuáles son las diferencias principales entre HTML 4 y HTML5?</h4>
          <p>HTML5 permite incluir elementos de SVG y MathML.<br>
            Tiene nuevos elementos, como: section, article, aside, header, footer, etc.<br>
            Tiene nuevos atributos, como: media, charset, autofocus, placeholder, etc.<br>
            Se cambiaron algunos elementos (a, b, i, menu, etc.).<br>
            Se cambiaron algunos atributos (type, name, summary, etc.).<br>
            Se eliminaron algunos elementos como: basefont, big, center, etc.<br>
            Se eliminaron ciertos atributos como: align, background, bgcolor, etc.<br>
            </p>
            <h4 class="pregunta">¿Qué componentes de estructura y estilo tiene una tabla?</h4>
          <p>'table' define la tabla<br>
              'tr' define una columna de una tabla<br>
              'td' define elementos de una tabla<br>
              'th' define el titulo en una tabla<br>
              'caption' define un titulo<br>
              </p>
            <h4 class="pregunta">¿Cuáles son los principales controles de una forma HTML5?</h4>
          <p>' input type="number" ' El primer nuevo tipo de campo de entrada que analizaremos es type="number"<br>
            ' input type="range" ' Crear un control deslizante que le permita elegir entre un rango de valores solía ser una propuesta complicada, semánticamente dudosa, pero con el HTML5 es fácil: sólo tiene que utilizar el tipo de campo de entrada range <br>
            ' input type="date" ' tiene un número de campos de entrada diferentes para crear selectores complejos de fecha/hora<br>
            ' input type="color" ' Este campo de entrada muestra un selector de color.<br>
            ' input type="search" ' El campo de entrada search podría decirse que no es nada más que un campo de entrada de texto con un estilo diferente. <br>
            Entre otros.</p>
            <h4 class="pregunta">¿Qué tanto soporte HTML5 tiene el navegador que utilizas? </h4>
          <p>Chrome es uno de los navegadores que más soporta HTML5</p>
            <h3>Referencias</h3>
            <p>https://es.slideshare.net/MontcheVG/diferencias-entre-internet-y-www<br>
            https://developer.mozilla.org/es/docs/Web/HTTP/Methods<br>
            http://es.ccm.net/contents/236-formularios-html<br>
            http://www.anieto2k.com/2007/06/16/las-principales-diferencias-entre-html5-y-html4/<br>
            https://es.wikipedia.org/wiki/Anexo:C%C3%B3digos_de_estado_HTTP<br>
            https://blogs.ua.es/pi/2011/01/17/%C2%BFcuales-son-las-diferencias-entre-html4-xhtml-1-0-y-html5/<br>
            https://www.w3schools.com/html/html_tables.asp<br>
            http://html5test.com/results/desktop.html
            </p>
        </div>
      </div>
    </div>
<?php include("partials/_footer.html"); ?>