<?php

$uFail = $pFail = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["user"])) 
    $uFail = "data-toggle='tooltip' data-placement='bottom' title='Campo Obligatorio'";
  if (empty($_POST["pswd"])) 
    $pFail = "data-toggle='tooltip' data-placement='bottom' title='Campo Obligatorio'";
}

?>

<div class = "container-fluid">
    <div class="had">
        <h1 class="had-r1">LABS <span class="had-amp">&amp;</span> INVESTIGATIONS</h1>
    </div>
</div>

<p></p>

<div class="container container-fluid">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-block">
                    <p></p>
                    <div class="container">
                        <form  action="session.php" method="POST">
                            <div class="form-group">
                                <label for="Username">Usuario</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Dagoberto" <?php echo $uFail;?>>
                            </div>
                            <div class="form-group">
                                <label for="Passwd">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="123456" <?php echo $pFail;?>>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>

<p></p>