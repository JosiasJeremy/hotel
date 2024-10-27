<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-teal-500">

    <!-- Include the sidebar menu -->
    <?php include 'menu.php'; ?>

    <div class="container mx-auto p-6">
        
        <!-- Incluir Encabezado -->
        <?php include '../components/header.php'; ?>

        <!-- Cars de la Categoria -->
        <div class="grid grid-cols-3 gap-6 my-6 text-center">
            <!-- Card 1 -->
            <div class="bg-yellow-200 p-4 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold mb-4">Premium</h2>
                <a href="registro1.php" class="block bg-red-600 text-white py-2 px-4 text-center rounded-lg hover:bg-red-700">REGISTRO 1</a>
            </div>
            <!-- Card 2 -->
            <div class="bg-cyan-400 p-4 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold mb-4">Estándar</h2>
                <a href="registro2.php" class="block bg-black text-white py-2 px-4 text-center rounded-lg hover:bg-gray-800">REGISTRO 2</a>
            </div>
            <!-- Card 3 -->
            <div class="bg-teal-300 p-4 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold mb-4">Económica</h2>
                <a href="registro3.php" class="block bg-white text-black py-2 px-4 text-center rounded-lg hover:bg-gray-100">REGISTRO 3</a>
            </div>
        </div>

        <!-- Incluir Tabla -->
        <?php include '../components/categoria.php'; ?>
    </div>

    <!-- Incluir Modal -->
    <?php include '../components/modal.php'; ?>

    <script src="../../js/modal.js"></script>

</body>
</html>
