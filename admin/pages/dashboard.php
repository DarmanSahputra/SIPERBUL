<div class="max-w-7xl m-4 p-4">
    <!-- Header -->
    <h1 class="text-2xl md:text-3xl font-bold text-slate-900 mb-1">Dashboard Monitoring Kasus Bullying</h1>
    <p class="text-slate-500 text-sm mb-8">Data periode Januari – Juli 2026 · Update terakhir: 5 Agustus 2026</p>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm hover:shadow-md hover:border-slate-300 transition">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-2">Total Kasus</p>
            <p class="text-3xl font-bold text-slate-900">247</p>
            <p class="text-sm text-red-500 mt-1">↑ 12% dari bulan lalu</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm hover:shadow-md hover:border-slate-300 transition">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-2">Kasus Selesai</p>
            <p class="text-3xl font-bold text-slate-900">168</p>
            <p class="text-sm text-emerald-600 mt-1">68% terselesaikan</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm hover:shadow-md hover:border-slate-300 transition">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-2">Dalam Proses</p>
            <p class="text-3xl font-bold text-slate-900">54</p>
            <p class="text-sm text-slate-500 mt-1">22% masih ditangani</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm hover:shadow-md hover:border-slate-300 transition">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-2">Sekolah Berisiko Tinggi</p>
            <p class="text-3xl font-bold text-slate-900">5</p>
            <p class="text-sm text-red-500 mt-1">perlu perhatian khusus</p>
        </div>
    </div>

    <!-- Charts Row 1 -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5">
        <!-- Jumlah Kasus per Sekolah -->
        <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm">
            <h2 class="text-base font-semibold text-slate-800 mb-4">Jumlah Kasus per Sekolah</h2>
            <div class="h-72">
                <canvas id="chartSekolah"></canvas>
            </div>
        </div>

        <!-- Jenis Bullying Terbanyak -->
        <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm">
            <h2 class="text-base font-semibold text-slate-800 mb-4">Jenis Bullying Terbanyak</h2>
            <div class="h-72">
                <canvas id="chartJenis"></canvas>
            </div>
        </div>
    </div>

    <!-- Tren Bulanan -->
    <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm mb-5">
        <h2 class="text-base font-semibold text-slate-800 mb-4">Tren Kasus Bulanan (Januari – Juli 2026)</h2>
        <div class="h-80">
            <canvas id="chartTren"></canvas>
        </div>
    </div>

    <!-- Bottom Row -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
        <!-- Sekolah Risiko Tinggi -->
        <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm">
            <h2 class="text-base font-semibold text-slate-800 mb-4">Sekolah dengan Risiko Tinggi</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="text-slate-500 text-xs uppercase tracking-wider border-b border-slate-200">
                            <th class="text-left py-3 px-2 font-medium">Sekolah</th>
                            <th class="text-left py-3 px-2 font-medium">Kasus</th>
                            <th class="text-left py-3 px-2 font-medium">Risiko</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr class="hover:bg-slate-50">
                            <td class="py-3 px-2 text-slate-700">SMP Negeri 3 Bandung</td>
                            <td class="py-3 px-2 text-slate-700">38</td>
                            <td class="py-3 px-2">
                                <span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold bg-red-100 text-red-600">Tinggi</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="py-3 px-2 text-slate-700">SMA Negeri 5 Surabaya</td>
                            <td class="py-3 px-2 text-slate-700">31</td>
                            <td class="py-3 px-2">
                                <span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold bg-red-100 text-red-600">Tinggi</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="py-3 px-2 text-slate-700">SMP Negeri 12 Jakarta</td>
                            <td class="py-3 px-2 text-slate-700">27</td>
                            <td class="py-3 px-2">
                                <span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold bg-red-100 text-red-600">Tinggi</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="py-3 px-2 text-slate-700">SMA Negeri 2 Medan</td>
                            <td class="py-3 px-2 text-slate-700">24</td>
                            <td class="py-3 px-2">
                                <span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold bg-amber-100 text-amber-600">Sedang</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="py-3 px-2 text-slate-700">SMP Negeri 8 Yogyakarta</td>
                            <td class="py-3 px-2 text-slate-700">22</td>
                            <td class="py-3 px-2">
                                <span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold bg-amber-100 text-amber-600">Sedang</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="py-3 px-2 text-slate-700">SMA Negeri 1 Makassar</td>
                            <td class="py-3 px-2 text-slate-700">19</td>
                            <td class="py-3 px-2">
                                <span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold bg-amber-100 text-amber-600">Sedang</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="py-3 px-2 text-slate-700">SMP Negeri 4 Semarang</td>
                            <td class="py-3 px-2 text-slate-700">15</td>
                            <td class="py-3 px-2">
                                <span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-600">Rendah</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Statistik Penyelesaian -->
        <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm">
            <h2 class="text-base font-semibold text-slate-800 mb-4">Statistik Penyelesaian Kasus</h2>
            <div class="h-52 mb-5">
                <canvas id="chartPenyelesaian"></canvas>
            </div>
            <div class="grid grid-cols-3 gap-4 text-center">
                <div>
                    <p class="text-2xl font-bold text-emerald-600">168</p>
                    <p class="text-xs text-slate-500 mt-1">Selesai</p>
                    <div class="mt-2 h-2 bg-slate-200 rounded-full overflow-hidden">
                        <div class="h-full bg-emerald-500 rounded-full" style="width: 68%"></div>
                    </div>
                </div>
                <div>
                    <p class="text-2xl font-bold text-amber-500">54</p>
                    <p class="text-xs text-slate-500 mt-1">Proses</p>
                    <div class="mt-2 h-2 bg-slate-200 rounded-full overflow-hidden">
                        <div class="h-full bg-amber-400 rounded-full" style="width: 22%"></div>
                    </div>
                </div>
                <div>
                    <p class="text-2xl font-bold text-red-500">25</p>
                    <p class="text-xs text-slate-500 mt-1">Belum Ditangani</p>
                    <div class="mt-2 h-2 bg-slate-200 rounded-full overflow-hidden">
                        <div class="h-full bg-red-500 rounded-full" style="width: 10%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const colors = {
        blue: '#3b82f6',
        cyan: '#06b6d4',
        green: '#22c55e',
        yellow: '#eab308',
        orange: '#f97316',
        red: '#ef4444',
        purple: '#a855f7',
        slate: '#94a3b8'
    };

    // 1. Jumlah Kasus per Sekolah
    new Chart(document.getElementById('chartSekolah'), {
        type: 'bar',
        data: {
            labels: ['SMPN 3 Bdg', 'SMAN 5 Sby', 'SMPN 12 Jkt', 'SMAN 2 Mdn', 'SMPN 8 Yk', 'SMAN 1 Mks', 'SMPN 4 Smg', 'Lainnya'],
            datasets: [{
                label: 'Jumlah Kasus',
                data: [38, 31, 27, 24, 22, 19, 15, 71],
                backgroundColor: [
                    colors.red, colors.red, colors.orange,
                    colors.yellow, colors.yellow, colors.yellow,
                    colors.green, colors.blue
                ],
                borderRadius: 6,
                borderSkipped: false
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: '#e2e8f0'
                    },
                    ticks: {
                        color: '#64748b'
                    }
                },
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        color: '#64748b',
                        maxRotation: 45,
                        minRotation: 45
                    }
                }
            }
        }
    });

    // 2. Jenis Bullying Terbanyak
    new Chart(document.getElementById('chartJenis'), {
        type: 'doughnut',
        data: {
            labels: ['Verbal', 'Sosial / Relasional', 'Fisik', 'Cyberbullying', 'Lainnya'],
            datasets: [{
                data: [89, 62, 48, 35, 13],
                backgroundColor: [colors.blue, colors.purple, colors.red, colors.cyan, colors.slate],
                borderWidth: 0,
                hoverOffset: 8
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'right',
                    labels: {
                        color: '#334155',
                        padding: 14,
                        usePointStyle: true,
                        pointStyle: 'circle'
                    }
                }
            },
            cutout: '58%'
        }
    });

    // 3. Tren Bulanan
    new Chart(document.getElementById('chartTren'), {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
            datasets: [{
                    label: 'Total Kasus',
                    data: [28, 32, 41, 38, 35, 36, 37],
                    borderColor: colors.blue,
                    backgroundColor: 'rgba(59, 130, 246, 0.12)',
                    fill: true,
                    tension: 0.35,
                    pointRadius: 5,
                    pointBackgroundColor: colors.blue
                },
                {
                    label: 'Kasus Selesai',
                    data: [18, 22, 27, 25, 24, 26, 26],
                    borderColor: colors.green,
                    backgroundColor: 'transparent',
                    tension: 0.35,
                    pointRadius: 5,
                    pointBackgroundColor: colors.green,
                    borderDash: [5, 5]
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    labels: {
                        color: '#334155',
                        usePointStyle: true
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: '#e2e8f0'
                    },
                    ticks: {
                        color: '#64748b'
                    }
                },
                x: {
                    grid: {
                        color: '#f1f5f9'
                    },
                    ticks: {
                        color: '#64748b'
                    }
                }
            }
        }
    });

    // 4. Statistik Penyelesaian
    new Chart(document.getElementById('chartPenyelesaian'), {
        type: 'pie',
        data: {
            labels: ['Selesai', 'Dalam Proses', 'Belum Ditangani'],
            datasets: [{
                data: [168, 54, 25],
                backgroundColor: [colors.green, colors.yellow, colors.red],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        color: '#334155',
                        padding: 12,
                        usePointStyle: true
                    }
                }
            }
        }
    });
</script>