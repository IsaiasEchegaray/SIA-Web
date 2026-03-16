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

// Cerrar si el usuario hace clic fuera del cuadro blanco
window.addEventListener('click', (e) => {
  if (e.target === modal) {
    modal.style.display = 'none';
  }
});


function redirectTo(page) {
    window.location.href = page;
}