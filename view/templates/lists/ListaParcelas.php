<?php session_start(); 
$rs = $_SESSION['rs']; 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        
        <link rel="stylesheet" href="../../styles/styles.css">
        <title>Parcelas</title>
    </head>
    <body>

        <div class="grid-container">
            <?php include '../menu/menuLateralTemplates.php';?>

            
            <main class="main-container">

                <div class="section-header">
                    <div class="header-icon">
                        <span class="material-icons-outlined">filter_vintage</span>
                    </div>
                    <div class="section-title">Parcelas</div>
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

                <?php 

                    foreach ($rs['contenido'] as $parcela) {
                        echo '<div class="parcela-card">';
                        echo '    <div class="card-number">'. htmlspecialchars($parcela['idParcela']) . '</div>';
                        echo '    <div class="card-accent"></div>';
                        echo '    <div class="card-info">';
                        echo '        <div class="info-title">' . htmlspecialchars($parcela['nombre']) . '</div>';
                        echo '        <div>';
                        echo '            <div class="info-label">Municipio</div>';
                        echo '            <div class="info-value">' . htmlspecialchars($parcela['municipio']) . '</div>';
                        echo '        </div>';
                        echo '        <div>';
                        echo '            <div class="info-label">Localidad</div>';
                        echo '            <div class="info-value">' . htmlspecialchars($parcela['localidad']) . '</div>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '    <form action="../data/Dparcelas.php" method="post">';
                        echo '        <div class="card-actions">'       
                                        . '<input type="hidden" name="idParcela" id="idParcela" value="'.$parcela['idParcela'].'">'
                                        . '<input type="hidden" name="parcela" id="parcela" value="' . htmlspecialchars(serialize($parcela)) . '">'
                                        . '<input type="submit" class="material-icons-outlined action-icon" value="visibility">'   
                                        . '</div>';
                        echo '    </form>';
                        echo '</div>';
                        echo '<br>';
                    }
                ?>

            </main>
        </div>

        <script src="../recursos/script.js"></script>
    </body>
</html>