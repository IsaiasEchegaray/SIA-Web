<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        
        <link rel="stylesheet" href="../recursos/styles.css">
        <title>Archivos</title>
    </head>
    <body>

        <div class="grid-container">
            <?php include 'menuLateral.php'; ?>

            
            <main class="main-container">

                <div class="section-header">
                    <div class="header-icon">
                        <span class="material-icons-outlined">filter_vintage</span>
                    </div>
                    <div class="section-title">Archivos</div>
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

                    <div class="parcela-card">
                        <div class="card-number">1</div>
                        <div class="card-accent"></div>
                        <div class="card-info">
                            <div class="info-title">La mora 2025</div>
                            <div>
                                <div class="info-label">Productor</div>
                                <div class="info-value">Juan Pérez Sánchez</div>
                            </div>
                            <div>
                                <div class="info-label">Fecha de Registro</div>
                                <div class="info-value">2020-10-02</div>
                            </div>
                        </div>
                        <div class="card-actions" id="download-file">
                            <span class="material-icons-outlined action-icon download-file">download</span>
                        </div>
                    </div>

                </div>

                <dialog id="modal">
                    <h2 class="info-title">Generar concentrado de datos</h2>
                    <span class="material-icons-outlined action-icon">pdf</span>
                    <span class="material-icons-outlined action-icon">pdf</span>
                    <button id="cerrar-modal">Cerrar</button>
                </dialog>

            </main>
        </div>




        <script src="../recursos/script.js"></script>
    </body>
</html>