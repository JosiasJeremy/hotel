<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" href="assets/img/star.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/dashboard.css"> <!-- Enlace al CSS externo -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-teal-500">

        <!--Incluye el archivo de inicio -->
        <?php include 'menu.php'; ?>  

    <div class="container mx-auto p-6">

        <!-- Incluir Encabezado -->
        <?php include '../components/header.php'; ?>
    
        <div class="grid grid-cols-4 gap-6 my-6 text-center">
            <!-- Tarjetas (cards) -->
            <div class="bg-cyan-400 p-4 rounded-lg h-60 flex flex-col justify-between">  <!-- Padding en los lados -->
                <div class="card card-1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Habitaciónes Disponibles</h5>
                        <img src="../assets/habitacion.png" alt="Estándar" class="w-25 h-24 mx-auto">
                        <p class="card-text">0</p>
                    </div>
                </div>
            </div>
            <div class="bg-cyan-400 p-4 rounded-lg h-60 flex flex-col justify-between">  <!-- Padding en los lados -->
                <div class="card card-3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Clientes</h5>
                        <img src="../assets/clientes.png" alt="Estándar" class="w-25 h-24 mx-auto">
                        <p class="card-text">2</p>
                    </div>
                </div>
            </div>
            <div class="bg-cyan-400 p-4 rounded-lg h-60 flex flex-col justify-between">  <!-- Padding en los lados -->
                <div class="card card-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Reservas</h5>
                        <img src="../assets/reserva.png" alt="Estándar" class="w-25 h-24 mx-auto">
                        <p class="card-text">3</p>
                    </div>
                </div>
            </div>
            <div class="bg-cyan-400 p-4 rounded-lg h-60 flex flex-col justify-between">  <!-- Padding en los lados -->
                <div class="card card-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cochera</h5>
                        <img src="../assets/cochera.png" alt="Estándar" class="w-25 h-24 mx-auto">
                        <p class="card-text">3</p>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Sección del gráfico -->
        <div class="grid grid-cols-2 gap-6 my-6 text-center"> <!-- Cambia justify-content-center por justify-content-start -->
            <div class="col-md-6"> <!-- Cambia col-md-8 por col-md-6 para que ocupe menos espacio -->
                <canvas id="occupancyChart" width="400" height="400"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="pieChart" width="300" height="300"></canvas>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script para el gráfico -->
    <script src="../../js/dashgraf.js"></script>  <!-- Enlace al archivo del gráfico -->
</body>
</html>
