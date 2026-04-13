<?php

class Evento{
    public $descripcion;
    public $tipo;
    public $lugar;
    public $fecha;
    public $hora;

    function __construct($d,$t,$l,$f,$h){
        $this->descripcion=$d;
        $this->tipo=$t;
        $this->lugar=$l;
        $this->fecha=$f;
        $this->hora=$h;
    }

    function mostrarEvento(){
        echo $this->descripcion." ".$this->lugar;
    }
}
