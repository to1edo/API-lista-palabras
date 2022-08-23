<?php

use MVC\Router;
use Controller\ApiController;

require_once __DIR__ . '/../includes/app.php';
require_once __DIR__ . '/../Router.php';
require __DIR__ . '../../controllers/ApiController.php';

$router =  new Router();

//rutas

$router->get('/palabras',[ApiController::class,'index']);
$router->get('/palabras-caracteres',[ApiController::class,'porCaracteres']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
