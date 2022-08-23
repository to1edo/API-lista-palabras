<?php

namespace Model;

class Palabras extends ActiveRecord{


    protected static $tabla = 'palabras';
    protected static $columnasDB = ['id','palabra','largo'];

    public $id;
    public $palabra;
    public $largo;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? NULL;
        $this->palabra = $args['palabra'] ?? '';
        $this->largo = $args['largo'] ?? '';
    }


    public function index(){
        echo('desde Palabras index ');
    }

}