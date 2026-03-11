<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        
        <link rel="stylesheet" href="../recursos/styles.css">
        <title>Bitacoras</title>
    </head>
    <body>

        <div class="grid-container">
            <?php include 'menuLateral.php'; ?>

            
            <main class="main-container">

                <div class="section-header">
                    <div class="header-icon">
                        <span class="material-icons-outlined">filter_vintage</span>
                    </div>
                    <div class="section-title">Bitacoras</div>
                </div>

                <!-- Barra de acciones -->
                <div class="actions-bar">
                    <a href="#" class="add-link">
                        <span class="material-icons-outlined">add</span> Agregar
                    </a>
                    <div class="search-container">
                        <input type="text" class="search-input">
                        <button class="btn-buscar">Buscar</button>
                    </div>
                </div>

                <!-- Lista de tarjetas -->
                <div class="cards-list">

                    <div class="cards-list">

                    <?php 
                        include '../modelo/Conexion.php';
                        $conexion = new Conexion();
                        $result = $conexion->ListarBitacoras(3);
                        $_SESSION['idTecnico'] = 3;

                        foreach ($result['contenido'] as $bitacora) {
                            echo '<div class="parcela-card">';
                            echo '    <div class="card-number">' . htmlspecialchars($bitacora['idBita']) . '</div>';
                            echo '    <div class="card-accent"></div>';
                            echo '    <div class="card-info">';
                            echo '        <div class="info-title">' . htmlspecialchars($bitacora['nombreBitacora']) . '</div>';
                            echo '        <div>';
                            echo '            <div class="info-label">Productor</div>';
                            echo '            <div class="info-value">' . htmlspecialchars($bitacora['nombre']) . '</div>';
                            echo '        </div>';
                            echo '        <div>';
                            echo '            <div class="info-label">Fecha de registro</div>';
                            echo '            <div class="info-value">' . htmlspecialchars($bitacora['fechaInicio']) . '</div>';
                            echo '        </div>';
                            echo '    </div>';
                            echo '    <div class="card-actions">';
                            echo '        <span class="material-icons-outlined action-icon consultar-bitacoras">visibility</span>';
                            echo '        <span class="material-icons-outlined action-icon">delete_outline</span>';
                            echo '    </div>';
                            echo '</div>';
                        }

                    ?>

                </div>


                </div>


            </main>
        </div>

        <script src="../recursos/script.js"></script>
    </body>
</html>