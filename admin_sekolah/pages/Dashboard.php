<div class="w-full h-full bg-slate-50 p-3 md:p-4 bg-black mt-2">
    <!-- Header -->
    <section class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <h2 class="text-sm font-bold text-slate-800">Selamat Datang, Petugas</h2>
        <h1 class="mt-2 text-2xl font-bold text-blue-600 md:text-2xl">Ringkasan Pelaporan</h1>
        <p class="mt-2 text-sm text-slate-500">Pantau laporan dan perkembangan kasus bullying di sekolah.</p>

    </section>

    <!-- Statistik -->
    <section class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4">

        <div class="flex items-center justify-between rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div>
                <p class="text-sm font-semibold text-slate-400">Total Pelaporan</p>
                <h3 class="mt-2 text-3xl font-bold text-slate-800">23</h3>
                <p class="mt-1 text-xs text-slate-500">Seluruh laporan</p>
            </div>

            <div class="rounded-xl bg-blue-100 p-3 text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M20 5a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2.5a1.5 1.5 0 0 1 1.2.6l.6.8a1.5 1.5 0 0 0 1.2.6z" />
                    <path d="M3 8.268a2 2 0 0 0-1 1.738V19a2 2 0 0 0 2 2h11a2 2 0 0 0 1.732-1" />
                </svg>
            </div>
        </div>

        <div class="flex items-center justify-between rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div>
                <p class="text-sm font-semibold text-slate-400">Laporan Baru</p>
                <h3 class="mt-2 text-3xl font-bold text-slate-800">8</h3>
                <p class="mt-1 text-xs text-blue-600">Menunggu ditinjau</p>
            </div>

            <div class="rounded-xl bg-sky-100 p-3 text-sky-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 4h16v16H4z" />
                    <path d="M8 8h8M8 12h8M8 16h5" />
                </svg>
            </div>
        </div>

        <div class="flex items-center justify-between rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div>
                <p class="text-sm font-semibold text-slate-400">Dalam Proses</p>
                <h3 class="mt-2 text-3xl font-bold text-slate-800">10</h3>
                <p class="mt-1 text-xs text-amber-600">Sedang ditangani</p>
            </div>

            <div class="rounded-xl bg-amber-100 p-3 text-amber-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="9" />
                    <path d="M12 7v5l3 2" />
                </svg>
            </div>
        </div>

        <div class="flex items-center justify-between rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div>
                <p class="text-sm font-semibold text-slate-400">Laporan Selesai</p>
                <h3 class="mt-2 text-3xl font-bold text-slate-800">5</h3>
                <p class="mt-1 text-xs text-emerald-600">Kasus selesai</p>
            </div>

            <div class="rounded-xl bg-emerald-100 p-3 text-emerald-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m20 6-11 11-5-5" />
                </svg>
            </div>
        </div>

    </section>

    <!-- Grafik -->
    <div class="flex gap-6 justify-center pb-4">
        <section class="mt-6 rounded-2xl w-[48%] border border-slate-200 bg-white p-5 shadow-sm md:p-6">
    
            <div class="mb-6 flex flex-col justify-between gap-3 sm:flex-row sm:items-center">
                <div>
                    <h2 class="text-xl font-bold text-slate-800">Grafik Laporan Bulanan</h2>
                    <p class="mt-1 text-sm text-slate-500">Jumlah laporan yang masuk setiap bulan.</p>
                </div>
    
                <select class="rounded-lg border border-slate-200 bg-white px-4 py-2 text-sm text-slate-600 outline-none focus:border-blue-500">
                    <option>Tahun 2026</option>
                    <option>Tahun 2025</option>
                </select>
            </div>
    
            <div class="relative h-[330px]">
                <canvas id="grafikLaporan"></canvas>
            </div>
    
        </section>
    
        <!-- Tabel Laporan Hari Ini -->
        <section class="mt-6 h-[500px] overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    
            <div class="flex flex-col justify-between gap-4 border-b border-slate-200 p-5 sm:flex-row sm:items-center">
                <div>
                    <h2 class="text-xl font-bold text-slate-800">Laporan Baru Hari Ini</h2>
                    <p class="mt-1 text-sm text-slate-500">Daftar laporan yang baru masuk hari ini.</p>
                </div>
                <a href="index.php?page=Laporan_Masuk">
                    <button class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-blue-700">
                        Lihat Semua
                    </button>
                </a>
            </div>
    
            <div class="max-h-[500px] table-auto overflow-auto scrollbar-cool flex-1 min-h-0">
                <table class="w-full h-full text-left">
                    <thead class="sticky top-0 z-10 bg-slate-50 ">
                        <tr>
                            <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500">ID</th>
                            <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500">Jenis Tindakan</th>
                            <th class="px-6 py-4 text-center text-xs font-bold uppercase text-slate-500">Aksi</th>
                        </tr>
                    </thead>
    
                    <tbody class="divide-y divide-slate-100">
    
                        <tr class="transition hover:bg-slate-50">
                            <td class="px-6 py-4 font-semibold text-slate-700">#LP-001</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffd22e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert-icon lucide-triangle-alert"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
                                    <span class="font-medium text-slate-700">Bully Fisik</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button class="rounded-lg bg-blue-50 px-4 py-2 text-sm font-semibold text-blue-600 transition hover:bg-blue-600 hover:text-white">
                                    Detail
                                </button>
                            </td>
                        </tr>
                        <tr class="transition hover:bg-slate-50">
                            <td class="px-6 py-4 font-semibold text-slate-700">#LP-001</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffd22e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert-icon lucide-triangle-alert"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
                                    <span class="font-medium text-slate-700">Pemukulan</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button class="rounded-lg bg-blue-50 px-4 py-2 text-sm font-semibold text-blue-600 transition hover:bg-blue-600 hover:text-white">
                                    Detail
                                </button>
                            </td>
                        </tr>
                        <tr class="transition hover:bg-slate-50">
                            <td class="px-6 py-4 font-semibold text-slate-700">#LP-001</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffd22e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert-icon lucide-triangle-alert"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
                                    <span class="font-medium text-slate-700">Cyberbully</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button class="rounded-lg bg-blue-50 px-4 py-2 text-sm font-semibold text-blue-600 transition hover:bg-blue-600 hover:text-white">
                                    Detail
                                </button>
                            </td>
                        </tr>
                    </tbody>
    
                </table>
    
            </div>
    
        </section>
    </div>

</div>

<!-- Chart.js -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const chartElement = document.getElementById("grafikLaporan");

    new Chart(chartElement, {
        type: "bar",

        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],

            datasets: [{
                label: "Jumlah Laporan",
                data: [4, 7, 5, 10, 8, 13, 9, 15, 12, 17, 11, 20],
                backgroundColor: "#2563eb",
                hoverBackgroundColor: "#1d4ed8",
                borderRadius: 7,
                borderSkipped: false,
                maxBarThickness: 34
            }]
        },

        options: {
            responsive: true,
            maintainAspectRatio: false,

            plugins: {
                legend: {
                    display: false
                },

                tooltip: {
                    backgroundColor: "#0f172a",
                    displayColors: false,
                    padding: 12,

                    callbacks: {
                        label: function(context) {
                            return context.raw + " laporan";
                        }
                    }
                }
            },

            scales: {
                x: {
                    grid: {
                        display: false
                    },

                    border: {
                        display: false
                    },

                    ticks: {
                        color: "#64748b"
                    }
                },

                y: {
                    beginAtZero: true,

                    ticks: {
                        stepSize: 5,
                        precision: 0,
                        color: "#94a3b8"
                    },

                    grid: {
                        color: "#e2e8f0"
                    },

                    border: {
                        display: false
                    }
                }
            }
        }
    });
</script>