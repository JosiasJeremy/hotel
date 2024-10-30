// Verificar carga del archivo
console.log("El archivo dashgraf.js se está cargando correctamente");

// Gráfico de barras de ocupación
const ctx = document.getElementById('occupancyChart').getContext('2d');
const occupancyChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Febrero', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre'],
        datasets: [{
            label: 'Ocupación (%)',
            data: [70, 60, 80, 75, 60, 50, 46],
            backgroundColor: 'rgba(173, 216, 230, 0.7)', // LightBlue pastel
            borderColor: 'rgba(135, 206, 250, 1)', // LightSkyBlue
            borderWidth: 2
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    callback: function(value) {
                        return value + '%';
                    }
                }
            }
        },
        plugins: {
            legend: {
                labels: {
                    color: '#333'
                }
            }
        }
    }
});

// Gráfico de pastel de estado de habitaciones
const ctxPie = document.getElementById('pieChart').getContext('2d');
const pieChart = new Chart(ctxPie, {
    type: 'pie',
    data: {
        labels: ['Disponible', 'Ocupado', 'Reservado'],
        datasets: [{
            data: [30, 60, 10],
            backgroundColor: [
                'rgba(255, 192, 203, 0.7)', // Pink pastel
                'rgba(152, 251, 152, 0.7)', // LightGreen pastel
                'rgba(255, 222, 173, 0.7)'  // NavajoWhite pastel
            ],
            borderColor: [
                'rgba(255, 182, 193, 1)', // Pink
                'rgba(144, 238, 144, 1)', // LightGreen
                'rgba(255, 218, 185, 1)'  // PeachPuff
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
            legend: {
                position: 'top',
                labels: {
                    color: '#333'
                }
            }
        }
    }
});