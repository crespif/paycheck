<?php

include_once 'app/helpers/db.helper.php';
include_once 'app/model/concepto.php';
include_once 'app/model/totales.php';
include_once 'app/model/empleado.php';

class RecibosModel{
    private $helper;
    private $bbdd;

    function __construct()
    {
        $this->helper = new DBHelper;
        $this->bbdd = $this->helper->connect();
    }

    function getEmpleado($legajo){
        $sql = "SELECT p.LEGAJO_EMPRESA, p.APEYNOM, p.CUIL, s.F_ALTA
            FROM celta_database.rh_personal p, celta_database.rh_sit_rev s
            WHERE p.legajo = s.legajo and p.LEGAJO_EMPRESA = '".$legajo."' ";
        $stmt = oci_parse($this->bbdd, $sql);
        $ok = oci_execute($stmt);
        $fila = oci_fetch_array($stmt, OCI_ASSOC+OCI_RETURN_NULLS);
        $object = new Empleado($fila["LEGAJO_EMPRESA"], $fila["APEYNOM"], $fila["CUIL"], $fila["F_ALTA"]);
        return $object;
    }

    function getRecibo($legajo, $mes, $anio){
        $lista = array();
        $sql = "SELECT d.CODIGO, c.CONCEPTO, d.CANTIDAD, d.VALOR, c.TIPO, d.NUMERO, d.LEGAJO, d.MES, d.ANIO
            FROM celta_database.rh_liq_det d, celta_database.rh_conceptos c, celta_database.rh_liquidaciones l 
            where d.numero = l.numero and d.codigo = c.codigo and l.estado = 2 and d.legajo_empresa = '".$legajo."' and d.mes = '".$mes."' and d.anio = '".$anio."' order by d.codigo";
        //$sql = "SELECT * FROM celta_database.rh_liq_det d, celta_database.rh_conceptos c where d.codigo = c.codigo and d.legajo_empresa = 743 and d.mes = 4 and d.anio = 2021 order by d.codigo";
        $stmt = oci_parse($this->bbdd, $sql);        // Preparar la sentencia
        $ok = oci_execute($stmt);              // Ejecutar la sentencia
        while ($fila = oci_fetch_array($stmt, OCI_ASSOC+OCI_RETURN_NULLS)) {
            $object = new Concepto($fila["CODIGO"],$fila["CONCEPTO"],$fila["CANTIDAD"],$fila["VALOR"],$fila["TIPO"], $fila["NUMERO"], $fila["LEGAJO"]);
            array_push($lista, $object);
        }
        return $lista;      
    }

    function getTotales($legajo, $mes, $anio){
        $query = "SELECT sum(neto) as NETO, sum(haber) as HABER, sum(retencion) as RETENCION, sum(noremun) as NOREMUN FROM celta_database.rh_liq_sit s, celta_database.rh_liquidaciones l WHERE l.numero = s.numero and s.legajo = '".$legajo."' and l.mes = '".$mes."' and l.anio = '".$anio."' ";
        $exec = oci_parse($this->bbdd, $query);        // Preparar la sentencia
        $ok = oci_execute($exec);              // Ejecutar la sentencia
        $fila = oci_fetch_array($exec, OCI_ASSOC+OCI_RETURN_NULLS);
        $object = new Totales($fila["NETO"],$fila["HABER"],$fila["RETENCION"], $fila["NOREMUN"]);
        return $object;
    }

    function tipoLiq($numero){
        $query="SELECT L.DESCRIPCION, T.DESCRIPCION as TIPO, L.FPAGO
            from CELTA_DATABASE.RH_LIQUIDACIONES L inner join CELTA_DATABASE.RH_TIPO_LIQ T on L.tipo = T.tipo
            where L.numero = '".$numero."'";
        $exec = oci_parse($this->bbdd, $query);
        $ok = oci_execute($exec);
        $fila = oci_fetch_object($exec);
        return $fila;
    }
}