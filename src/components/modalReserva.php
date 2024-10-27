<div id="modal" class="hidden fixed inset-0 flex items-center justify-center z-50 modal-backdrop">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 id="modal-title" class="text-xl font-bold mb-4">Datos de Reserva</h2>
        <!-- Edit Form -->
        <form id="edit-form" class="space-y-4">
            <!-- Form content -->
            <!-- ID de Habitación -->
            <div class="mb-4">
                <label for="idHabitacion" class="block text-sm font-medium text-gray-700">ID de Habitación</label>
                <input type="text" id="idHabitacion" name="idHabitacion" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <!-- Nombre -->
            <div class=" grid grid-cols-2 gap-6 my-6">
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <!-- dni -->
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">DNI</label>
                <input type="text" id="dni" name="nombre" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <!-- Fecha de fin  -->

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Fecha de Reserva</label>
                <input type="text" id="date" name="nombre" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <!-- Fecha de fin  -->
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Fecha que acaba Reserva</label>
                <input type="text" id="date" name="nombre" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <!-- Metodo de pago -->
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Metodo de Pago</label>
                <input type="text" id="pago" name="nombre" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <!-- Costo de Habitación -->
            <div class="mb-4">
                <label for="costo" class="block text-sm font-medium text-gray-700">Costo de Habitación</label>
                <input type="number" id="costo" name="costo" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-4 flex justify-between">
                <button onclick="closeModal()" type="button" id="cancelBtn" class="mr-2 bg-gray-300 px-4 py-2 rounded-md">Regresar</button>
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Anular</button>
            </div>
        </form>
    </div>
</div>
