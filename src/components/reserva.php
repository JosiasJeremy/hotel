<div class="bg-white rounded-lg shadow-lg p-4">
    <h2 class="text-lg font-bold mb-4">RESERVAS</h2>
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="border-b-2 border-gray-200">
                <th class="p-4">NOMBRES</th>
                <th class="p-4">DNI</th>
                <th class="p-4">FECHA DE LLEGADA</th>
                <th class="p-4">FECHA DE SALIDA</th>
                <th class="p-4">TIPO DE HABITACION</th>
                <th class="p-4">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí puedes hacer un loop PHP para listar las habitaciones -->
            <tr class="border-b border-gray-200">
                <td class="p-4">JUAN GONZALES</td>
                <td class="p-4">78654521</td>
                <td class="p-4">10/09/24</td>
                <td class="p-4">10/10/24</td>
                <td class="p-4">PREMIUM</td>
                <td class="p-4 flex space-x-2">
                    <button class="text-green-500 hover:text-green-700" onclick="openModal('edit')">✏️</button>
                    <button class="text-red-500 hover:text-red-700" onclick="openModal('delete')">🗑️</button>
                </td>
            </tr>
            <tr class="border-b border-gray-200">
                <td class="p-4">PEDRO LUCIO</td>
                <td class="p-4">56234578</td>
                <td class="p-4">10/09/24</td>
                <td class="p-4">10/10/24</td>
                <td class="p-4">PREMIUM</td>
                <td class="p-4 flex space-x-2">
                    <button class="text-green-500 hover:text-green-700" onclick="openModal('edit')">✏️</button>
                    <button class="text-red-500 hover:text-red-700" onclick="openModal('delete')">🗑️</button>
                </td>
            </tr>
            <tr class="border-b border-gray-200">
                <td class="p-4">PABLO PEÑA</td>
                <td class="p-4">45562398</td>
                <td class="p-4">10/09/24</td>
                <td class="p-4">10/10/24</td>
                <td class="p-4">ECONOMICO</td>
                <td class="p-4 flex space-x-2">
                    <button class="text-green-500 hover:text-green-700" onclick="openModal('edit')">✏️</button>
                    <button class="text-red-500 hover:text-red-700" onclick="openModal('delete')">🗑️</button>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="mt-4 flex justify-between">
        <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400" onclick="goBack()">Volver</button>
        <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600" onclick="openModal('add')">Agregar Reserva</button>
    </div>
</div>
