<?php

class MTecnico {

    public function verificar($email, $contrasenia) {
        // Abrimos conexion
        $conexion = new Conexion();
        $this->cnx = $conexion->getCnx();
        $url = $this->cnx . "ApiT.php?api=buscarco";

        $data = http_build_query([
            'email' => $email,
            'pass' => $contrasenia
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