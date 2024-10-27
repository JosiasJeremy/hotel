// submenu.js
function toggleSubmenu(event) {
    event.preventDefault(); // Evita que se recargue la página al hacer clic en el enlace
    const submenu = document.getElementById('submenu-reservas');
    submenu.classList.toggle('hidden'); // Alterna la visibilidad del submenú
}
