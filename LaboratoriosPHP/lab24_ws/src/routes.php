<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
require_once ("../../Lab24_cliente/util.php");
//$app1 = new \Slim\App();
$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.html', $args);
});
$app->get('/bd/insertar', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    crearProducto("Prueba","log.png");
    $response="Listo";
    echo $response;
});
//
//$app->get('/test/test', function ($request, $response, $args) {
//    $session = $request->getAttribute('session'); //get the session from the request
//
//    return $response->write('Yay, ' . $session['name']);
//});