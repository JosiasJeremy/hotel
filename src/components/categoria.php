<div class="bg-white rounded-lg shadow-lg p-4">
    <h2 class="text-lg font-bold mb-4">LISTA DE CATEGORIAS</h2>
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="border-b-2 border-gray-200">
                <th class="p-4">ID DE HABITACION</th>
                <th class="p-4">TIPO DE CATEGORIA</th>
                <th class="p-4">COSTO DE HABITACION</th>
                <th class="p-4">ESTADO</th>
                <th class="p-4">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí puedes hacer un loop PHP para listar las habitaciones -->
            <tr class="border-b border-gray-200">
                <td class="p-4">#001</td>
                <td class="p-4">categoria 2</td>
                <td class="p-4">100$</td>
                <td href="" class=" bg-red-500 text-white py-2 px-4 text-center rounded-lg hover:bg-red-600 mt-4">OCUPADO</td>
                <td class="p-4 flex space-x-2">
                    <button class="text-green-500 hover:text-green-700" onclick="openModal('edit')">✏️</button>
                    <button class="text-red-500 hover:text-red-700" onclick="openModal('delete')">🗑️</button>
                </td>
            </tr>
            <tr class="border-b border-gray-200">
                <td class="p-4">#002</td>
                <td class="p-4">categoria 2</td>
                <td class="p-4">100$</td>
                <td href="" class=" bg-green-500 text-white py-2 px-4 text-center rounded-lg hover:bg-green-600 mt-4">DISPONIBLE</td>
                <td class="p-4 flex space-x-2">
                    <button class="text-green-500 hover:text-green-700" onclick="openModal('edit')">✏️</button>
                    <button class="text-red-500 hover:text-red-700" onclick="openModal('delete')">🗑️</button>
                </td>
            </tr>
            <tr class="border-b border-gray-200">
                <td class="p-4">#003</td>
                <td class="p-4">categoria 2</td>
                <td class="p-4">100$</td>
                <td href="" class="p-4 bg-yellow-500 text-white text-center rounded-lg hover:bg-yellow-600">RESERVADO</td>
                <td class="p-4 flex space-x-2">
                    <button class="text-green-500 hover:text-green-700" onclick="openModal('edit')">✏️</button>
                    <button class="text-red-500 hover:text-red-700" onclick="openModal('delete')">🗑️</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
