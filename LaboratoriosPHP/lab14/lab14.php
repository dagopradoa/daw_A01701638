<?php
    function connect() {
        $mysql = mysqli_connect("localhost","root","","tienda");
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
             // Query execution; returns identifier of the result group
            $results = $mysql->query($query);
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
    
    var_dump(login('dago', '123'));
?>