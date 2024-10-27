<div id="modal" class="hidden fixed inset-0 flex items-center justify-center z-50 modal-backdrop">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 id="modal-title" class="text-xl font-bold mb-4">Editar Datos</h2>
        <!-- Edit Form -->
        <form id="edit-form" class="space-y-4">
            <!-- Form content -->
            <!-- ID de Habitación -->
            <div class="mb-4">
                <label for="idHabitacion" class="block text-sm font-medium text-gray-700">ID de Habitación</label>
                <input type="text" id="idHabitacion" name="idHabitacion" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <!-- Nombre -->
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <!-- Tipo de Categoría -->
            <div class="mb-4">
                <label for="tipoCategoria" class="block text-sm font-medium text-gray-700">Tipo de Categoría</label>
                    <select id="tipoCategoria" name="tipoCategoria" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                        <option value="">Seleccione una opción</option>
                        <option value="Economica">Premium</option>
                        <option value="Estandar">Estándar</option>
                        <option value="Premium">Económica</option>
                    </select>
            </div>

            <!-- Costo de Habitación -->
            <div class="mb-4">
                <label for="costo" class="block text-sm font-medium text-gray-700">Costo de Habitación</label>
                <input type="number" id="costo" name="costo" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-end">
                <button onclick="closeModal()" type="button" id="cancelBtn" class="mr-2 bg-gray-300 px-4 py-2 rounded-md">Cancelar</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Guardar</button>
            </div>
        </form>
        <div id="delete-confirmation" class="hidden">
            <p>¿Está seguro que desea eliminar este registro?</p>
            <div class="flex justify-end mt-4 space-x-2">
                <button onclick="closeModal()" class="bg-gray-300 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-400">Cancelar</button>
                <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-700">Eliminar</button>
            </div>
        </div>
    </div>
</div>
