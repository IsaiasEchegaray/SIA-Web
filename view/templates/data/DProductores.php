<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        
        <link rel="stylesheet" href="../../styles/styles.css">
        <title>Datos Generales Productores</title>
    </head>
    <body>

        <div class="grid-container">
            <?php include '../menu/menuLateralTemplates.php';?>

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
                         $productorEncontrado = null;
                         if (isset($_POST['productor']) && !empty($_POST['productor'])) {
                             // Deserializamos y asignamos
                             $productorEncontrado = unserialize($_POST['productor']);
                         }

                                if ($productorEncontrado) {
                                    // Mostrar los datos del productor
                                    echo '<form method="POST" action="" style="display: contents;">';
                                    //<!-- Columna 1 -->
                                    echo '<div class="map-area">';
                                    echo '  <div class="form-grid">';
                                    echo '    <label>Nombre:</label>';
                                    echo '    <input type="text" id="nombre" name="nombre" placeholder="Nombre del Productor" value="' . htmlspecialchars($productorEncontrado['nombre']) . '">';
                                    echo '    <label>Apellido Paterno:</label>';
                                    echo '    <input type="text" id="apePat" name="apePat" placeholder="Apellido del paterno del Productor" value="' . htmlspecialchars($productorEncontrado['apePat']) . '">';
                                    echo '    <label>Apellido Materno:</label>';
                                    echo '    <input type="text" id="apeMat" name="apeMat" placeholder="Apellido del materno del Productor" value="' . htmlspecialchars($productorEncontrado['apeMat']) . '">';
                                    echo '    <label>CURP:</label>';
                                    echo '    <input type="text" id="curp" name="curp" placeholder="CURP del Productor" value="' . htmlspecialchars($productorEncontrado['curp']) . '">';
                                    echo '  </div>';
                                    echo '</div>';
                                    //<!-- Columna 2 -->
                                    echo '<div class="right-column">';
                                    echo '  <div class="form-grid">';
                                    echo '    <label>Fecha de Nacimiento:</label>';
                                    echo '    <input type="date" id="fechan" name="fechan" placeholder="Fecha de Nacimiento" value="' . htmlspecialchars($productorEncontrado['fechan']) . '">';
                                    echo '    <label>Numero de Teléfono:</label>';
                                    echo '    <input type="text" id="tel" name="tel" placeholder="Número de Teléfono" value="' . htmlspecialchars($productorEncontrado['tel']) . '">';
                                    echo '    <label>Genero:</label>';
                                    echo '    <select id="genero" name="genero">';
                                    echo '        <option value="1" ' . ($productorEncontrado['genero'] == 1 ? 'selected' : '') . '>Masculino</option>';
                                    echo '        <option value="2" ' . ($productorEncontrado['genero'] == 2 ? 'selected' : '') . '>Femenino</option>';
                                    echo '    </select>';
                                    echo '    <label>Estado de actividad:</label>';
                                    echo '    <select id="statuss" name="statuss">';
                                    echo '        <option value="1" ' . ($productorEncontrado['statuss'] == 1 ? 'selected' : '') . '>Activo</option>';
                                    echo '        <option value="2" ' . ($productorEncontrado['statuss'] == 0 ? 'selected' : '') . '>Inactivo</option>';
                                    echo '    </select>';
                                    echo '  </div>';
                                    echo '  <button class="btn-guardar">Guardar Cambios</button>';
                                    echo '</form>';
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