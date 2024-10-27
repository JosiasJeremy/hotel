// modal.js

function openModal(type) {
    const modal = document.getElementById('modal');
    const editForm = document.getElementById('edit-form');
    const deleteConfirmation = document.getElementById('delete-confirmation');
    const modalTitle = document.getElementById('modal-title');

    modal.classList.remove('hidden'); // Mostrar el modal

    if (type === 'edit') {
        modalTitle.textContent = 'Editar Datos';
        editForm.classList.remove('hidden');
        deleteConfirmation.classList.add('hidden');
    } else if (type === 'delete') {
        modalTitle.textContent = 'Eliminar Registro';
        editForm.classList.add('hidden');
        deleteConfirmation.classList.remove('hidden');
    }
}

function closeModal() {
    const modal = document.getElementById('modal');
    modal.classList.add('hidden'); // Ocultar el modal
}
