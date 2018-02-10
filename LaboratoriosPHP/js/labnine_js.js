function promediarnueve(){
    
    let data = "<form method='post' action='<?php echo $_SERVER['PHP_SELF'];?><label for='numbers'>Ingresa los valores separados por comas:</label><input id='promediarnueve' type='text' placeholder='-1,0,1,2,3,..,6'></div><input type='submit'></form><?phpif ($_SERVER['REQUEST_METHOD'] == 'POST') {$name = $_POST['promediarnueve'];if (empty($name)) {echo 'Name is empty';} else {echo $name;}}?>"
    document.getElementById("labnine").innerHTML = data;
    
}

