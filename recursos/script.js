var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function openSidebar() {
    if (!sidebarOpen) {
        sidebar.classList.add("sidebar-responsive");
        sidebarOpen = true;
    }
}

function closeSidebar() {
    if (sidebarOpen) {
        sidebar.classList.remove("sidebar-responsive");
        sidebarOpen = false;
    }
}



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

document.querySelectorAll(".consultar-parcelas").forEach(icon => {
    icon.addEventListener("click", function(){
        redirectTo('DParcelas.php');
    });
});

document.querySelectorAll(".consultar-productores").forEach(icon => {
    icon.addEventListener("click", function(){
        redirectTo('DProductores.php');
    });
});

document.querySelectorAll(".consultar-bitacoras").forEach(icon => {
    icon.addEventListener("click", function(){
        redirectTo('HomeBita.php');
    });
});

// Seccion de los botones dentro de los contenedores de listado

document.querySelector("#download-file").addEventListener("click", ()=>{
    modal.show();
})

document.querySelector("#cerrar-modal").addEventListener("click", ()=>{
    modal.close();
})

// Cerrar si el usuario hace clic fuera del cuadro blanco
window.addEventListener('click', (e) => {
  if (e.target === modal) {
    modal.style.display = 'none';
  }
});


function redirectTo(page) {
    window.location.href = page;
}