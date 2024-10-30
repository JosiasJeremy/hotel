// Función para filtrar reservas por nombre o DNI
function filtrarReservas() {
    const filtroInput = document.getElementById("busquedaFiltro").value.toUpperCase();
    const filas = document.getElementById("tablaReservas").getElementsByTagName("tr");

    for (let i = 0; i < filas.length; i++) {
        const columnaNombre = filas[i].getElementsByTagName("td")[0];
        const columnaDNI = filas[i].getElementsByTagName("td")[1];
        const nombre = columnaNombre ? columnaNombre.textContent.toUpperCase() : "";
        const dni = columnaDNI ? columnaDNI.textContent : "";

        // Muestra la fila si el nombre o el DNI coinciden con el filtro
        if (nombre.includes(filtroInput) || dni.includes(filtroInput)) {
            filas[i].style.display = "";
        } else {
            filas[i].style.display = "none";
        }
    }
}

// Añade el evento onkeyup al campo de búsqueda al cargar la página
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById("busquedaFiltro").addEventListener("keyup", filtrarReservas);
});