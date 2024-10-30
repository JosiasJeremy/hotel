<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Facturación</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 5px;
            color: #333;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .facturacion-header {
            font-size: 32px;
            color: #333;
            margin: 20px 0 10px;
            font-weight: bold;
            text-align: left;
            text-transform: uppercase;
        }
        .new-factura-btn {
            background-color: #B0FFD9; /* Verde pastel */
            color: #333;
            border: 2px solid #4CAF50;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
            margin: 10px 0;
            display: inline-block;
        }
        .new-factura-btn:hover {
            background-color: #A0ECCF; /* Más oscuro en hover */
            color: #fff;
        }
        #buscar {
            width: 50%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: inset 1px 1px 5px rgba(0,0,0,0.1);
            font-size: 14px;
            transition: all 0.3s ease;
            margin: 20px auto;
            display: block;
        }
        #buscar:focus {
            outline: none;
            border-color: #77aaff;
            box-shadow: 0 0 8px rgba(119, 170, 255, 0.5);
        }
        .table-container {
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th {
            background-color: #B0FFD9; /* Fondo verde pastel para encabezado */
            color: #333;
            padding: 12px;
            text-align: left;
            font-size: 14px;
        }
        td {
            padding: 12px;
            text-align: left;
            font-size: 14px;
            background-color: #fff; /* Fondo blanco para los datos */
        }
        .actions {
            display: flex;
            justify-content: space-around;
        }
        .actions button {
            color: #fff;
            border: none;
            padding: 5px 12px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 12px;
            transition: background-color 0.3s ease;
        }
        .actions .btn-eliminar {
            background-color: #ff4c4c; /* Rojo para eliminar */
        }
        .actions .btn-eliminar:hover {
            background-color: #e04040;
        }
        .actions .btn-imprimir {
            background-color: #6c757d; /* Plomo para imprimir */
        }
        .actions .btn-imprimir:hover {
            background-color: #5a6268;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background: #fff; /* Fondo blanco para el modal */
            padding: 30px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            position: relative;
            animation: fadeIn 0.4s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
        .close-btn {
            background-color: #ff5a5f;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 10px;
            font-size: 12px;
            border-radius: 50%;
        }
        .close-btn:hover {
            background-color: #ff4045;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-group button {
            width: 100%;
            font-size: 16px;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
            font-weight: bold;
            transition: background-color 0.3s ease;
            border: none;
            padding: 10px;
        }
        .form-group button:hover {
            background-color: #43A047;
        }
    </style>
</head>
<body>

    <!-- Incluir la barra lateral desde menu.php -->
    <?php include 'menu.php'; ?>

    <!-- Contenido Principal de Facturación -->
    <div class="flex-1 p-6">
        <div class="container mx-auto">
            <?php include '../components/header.php'; ?>
            <!-- Encabezado de Facturación -->
            <div class="facturacion-header">Facturación</div>
            <button class="new-factura-btn" onclick="abrirModal()">Nueva Facturación</button>

            <!-- Modal para Crear Factura -->
            <div id="facturaModal" class="modal">
                <div class="modal-content">
                    <button class="close-btn" onclick="cerrarModal()">×</button>
                    <h2 style="text-align: left; color: #333; margin-bottom: 20px;">Crear Factura</h2>
                    <form id="factura-form">
                        <div class="form-group">
                            <label for="numero_factura">N* Factura</label>
                            <input type="text" id="numero_factura" name="numero_factura" required>
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="date" id="fecha" name="fecha" required>
                        </div>
                        <div class="form-group">
                            <label for="cliente">Cliente</label>
                            <input type="text" id="cliente" name="cliente" required>
                        </div>
                        <div class="form-group">
                            <label for="id_habitacion">ID Habitación</label>
                            <input type="text" id="id_habitacion" name="id_habitacion" required>
                        </div>
                        <div class="form-group">
                            <label for="monto_total">Monto Total</label>
                            <input type="number" id="monto_total" name="monto_total" required>
                        </div>
                        <div class="form-group">
                            <button type="button" onclick="crearFactura(); cerrarModal();">Crear Factura</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Tabla de Facturación -->
            <div class="table-container">
                <input type="text" id="buscar" placeholder="Buscar por nombre...">
                <table>
                    <thead>
                        <tr>
                            <th>N* Factura</th>
                            <th>Fecha</th>
                            <th>Cliente</th>
                            <th>ID Habitación</th>
                            <th>Monto Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="facturas">
                        <!-- Aquí se cargarán las facturas -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Incluir el JS del sidebar y de facturación -->
    <script src="../../js/facturacion.js"></script>

</body>
</html>