
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
                            <button type="submit" class="sidebar-list-item-button">
                                <span class="material-icons-outlined icon-bg">menu</span>
                                <span class="text-label">Inicio</span>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Lista de opciones del menú principal -->
                <ul class="sidebar-list">
                    <li id="list-parcelas" class="sidebar-list-item" >
                        <form action="../../../controller/dispacher.php" method="post">
                            <input type="hidden" id="accion" name="accion" value="listarParcelas">
                            <button type="submit" class="sidebar-list-item-button">
                                <span class="material-icons-outlined icon-bg">local_florist</span>
                                <span class="text-label">Parcelas</span>
                            </button>
                        </form>
                    </li>
                    <li id="list-productores" class="sidebar-list-item">
                        <form action="../../../controller/dispacher.php" method="post">
                            <input type="hidden" id="accion" name="accion" value="listarProductores">
                            <button type="submit" class="sidebar-list-item-button">
                                <span class="material-icons-outlined icon-bg">people</span>
                                <span class="text-label">Productores</span>
                            </button>
                        </form>
                    </li>
                    <li id="list-bitacoras" class="sidebar-list-item">
                        <form action="../../../controller/dispacher.php" method="post">
                            <input type="hidden" id="accion" name="accion" value="listarBitacoras">
                            <button type="submit" class="sidebar-list-item-button">
                                <span class="material-icons-outlined icon-bg">app_registration</span>
                                <span class="text-label">Bitacoras</span>
                            </button>
                        </form>
                    </li>
                    <li id="list-archivos" class="sidebar-list-item">
                        <span class="material-icons-outlined">archive</span> Archivos
                    </li>
                </ul>
            </aside>