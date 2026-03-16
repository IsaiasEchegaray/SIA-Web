<?php
session_start();
if (isset($_SESSION['errormsj'])) {
    $msj = $_SESSION['errormsj'];
    echo "<script>alert('$msj');</script>";
    unset($_SESSION['errormsj']);
} else {
    header("Location: ../index.php");
}
?>