<div id="modal" class="hidden fixed inset-0 flex items-center justify-center z-50 modal-backdrop">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 id="modal-title" class="text-xl font-bold mb-4">EDITAR CLIENTES</h2>
        <!-- Edit Form -->
        <form id="edit-form" class="space-y-4">

            <div class=" grid grid-cols-2 gap-6 my-6">
                <!-- ID  -->
                <div class="mb-4">
                    <label for="id" class="block text-sm font-medium text-gray-700">ID</label>
                    <input type="text" id="id" name="id" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                </div>

                <!-- Nombre -->
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                </div>

                <!-- TELEFONO -->
                <div class="mb-4">
                    <label for="telefono" class="block text-sm font-medium text-gray-700">TELEFONO</label>
                    <input type="text" id="telefono" name="telefono" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                </div>

                <!-- DNI -->
                <div class="mb-4">
                    <label for="dni" class="block text-sm font-medium text-gray-700">DNI</label>
                    <input type="text" id="dni" name="dni" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                </div>

                <!-- EMAIL -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">EMAIL</label>
                    <input type="text" id="email" name="email" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                </div>

                <!-- ID HABITACION  -->
                <div class="mb-4">
                    <label for="idHabitacion" class="block text-sm font-medium text-gray-700">ID de Habitación</label>
                    <input type="text" id="idHabitacion" name="idHabitacion" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                </div>

            </div>

            <!-- Action Buttons -->
            <div class="mt-4 flex justify-between">
                <button onclick="closeModal()" type="button" id="cancelBtn" class="mr-2 bg-gray-300 px-4 py-2 rounded-md">Cancelar</button>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md">Guardar</button>
            </div>
        </form>
    </div>
</div>