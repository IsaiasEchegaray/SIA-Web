<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
        <link rel="stylesheet" href="../recursos/styles.css">
        <title>Datos Generales Parcelas</title>
    </head>
    <body>

        <div class="grid-container">
            <?php include 'menuLateral.php';?>

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
                            // Recibe el ID desde la URL
                            $idParcela = isset($_GET['id']);
                            $parcelaEncontrada = null;
                            
                            if ($idParcela > 0 && isset($_SESSION['parcelasList'])) {
                                // Buscar la parcela en la sesión
                                foreach ($_SESSION['parcelasList'] as $parcela) {
                                    if ($parcela['idParcela'] == $idParcela) {
                                        $parcelaEncontrada = $parcela;
                                        break;
                                    }
                                }
                            }
                                
                                if ($parcelaEncontrada) {
                                    // Mostrar los datos de la parcela
                                    //<!-- Columna del Mapa -->
                                    echo '<div class="map-area">';
                                    echo '<div class="map-frame" id="map-frame">';
                                    echo '</div>';
                                    echo '<div class="form-grid">';
                                    echo '    <label>Latitud:</label>';
                                    echo '    <input type="text" id="lat-input" placeholder="Latitud" value="' . htmlspecialchars($parcelaEncontrada['latitud'] ?? '') . '">';
                                    echo '    <label>Longitud:</label>';
                                    echo '    <input type="text" id="lng-input" placeholder="Longitud" value="' . htmlspecialchars($parcelaEncontrada['longitud'] ?? '') . '">';
                                    echo '    <label>Nombre de la Parcela:</label>';
                                    echo '    <input type="text" placeholder="Nombre de la Parcela" value="' . htmlspecialchars($parcelaEncontrada['nombre']) . '">';
                                    echo '</div>';
                                    echo '</div>';

                                    echo '<div class="right-column">';
                                    echo '    <div class="form-grid">';
                                    echo '        <label>Municipio:</label>';
                                    echo '        <select><option>' . htmlspecialchars($parcelaEncontrada['municipio']) . '</option></select>';
                                    echo '        <label>Localidad:</label>';
                                    echo '        <input type="text" placeholder="Localidad" value="' . htmlspecialchars($parcelaEncontrada['localidad']) . '">';
                                    echo '        <label>Superficie(Ha):</label>';
                                    echo '        <input type="text" placeholder="Superficie (Ha)" value="' . htmlspecialchars($parcelaEncontrada['superficie']) . '">';
                                    echo '        <label>Tipo de Manejo:</label>';
                                    echo '        <select><option>' . htmlspecialchars($parcelaEncontrada['tipoManejo']) . '</option></select>';
                                    echo '        <label>Régimen Hídrico:</label>';
                                    echo '        <select><option>' . htmlspecialchars($parcelaEncontrada['regimenHidrico']) . '</option></select>';
                                    echo '        <label>Derecho de Propiedad:</label>';
                                    echo '        <select><option>' . htmlspecialchars($parcelaEncontrada['derechoPropiedad']) . '</option></select>';
                                    echo '        <label>Costo de renta:</label>';
                                    echo '        <input type="text" placeholder="Costo de Renta" value="' . htmlspecialchars($parcelaEncontrada['renta']) . '">';
                                    echo '        <label>Estatus:</label>';
                                    echo '        <select><option>' . htmlspecialchars($parcelaEncontrada['statuss']) . '</option></select>';
                                    echo '    </div>';
                                    echo '    <button class="btn-guardar">Guardar Cambios</button>';
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

        <script src="../recursos/script.js"></script>
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