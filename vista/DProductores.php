<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        
        <link rel="stylesheet" href="../recursos/styles.css">
        <title>Datos Generales Productores</title>
    </head>
    <body>

        <div class="grid-container">
            <?php include 'menuLateral.php'; ?>

            <main class="main-container">

                <div class="dashboard-content" id="dashboard">
                    <div class="section-header">
                        <div class="header-icon-stack">
                            <div class="header-icon">
                                <span class="material-icons-outlined">filter_vintage</span>
                            </div>
                        </div>
                        <div class="section-title">Datos Generales</div>
                    </div>

                    <div class="data-card">

                        <!-- Columna del Formulario -->
                         <?php
                            // Recibe el ID desde la URL
                            $idProductor = isset($_GET['id']);
                            $productorEncontrado = null;
                            
                            if ($idProductor > 0 && isset($_SESSION['productoresList'])) {
                                // Buscar el productor en la sesión
                                foreach ($_SESSION['productoresList'] as $productor) {
                                    if ($productor['idProductor'] == $idProductor) {
                                        $productorEncontrado = $productor;
                                        break;
                                    }
                                }
                            }
                                
                                if ($productorEncontrado) {
                                    // Mostrar los datos del productor
                                    //<!-- Columna 1 -->
                                    echo '<div class="map-area">';
                                    echo '  <div class="form-grid">';
                                    echo '    <label>Nombre:</label>';
                                    echo '    <input type="text" placeholder="Nombre del Productor" value="' . htmlspecialchars($productorEncontrado['nombre']) . '">';
                                    echo '    <label>Apellido Paterno:</label>';
                                    echo '    <input type="text" placeholder="Apellido del paterno del Productor" value="' . htmlspecialchars($productorEncontrado['apePat']) . '">';
                                    echo '    <label>Apellido Materno:</label>';
                                    echo '    <input type="text" placeholder="Apellido del materno del Productor" value="' . htmlspecialchars($productorEncontrado['apeMat']) . '">';
                                    echo '  </div>';
                                    echo '</div>';
                                    //<!-- Columna 2 -->
                                    echo '<div class="right-column">';
                                    echo '  <div class="form-grid">';
                                    echo '    <label>Fecha de Nacimiento:</label>';
                                    echo '    <input type="date" placeholder="Fecha de Nacimiento" value="' . htmlspecialchars($productorEncontrado['fechan']) . '">';
                                    echo '    <label>Numero de Teléfono:</label>';
                                    echo '    <input type="text" placeholder="Número de Teléfono" value="' . htmlspecialchars($productorEncontrado['tel']) . '">';
                                    echo '    <label>Genero:</label>';
                                    echo '    <select value="' . (htmlspecialchars($productorEncontrado['genero'])==1 ? 'selected' : '') . '"><option value="1">Masculino</option><option value="2">Femenino</option></select>';
                                    echo '  </div>';
                                    echo '  <button class="btn-guardar">Guardar Cambios</button>';
                                    echo '</div>';
                                }else {
                                    echo '<p id="main-title">Ocurrió un error.</p>';
                                }
                        ?>
                    </div>
                </div>


            </main>
        </div>

        <script src="../recursos/script.js"></script>
    </body>
</html>