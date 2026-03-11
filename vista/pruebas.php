<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa Dinámico con Coordenadas</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    
    <style>
        body { font-family: sans-serif; display: flex; flex-direction: column; align-items: center; padding: 20px; }
        #map { height: 450px; width: 100%; max-width: 800px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        form { margin-bottom: 20px; background: #f4f4f4; padding: 20px; border-radius: 8px; }
        input { padding: 8px; margin-right: 10px; border: 1px solid #ccc; border-radius: 4px; }
        button { padding: 8px 15px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0056b3; }
    </style>
</head>
<body>

    <h2>Ubicador de Coordenadas</h2>

    <form id="map-form">
        <input type="number" id="lat" step="any" placeholder="Latitud (ej: 19.43)" required>
        <input type="number" id="lng" step="any" placeholder="Longitud (ej: -99.13)" required>
        <button type="submit">Mostrar en Mapa</button>
    </form>

    <div id="map"></div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
        // Inicializamos el mapa en una posición global (vista del mundo)
        const map = L.map('map').setView([20, 0], 2);

        // Cargamos las "piezas" del mapa desde OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        let marker; // Variable para guardar el marcador y poder moverlo

        // Lógica para procesar el formulario
        document.getElementById('map-form').addEventListener('submit', function(e) {
            e.preventDefault(); // Evita que la página se refresque

            const lat = parseFloat(document.getElementById('lat').value);
            const lng = parseFloat(document.getElementById('lng').value);

            // Validar que sean números
            if (!isNaN(lat) && !isNaN(lng)) {
                
                // Si ya existe un marcador, lo quitamos
                if (marker) {
                    map.removeLayer(marker);
                }

                // Centrar el mapa en las nuevas coordenadas con zoom 13
                map.setView([lat, lng], 13);

                // Añadir el nuevo marcador
                marker = L.marker([lat, lng]).addTo(map)
                    .bindPopup(`Ubicación: ${lat}, ${lng}`)
                    .openPopup();
            }
        });
    </script>
</body>
</html>