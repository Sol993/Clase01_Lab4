<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './vendor/autoload.php';
//1 solo punto lpm----
//Clase01_Lab4/index.php/hello/MothFuc
//pagina no econtrado es por que la ruta esta mal escrito//
//linea de codigo con error significa que esta mal el archivo
$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->get('/', function (Request $request, Response $response) {
echo "Hola mundo";
	});
//$app->get(echo "Sol";)
$app->run();