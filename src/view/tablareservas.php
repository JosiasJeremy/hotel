<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-gray-200">

    <!-- Include the sidebar menu -->
    <?php include 'menu.php'; ?>

    <div class="container mx-auto p-6">

<!-- Incluir Encabezado -->
<?php include '../components/header.php'; ?>

<!-- Cards de la Categoria -->
<div class="grid grid-cols-3 gap-6 my-6 text-center">
    <!-- Card 1 -->
    <div class="bg-yellow-600 p-4 rounded-lg shadow-lg border border-gray-300 h-64 flex flex-col justify-between">
        <h2 class="text-xl font-bold mb-4">Premium</h2>
        <!-- Imagen centrada -->
        <img src="../assets/premium.jpg" alt="Premium" class="w-25 h-24 mx-auto">
        <a href="#" class="block bg-green-500 text-white py-2 px-4 text-center rounded-lg hover:bg-green-600 mt-4">DATOS</a>
    </div>
    <!-- Card 2 -->
    <div class="bg-cyan-400 p-4 rounded-lg shadow-lg border border-gray-300 h-64 flex flex-col justify-between">
        <h2 class="text-xl font-bold mb-4">Estándar</h2>
        <!-- Imagen centrada -->
        <img src="../assets/estandar.jpg" alt="Estándar" class="w-25 h-24 mx-auto">
        <a href="#" class="block bg-black text-white py-2 px-4 text-center rounded-lg hover:bg-gray-800 mt-4">DATOS</a>
    </div>
    <!-- Card 3 -->
    <div class="bg-yellow-200 p-4 rounded-lg shadow-lg border border-gray-300 h-64 flex flex-col justify-between">
        <h2 class="text-xl font-bold mb-4">Premium</h2>
        <!-- Imagen centrada -->
        <img src="../assets/premium.jpg" alt="Premium" class="w-25 h-24 mx-auto">
        <a href="#" class="block bg-red-600 text-white py-2 px-4 text-center rounded-lg hover:bg-red-700 mt-4">DATOS</a>
    </div>
    <!-- Card 4 -->
    <div class="bg-teal-300 p-4 rounded-lg shadow-lg border border-gray-300 h-64 flex flex-col justify-between">
        <h2 class="text-xl font-bold mb-4">Económica</h2>
        <img src="../assets/economico.jpg" alt="Económica" class="w-25 h-24 mx-auto">
        <a href="#" class="block bg-white text-black py-2 px-4 text-center rounded-lg hover:bg-gray-100 mt-4">DATOS</a>
    </div>
    <!-- Card 5 -->
    <div class="bg-yellow-200 p-4 rounded-lg shadow-lg border border-gray-300 h-64 flex flex-col justify-between">
        <h2 class="text-xl font-bold mb-4">Premium</h2>
        <!-- Imagen centrada -->
        <img src="../assets/premium.jpg" alt="Premium" class="w-25 h-24 mx-auto">
        <a href="#" class="block bg-red-600 text-white py-2 px-4 text-center rounded-lg hover:bg-red-700 mt-4">DATOS</a>
    </div>
    <!-- Card 6 -->
    <div class="bg-teal-300 p-4 rounded-lg shadow-lg border border-gray-300 h-64 flex flex-col justify-between">
        <h2 class="text-xl font-bold mb-4">Económica</h2>
        <img src="../assets/economico.jpg" alt="Económica" class="w-25 h-24 mx-auto">
        <a href="#" class="block bg-white text-black py-2 px-4 text-center rounded-lg hover:bg-gray-100 mt-4">DATOS</a>
    </div>
</div>
</div>

    <!-- Incluir Modal -->
    <?php include '../components/modal.php'; ?>

    <script src="../../js/modal.js"></script>

</body>
</html>
