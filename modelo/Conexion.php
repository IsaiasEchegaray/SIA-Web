<?php

/**
 * @author JAVEROS
 */

class Conexion {

    private $cnx = "http://tlx.itsoeh.edu.mx/wssia/";

    /* --------------------------------------------- API's parcela --------------------------------------------- */
    public function listarParcelas($idTecnico) {
         $url = $this->cnx . "ApiParcela.php?api=listar";

        $data = http_build_query([
            'idTecnico' => $idTecnico
        ]);

        $options = [
            'http' => [
                'method'  => 'POST',
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'content' => $data
            ]
        ];

        $context  = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
            return json_decode($response, true);
    }
    
    public function guardarParcelas() {
        $url = $this->cnx . "ApiParcela.php?api=guardar";
        $response = file_get_contents($url);
        return json_decode($response, true);
    }

    public function eliminarParcelas() {
        $url = $this->cnx . "ApiParcela.php?api=eliminar";
        $response = file_get_contents($url);
        return json_decode($response, true);
    }

    public function editarParcelas() {
        $url = $this->cnx . "ApiParcela.php?api=editar";
        $response = file_get_contents($url);
        return json_decode($response, true);
    }


    /* --------------------------------------------- API's productor --------------------------------------------- */

    public function ListarProductores($idTecnico) {
        $url = $this->cnx . "ApiP.php?api=listar";

        $data = http_build_query([
            'idTecnico' => $idTecnico
        ]);

        $options = [
            'http' => [
                'method'  => 'POST',
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'content' => $data
            ]
        ];

        $context  = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
            return json_decode($response, true);
    }



    /* --------------------------------------------- API's bitacora --------------------------------------------- */
    public function ListarBitacoras($idTecnico) {
        $url = $this->cnx . "ApiB.php?api=listar";

        $data = http_build_query([
            'idTecnico' => $idTecnico
        ]);

        $options = [
            'http' => [
                'method'  => 'POST',
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'content' => $data
            ]
        ];

        $context  = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
            return json_decode($response, true);
    }


}