<?php

class Empleado{
    public $legajo;
    public $cuit;
    public $nombre;
    public $ingreso;

    function __construct($legajo, $nombre, $cuit, $ingreso){
        $this->legajo = $legajo;
        $this->cuit = $cuit;
        $this->nombre = $nombre;
        $this->ingreso = $ingreso;
    }
}