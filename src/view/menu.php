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

    <!-- Logo del menú con enlace a dashboard.php -->
    <div id="menu-logo" class="hidden mb-4">
        <a href="../view/dashboard.php">
            <img src="../assets/logo.png" alt="Logo" class="w-25 h-25 cursor-pointer">
        </a>
    </div>

    <!-- Contenido del menú con íconos -->
    <ul class="p-6 text-white">

        <!-- Clientes con submenú -->
        <li>
            <a href="#" class="block py-2 hover:bg-gray-200 cursor-pointer" onclick="toggleSubmenu(event, 'submenu-clientes')">
                <i class="fas fa-users mr-2"></i>Clientes</a>
            <ul id="submenu-clientes" class="ml-4 hidden">
                <li><a href="cliente.php" class="block py-2 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-cogs mr-2"></i>Gestionar Cliente</a></li>
                <li><a href="#" class="block py-2 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-history mr-2"></i>Historial de Clientes</a></li>
            </ul>
        </li>


        <!-- Facturación con submenú -->
        <li>
            <a href="#" class="block py-2 hover:bg-gray-200 cursor-pointer" onclick="toggleSubmenu(event, 'submenu-facturacion')">
                <i class="fas fa-file-invoice-dollar mr-2"></i>Facturación</a>
            <ul id="submenu-facturacion" class="ml-4 hidden">
                <li><a href="informeIngresos.php" class="block py-2 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-chart-line mr-2"></i>Informes del Sistema</a></li>
                <li><a href="facturacion.php" class="block py-2 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-file-invoice mr-2"></i>Facturas</a></li>
            </ul>
        </li>

        <!-- Habitaciones con submenú -->
        <li>
            <a href="#" class="block py-2 hover:bg-gray-200 cursor-pointer" onclick="toggleSubmenu(event, 'submenu-habitaciones')">
                <i class="fas fa-bed mr-2"></i>Habitaciones</a>
            <ul id="submenu-habitaciones" class="ml-4 hidden">
                <li><a href="habitacion.php" class="block py-2 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-cogs mr-2"></i>Gestion de Habitaciones</a></li>
            </ul>
        </li>

        <!-- Reservas con submenú (original) -->
        <li>
            <a href="#" class="block py-2 hover:bg-gray-200 cursor-pointer" onclick="toggleSubmenu(event, 'submenu-reservas')">
                <i class="fas fa-calendar-alt mr-2"></i>Reservas</a>
            <ul id="submenu-reservas" class="ml-4 hidden">
                <li><a href="reservas.php" class="block py-2 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-calendar-check mr-2"></i>Reserva de clientes</a></li>
                <li><a href="tablareservas.php" class="block py-2 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-table mr-2"></i>Tabla de Reservas</a></li>
            </ul>
        </li>

        <!-- Empleado con submenú -->
        <li>
            <a href="#" class="block py-2 hover:bg-gray-200 cursor-pointer" onclick="toggleSubmenu(event, 'submenu-empleado')">
                <i class="fas fa-user-tie mr-2"></i>Empleados</a>
            <ul id="submenu-empleado" class="ml-4 hidden">
                <li><a href="empleado.php" class="block py-2 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-cogs mr-2"></i>Gestionar Empleados</a></li>

            </ul>
        </li>

        <!-- Cerrar Sesión (fijado en la parte inferior) -->
        <ul class="absolute bottom-0 left-0 w-full p-6">
            <li><a href="login.php" class="block py-2 hover:bg-gray-200 cursor-pointer text-white">
            <i class="fas fa-sign-out-alt mr-2"></i>Cerrar Sesión</a></li>
        </ul>
    </ul>
</div>

<!-- Scripts -->
<script src="../../js/menu.js"></script>
<script src="../../js/submenu.js"></script>

</div>
