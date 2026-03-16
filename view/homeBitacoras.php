<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu principal</title>
        <!-- Fuente de Google Fonts/Icons y estilos -->
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
         <link rel="stylesheet" href="styles/styles.css">
        </head>
    <body>
        <div class="grid-container">
            <?php include 'templates/menu/menuLateralBitacoras.php'; ?>
            
        </div>

        <!-- Eventos de JavaScript -->
         <script src="../recursos/script.js">
         </script>
    </body>
</html>