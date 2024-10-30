document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('facturaModal').style.display = 'none';
    cargarFacturasEjemplo();
});

// Datos de facturas de ejemplo
const facturasEjemplo = [
    {numero: '001', fecha: '2024-10-29', cliente: 'Juan Pérez', idHabitacion: '101', montoTotal: '150.00'},
    {numero: '002', fecha: '2024-10-28', cliente: 'María García', idHabitacion: '102', montoTotal: '200.00'},
    {numero: '003', fecha: '2024-10-27', cliente: 'Carlos Ramírez', idHabitacion: '103', montoTotal: '175.00'},
    {numero: '004', fecha: '2024-10-26', cliente: 'Ana Fernández', idHabitacion: '104', montoTotal: '180.00'},
    {numero: '005', fecha: '2024-10-25', cliente: 'Luis Martínez', idHabitacion: '105', montoTotal: '160.00'},
    {numero: '006', fecha: '2024-10-24', cliente: 'Sofía Torres', idHabitacion: '106', montoTotal: '190.00'},
    {numero: '007', fecha: '2024-10-23', cliente: 'Fernando Díaz', idHabitacion: '107', montoTotal: '210.00'},
    {numero: '008', fecha: '2024-10-22', cliente: 'Valeria González', idHabitacion: '108', montoTotal: '250.00'},
    {numero: '009', fecha: '2024-10-21', cliente: 'Pedro López', idHabitacion: '109', montoTotal: '170.00'},
    {numero: '010', fecha: '2024-10-20', cliente: 'Daniela Morales', idHabitacion: '110', montoTotal: '230.00'}
];

// Cargar facturas de ejemplo en la tabla
function cargarFacturasEjemplo() {
    const tabla = document.getElementById('facturas');
    facturasEjemplo.forEach(factura => {
        const fila = document.createElement('tr');
        fila.innerHTML = `
            <td>${factura.numero}</td>
            <td>${factura.fecha}</td>
            <td>${factura.cliente}</td>
            <td>${factura.idHabitacion}</td>
            <td>${factura.montoTotal}</td>
            <td class="actions">
                <button class="btn-eliminar" onclick="eliminarFactura(this)">Eliminar</button>
                <button class="btn-imprimir" onclick="imprimirFactura('${factura.numero}', '${factura.fecha}', '${factura.cliente}', '${factura.idHabitacion}', '${factura.montoTotal}')">Imprimir</button>
            </td>
        `;
        tabla.appendChild(fila);
    });
}

// Función para abrir el modal de creación de facturación
function abrirModal() {
    document.getElementById('facturaModal').style.display = 'flex';
}

// Función para cerrar el modal de creación de facturación
function cerrarModal() {
    document.getElementById('facturaModal').style.display = 'none';
}

// Función para crear una nueva factura
function crearFactura() {
    const numeroFactura = document.getElementById('numero_factura').value;
    const fecha = document.getElementById('fecha').value;
    const cliente = document.getElementById('cliente').value;
    const idHabitacion = document.getElementById('id_habitacion').value;
    const montoTotal = document.getElementById('monto_total').value;

    if (numeroFactura && fecha && cliente && idHabitacion && montoTotal) {
        const tabla = document.getElementById('facturas');
        const fila = document.createElement('tr');
        fila.innerHTML = `
            <td>${numeroFactura}</td>
            <td>${fecha}</td>
            <td>${cliente}</td>
            <td>${idHabitacion}</td>
            <td>${montoTotal}</td>
            <td class="actions">
                <button class="btn-eliminar" onclick="eliminarFactura(this)">Eliminar</button>
                <button class="btn-imprimir" onclick="imprimirFactura('${numeroFactura}', '${fecha}', '${cliente}', '${idHabitacion}', '${montoTotal}')">Imprimir</button>
            </td>
        `;
        tabla.appendChild(fila);
        document.getElementById('factura-form').reset();
        cerrarModal();
    } else {
        alert('Por favor, complete todos los campos antes de crear la factura.');
    }
}

// Función para eliminar una factura
function eliminarFactura(element) {
    element.parentElement.parentElement.remove();
}

// Función para imprimir una factura
function imprimirFactura(numero, fecha, cliente, idHabitacion, montoTotal) {
    const ventanaImpresion = window.open('', '', 'height=600,width=800');
    ventanaImpresion.document.write('<html><head><title>Factura</title>');
    ventanaImpresion.document.write('<style>body { font-family: Arial, sans-serif; } .header img { width: 150px; } .content { margin: 20px; }</style>');
    ventanaImpresion.document.write('</head><body>');
    ventanaImpresion.document.write('<div class="header"><img src="/hotel/src/assets/logo.png" alt="Logo"><h2>Factura</h2></div>');
    ventanaImpresion.document.write('<div class="content">');
    ventanaImpresion.document.write(`<p><strong>Número de Factura:</strong> ${numero}</p>`);
    ventanaImpresion.document.write(`<p><strong>Fecha:</strong> ${fecha}</p>`);
    ventanaImpresion.document.write(`<p><strong>Cliente:</strong> ${cliente}</p>`);
    ventanaImpresion.document.write(`<p><strong>ID Habitación:</strong> ${idHabitacion}</p>`);
    ventanaImpresion.document.write(`<p><strong>Monto Total:</strong> ${montoTotal}</p>`);
    ventanaImpresion.document.write('</div></body></html>');
    ventanaImpresion.document.close();
    ventanaImpresion.print();
}