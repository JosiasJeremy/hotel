<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Clientes</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4">
    <div class="bg-white rounded-lg shadow-lg p-4">
        <h2 class="text-lg font-bold mb-4">RESERVA DE CLIENTES</h2>

        <!-- Filtro de búsqueda unificado por nombre o DNI con tamaño reducido -->
        <div class="mb-4">
            <input type="text" id="busquedaFiltro" placeholder="Buscar por nombre o DNI..." class="w-1/4 p-2 border border-gray-300 rounded-lg">
        </div>

        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b-2 border-gray-200">
                    <th class="p-4">NOMBRE</th>
                    <th class="p-4">DNI</th>
                    <th class="p-4">FECHA DE LLEGADA</th>
                    <th class="p-4">FECHA DE SALIDA</th>
                    <th class="p-4">TIPO DE HABITACIÓN</th>
                    <th class="p-4">ID_HABITACION</th>
                    <th class="p-4">ESTADO</th>
                </tr>
            </thead>
            <tbody id="tablaReservas">
                <?php
                $reservas = [
                    ["JUAN GONZALES", "59274681", "10/09/24", "10/10/24", "PREMIUM", "101", "Pendiente"],
                    ["PEDRO LUCIO", "592766681", "11/09/24", "12/09/24", "PREMIUM", "102", "Confirmado"],
                    ["PABLO PEÑA", "9084681", "13/09/24", "15/09/24", "ECONOMICO", "103", "Finalizado"],
                    ["MARIA PEREZ", "57684987", "14/09/24", "18/09/24", "PROMEDIO", "104", "Confirmado"],
                    ["ANA DIAZ", "90989087", "19/09/24", "21/09/24", "PROMEDIO", "105", "Pendiente"],
                    ["CARLOS RAMOS", "34567134", "22/09/24", "26/09/24", "ECONOMICO", "106", "Finalizado"],
                    ["LUIS REYNA", "90909854", "27/09/24", "28/09/24", "PREMIUM", "107", "Confirmado"],
                    ["RAQUEL MORENO", "45347689", "29/09/24", "02/10/24", "PROMEDIO", "108", "Pendiente"],
                    ["ANDREA LOPEZ", "76876546", "03/10/24", "06/10/24", "PROMEDIO", "109", "Finalizado"],
                    ["DIEGO VARGAS", "56786545", "07/10/24", "09/10/24", "PREMIUM", "110", "Confirmado"]
                ];

                foreach ($reservas as $reserva) {
                    echo "<tr class='border-b border-gray-200'>
                            <td class='p-4'>{$reserva[0]}</td>
                            <td class='p-4'>{$reserva[1]}</td>
                            <td class='p-4'>{$reserva[2]}</td>
                            <td class='p-4'>{$reserva[3]}</td>
                            <td class='p-4'>{$reserva[4]}</td>
                            <td class='p-4'>{$reserva[5]}</td>
                            <td class='p-4'>
                                <span class='";
                    
                    if ($reserva[6] == 'Pendiente') echo "bg-yellow-500";
                    elseif ($reserva[6] == 'Confirmado') echo "bg-green-500";
                    else echo "bg-red-500";

                    echo " text-white px-2 py-1 rounded'>{$reserva[6]}</span>
                            </td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- JavaScript externo -->
    <script src="../../js/reservas.js"></script>
</body>
</html>
