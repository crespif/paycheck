<?php

class Totales{
    public $haber;
    public $neto;
    public $retencion;
    public $noremun;

    function __construct($neto, $haber, $retencion, $noremun){
        $this->neto = $neto;
        $this->haber = $haber;
        $this->retencion = $retencion;
        $this->noremun = $noremun;
    }
}