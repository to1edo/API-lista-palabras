<?php

namespace Controller;

use Model\Palabras;

require_once __DIR__ . '/../models/Palabras.php';

class ApiController{

    public static function index(){

        
        $palabras = Palabras::all();

        echo json_encode($palabras);
    
    }

    public static function porCaracteres(){

        if(isset($_GET['largo'])){

            $largo = $_GET['largo'];
            $palabras = Palabras::whereAll('largo',$largo);
            echo json_encode($palabras);

        }else{
            echo json_encode('Falta el parametro ?largo=');
        }
    }
        
        

}