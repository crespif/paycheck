<?php

class DBHelper {
  
    public function __construct() {
    }
    /*
    public function connect() {
        //$db = new PDO('mysql:host=localhost;'.'dbname=db_lennon_bar;charset=utf8', 'root', '');
        try {
            $usuario = "RPTSUELDOS";
            $password = "RPTSUE46";
            $nombredb = "(DESCRIPTION =
                            (ADDRESS_LIST =
                                (ADDRESS = (PROTOCOL = TCP)(HOST = serv-oracle.celta.local)(PORT = 1521))
                            )
                            (CONNECT_DATA =
                                (SERVICE_NAME = ORACLE)
                            )
            )";
            //para oracle el tipo es oci
            //$conn = new PDO("oci:dbname=ORACLE;host=serv-oracle.celta.local", $usuario, $password);
            $conn = new PDO("oci:dbname=".$nombredb,$usuario,$password);
            //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch ( PDOException $e ){  
            echo "Error conexion: ".$e->getMessage( );  
        }
                   
    }     
    */
    
     public function connect(){
        try{
            $conn = oci_connect('RPTSUELDOS', 'RPTSUE46', ' (DESCRIPTION =
                (ADDRESS_LIST =
                (ADDRESS = (PROTOCOL = TCP)(HOST = serv-oracle.celta.local)(PORT = 1521))
                )
                (CONNECT_DATA =
                (SERVICE_NAME = ORACLE)
                )
            )'); 
            //Close the oracle connection
            return ($conn);
        } catch (Exception $e){
            echo "Error al conectar";
        }
    } 

    function desconectar($conexion){
        oci_close($conexion);
    }
    

}