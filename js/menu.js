// Función para abrir el menú
function openMenu() {
    const sidebar = document.getElementById('sidebar');
    const closeButton = document.getElementById('close-button');
    const logo = document.getElementById('menu-logo');

    sidebar.classList.remove('hidden'); // Mostrar el menú
    closeButton.classList.remove('hidden'); // Mostrar botón de cerrar
    logo.classList.remove('hidden'); // Mostrar el logo solo cuando el menú esté abierto
}

// Función para cerrar el menú
function closeMenu() {
    const sidebar = document.getElementById('sidebar');
    const closeButton = document.getElementById('close-button');
    const logo = document.getElementById('menu-logo');

    sidebar.classList.add('hidden'); // Ocultar el menú
    closeButton.classList.add('hidden'); // Ocultar botón de cerrar
    logo.classList.add('hidden'); // Ocultar el logo cuando el menú esté cerrado
}
