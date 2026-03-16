
            <header class="header">
                <div class="menu-icon">
                    <img src="resources/Logo.png" alt="Logo SIA-Tlaxcala">SIA-Web
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
                        <form action="../controller/dispacher.php" method="post">
                            <input type="hidden" id="accion" name="accion" value="home">
                            <input type="submit" class="material-icons-outlined" value="menu"> Menu
                        </form>
                    </div>
                </div>
                <!-- Lista de opciones del menú principal -->
                <ul class="sidebar-list">
                    <li id="show-siembras" class="sidebar-list-item" >
                        <span class="material-icons-outlined">local_florist</span> Siembras
                    </li>
                    <li id="show-trabajos" class="sidebar-list-item">
                        <span class="material-icons-outlined">people</span> Trabajos
                    </li>
                    <li id="show-Riego" class="sidebar-list-item">
                        <span class="material-icons-outlined">water</span> Riego
                    </li>
                    <li id="show-Temporales" class="sidebar-list-item">
                        <span class="material-icons-outlined">calendar_month</span> Temporales
                    </li>
                    <li id="show-Aplicaciones" class="sidebar-list-item">
                        <span class="material-icons-outlined">agriculture</span> Aplicaciones
                    </li>
                    <li id="show-Siniestros" class="sidebar-list-item">
                        <span class="material-icons-outlined">warning</span> Siniestros
                    </li>
                    <li id="show-Cosechas" class="sidebar-list-item">
                        <span class="material-icons-outlined">crop</span> Cosechas
                    </li>
                    <li id="show-Analisis" class="sidebar-list-item">
                        <span class="material-icons-outlined">analytics</span> Análisis
                    </li>
                    <li id="show-ApoyosSubsidios" class="sidebar-list-item">
                        <span class="material-icons-outlined">support</span> Apoyos y Subsidios
                    </li>
                    <li id="show-Comercializacion" class="sidebar-list-item">
                        <span class="material-icons-outlined">store</span> Comercialización
                    </li>
                    <li id="show-Financiamiento" class="sidebar-list-item">
                        <span class="material-icons-outlined">attach_money</span> Financiamiento
                    </li>
                    <li id="Archivar" class="sidebar-list-item">
                        <span class="material-icons-outlined">archive</span> Archivar
                    </li>
                    <li id="show-Evidencias" class="sidebar-list-item">
                        <span class="material-icons-outlined">photo_library</span> Evidencias
                    </li>
                </ul>
            </aside>