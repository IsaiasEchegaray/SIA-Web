<!DOCTYPE html>
<?php session_start(); ?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu principal</title>
        <!-- Fuente de Google Fonts/Icons y estilos -->
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link rel="stylesheet" href="../recursos/styles.css">
        </head>
    <body>
        <div class="grid-container">
            <!-- Encabezado -->
            <header class="header">
                <div class="menu-icon">
                    <img src="../recursos/Logo.png" alt="Logo SIA-Tlaxcala">SIA-Web
                </div>
                <div class="header-right">
                    <span id="header-perfil">Perfil</span>
                    <span id="header-cerrar-sesion">Cerrar Sesión</span>
                </div>
            </header>

            <!-- Barra de navegación -->
            <aside id="sidebar">
                <div class="sidebar-title">
                    <div id="sidebran" class="sidebar-brand">
                        <span class="material-icons-outlined">menu</span> Menu
                    </div>
                </div>
                <!-- Lista de opciones del menú principal -->
                <ul class="sidebar-list">
                    <li id="list-parcelas" class="sidebar-list-item" >
                        <span class="material-icons-outlined">local_florist</span> Parcelas
                    </li>
                    <li id="list-productores" class="sidebar-list-item">
                        <span class="material-icons-outlined">people</span> Productores
                    </li>
                    <li id="list-bitacoras" class="sidebar-list-item">
                        <span class="material-icons-outlined">app_registration</span> Bitacoras
                    </li>
                    <li id="list-archivos" class="sidebar-list-item">
                        <span class="material-icons-outlined">archive</span> Archivos
                    </li>
                </ul>
            </aside>
        </div>

        <!-- Eventos de JavaScript -->
         <script src="../recursos/script.js">
         </script>
    </body>
</html>