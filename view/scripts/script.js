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

// ============================================
// FUNCIONALIDAD de buscador
// ============================================

document.addEventListener('DOMContentLoaded', function() {
    const barraBusqueda = document.querySelector('.search-input');
    const buttonBusqueda = document.querySelector('.btn-buscar');

    if (!barraBusqueda || !buttonBusqueda) {
        return; // para cuando no haya buscadores
    }

    // Checa que tipo de lista tiene
    let container = document.getElementById('parcelas-container') ||
                    document.getElementById('productores-container') ||
                    document.getElementById('bitacoras-container');

    if (!container) {
        return;
    }

    // Función para realizar la búsqueda
    function performSearch() {
        const searchTerm = barraBusqueda.value.toLowerCase().trim();
        const items = container.querySelectorAll('.parcela-card');

        items.forEach(item => {
            if (searchTerm === '') {
                item.style.display = 'flex';
                return;
            }

            // Obtiene todos los elementos data- del item
            const dataAttributes = item.dataset;
            let matches = false;

            // Buscar en todos los atributos data-*
            for (let key in dataAttributes) {
                const value = dataAttributes[key].toLowerCase();
                if (value.includes(searchTerm)) {
                    matches = true;
                    break;
                }
            }

            // También busca en el contenido de texto visible
            if (!matches) {
                const textContent = item.textContent.toLowerCase();
                matches = textContent.includes(searchTerm);
            }

            item.style.display = matches ? 'flex' : 'none';
        });
    }

    // Búsqueda en tiempo real mientras se escribe
    barraBusqueda.addEventListener('input', performSearch);

    // Búsqueda al hacer clic en el botón
    buttonBusqueda.addEventListener('click', function(e) {
        e.preventDefault();
        performSearch();
    });

});