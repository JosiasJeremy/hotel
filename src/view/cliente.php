<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium</title>
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

        <!-- Separa del Encabezado -->
        <div class="  my-6"></div>

        <!-- Incluir Tabla -->
        <?php include '../components/gestionarCliente.php'; ?>
        
    </div>

    <!-- Incluir Modal -->
    <?php include '../components/clienteModal.php'; ?>

    <script src="../../js/modal.js"></script>

</body>
</html>
