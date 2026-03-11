<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu principal</title>
        <!-- Fuente de Google Fonts/Icons y estilos -->
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link rel="stylesheet" href="../recursos/styles.css">
        </head>
    <body>
        <div class="grid-container">
            <?php include 'menuLateral.php'; ?>
            
            <!-- Contenido principal de perfil -->
            <main class="main-container">
                <div class="main-title">
                    <p class="font-weight-bold"> 
                        <span class="material-icons-outlined">person</span> Información Personal</p>
                </div>

                <div>
                    <form action="" method="post">
                        <div class="card">
                            <div class="estilo-caja">
                                <label for="nombretecnico">Nombre:</label>
                                <input type="text" id="nombretecnico" name="nombretecnico" placeholder="Nombre" required>
                            </div>
                            <div class="estilo-caja">
                                <label for="apellidopaterno">Apellido Paterno:</label>
                                <input type="text" id="apellidopaterno" name="apellidopaterno" placeholder="Apellido Paterno" required>
                            </div>
                            <div class="estilo-caja">
                                <label for="apellidomaterno">Apellido Materno:</label>
                                <input type="text" id="apellidomaterno" name="apellidomaterno" placeholder="Apellido Materno" required>
                            </div>
                            <div class="estilo-combobox">
                                <label for="genero">Género:</label>
                                <select id="combobox" name="genero" required>
                                    <option> Seleccionar </option>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                </select>
                            </div>
                            <div class="estilo-boton-seleccion">
                                <label for="fechanac">Fecha de Nacimiento:</label>
                                <input id="calendario" type="date" name="fechanac" required>
                            </div>
                            <div class="estilo-caja">
                                <label for="correo">Correo Electrónico:</label>
                                <input type="email" id="correo" name="correo" placeholder="Correo Electrónico" required>
                            </div>
                            <div class="estilo-caja">
                                <label for="contrasenia">Contraseña:</label>
                                <input type="password" id="contrasenia" name="contrasenia" placeholder="*******" required>
                                <span class="material-icons-outlined" onclick="togglePasswordVisibility()">visibility</span>
                            </div> 
                            <div class="estilo-caja">
                                <label for="confcontrasenia">Confirmar Contraseña:</label>
                                <input type="password" id="confcontrasenia" name="confcontrasenia" placeholder="*******" required>
                                <span class="material-icons-outlined" onclick="togglePasswordConfVisibility()">visibility</span>
                            </div>
                        </div>
                        <div class="estilo-boton-guardar">
                            <button  id="guardar" type="submit" value="#">Guardar cambios</button>
                        </div> 
                    </form>         
                </div>
            </main>
        </div>

        <!-- Eventos de JavaScript -->
         <script>
            document.getElementById("sidebran").addEventListener("click", function() {
                redirectTo('Home.php');
            });

            document.getElementById("list-parcelas").addEventListener("click", function() {
                redirectTo('ListaParcelas.php');
            });

            document.getElementById("list-productores").addEventListener("click", function() {
                redirectTo('ListaProductores.php');
            });

            document.getElementById("list-bitacoras").addEventListener("click", function() {
                redirectTo('ListaBitacoras.php');
            });

            document.getElementById("list-archivos").addEventListener("click", function() {
                redirectTo('ListaArchivos.php');
            });

            document.getElementById("header-perfil").addEventListener("click", function() {
                redirectTo('Perfil.php');
            });

            document.getElementById("header-cerrar-sesion").addEventListener("click", function() {
                redirectTo('../index.php');
            });

            function redirectTo(page) {
                window.location.href = page;
            }

            document.getElementById('calendario').addEventListener('click', function() {
                this.showPicker();
            });

            function togglePasswordVisibility() {
                var passwordInput = document.getElementById("contrasenia");
                var icon = document.querySelector(".toggle-password i");
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    icon.classList.remove("fa-eye");
                    icon.classList.add("fa-eye-slash");
                } else {
                    passwordInput.type = "password";
                    icon.classList.remove("fa-eye-slash");
                    icon.classList.add("fa-eye");
                }
            }

            function togglePasswordConfVisibility() {
                var passwordInput = document.getElementById("confcontrasenia");
                var icon = document.querySelector(".toggle-password i");
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    icon.classList.remove("fa-eye");
                    icon.classList.add("fa-eye-slash");
                } else {
                    passwordInput.type = "password";
                    icon.classList.remove("fa-eye-slash");
                    icon.classList.add("fa-eye");
                }
            }
         </script>
    </body>
</html>