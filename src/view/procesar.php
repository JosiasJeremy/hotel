<?php
// Configuración de conexión
$serverName = "localhost\SQLEXPRESS"; // o "localhost\SQLEXPRESS" si es necesario
$dsn = "sqlsrv:Server=$serverName;Database=BD_Hotel";
$username = "admin";
$password = "admin123";

try {
    // Conectar a la base de datos
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Procesar los datos del formulario
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Consulta para verificar el usuario
    $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['usuario' => $usuario, 'password' => $password]);

    // Comprobar si hay coincidencias
    if ($stmt->fetch()) {
        // Usuario y contraseña correctos
        echo "Inicio de sesión exitoso";
    } else {
        // Usuario o contraseña incorrectos
        echo "Usuario o contraseña incorrectos";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Cerrar la conexión
$conn = null;
?>
