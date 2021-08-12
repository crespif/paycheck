<?php
    
    class Concepto{
        public $codigo;
        public $concepto;
        public $cantidad;
        public $valor;
        public $tipo;
        public $numero;
        public $legajo;

        function __construct($codigo,$concepto,$cantidad,$valor,$tipo,$numero,$legajo){
            $this->codigo = $codigo;
            $this->concepto = $concepto;
            $this->cantidad = $cantidad;
            $this->valor = $valor;
            $this->tipo = $tipo;
            $this->legajo = $legajo;
            $this->numero = $numero;
        }

    }