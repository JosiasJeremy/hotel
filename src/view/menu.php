<!-- Botón para abrir el menú -->
<button onclick="openMenu()" class="menu-toggle-btn p-2 rounded-full">
    <img src="../assets/menu.png" alt="Menu" class="w-10 h-10">
</button>


<!-- Menú lateral (sidebar) -->
<div id="sidebar" class="hidden fixed left-0 top-0 w-64 h-full bg-green-400 p-6 z-50">
    <!-- Botón de cerrar menú -->
    <button id="close-button" onclick="closeMenu()" class="hidden bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center">
        &times;
    </button>

    <!-- Logo del menú (solo se muestra cuando el menú está abierto) -->
    <div id="menu-logo" class="hidden mb-4">
        <img src="../assets/logo.png" alt="Logo" class="w-25 h-25">
    </div>

    <!-- Contenido del menú con íconos -->
    <ul class="p-6 text-white">
        <li><a href="cliente.php" class="block py-2 hover:bg-gray-200 cursor-pointer">
            <i class="fas fa-users mr-2"></i>Clientes</a></li>

        <li><a href="#" class="block py-2 hover:bg-gray-200 cursor-pointer">
            <i class="fas fa-file-invoice-dollar mr-2"></i>Facturación</a></li>

        <li><a href="habitacion.php" class="block py-2 hover:bg-gray-200 cursor-pointer">
            <i class="fas fa-bed mr-2"></i>Habitaciones</a></li>

        <li><a href="#" class="block py-2 hover:bg-gray-200 cursor-pointer">
            <i class="fas fa-chart-line mr-2"></i>Informe</a></li>

        <!-- Reservas con submenú -->
        <li>
            <a href="#" class="block py-2 hover:bg-gray-200 cursor-pointer" onclick="toggleSubmenu(event)">
                <i class="fas fa-calendar-alt mr-2"></i>Reservas</a>

            <!-- Submenú oculto por defecto -->
            <ul id="submenu-reservas" class="ml-4 hidden">
                <li><a href="reservas.php" class="block py-2 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-plus-circle mr-2"></i>Crear Reserva</a></li>
                <li><a href="tablareservas.php" class="block py-2 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-table mr-2"></i>Tabla de Reservas</a></li>
                <li><a href="metododepago.php" class="block py-2 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-credit-card mr-2"></i>Método de Pago</a></li>
            </ul>
        </li>

        <!-- Cerrar Sesión (fijado en la parte inferior) -->
        <ul class="absolute bottom-0 left-0 w-full p-6">
            <li><a href="login.php" class="block py-2 hover:bg-gray-200 cursor-pointer text-white">
            <i class="fas fa-sign-out-alt mr-2"></i>Cerrar Sesión</a></li>

    </ul>
</div>

    <!-- Script del menú -->
    <script src="../../js/menu.js"></script>
    <script src="../../js/submenu.js"></script>

</div>
