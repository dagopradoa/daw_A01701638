<?php
    function connect() {
        $ENV = "dev";
        if ($ENV == "dev") {
            $mysql = mysqli_connect("localhost","root","","lab14");
                                            //root si estan en windows
        } else  if ($ENV == "prod"){
            $mysql = mysqli_connect("localhost","root","","lab14");
        }
                                            //root si estan en windows
        $mysql->set_charset("utf8");
        return $mysql;
    }
    
    function disconnect($mysql) {
        mysqli_close($mysql);
    }
    
    function login($user, $passwd) {
        $db = connect();
        if ($db != NULL) {
            
            //Specification of the SQL query
            $query='SELECT nombre FROM usuarios WHERE nombre="'.$user.
                '" AND passwd="'.$passwd.'"';
            $query;
             // Query execution; returns identifier of the result group
            $results = $db->query($query);
             // cycle to explode every line of the results
             
            if (mysqli_num_rows($results) > 0)  {
                // it releases the associated results
                mysqli_free_result($results);
                disconnect($db);
                return true;
            }
            return false;
        } 
        return false;
    }
    function crearProducto($nombre, $imagen) {
        $db = connect();
        
        if ($db != NULL) {
            
            // insert command specification 
            $query='INSERT INTO productos (nombre,imagen) VALUES (?,?)';
            // Preparing the statement 
            if (!($statement = $db->prepare($query))) {
                die("Preparation failed: (" . $db->errno . ") " . $db->error);
            }
            // Binding statement params 
            if (!$statement->bind_param("ss", $nombre, $imagen)) {
                die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error); 
            }
             // Executing the statement
             if (!$statement->execute()) {
                die("Execution failed: (" . $statement->errno . ") " . $statement->error);
              } 

            
            mysqli_free_result($results);
            disconnect($db);
            return true;
        } 
        return false;
    }
    function eliminar($name,$image){
        $db = connect();
        if ($db != NULL) {
            $sql="Update productos set nombre='".$name."',imagen='".$image."' where nombre='".$name."'";
            if ($db->query($sql) === TRUE) {
                echo "editado completo";
            }
            else {
                echo "Error: " . $sql. "<br>" . $db->error;
            }
            disconnect($db);
            return true;
        }
        return false;

    }
    
    function getTable($tabla) {
        $db = connect();
        if ($db != NULL) {
            
            //Specification of the SQL query
            $query='SELECT * FROM '.$tabla;
            $query;
             // Query execution; returns identifier of the result group
            $results = $db->query($query);
             // cycle to explode every line of the results
        
           $html = '<table class="table table-striped">';
           $html .= '<thead>';
           $html .= '<tr>';
           $columnas = $results->fetch_fields();
           for($i=0; $i<count($columnas); $i++) {
                $html .= '<th>'.$columnas[$i]->name.'</th>';
           }
           $html .= '</tr>';
           $html .= '</thead>';
           
           $html .= '<tbody>';
           while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                                                // Options: MYSQLI_NUM to use only numeric indexes
                                                // MYSQLI_ASSOC to use only name (string) indexes
                                                // MYSQLI_BOTH, to use both
                    $html .= '<tr>';
                    for($i=0; $i<count($fila); $i++) {
                        // use of numeric index
                        $html .= '<td>'.$fila[$i].'</td>'; 
                    }
                    $html .= '</tr>';
            }
            $html .= '</tbody></table>';   
            // it releases the associated results
            mysqli_free_result($results);
            disconnect($db);
            return $html;
        }
        return false;
    }

    function crear($name){
        $db = connect();
        if ($db != NULL) {
            $sql='Delete from productos where nombre="'.$name.'"';
             if ($db->query($sql) === TRUE) {
                echo "borrado";
            } 
            else {
                echo "Error: " . $sql. "<br>" . $db->error;
            }
            disconnect($db);
            return true;
        }
        return false;
        
    }
    
    function getProductos() {
        $db = connect();
        if ($db != NULL) {
            
            //Specification of the SQL query
            $query='SELECT * FROM productos';
            $query;
             // Query execution; returns identifier of the result group
            $results = $db->query($query);
             // cycle to explode every line of the results
            $html = '';

           while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                                                // Options: MYSQLI_NUM to use only numeric indexes
                                                // MYSQLI_ASSOC to use only name (string) indexes
                                                // MYSQLI_BOTH, to use both
              
               $html .= '<div class="row">
                                <div class="col-4 lg-3"></div>
                                <div class="col-4 lg-6">
                                  <div class="card">
                                    <div class="card">
                                      <img class="card-img-top" src="uploads/'.$fila["imagen"].'">
                                      <span class="card-title">'.$fila["nombre"].'</span>
                                    </div>
                                    <div class="card-body">
                                      <p class="card-text">Publicado el: '.$fila["created_at"].'.</p>
                                    </div>
                                    <a class="btn btn-primary" href="editar.php?id='.$fila["id"].'">Editar</a>
                                  </div>
                                </div>
                              </div>';

            }            
            echo $html;
            // it releases the associated results
            mysqli_free_result($results);
            disconnect($db);
            return true;
        }
        return true;
    }
        
    
    //var_dump(login('lalo', 'hockey'));
    //var_dump(login('joaquin', 'basket'));
    //var_dump(login('cesar', 'basket'));
?>