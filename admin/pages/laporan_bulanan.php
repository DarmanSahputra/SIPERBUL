<div class="max-w-7xl m-4 p-2">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8 no-print">
        <div>
            <h1 class="text-2xl md:text-3xl font-bold text-slate-900 mb-1">Laporan Bulanan</h1>
            <p class="text-slate-500 text-sm">Membuat atau mengunduh laporan CSV/PDF</p>
        </div>
    </div>

    <!-- Pilih Periode & Aksi -->
    <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm mb-6 no-print">
        <div class="flex flex-col lg:flex-row gap-4 lg:items-end lg:justify-between">
            <div class="flex flex-wrap gap-3">
                <div>
                    <label class="text-xs text-slate-500 mb-1 block">Bulan</label>
                    <select id="selectBulan" class="text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7" selected>Juli</option>
                        <option value="8">Agustus</option>
                    </select>
                </div>
                <div>
                    <label class="text-xs text-slate-500 mb-1 block">Tahun</label>
                    <select id="selectTahun" class="text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="2026" selected>2026</option>
                        <option value="2025">2025</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button onclick="generateLaporan()" class="px-5 py-2.5 text-sm font-medium rounded-lg bg-blue-600 hover:bg-blue-700 text-white transition shadow-sm">
                        Buat Laporan
                    </button>
                </div>
            </div>
            <div class="flex gap-2">
                <button onclick="unduhCSV()" id="btnCSV" disabled class="inline-flex items-center gap-2 px-4 py-2.5 text-sm font-medium rounded-lg border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 transition disabled:opacity-40 disabled:cursor-not-allowed">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Unduh CSV
                </button>
                <button onclick="unduhPDF()" id="btnPDF" disabled class="inline-flex items-center gap-2 px-4 py-2.5 text-sm font-medium rounded-lg border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 transition disabled:opacity-40 disabled:cursor-not-allowed">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                    Unduh PDF
                </button>
            </div>
        </div>
    </div>

    <!-- Area Laporan (kosong dulu) -->
    <div id="emptyState" class="bg-white border border-slate-200 rounded-xl p-16 shadow-sm text-center no-print">
        <svg class="w-12 h-12 mx-auto text-slate-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg>
        <p class="text-slate-500 text-sm">Pilih bulan & tahun, lalu klik <strong>Buat Laporan</strong> untuk menampilkan data.</p>
    </div>

    <!-- Preview Laporan -->
    <div id="reportArea" class="hidden">
        <div id="printArea">
            <!-- Judul Laporan -->
            <div class="bg-white border border-slate-200 rounded-xl p-6 shadow-sm mb-5">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 mb-1">
                    <h2 class="text-xl font-bold text-slate-900">Laporan Bulanan Kasus Bullying</h2>
                    <span class="text-sm text-slate-500" id="reportPeriode"></span>
                </div>
                <p class="text-xs text-slate-400">Dibuat: <span id="reportTanggal"></span> · Sistem Monitoring Bullying</p>
            </div>

            <!-- Stats Ringkas -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-5">
                <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
                    <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Total Kasus</p>
                    <p class="text-2xl font-bold text-slate-900" id="rTotal">0</p>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
                    <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Selesai</p>
                    <p class="text-2xl font-bold text-emerald-600" id="rSelesai">0</p>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
                    <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Dalam Proses</p>
                    <p class="text-2xl font-bold text-amber-500" id="rProses">0</p>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
                    <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Tingkat Penyelesaian</p>
                    <p class="text-2xl font-bold text-blue-600" id="rPersen">0%</p>
                </div>
            </div>

            <!-- Charts -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5 no-print">
                <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm">
                    <h3 class="text-sm font-semibold text-slate-800 mb-3">Kasus per Jenis Bullying</h3>
                    <div class="h-56"><canvas id="chartJenis"></canvas></div>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm">
                    <h3 class="text-sm font-semibold text-slate-800 mb-3">Kasus per Sekolah</h3>
                    <div class="h-56"><canvas id="chartSekolah"></canvas></div>
                </div>
            </div>

            <!-- Tabel Ringkasan per Sekolah -->
            <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden mb-5">
                <div class="px-5 py-3 border-b border-slate-200">
                    <h3 class="text-sm font-semibold text-slate-800">Ringkasan per Sekolah</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm" id="tabelSekolah">
                        <thead>
                            <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider border-b border-slate-200">
                                <th class="text-left py-3 px-4 font-medium">Sekolah</th>
                                <th class="text-left py-3 px-4 font-medium">Total</th>
                                <th class="text-left py-3 px-4 font-medium">Selesai</th>
                                <th class="text-left py-3 px-4 font-medium">Proses</th>
                                <th class="text-left py-3 px-4 font-medium">Jenis Tertinggi</th>
                            </tr>
                        </thead>
                        <tbody id="tbodySekolah" class="divide-y divide-slate-100"></tbody>
                    </table>
                </div>
            </div>

            <!-- Tabel Detail Kasus -->
            <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden mb-5">
                <div class="px-5 py-3 border-b border-slate-200">
                    <h3 class="text-sm font-semibold text-slate-800">Detail Kasus</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm" id="tabelDetail">
                        <thead>
                            <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider border-b border-slate-200">
                                <th class="text-left py-3 px-4 font-medium">ID</th>
                                <th class="text-left py-3 px-4 font-medium">Tanggal</th>
                                <th class="text-left py-3 px-4 font-medium">Sekolah</th>
                                <th class="text-left py-3 px-4 font-medium">Jenis</th>
                                <th class="text-left py-3 px-4 font-medium">Petugas</th>
                                <th class="text-left py-3 px-4 font-medium">Status</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyDetail" class="divide-y divide-slate-100"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Toast -->
<div id="toast" class="fixed bottom-6 right-6 bg-slate-900 text-white text-sm px-5 py-3 rounded-xl shadow-lg hidden z-50 no-print"></div>

<script>
    const namaBulan = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

    // Data dummy per bulan (hanya Juli & Juni punya data lengkap sebagai contoh)
    const dataPerBulan = {
        "2026-7": {
            kasus: [{
                    id: "BLY-2026-0247",
                    tanggal: "2026-07-30",
                    sekolah: "SMP Negeri 3 Bandung",
                    jenis: "Verbal",
                    petugas: "Budi Santoso",
                    status: "Baru"
                },
                {
                    id: "BLY-2026-0246",
                    tanggal: "2026-07-28",
                    sekolah: "SMA Negeri 5 Surabaya",
                    jenis: "Cyberbullying",
                    petugas: "Siti Rahayu",
                    status: "Dalam Proses"
                },
                {
                    id: "BLY-2026-0245",
                    tanggal: "2026-07-27",
                    sekolah: "SMP Negeri 12 Jakarta",
                    jenis: "Fisik",
                    petugas: "Andi Wijaya",
                    status: "Dalam Proses"
                },
                {
                    id: "BLY-2026-0244",
                    tanggal: "2026-07-25",
                    sekolah: "SMA Negeri 2 Medan",
                    jenis: "Sosial",
                    petugas: "Eko Prasetyo",
                    status: "Dalam Proses"
                },
                {
                    id: "BLY-2026-0243",
                    tanggal: "2026-07-24",
                    sekolah: "SMP Negeri 8 Yogyakarta",
                    jenis: "Verbal",
                    petugas: "Maya Putri",
                    status: "Dalam Proses"
                },
                {
                    id: "BLY-2026-0242",
                    tanggal: "2026-07-22",
                    sekolah: "SMA Negeri 1 Makassar",
                    jenis: "Cyberbullying",
                    petugas: "Dewi Lestari",
                    status: "Selesai"
                },
                {
                    id: "BLY-2026-0241",
                    tanggal: "2026-07-20",
                    sekolah: "SMP Negeri 4 Semarang",
                    jenis: "Fisik",
                    petugas: "Rudi Hartono",
                    status: "Selesai"
                },
                {
                    id: "BLY-2026-0240",
                    tanggal: "2026-07-18",
                    sekolah: "SMP Negeri 3 Bandung",
                    jenis: "Sosial",
                    petugas: "Budi Santoso",
                    status: "Selesai"
                },
                {
                    id: "BLY-2026-0239",
                    tanggal: "2026-07-15",
                    sekolah: "SMA Negeri 5 Surabaya",
                    jenis: "Verbal",
                    petugas: "Siti Rahayu",
                    status: "Selesai"
                },
                {
                    id: "BLY-2026-0238",
                    tanggal: "2026-07-12",
                    sekolah: "SMP Negeri 12 Jakarta",
                    jenis: "Cyberbullying",
                    petugas: "Andi Wijaya",
                    status: "Selesai"
                },
                {
                    id: "BLY-2026-0237",
                    tanggal: "2026-07-10",
                    sekolah: "SMA Negeri 2 Medan",
                    jenis: "Fisik",
                    petugas: "Eko Prasetyo",
                    status: "Dalam Proses"
                },
                {
                    id: "BLY-2026-0236",
                    tanggal: "2026-07-08",
                    sekolah: "SMP Negeri 8 Yogyakarta",
                    jenis: "Verbal",
                    petugas: "Rudi Hartono",
                    status: "Selesai"
                },
                {
                    id: "BLY-2026-0235",
                    tanggal: "2026-07-05",
                    sekolah: "SMA Negeri 1 Makassar",
                    jenis: "Sosial",
                    petugas: "Dewi Lestari",
                    status: "Selesai"
                },
                {
                    id: "BLY-2026-0234",
                    tanggal: "2026-07-03",
                    sekolah: "SMP Negeri 4 Semarang",
                    jenis: "Cyberbullying",
                    petugas: "Siti Rahayu",
                    status: "Selesai"
                },
                {
                    id: "BLY-2026-0233",
                    tanggal: "2026-07-01",
                    sekolah: "SMP Negeri 3 Bandung",
                    jenis: "Fisik",
                    petugas: "Andi Wijaya",
                    status: "Selesai"
                },
            ]
        },
        "2026-6": {
            kasus: [{
                    id: "BLY-2026-0232",
                    tanggal: "2026-06-28",
                    sekolah: "SMA Negeri 5 Surabaya",
                    jenis: "Verbal",
                    petugas: "Siti Rahayu",
                    status: "Selesai"
                },
                {
                    id: "BLY-2026-0231",
                    tanggal: "2026-06-25",
                    sekolah: "SMP Negeri 12 Jakarta",
                    jenis: "Sosial",
                    petugas: "Andi Wijaya",
                    status: "Selesai"
                },
                {
                    id: "BLY-2026-0230",
                    tanggal: "2026-06-22",
                    sekolah: "SMA Negeri 2 Medan",
                    jenis: "Cyberbullying",
                    petugas: "Eko Prasetyo",
                    status: "Baru"
                },
                {
                    id: "BLY-2026-0229",
                    tanggal: "2026-06-20",
                    sekolah: "SMP Negeri 8 Yogyakarta",
                    jenis: "Fisik",
                    petugas: "Rudi Hartono",
                    status: "Selesai"
                },
                {
                    id: "BLY-2026-0228",
                    tanggal: "2026-06-18",
                    sekolah: "SMA Negeri 1 Makassar",
                    jenis: "Verbal",
                    petugas: "Dewi Lestari",
                    status: "Selesai"
                },
                {
                    id: "BLY-2026-0227",
                    tanggal: "2026-06-15",
                    sekolah: "SMP Negeri 4 Semarang",
                    jenis: "Sosial",
                    petugas: "Budi Santoso",
                    status: "Dalam Proses"
                },
                {
                    id: "BLY-2026-0226",
                    tanggal: "2026-06-12",
                    sekolah: "SMP Negeri 3 Bandung",
                    jenis: "Cyberbullying",
                    petugas: "Budi Santoso",
                    status: "Selesai"
                },
                {
                    id: "BLY-2026-0225",
                    tanggal: "2026-06-10",
                    sekolah: "SMA Negeri 5 Surabaya",
                    jenis: "Fisik",
                    petugas: "Siti Rahayu",
                    status: "Selesai"
                },
                {
                    id: "BLY-2026-0224",
                    tanggal: "2026-06-08",
                    sekolah: "SMP Negeri 12 Jakarta",
                    jenis: "Verbal",
                    petugas: "Andi Wijaya",
                    status: "Baru"
                },
                {
                    id: "BLY-2026-0223",
                    tanggal: "2026-06-05",
                    sekolah: "SMA Negeri 2 Medan",
                    jenis: "Sosial",
                    petugas: "Eko Prasetyo",
                    status: "Selesai"
                },
                {
                    id: "BLY-2026-0222",
                    tanggal: "2026-06-02",
                    sekolah: "SMP Negeri 8 Yogyakarta",
                    jenis: "Verbal",
                    petugas: "Maya Putri",
                    status: "Selesai"
                },
            ]
        }
    };

    // Generate data acak untuk bulan lain
    function getData(bulan, tahun) {
        const key = `${tahun}-${bulan}`;
        if (dataPerBulan[key]) return dataPerBulan[key].kasus;

        // Dummy random untuk bulan tanpa data fixed
        const sekolahList = ["SMP Negeri 3 Bandung", "SMA Negeri 5 Surabaya", "SMP Negeri 12 Jakarta", "SMA Negeri 2 Medan", "SMP Negeri 8 Yogyakarta", "SMA Negeri 1 Makassar", "SMP Negeri 4 Semarang"];
        const jenisList = ["Verbal", "Fisik", "Sosial", "Cyberbullying"];
        const petugasList = ["Budi Santoso", "Siti Rahayu", "Andi Wijaya", "Dewi Lestari", "Rudi Hartono", "Eko Prasetyo"];
        const statusList = ["Selesai", "Selesai", "Selesai", "Dalam Proses", "Baru"];
        const n = 8 + Math.floor(Math.random() * 8);
        const kasus = [];
        for (let i = 0; i < n; i++) {
            const day = String(1 + Math.floor(Math.random() * 28)).padStart(2, "0");
            kasus.push({
                id: `BLY-${tahun}-${String(bulan).padStart(2, "0")}${String(i + 1).padStart(3, "0")}`,
                tanggal: `${tahun}-${String(bulan).padStart(2, "0")}-${day}`,
                sekolah: sekolahList[Math.floor(Math.random() * sekolahList.length)],
                jenis: jenisList[Math.floor(Math.random() * jenisList.length)],
                petugas: petugasList[Math.floor(Math.random() * petugasList.length)],
                status: statusList[Math.floor(Math.random() * statusList.length)],
            });
        }
        return kasus.sort((a, b) => b.tanggal.localeCompare(a.tanggal));
    }

    let currentData = [];
    let currentPeriode = "";
    let chartJenis = null;
    let chartSekolah = null;

    function generateLaporan() {
        const bulan = +document.getElementById("selectBulan").value;
        const tahun = +document.getElementById("selectTahun").value;
        currentData = getData(bulan, tahun);
        currentPeriode = `${namaBulan[bulan]} ${tahun}`;

        document.getElementById("emptyState").classList.add("hidden");
        document.getElementById("reportArea").classList.remove("hidden");
        document.getElementById("btnCSV").disabled = false;
        document.getElementById("btnPDF").disabled = false;

        document.getElementById("reportPeriode").textContent = `Periode: ${currentPeriode}`;
        document.getElementById("reportTanggal").textContent = new Date().toLocaleString("id-ID", {
            day: "2-digit",
            month: "long",
            year: "numeric",
            hour: "2-digit",
            minute: "2-digit"
        });

        // Stats
        const total = currentData.length;
        const selesai = currentData.filter(k => k.status === "Selesai").length;
        const proses = currentData.filter(k => k.status === "Dalam Proses" || k.status === "Baru").length;
        const persen = total ? Math.round((selesai / total) * 100) : 0;

        document.getElementById("rTotal").textContent = total;
        document.getElementById("rSelesai").textContent = selesai;
        document.getElementById("rProses").textContent = proses;
        document.getElementById("rPersen").textContent = persen + "%";

        // Aggregate per sekolah
        const sekolahMap = {};
        currentData.forEach(k => {
            if (!sekolahMap[k.sekolah]) sekolahMap[k.sekolah] = {
                total: 0,
                selesai: 0,
                proses: 0,
                jenis: {}
            };
            sekolahMap[k.sekolah].total++;
            if (k.status === "Selesai") sekolahMap[k.sekolah].selesai++;
            else sekolahMap[k.sekolah].proses++;
            sekolahMap[k.sekolah].jenis[k.jenis] = (sekolahMap[k.sekolah].jenis[k.jenis] || 0) + 1;
        });

        const tbodySekolah = document.getElementById("tbodySekolah");
        tbodySekolah.innerHTML = Object.entries(sekolahMap)
            .sort((a, b) => b[1].total - a[1].total)
            .map(([nama, d]) => {
                const jenisTinggi = Object.entries(d.jenis).sort((a, b) => b[1] - a[1])[0]?.[0] || "—";
                return `<tr class="hover:bg-slate-50">
                        <td class="py-2.5 px-4 text-slate-800">${nama}</td>
                        <td class="py-2.5 px-4 font-medium">${d.total}</td>
                        <td class="py-2.5 px-4 text-emerald-600">${d.selesai}</td>
                        <td class="py-2.5 px-4 text-amber-600">${d.proses}</td>
                        <td class="py-2.5 px-4 text-slate-600">${jenisTinggi}</td>
                    </tr>`;
            }).join("");

        // Detail
        document.getElementById("tbodyDetail").innerHTML = currentData.map(k => `
                <tr class="hover:bg-slate-50">
                    <td class="py-2.5 px-4 font-medium text-slate-800">${k.id}</td>
                    <td class="py-2.5 px-4 text-slate-600">${formatTgl(k.tanggal)}</td>
                    <td class="py-2.5 px-4 text-slate-700">${k.sekolah}</td>
                    <td class="py-2.5 px-4 text-slate-600">${k.jenis}</td>
                    <td class="py-2.5 px-4 text-slate-600">${k.petugas}</td>
                    <td class="py-2.5 px-4">${badgeStatus(k.status)}</td>
                </tr>
            `).join("");

        // Charts
        renderCharts(currentData, sekolahMap);
        showToast(`Laporan ${currentPeriode} berhasil dibuat`);
    }

    function renderCharts(kasus, sekolahMap) {
        // Jenis
        const jenisCount = {};
        kasus.forEach(k => {
            jenisCount[k.jenis] = (jenisCount[k.jenis] || 0) + 1;
        });
        if (chartJenis) chartJenis.destroy();
        chartJenis = new Chart(document.getElementById("chartJenis"), {
            type: "doughnut",
            data: {
                labels: Object.keys(jenisCount),
                datasets: [{
                    data: Object.values(jenisCount),
                    backgroundColor: ["#3b82f6", "#ef4444", "#a855f7", "#06b6d4"],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: "right",
                        labels: {
                            color: "#334155",
                            usePointStyle: true,
                            padding: 12
                        }
                    }
                },
                cutout: "55%"
            }
        });

        // Sekolah
        const labels = Object.keys(sekolahMap);
        const values = labels.map(l => sekolahMap[l].total);
        if (chartSekolah) chartSekolah.destroy();
        chartSekolah = new Chart(document.getElementById("chartSekolah"), {
            type: "bar",
            data: {
                labels: labels.map(l => l.replace("Negeri ", "")),
                datasets: [{
                    label: "Kasus",
                    data: values,
                    backgroundColor: "#3b82f6",
                    borderRadius: 4,
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
                            color: "#e2e8f0"
                        },
                        ticks: {
                            color: "#64748b",
                            stepSize: 1
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: "#64748b",
                            maxRotation: 45,
                            minRotation: 30,
                            font: {
                                size: 10
                            }
                        }
                    }
                }
            }
        });
    }

    // ========== CSV ==========
    function unduhCSV() {
        if (!currentData.length) return;

        const headers = ["ID", "Tanggal", "Sekolah", "Jenis", "Petugas", "Status"];
        const rows = currentData.map(k => [k.id, k.tanggal, k.sekolah, k.jenis, k.petugas, k.status]);

        // Tambah ringkasan di atas
        let csv = `Laporan Bulanan Kasus Bullying - ${currentPeriode}\n`;
        csv += `Dibuat: ${new Date().toLocaleString("id-ID")}\n\n`;
        csv += `Total Kasus,${currentData.length}\n`;
        csv += `Selesai,${currentData.filter(k => k.status === "Selesai").length}\n`;
        csv += `Dalam Proses,${currentData.filter(k => k.status !== "Selesai").length}\n\n`;
        csv += headers.join(",") + "\n";
        rows.forEach(r => {
            csv += r.map(cell => `"${cell}"`).join(",") + "\n";
        });

        const blob = new Blob(["\uFEFF" + csv], {
            type: "text/csv;charset=utf-8;"
        });
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        a.href = url;
        a.download = `Laporan_Bulanan_${currentPeriode.replace(" ", "_")}.csv`;
        a.click();
        URL.revokeObjectURL(url);
        showToast("File CSV berhasil diunduh");
    }

    // ========== PDF (via print) ==========
    function unduhPDF() {
        if (!currentData.length) return;
        showToast("Membuka dialog cetak — pilih 'Save as PDF'");
        setTimeout(() => window.print(), 400);
    }

    function badgeStatus(s) {
        const map = {
            "Selesai": "bg-emerald-100 text-emerald-700",
            "Dalam Proses": "bg-amber-100 text-amber-700",
            "Baru": "bg-blue-100 text-blue-700"
        };
        return `<span class="inline-block px-2 py-0.5 rounded-full text-xs font-semibold ${map[s] || "bg-slate-100 text-slate-600"}">${s}</span>`;
    }

    function formatTgl(iso) {
        return new Date(iso).toLocaleDateString("id-ID", {
            day: "2-digit",
            month: "short",
            year: "numeric"
        });
    }

    function showToast(msg) {
        const t = document.getElementById("toast");
        t.textContent = msg;
        t.classList.remove("hidden");
        setTimeout(() => t.classList.add("hidden"), 2800);
    }
</script>