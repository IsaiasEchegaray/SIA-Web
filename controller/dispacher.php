<?php
session_start();

include_once("../model/conexion.php");
include_once("../model/MParcelas.php");
include_once("../model/MProductores.php");
include_once("../model/MBitacoras.php");

$idTecnico = 3; // $_POST['idTecnico']

try {
    // accion a realizar obtenida del post
    $accion = $_POST['accion'];
    
    switch ($accion) {
        case 'home':
            header('Location: ../view/Home.php');
            break;
        case 'listarParcelas':
            $parcelas = new MParcelas();
            $rs = $parcelas->listarParcelas($idTecnico);
            $_SESSION['rs'] = $rs;
            header('Location: ../view/templates/lists/ListaParcelas.php');
            break;
        case 'listarProductores':
            $productores = new MProductores();
            $rs = $productores->listarProductores($idTecnico);
            $_SESSION['rs'] = $rs;
            header('Location: ../view/templates/lists/ListaProductores.php');
            break;
        case 'listarBitacoras':
            $bitacoras = new MBitacoras();
            $rs = $bitacoras->listarBitacoras($idTecnico);
            $_SESSION['rs'] = $rs;
            header('Location: ../view/templates/lists/ListaBitacoras.php');
            break;
    }

} catch (Exception $ex) {
    $_SESSION['errormsj'] = $ex->getMessage();
    header("Location: ../view/errores.php");
}

?>