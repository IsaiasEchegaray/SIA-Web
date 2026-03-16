<?php

class MBitacoras {

    public function listarBitacoras($idTecnico) {
        // Abrimos conexion
        $conexion = new Conexion();
        $this->cnx = $conexion->getCnx();
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

?>