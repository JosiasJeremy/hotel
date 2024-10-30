function mostrarDesglose(tipo) {
    const modal = document.getElementById("modalDesglose");
    const contenidoDesglose = document.getElementById("contenidoDesglose");

    // Información detallada para los ingresos, incluyendo costos y detalles adicionales
    const detalles = {
        'Alojamiento': {
            descripcion: 'El ingreso de alojamiento incluye tarifas de habitaciones simples y dobles. Se proporciona un servicio de hospedaje cómodo y seguro.',
            costo: '$1,200 por noche para habitación doble.'
        },
        'Servicios adicionales': {
            descripcion: 'Este ingreso se genera a partir de servicios adicionales como desayuno, almuerzo y otros servicios dentro del alojamiento.',
            costo: '$50 por desayuno, $100 por almuerzo.'
        },
        'Alojamiento Premium': {
            descripcion: 'Alojamiento de categoría Premium con servicios exclusivos y comodidades adicionales.',
            costo: '$150 por noche.'
        },
        'Alojamiento Promedio': {
            descripcion: 'Alojamiento de categoría Promedio con servicios básicos y comodidades estándar.',
            costo: '$100 por noche.'
        },
        'Alojamiento Económico': {
            descripcion: 'Alojamiento de categoría Económica con servicios limitados, ideal para estadías económicas.',
            costo: '$80 por noche.'
        },
        'Alojamiento de Lujo': {
            descripcion: 'Alojamiento de categoría de Lujo con instalaciones y servicios de alta gama, ideal para clientes exigentes.',
            costo: '$200 por noche.'
        }
    };

    // Verificar si hay detalles disponibles para el tipo seleccionado
    if (detalles[tipo]) {
        contenidoDesglose.innerHTML = `
            <h3>${tipo}</h3>
            <p><strong>Descripción:</strong> ${detalles[tipo].descripcion}</p>
            <p><strong>Costo:</strong> ${detalles[tipo].costo}</p>
        `;
    } else {
        contenidoDesglose.textContent = 'Información no disponible.';
    }

    modal.style.display = "block"; // Mostrar el modal
}

function cerrarModal() {
    document.getElementById("modalDesglose").style.display = "none"; // Cerrar el modal
}

// Para cerrar el modal al hacer clic fuera de él
window.onclick = function(event) {
    const modal = document.getElementById("modalDesglose");
    if (event.target === modal) {
        cerrarModal();
    }
};

function exportarExcel(tablaID) {
    let tabla = document.getElementById(tablaID);
    let filas = tabla.rows;
    let csv = [];

    for (let i = 0; i < filas.length; i++) {
        let celdas = filas[i].cells;
        let fila = [];
        for (let j = 0; j < celdas.length; j++) {
            fila.push(celdas[j].textContent);
        }
        csv.push(fila.join(","));
    }

    let csvFile = new Blob([csv.join("\n")], { type: "text/csv" });
    let downloadLink = document.createElement("a");
    downloadLink.download = "informe.csv";
    downloadLink.href = window.URL.createObjectURL(csvFile);
    downloadLink.style.display = "none";
    document.body.appendChild(downloadLink);
    downloadLink.click();
}