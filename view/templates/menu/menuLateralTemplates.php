
            <header class="header">
                <div class="menu-icon">
                    <img src="../../resources/Logo.png" alt="Logo SIA-Tlaxcala">SIA-Web
                </div>
                <div class="header-right">
                    <span id="header-perfil">Perfil</span>
                    <span id="header-cerrar-sesion">Cerrar Sesión</span>
                </div>
            </header>

            <!-- Barra de navegación -->
            <aside id="sidebar">
                <div class="sidebar-title">
                    <div id="sidebran" class="sidebar-brand">
                        <form action="../../../controller/dispacher.php" method="post">
                            <input type="hidden" id="accion" name="accion" value="home">
                            <input type="submit" class="material-icons-outlined" value="menu"> Menu
                        </form>
                    </div>
                </div>
                <!-- Lista de opciones del menú principal -->
                <ul class="sidebar-list">
                    <li id="list-parcelas" class="sidebar-list-item" >
                        <form action="../../../controller/dispacher.php" method="post">
                            <input type="hidden" id="accion" name="accion" value="listarParcelas">
                            <input type="submit" class="material-icons-outlined" value="local_florist"> Parcelas
                        </form>
                    </li>
                    <li id="list-productores" class="sidebar-list-item">
                        <form action="../../../controller/dispacher.php" method="post">
                            <input type="hidden" id="accion" name="accion" value="listarProductores">
                            <input type="submit" class="material-icons-outlined" value="people"> Productores
                        </form>
                    </li>
                    <li id="list-bitacoras" class="sidebar-list-item">
                        <form action="../../../controller/dispacher.php" method="post">
                            <input type="hidden" id="accion" name="accion" value="listarBitacoras">
                            <input type="submit" class="material-icons-outlined" value="app_registration"> Bitacoras
                        </form>
                    </li>
                    <li id="list-archivos" class="sidebar-list-item">
                        <span class="material-icons-outlined">archive</span> Archivos
                    </li>
                </ul>
            </aside>