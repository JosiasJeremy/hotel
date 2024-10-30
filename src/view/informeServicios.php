<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de Servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/informes.css">
    <script src="../../js/informe.js" defer></script>
</head>
<body>

    <!-- Include the sidebar menu -->
    <?php include 'menu.php'; ?>

    <div class="container">
        <h1>INFORMES DE SERVICIOS</h1>
        <div class="nav-buttons">
            <button onclick="window.location.href='informeIngresos.php'">Informe de Ingresos</button>
            <button onclick="window.location.href='informeServicios.php'" class="active">Informe de Servicios</button>
        </div>

        <div class="resumen">
            <h2>Resumen General</h2>
            <table>
                <tr>
                    <td>Ingresos Totales:</td>
                    <td class="monto">$3,000</td>
                </tr>
                <tr>
                    <td>Egresos Totales:</td>
                    <td class="monto">$1,000</td>
                </tr>
                <tr>
                    <td>Ganancia Total:</td>
                    <td class="monto">$2,000</td>
                </tr>
            </table>
        </div>

        <div class="table-container">
            <table id="tablaServicios">
                <thead>
                    <tr>
                        <th>Servicios</th>
                        <th>Monto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><button class="btn-desglose" onclick="mostrarDesglose('Agua')">Agua</button></td>
                        <td>$400</td>
                    </tr>
                    <tr>
                        <td><button class="btn-desglose" onclick="mostrarDesglose('Internet')">Internet</button></td>
                        <td>$300</td>
                    </tr>
                    <tr>
                        <td><button class="btn-desglose" onclick="mostrarDesglose('Luz')">Luz</button></td>
                        <td>$300</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <button onclick="exportarExcel('tablaServicios')" class="btn-excel">EXPORTAR EXCEL</button>
    </div>

    <!-- Modal -->
    <div id="modalDesglose" class="modal">
        <div class="modal-content">
            <span class="close" onclick="cerrarModal()">&times;</span>
            <div id="contenidoDesglose"></div>
        </div>
    </div>
</body>
</html>