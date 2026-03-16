<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="view/styles/login.css">
</head>
<body>

    <div >
        <main>
            <div class="main-container">
                <!-- Parte Izquierda -->
                <div class="welcome-section">
                    <h1 class="welcome-title">Bienvenido a SIA-Web</h1>
                    
                    <div style="margin-bottom: 20px;">
                        <img src="view/resources/Logo.png" alt="Logo SIA-Tlaxcala" class="logo">
                    </div>

                    <div class="slogan">Tlaxcala</div>
                    <div class="history-text">UNA NUEVA HISTORIA</div>
                    <div class="years">2021 - 2027</div>
                </div>

                <!-- Parte Derecha -->
                <div class="login-card">
                    <form action="controller/dispacher.php" method="POST" class="login-form">
                        <!-- Campo Correo -->
                        <div class="input-wrapper">
                            <span class="material-icons-outlined icon-box">email</span>
                            <div class="field-container">
                                <input type="email" id="email" name="email" placeholder="Correo electrónico" required>
                            </div>
                        </div>
                        <!-- Campo Contraseña -->
                        <div class="input-wrapper">
                            <span class="material-icons-outlined icon-box">lock</span>
                            <div class="field-container">
                                <input type="password" placeholder="Contraseña" id="pass" name="pass" required>
                                <span class="material-icons-outlined toggle-password">visibility</span>
                            </div>
                        </div>
                        <input type="hidden" id="accion" name="accion" value="Login">
                        <input type="submit" class="btn-entrar" value="Ingresar">
                    </form>
                </div>
                    
                <footer class="footer">
                    <p>&copy; 2021 SIA Web. Todos los derechos reservados.</p>
                </footer>
            </div>

        </main>       
    </div>
</body>
</html>