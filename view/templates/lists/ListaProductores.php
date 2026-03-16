<?php session_start();
$rs = $_SESSION['rs'];
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link rel="stylesheet" href="../../styles/styles.css">

        <meta charset="UTF-8">
        <title>Productores</title>
    </head>
    <body>
        
        <div class="grid-container">
            <?php include '../menu/menuLateralTemplates.php';?>

            <main class="main-container">

                <div class="section-header">
                    <div class="header-icon">
                        <span class="material-icons-outlined">filter_vintage</span>
                    </div>
                    <div class="section-title">Productores</div>
                </div>

                <!-- Barra de acciones -->
                <div class="actions-bar">
                    <a href="#" class="add-link">
                        <span class="material-icons-outlined">add</span> Agregar
                    </a>
                    <div class="search-container">
                        <input type="text" class="search-input" placeholder="Buscar por nombre, CURP, etc.">
                        <button class="btn-buscar">Buscar</button>
                    </div>
                </div>

                <!-- Lista de contenedores -->
                <div class="cards-list">

                    <?php 
                        foreach ($rs['contenido'] as $productor) {
                        echo '<div class="parcela-card">';
                        echo '    <div class="card-number">'. htmlspecialchars($productor['idProductor']) . '</div>';
                        echo '    <div class="card-accent"></div>';
                        echo '    <div class="card-info">';
                        echo '        <div>';
                        echo '            <div class="info-label">Nombre</div>';
                        echo '            <div class="info-value">' . htmlspecialchars($productor['nombre']) . ' ' . htmlspecialchars($productor['apePat']) . ' ' . htmlspecialchars($productor['apeMat']) . '</div>';
                        echo '        </div>';
                        echo '        <div>';
                        echo '            <div class="info-label">CURP</div>';
                        echo '            <div class="info-value">' . htmlspecialchars($productor['curp']) . '</div>';
                        echo '        </div>';
                        echo '        <div>';
                        echo '            <div class="info-label">Género</div>';
                        echo '            <div class="info-value">' . htmlspecialchars($productor['genero'] == 1 ? "Masculino" : "Femenino") . '</div>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '    <form action="../data/Dproductores.php" method="post">';
                        echo '        <div class="card-actions">'       
                                        . '<input type="hidden" name="idProductor" id="idProductor" value="'.$productor['idProductor'].'">'
                                        . '<input type="hidden" name="productor" id="productor" value="' . htmlspecialchars(serialize($productor)) . '">'
                                        . '<input type="submit" class="material-icons-outlined action-icon" value="visibility">'   
                                        . '</div>';
                        echo '    </form>';
                        echo '</div>';
                    }
                    ?>

                </div>


            </main>

        </div>
        <script src="../recursos/script.js"></script>
    </body>
</html>