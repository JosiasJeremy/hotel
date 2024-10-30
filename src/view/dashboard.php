<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Tailwind CSS y Font Awesome -->
    <link rel="icon" href="assets/img/star.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100">

    <!-- Incluye el menú -->
    <?php include 'menu.php'; ?>  

    <div class="container mx-auto p-6">
        <!-- Incluye el encabezado -->
        <?php include '../components/header.php'; ?>
    
        <!-- Tarjetas de información -->
        <div class="grid grid-cols-3 gap-6 my-6">
            <!-- Tarjeta de Habitaciones Disponibles -->
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center transition-transform transform hover:scale-105">
                <h5 class="text-xl font-bold mb-4 text-gray-800">Habitaciones Disponibles</h5>
                <img src="../assets/habitacion.png" alt="Habitación" class="w-20 h-20 mb-4 rounded-full shadow-md">
                <p class="text-3xl font-semibold text-gray-600">0</p>
            </div>

            <!-- Tarjeta de Clientes -->
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center transition-transform transform hover:scale-105">
                <h5 class="text-xl font-bold mb-4 text-gray-800">Clientes</h5>
                <img src="../assets/clientes.png" alt="Clientes" class="w-20 h-20 mb-4 rounded-full shadow-md">
                <p class="text-3xl font-semibold text-gray-600">2</p>
            </div>

            <!-- Tarjeta de Reservas -->
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center transition-transform transform hover:scale-105">
                <h5 class="text-xl font-bold mb-4 text-gray-800">Reservas</h5>
                <img src="../assets/reserva.png" alt="Reservas" class="w-20 h-20 mb-4 rounded-full shadow-md">
                <p class="text-3xl font-semibold text-gray-600">3</p>
            </div>
        </div>
        
        <!-- Sección de gráficos -->
        <div class="grid grid-cols-2 gap-6 my-6">
            <!-- Gráfico de barras de ocupación -->
            <div class="bg-white shadow-lg rounded-lg p-4" style="height: 400px; display: flex; align-items: center; justify-content: center;">
                <canvas id="occupancyChart" class="w-full h-full"></canvas>
            </div>

            <!-- Gráfico de pastel de estado de habitaciones -->
            <div class="bg-white shadow-lg rounded-lg p-4" style="height: 400px; display: flex; align-items: center; justify-content: center;">
                <canvas id="pieChart" class="w-full h-full"></canvas>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="../../js/dashgraf.js"></script>
</body>
</html>