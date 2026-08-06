<div class="max-w-7xl m-4 p-2">

    <!-- Header -->
    <h1 class="text-2xl md:text-3xl font-bold text-slate-900 mb-1">Daftar Sekolah</h1>
    <p class="text-slate-500 text-sm mb-8">Melihat sekolah yang terdaftar serta jumlah laporan tiap sekolah</p>

    <!-- Stats Ringkas -->
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-6">
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Total Sekolah</p>
            <p class="text-2xl font-bold text-slate-900" id="statTotal">0</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Total Laporan</p>
            <p class="text-2xl font-bold text-slate-900" id="statLaporan">0</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Risiko Tinggi</p>
            <p class="text-2xl font-bold text-red-600" id="statRisikoTinggi">0</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Rata-rata Laporan</p>
            <p class="text-2xl font-bold text-slate-900" id="statRata">0</p>
        </div>
    </div>

    <!-- Chart + Filter -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mb-5">
        <!-- Bar Chart -->
        <div class="lg:col-span-2 bg-white border border-slate-200 rounded-xl p-5 shadow-sm">
            <h2 class="text-base font-semibold text-slate-800 mb-4">Jumlah Laporan per Sekolah</h2>
            <div class="h-72">
                <canvas id="chartSekolah"></canvas>
            </div>
        </div>

        <!-- Filter & Search -->
        <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm">
            <h2 class="text-base font-semibold text-slate-800 mb-4">Filter</h2>
            <div class="space-y-3">
                <div>
                    <label class="text-xs text-slate-500 mb-1 block">Cari Sekolah</label>
                    <div class="relative">
                        <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <input type="text" id="searchInput" placeholder="Nama sekolah..."
                            class="w-full pl-10 pr-4 py-2.5 text-sm border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50">
                    </div>
                </div>
                <div>
                    <label class="text-xs text-slate-500 mb-1 block">Jenjang</label>
                    <select id="filterJenjang" class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Semua Jenjang</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                    </select>
                </div>
                <div>
                    <label class="text-xs text-slate-500 mb-1 block">Tingkat Risiko</label>
                    <select id="filterRisiko" class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Semua Risiko</option>
                        <option value="Tinggi">Tinggi</option>
                        <option value="Sedang">Sedang</option>
                        <option value="Rendah">Rendah</option>
                    </select>
                </div>
                <div>
                    <label class="text-xs text-slate-500 mb-1 block">Urutkan</label>
                    <select id="filterSort" class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="laporan-desc">Laporan terbanyak</option>
                        <option value="laporan-asc">Laporan tersedikit</option>
                        <option value="nama-asc">Nama A–Z</option>
                        <option value="nama-desc">Nama Z–A</option>
                    </select>
                </div>
                <button onclick="resetFilter()" class="w-full mt-2 text-sm px-4 py-2.5 rounded-lg border border-slate-200 bg-white hover:bg-slate-50 text-slate-600 transition">
                    Reset Filter
                </button>
            </div>
        </div>
    </div>

    <!-- Tabel Sekolah -->
    <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider border-b border-slate-200">
                        <th class="text-left py-3.5 px-4 font-medium">No</th>
                        <th class="text-left py-3.5 px-4 font-medium">Nama Sekolah</th>
                        <th class="text-left py-3.5 px-4 font-medium">Jenjang</th>
                        <th class="text-left py-3.5 px-4 font-medium">Kota</th>
                        <th class="text-left py-3.5 px-4 font-medium">Jumlah Laporan</th>
                        <th class="text-left py-3.5 px-4 font-medium">Jenis Bully Tertinggi</th>
                        <th class="text-left py-3.5 px-4 font-medium">Selesai</th>
                        <th class="text-left py-3.5 px-4 font-medium">Proses</th>
                        <th class="text-left py-3.5 px-4 font-medium">Risiko</th>
                    </tr>
                </thead>
                <tbody id="tbodySekolah" class="divide-y divide-slate-100">
                    <!-- Diisi via JS -->
                </tbody>
            </table>
        </div>
        <div class="px-4 py-3 border-t border-slate-200 bg-slate-50 text-sm text-slate-500">
            Menampilkan <span id="showingCount">0</span> dari <span id="totalCount">0</span> sekolah
        </div>
    </div>
</div>

<script>
    // ========== DATA SEKOLAH ==========
    const sekolahData = [{
            nama: "SMP Negeri 3 Bandung",
            jenjang: "SMP",
            kota: "Bandung",
            laporan: 38,
            selesai: 24,
            proses: 10,
            baru: 4,
            jenisTinggi: "Verbal"
        },
        {
            nama: "SMA Negeri 5 Surabaya",
            jenjang: "SMA",
            kota: "Surabaya",
            laporan: 31,
            selesai: 20,
            proses: 8,
            baru: 3,
            jenisTinggi: "Cyberbullying"
        },
        {
            nama: "SMP Negeri 12 Jakarta",
            jenjang: "SMP",
            kota: "Jakarta",
            laporan: 27,
            selesai: 18,
            proses: 7,
            baru: 2,
            jenisTinggi: "Fisik"
        },
        {
            nama: "SMA Negeri 2 Medan",
            jenjang: "SMA",
            kota: "Medan",
            laporan: 24,
            selesai: 16,
            proses: 6,
            baru: 2,
            jenisTinggi: "Sosial"
        },
        {
            nama: "SMP Negeri 8 Yogyakarta",
            jenjang: "SMP",
            kota: "Yogyakarta",
            laporan: 22,
            selesai: 15,
            proses: 5,
            baru: 2,
            jenisTinggi: "Verbal"
        },
        {
            nama: "SMA Negeri 1 Makassar",
            jenjang: "SMA",
            kota: "Makassar",
            laporan: 19,
            selesai: 13,
            proses: 5,
            baru: 1,
            jenisTinggi: "Cyberbullying"
        },
        {
            nama: "SMP Negeri 4 Semarang",
            jenjang: "SMP",
            kota: "Semarang",
            laporan: 15,
            selesai: 12,
            proses: 2,
            baru: 1,
            jenisTinggi: "Fisik"
        },
        {
            nama: "SMA Negeri 7 Bandung",
            jenjang: "SMA",
            kota: "Bandung",
            laporan: 14,
            selesai: 10,
            proses: 3,
            baru: 1,
            jenisTinggi: "Verbal"
        },
        {
            nama: "SMP Negeri 1 Denpasar",
            jenjang: "SMP",
            kota: "Denpasar",
            laporan: 12,
            selesai: 9,
            proses: 2,
            baru: 1,
            jenisTinggi: "Sosial"
        },
        {
            nama: "SMA Negeri 3 Palembang",
            jenjang: "SMA",
            kota: "Palembang",
            laporan: 11,
            selesai: 8,
            proses: 2,
            baru: 1,
            jenisTinggi: "Verbal"
        },
        {
            nama: "SMP Negeri 5 Malang",
            jenjang: "SMP",
            kota: "Malang",
            laporan: 10,
            selesai: 7,
            proses: 2,
            baru: 1,
            jenisTinggi: "Cyberbullying"
        },
        {
            nama: "SMA Negeri 4 Yogyakarta",
            jenjang: "SMA",
            kota: "Yogyakarta",
            laporan: 9,
            selesai: 7,
            proses: 1,
            baru: 1,
            jenisTinggi: "Sosial"
        },
        {
            nama: "SMP Negeri 2 Bogor",
            jenjang: "SMP",
            kota: "Bogor",
            laporan: 8,
            selesai: 6,
            proses: 1,
            baru: 1,
            jenisTinggi: "Verbal"
        },
        {
            nama: "SMA Negeri 6 Jakarta",
            jenjang: "SMA",
            kota: "Jakarta",
            laporan: 7,
            selesai: 5,
            proses: 2,
            baru: 0,
            jenisTinggi: "Fisik"
        },
    ];

    // Hitung risiko berdasarkan jumlah laporan
    function getRisiko(laporan) {
        if (laporan >= 25) return "Tinggi";
        if (laporan >= 15) return "Sedang";
        return "Rendah";
    }

    // Badge risiko
    function badgeRisiko(risiko) {
        const map = {
            "Tinggi": "bg-red-100 text-red-600",
            "Sedang": "bg-amber-100 text-amber-600",
            "Rendah": "bg-emerald-100 text-emerald-600"
        };
        return `<span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold ${map[risiko]}">${risiko}</span>`;
    }

    // Badge jenis bully
    function badgeJenis(jenis) {
        const map = {
            "Verbal": "bg-blue-100 text-blue-700",
            "Fisik": "bg-red-100 text-red-700",
            "Sosial": "bg-purple-100 text-purple-700",
            "Cyberbullying": "bg-cyan-100 text-cyan-700"
        };
        return `<span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold ${map[jenis] || 'bg-slate-100 text-slate-600'}">${jenis}</span>`;
    }

    // Progress bar laporan
    function progressBar(value, max) {
        const pct = Math.round((value / max) * 100);
        let color = "bg-emerald-500";
        if (pct >= 60) color = "bg-red-500";
        else if (pct >= 35) color = "bg-amber-400";
        return `
                <div class="flex items-center gap-2">
                    <span class="font-semibold text-slate-800 w-6">${value}</span>
                    <div class="flex-1 h-2 bg-slate-100 rounded-full overflow-hidden max-w-[100px]">
                        <div class="h-full ${color} rounded-full" style="width: ${pct}%"></div>
                    </div>
                </div>
            `;
    }

    let filtered = [...sekolahData];
    let chartInstance = null;
    const maxLaporan = Math.max(...sekolahData.map(s => s.laporan));

    // ========== RENDER STATS ==========
    function updateStats(data) {
        const total = data.length;
        const totalLaporan = data.reduce((a, s) => a + s.laporan, 0);
        const risikoTinggi = data.filter(s => getRisiko(s.laporan) === "Tinggi").length;
        const rata = total ? Math.round(totalLaporan / total) : 0;

        document.getElementById("statTotal").textContent = total;
        document.getElementById("statLaporan").textContent = totalLaporan;
        document.getElementById("statRisikoTinggi").textContent = risikoTinggi;
        document.getElementById("statRata").textContent = rata;
    }

    // ========== RENDER TABLE ==========
    function renderTable() {
        const tbody = document.getElementById("tbodySekolah");
        tbody.innerHTML = filtered.map((s, i) => {
            const risiko = getRisiko(s.laporan);
            return `
                    <tr class="hover:bg-slate-50 transition">
                        <td class="py-3 px-4 text-slate-500">${i + 1}</td>
                        <td class="py-3 px-4 font-medium text-slate-800">${s.nama}</td>
                        <td class="py-3 px-4">
                            <span class="inline-block px-2 py-0.5 rounded text-xs font-medium ${s.jenjang === 'SMA' ? 'bg-indigo-50 text-indigo-600' : 'bg-sky-50 text-sky-600'}">${s.jenjang}</span>
                        </td>
                        <td class="py-3 px-4 text-slate-600">${s.kota}</td>
                        <td class="py-3 px-4">${progressBar(s.laporan, maxLaporan)}</td>
                        <td class="py-3 px-4">${badgeJenis(s.jenisTinggi)}</td>
                        <td class="py-3 px-4 text-emerald-600 font-medium">${s.selesai}</td>
                        <td class="py-3 px-4 text-amber-600 font-medium">${s.proses + s.baru}</td>
                        <td class="py-3 px-4">${badgeRisiko(risiko)}</td>
                    </tr>
                `;
        }).join("");

        document.getElementById("showingCount").textContent = filtered.length;
        document.getElementById("totalCount").textContent = sekolahData.length;
        updateStats(filtered);
        updateChart();
    }

    // ========== CHART ==========
    function updateChart() {
        const labels = filtered.map(s => s.nama.replace("Negeri ", "").replace("SMA ", "SMA ").replace("SMP ", "SMP "));
        const data = filtered.map(s => s.laporan);
        const bgColors = filtered.map(s => {
            const r = getRisiko(s.laporan);
            if (r === "Tinggi") return "#ef4444";
            if (r === "Sedang") return "#f59e0b";
            return "#22c55e";
        });

        if (chartInstance) chartInstance.destroy();

        chartInstance = new Chart(document.getElementById("chartSekolah"), {
            type: "bar",
            data: {
                labels: labels,
                datasets: [{
                    label: "Jumlah Laporan",
                    data: data,
                    backgroundColor: bgColors,
                    borderRadius: 6,
                    borderSkipped: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                indexAxis: filtered.length > 8 ? "y" : "x",
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: "#e2e8f0"
                        },
                        ticks: {
                            color: "#64748b"
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: "#64748b",
                            maxRotation: 45,
                            minRotation: 45,
                            font: {
                                size: 11
                            }
                        }
                    }
                }
            }
        });
    }

    // ========== FILTER ==========
    function applyFilter() {
        const q = document.getElementById("searchInput").value.toLowerCase();
        const jenjang = document.getElementById("filterJenjang").value;
        const risiko = document.getElementById("filterRisiko").value;
        const sort = document.getElementById("filterSort").value;

        filtered = sekolahData.filter(s => {
            const matchQ = !q || s.nama.toLowerCase().includes(q) || s.kota.toLowerCase().includes(q);
            const matchJenjang = !jenjang || s.jenjang === jenjang;
            const matchRisiko = !risiko || getRisiko(s.laporan) === risiko;
            return matchQ && matchJenjang && matchRisiko;
        });

        // Sort
        if (sort === "laporan-desc") filtered.sort((a, b) => b.laporan - a.laporan);
        else if (sort === "laporan-asc") filtered.sort((a, b) => a.laporan - b.laporan);
        else if (sort === "nama-asc") filtered.sort((a, b) => a.nama.localeCompare(b.nama));
        else if (sort === "nama-desc") filtered.sort((a, b) => b.nama.localeCompare(a.nama));

        renderTable();
    }

    function resetFilter() {
        document.getElementById("searchInput").value = "";
        document.getElementById("filterJenjang").value = "";
        document.getElementById("filterRisiko").value = "";
        document.getElementById("filterSort").value = "laporan-desc";
        filtered = [...sekolahData].sort((a, b) => b.laporan - a.laporan);
        renderTable();
    }

    // Event listeners
    document.getElementById("searchInput").addEventListener("input", applyFilter);
    document.getElementById("filterJenjang").addEventListener("change", applyFilter);
    document.getElementById("filterRisiko").addEventListener("change", applyFilter);
    document.getElementById("filterSort").addEventListener("change", applyFilter);

    // Init
    filtered = [...sekolahData].sort((a, b) => b.laporan - a.laporan);
    renderTable();
</script>