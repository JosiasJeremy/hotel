const ctx = document.getElementById('occupancyChart').getContext('2d');
const occupancyChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Februari','Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre'],
        datasets: [{
            label: 'Ocupación de Habitaciones (%)',
            data: [70, 60, 80, 75, 60, 50, 46], // Datos de ocupación en porcentaje
            backgroundColor: '#BB6B55', // Corregido: quitar paréntesis
            borderColor: '#886B55',
            borderWidth: 2
            
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false, // Para que el gráfico se ajuste al tamaño del contenedor
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    callback: function(value) {
                        return value + '%'; // Formato de porcentaje en el eje Y
                    }
                }
            }
        }
    }
});
const ctxPie = document.getElementById('pieChart').getContext('2d');
const pieChart = new Chart(ctxPie, {
    type: 'pie',
    data: {
        labels: ['Disponible', 'Ocupado', 'Reservado'],
        datasets: [{
            label: 'Estado de Habitaciones',
            data: [30, 60, 10],
            backgroundColor: ['#8D9B6A', '#BB6B55', '#96806C'],
            borderColor: ['#FFF', '#FFF', '#FFF'],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false, // Para que el tamaño no dependa del contenedor
        // Definir el tamaño del gráfico en píxeles
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        }
    }
});