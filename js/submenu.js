function toggleSubmenu(event, submenuId) {
    event.preventDefault(); // Evita el salto de página
    const submenu = document.getElementById(submenuId);
    submenu.classList.toggle('hidden'); // Alterna entre mostrar y ocultar
}
