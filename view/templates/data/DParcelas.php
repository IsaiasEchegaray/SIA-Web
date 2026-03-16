<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
        <link rel="stylesheet" href="../../styles/styles.css">
        <title>Datos Generales Parcelas</title>
    </head>
    <body>

        <div class="grid-container">
            <?php include '../menu/menuLateralTemplates.php';?>

            <main class="main-container">

                <div class="dashboard-content" id="dashboard">
                    <div class="section-header">
                        <div class="header-icon-stack">
                            <div class="header-icon">
                                <span class="material-icons-outlined">description</span>
                            </div>
                        </div>
                        <div class="section-title">Datos Generales</div>
                    </div>

                    <div class="data-card">
                        <!-- Columna del Formulario -->
                         <?php
                            $municipios = include '../../resources/strings/municipios.php';
                            $arrays = include '../../resources/strings/arrays.php';
                            $parcelaEncontrada = null;
                            if (isset($_POST['parcela']) && !empty($_POST['parcela'])) {
                                // Deserializamos y asignamos
                                $parcelaEncontrada = unserialize($_POST['parcela']);
                            }
                            
                                if ($parcelaEncontrada) {
                                    // Mostrar los datos de la parcela
                                    //<!-- Columna del Mapa -->
                                    echo '<form method="POST" action="" style="display: contents;">';
                                    echo '<div class="map-area">';
                                    echo '<div class="map-frame" id="map-frame">';
                                    echo '</div>';
                                    echo '<div class="form-grid">';
                                    echo '    <label>Latitud:</label>';
                                    echo '    <input type="text" id="latitud" name="latitud" placeholder="Latitud" value="' . htmlspecialchars($parcelaEncontrada['latitud'] ?? '') . '">';
                                    echo '    <label>Longitud:</label>';
                                    echo '    <input type="text" id="longitud" name="longitud" placeholder="Longitud" value="' . htmlspecialchars($parcelaEncontrada['longitud'] ?? '') . '">';
                                    echo '    <label>Nombre de la Parcela:</label>';
                                    echo '    <input type="text" id="nombre" name="nombre" placeholder="Nombre de la Parcela" value="' . htmlspecialchars($parcelaEncontrada['nombre']) . '">';
                                    echo '</div>';
                                    echo '</div>';
                                    //<!-- Columna 2 -->
                                    echo '<div class="right-column">';
                                    echo '    <div class="form-grid">';
                                    echo '        <label>Municipio:</label>';
                                    echo '        <select id="municipio" name="municipio">';
                                                    foreach ($municipios['municipios'] as $id => $nombre) {
                                                        $selected = ($id == $parcelaEncontrada['municipio']) ? ' selected' : '';
                                                        echo '<option value="' . $id . '"' . $selected . '>' . htmlspecialchars($nombre) . '</option>';
                                                    }
                                    echo '        </select>';
                                    echo '        <label>Localidad:</label>';
                                    echo '        <input type="text" id="localidad" name="localidad" placeholder="Localidad" value="' . htmlspecialchars($parcelaEncontrada['localidad']) . '">';
                                    echo '        <label>Superficie(Ha):</label>';
                                    echo '        <input type="text" id="superficie" name="superficie" placeholder="Superficie (Ha)" value="' . htmlspecialchars($parcelaEncontrada['superficie']) . '">';
                                    
                                    echo '        <label>Tipo de Manejo:</label>';
                                    echo '        <select id="tipoManejo" name="tipoManejo">';
                                                    foreach ($arrays['tipomanejo'] as $id => $nombre) {
                                                        $selected = ($id == $parcelaEncontrada['tipomanejo']) ? ' selected' : '';
                                                        echo '<option value="' . $id . '"' . $selected . '>' . htmlspecialchars($nombre) . '</option>';
                                                    }
                                    echo '        </select>';
                                    
                                    echo '        <label>Régimen Hídrico:</label>';
                                    echo '        <select id="regimenHidrico" name="regimenHidrico">';
                                                    foreach ($arrays['regimenhidrico'] as $id => $nombre) {
                                                        $selected = ($id == $parcelaEncontrada['regimenHidrico']) ? ' selected' : '';
                                                        echo '<option value="' . $id . '"' . $selected . '>' . htmlspecialchars($nombre) . '</option>';
                                                    }
                                    echo '        </select>';

                                    echo '        <label>Derecho de Propiedad:</label>';
                                    echo '        <select id="derechoPropiedad" name="derechoPropiedad">';
                                                    foreach ($arrays['derechopropiedad'] as $id => $nombre) {
                                                        $selected = ($id == $parcelaEncontrada['derechopropiedad']) ? ' selected' : '';
                                                        echo '<option value="' . $id . '"' . $selected . '>' . htmlspecialchars($nombre) . '</option>';
                                                    }
                                    echo '        </select>';

                                    echo '        <label>Costo de renta:</label>';
                                    echo '        <input type="text" id="renta" name="renta" placeholder="Costo de Renta" value="' . htmlspecialchars($parcelaEncontrada['renta']) . '">';
                                    echo '    </div>';
                                    echo '    <button type="submit" class="btn-guardar">Guardar Cambios</button>';
                                    echo '</form>';
                                    echo '</div>';
                                } else {
                                    // Si no se encuentra la parcela, mostrar un mensaje
                                    echo '<div class="right-column"><p>Parcela no encontrada.</p></div>';
                                }
                        ?>
                    </div>
                </div>


            </main>
        </div>

        <script src="../../scripts/script.js"></script>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

        <script>
            // Esperar a que el DOM se cargue completamente
            document.addEventListener('DOMContentLoaded', function() {
                // Verificar que el div del mapa existe
                const mapContainer = document.getElementById('map-frame');
                if (!mapContainer) {
                    console.error('El contenedor del mapa no se encontró');
                    return;
                }

                // Inicializar el mapa
                const map = L.map('map-frame').setView([19.4326, -99.1332], 13);

                // Cargar las capas del mapa desde OpenStreetMap
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; OpenStreetMap contributors',
                    maxZoom: 19
                }).addTo(map);

                let marker; // Variable para guardar el marcador
        
                // Actualizar el mapa con las coordenadas si están disponibles
                <?php 
                    if ($parcelaEncontrada) {
                        $lat = isset($parcelaEncontrada['latitud']) ? floatval($parcelaEncontrada['latitud']) : 19.4326;
                        $lng = isset($parcelaEncontrada['longitud']) ? floatval($parcelaEncontrada['longitud']) : -99.1332;
                        echo "map.setView([$lat, $lng], 13);";
                        echo "marker = L.marker([$lat, $lng]).addTo(map);";
                    }
                ?>
            });
        </script>
    </body>
</html>