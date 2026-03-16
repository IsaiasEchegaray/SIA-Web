<?php

class Conexion {
    private $cnx;
    
    function getCnx() {
        $dsn = "http://tlx.itsoeh.edu.mx/wssia/";
        $this->cnx = $dsn;
        return $this->cnx;
    }

    function closeCnx() {
        $this->cnx = null;
    }

}

?>