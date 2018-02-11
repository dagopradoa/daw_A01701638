<?php
    $banco1 = array(10,20,5,0,17);
    $banco2 = array(5,23,18,15,2);

    function media($ar){
        $cont = 0;
        $i = 0;
        echo $ar[0];
        foreach ($ar as $valor){
            $cont += $valor;
            $i++;
        }
        return $cont/$i;
    }

    function mediana($ar){
        sort($ar);
        if( sizeof($ar) % 2 == 0){
            return ($ar[(sizeof($ar)/2)-1]+$ar[sizeof($ar)/2]/2);
        } else {
            return $ar[sizeof($ar)/2];
        }
    }

    function imprimir($ar){
        echo $ar[0];
        for ($i=1; $i<sizeof($ar); $i++) {
            echo ", ".$ar[$i];
        }
    }

    function enlistar($ar){
        echo "<div class='row'><div class='col-sm-4'><ul class='list-group'>";
        foreach($ar as $valor){
            echo "<li class='list-group-item'>$valor</li>";
        }
        echo "</ul></div>";
            
        sort($ar);
        echo "<div class='col-sm-4'><ul class='list-group'>";
        foreach($ar as $valor){
            echo "<li class='list-group-item'>$valor</li>";
        }
        echo "</ul></div>";
        
        rsort($ar);
        echo "<div class='col-sm-4'><ul class='list-group'>";
        foreach($ar as $valor){
            echo "<li class='list-group-item'>$valor</li>";
        }
        echo "</ul></div></div>";
        
        echo "<ul class='list-group'><li class='list-group-item>media:".media($ar)."</li>";
        echo "<li class='list-group-item>mediana:".mediana($ar)."</li></ul>";
    }

    function tabular($n){
        echo "<table class='table table-striped'><thead><tr><th>n</th><th>n^2</th><th>n^3</th></tr></thead><tbody>";
        $i = 0;
        for($i = 1; $i<=$n; $i++){
            echo "<tr><td>".$i."</td><td>".pow($i,2)."</td><td>".pow($i,3)."</td></tr>";
        }
        echo "</tbody></table>";
    }
?>

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
        <h4>Prueba 1 <?php imprimir($banco1)?></h4>
        <div class="row">
            <div class="col-sm-6">Media: <?php echo media($banco1)?></div>
            <div class="col-sm-6">Mediana: <?php echo mediana($banco1)?></div>
        </div>
        <?php enlistar($banco1)?>
        <h4>Prueba 2 <?php imprimir($banco2)?></h4>
        <div class="row">
            <div class="col-sm-6">Media: <?php echo media($banco2)?></div>
            <div class="col-sm-6">Mediana: <?php echo mediana($banco2)?></div>
        </div>
        <?php enlistar($banco2)?>
    </div>
    <div class="container-fluid">
        <?php tabular(5)?>
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