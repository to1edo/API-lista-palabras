<?php 

use Model\ActiveRecord;

require __DIR__ . '/../vendor/autoload.php';
require 'funciones.php';
require __DIR__ . '/../models/ActiveRecord.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeload();

require 'database.php';


// Conectarnos a la base de datos
ActiveRecord::setDB($db);