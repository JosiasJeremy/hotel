<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Estilo para la imagen de fondo */
        .bg-login {
            background-image: url('../assets/login.png');
            background-size: cover; 
            background-position: center;
        }
    </style>
</head>
<body class="bg-login h-screen flex items-center justify-end p-20">

    <div class="login-container max-w-md bg-transparent p-6">
        <div class="container flex justify-between items-center p-4">
            <a href="#">
                <img src="../assets/logo.png" alt="Logo" class="h-13">
            </a>
        </div>
        <form action="procesar.php" method="post">
            <input type="text" name="usuario" placeholder="Usuario" required
                   class="w-full p-2 mb-4 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-400">
            <input type="password" name="password" placeholder="Contraseña" required
                   class="w-full p-2 mb-4 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-400">
            <input type="submit" value="Iniciar Sesión"
                   class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 cursor-pointer">
        </form>
    </div>

</body>
</html>
