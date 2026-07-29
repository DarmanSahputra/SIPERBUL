const ctx = document.getElementById('grafikLaporan');

new Chart(ctx, {
    type: 'bar',

    data: {
        labels: [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni'
        ],

        datasets: [{
            label: 'Jumlah Laporan',

            data: [
                12,
                19,
                8,
                15,
                10,
                22
            ],

            backgroundColor: [
                '#2563eb',
                '#2563eb',
                '#2563eb',
                '#2563eb',
                '#2563eb',
                '#2563eb'
            ],

            borderColor: '#1d4ed8',

            borderWidth: 1,

            borderRadius: 8
        }]
    },

    options: {
        responsive: true,

        maintainAspectRatio: false,

        plugins: {
            legend: {
                display: true,

                labels: {
                    color: '#334155'
                }
            }
        },

        scales: {
            y: {
                beginAtZero: true,

                ticks: {
                    stepSize: 5,
                    color: '#64748b'
                },

                grid: {
                    color: '#e2e8f0'
                }
            },

            x: {
                ticks: {
                    color: '#64748b'
                },

                grid: {
                    display: false
                }
            }
        }
    }
});