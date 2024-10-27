<div class="bg-white rounded-lg shadow-lg p-4">
    <h2 class="text-lg font-bold mb-4">CATEGORIA ESTANDAR</h2>
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="border-b-2 border-gray-200">
                <th class="p-4">ID DE HABITACION</th>
                <th class="p-4">NOMBRE</th>
                <th class="p-4">TIPO DE CATEGORIA</th>
                <th class="p-4">COSTO DE HABITACION</th>
                <th class="p-4">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí puedes hacer un loop PHP para listar las habitaciones -->
            <tr class="border-b border-gray-200">
                <td class="p-4">#001</td>
                <td class="p-4">RUDI VERA</td>
                <td class="p-4">categoria 2</td>
                <td class="p-4">100$</td>
                <td class="p-4 flex space-x-2">
                    <button class="text-green-500 hover:text-green-700" onclick="openModal('edit')">✏️</button>
                    <button class="text-red-500 hover:text-red-700" onclick="openModal('delete')">🗑️</button>
                </td>
            </tr>
            <tr class="border-b border-gray-200">
                <td class="p-4">#002</td>
                <td class="p-4">RUDI VERA</td>
                <td class="p-4">categoria 2</td>
                <td class="p-4">100$</td>
                <td class="p-4 flex space-x-2">
                    <button class="text-green-500 hover:text-green-700" onclick="openModal('edit')">✏️</button>
                    <button class="text-red-500 hover:text-red-700" onclick="openModal('delete')">🗑️</button>
                </td>
            </tr>
            <tr class="border-b border-gray-200">
                <td class="p-4">#003</td>
                <td class="p-4">RUDI VERA</td>
                <td class="p-4">categoria 2</td>
                <td class="p-4">100$</td>
                <td class="p-4 flex space-x-2">
                    <button class="text-green-500 hover:text-green-700" onclick="openModal('edit')">✏️</button>
                    <button class="text-red-500 hover:text-red-700" onclick="openModal('delete')">🗑️</button>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="mt-4 flex justify-between">
        <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400" onclick="goBack()">Volver</button>
        <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600" onclick="openModal('add')">Agregar Cliente</button>
    </div>
</div>