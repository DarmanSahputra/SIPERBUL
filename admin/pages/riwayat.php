<div class="max-w-7xl m-4 p-2">

    <!-- Header -->
    <h1 class="text-2xl md:text-3xl font-bold text-slate-900 mb-1">Riwayat Tindakan</h1>
    <p class="text-slate-500 text-sm mb-8">Melihat seluruh tindakan yang dilakukan petugas</p>

    <!-- Stats -->
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-6">
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Total Tindakan</p>
            <p class="text-2xl font-bold text-slate-900" id="statTotal">0</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Hari Ini</p>
            <p class="text-2xl font-bold text-blue-600" id="statHariIni">0</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Kasus Diselesaikan</p>
            <p class="text-2xl font-bold text-emerald-600" id="statSelesai">0</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Petugas Aktif</p>
            <p class="text-2xl font-bold text-slate-900" id="statPetugas">0</p>
        </div>
    </div>

    <!-- Filter -->
    <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm mb-5">
        <div class="flex flex-col lg:flex-row gap-3 lg:items-center lg:justify-between">
            <div class="relative flex-1 max-w-md">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" id="searchInput" placeholder="Cari ID laporan, petugas, atau sekolah..."
                    class="w-full pl-10 pr-4 py-2.5 text-sm border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50">
            </div>
            <div class="flex flex-wrap gap-2">
                <select id="filterPetugas" class="text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua Petugas</option>
                </select>
                <select id="filterTindakan" class="text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua Tindakan</option>
                    <option value="Menerima laporan">Menerima laporan</option>
                    <option value="Memulai investigasi">Memulai investigasi</option>
                    <option value="Wawancara pihak terkait">Wawancara pihak terkait</option>
                    <option value="Mediasi">Mediasi</option>
                    <option value="Hubungi orang tua">Hubungi orang tua</option>
                    <option value="Berikan sanksi">Berikan sanksi</option>
                    <option value="Pendampingan korban">Pendampingan korban</option>
                    <option value="Update status">Update status</option>
                    <option value="Menyelesaikan kasus">Menyelesaikan kasus</option>
                </select>
                <select id="filterSekolah" class="text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua Sekolah</option>
                    <option value="SMP Negeri 3 Bandung">SMP Negeri 3 Bandung</option>
                    <option value="SMA Negeri 5 Surabaya">SMA Negeri 5 Surabaya</option>
                    <option value="SMP Negeri 12 Jakarta">SMP Negeri 12 Jakarta</option>
                    <option value="SMA Negeri 2 Medan">SMA Negeri 2 Medan</option>
                    <option value="SMP Negeri 8 Yogyakarta">SMP Negeri 8 Yogyakarta</option>
                    <option value="SMA Negeri 1 Makassar">SMA Negeri 1 Makassar</option>
                    <option value="SMP Negeri 4 Semarang">SMP Negeri 4 Semarang</option>
                </select>
                <button onclick="resetFilter()" class="text-sm px-4 py-2.5 rounded-lg border border-slate-200 bg-white hover:bg-slate-50 text-slate-600 transition">Reset</button>
            </div>
        </div>
    </div>

    <!-- Timeline / List -->
    <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
        <div class="px-5 py-4 border-b border-slate-200 flex items-center justify-between">
            <h2 class="text-base font-semibold text-slate-800">Log Tindakan</h2>
            <p class="text-xs text-slate-500"><span id="showingCount">0</span> tindakan ditampilkan</p>
        </div>
        <div id="listTindakan" class="divide-y divide-slate-100 max-h-[600px] overflow-y-auto"></div>
    </div>
</div>

<!-- Modal Detail -->
<div id="modalDetail" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl shadow-xl max-w-md w-full">
        <div class="flex items-center justify-between p-5 border-b border-slate-200">
            <h3 class="text-lg font-semibold text-slate-900">Detail Tindakan</h3>
            <button onclick="tutupModal()" class="text-slate-400 hover:text-slate-600 text-xl leading-none">&times;</button>
        </div>
        <div id="modalBody" class="p-5 space-y-3 text-sm"></div>
        <div class="p-5 border-t border-slate-200 flex justify-end">
            <button onclick="tutupModal()" class="px-4 py-2 text-sm rounded-lg border border-slate-200 hover:bg-slate-50 transition">Tutup</button>
        </div>
    </div>
</div>

<script>
    const tindakanData = [{
            id: 1,
            waktu: "2026-08-06 14:20",
            petugas: "Budi Santoso",
            tindakan: "Menyelesaikan kasus",
            laporan: "BLY-2026-0242",
            sekolah: "SMA Negeri 1 Makassar",
            jenis: "Cyberbullying",
            catatan: "Akun pelaku dihapus. Korban mendapat konseling. Kasus ditutup."
        },
        {
            id: 2,
            waktu: "2026-08-06 13:45",
            petugas: "Budi Santoso",
            tindakan: "Pendampingan korban",
            laporan: "BLY-2026-0242",
            sekolah: "SMA Negeri 1 Makassar",
            jenis: "Cyberbullying",
            catatan: "Sesi konseling singkat dengan guru BK."
        },
        {
            id: 3,
            waktu: "2026-08-06 11:05",
            petugas: "Siti Rahayu",
            tindakan: "Memulai investigasi",
            laporan: "BLY-2026-0244",
            sekolah: "SMA Negeri 2 Medan",
            jenis: "Sosial",
            catatan: "Mulai kumpulkan keterangan dari korban dan saksi."
        },
        {
            id: 4,
            waktu: "2026-08-06 10:30",
            petugas: "Siti Rahayu",
            tindakan: "Menerima laporan",
            laporan: "BLY-2026-0244",
            sekolah: "SMA Negeri 2 Medan",
            jenis: "Sosial",
            catatan: "Laporan dari orang tua diterima dan diverifikasi awal."
        },
        {
            id: 5,
            waktu: "2026-08-06 09:15",
            petugas: "Dewi Lestari",
            tindakan: "Update status",
            laporan: "BLY-2026-0237",
            sekolah: "SMA Negeri 2 Medan",
            jenis: "Fisik",
            catatan: "Status diubah ke Dalam Proses setelah investigasi awal."
        },
        {
            id: 6,
            waktu: "2026-08-06 08:50",
            petugas: "Dewi Lestari",
            tindakan: "Wawancara pihak terkait",
            laporan: "BLY-2026-0237",
            sekolah: "SMA Negeri 2 Medan",
            jenis: "Fisik",
            catatan: "Wawancara korban, pelaku, dan 2 saksi di lapangan olahraga."
        },
        {
            id: 7,
            waktu: "2026-08-05 16:40",
            petugas: "Andi Wijaya",
            tindakan: "Menyelesaikan kasus",
            laporan: "BLY-2026-0238",
            sekolah: "SMP Negeri 12 Jakarta",
            jenis: "Cyberbullying",
            catatan: "Pesan ancaman dihapus. Pelaku ditegur tertulis. Kasus selesai."
        },
        {
            id: 8,
            waktu: "2026-08-05 15:10",
            petugas: "Budi Santoso",
            tindakan: "Memulai investigasi",
            laporan: "BLY-2026-0245",
            sekolah: "SMP Negeri 12 Jakarta",
            jenis: "Fisik",
            catatan: "Investigasi insiden dorong-dorongan di koridor."
        },
        {
            id: 9,
            waktu: "2026-08-05 14:00",
            petugas: "Budi Santoso",
            tindakan: "Menerima laporan",
            laporan: "BLY-2026-0245",
            sekolah: "SMP Negeri 12 Jakarta",
            jenis: "Fisik",
            catatan: "Laporan dari guru diterima."
        },
        {
            id: 10,
            waktu: "2026-08-05 11:20",
            petugas: "Andi Wijaya",
            tindakan: "Hubungi orang tua",
            laporan: "BLY-2026-0238",
            sekolah: "SMP Negeri 12 Jakarta",
            jenis: "Cyberbullying",
            catatan: "Orang tua korban dan pelaku dihubungi via telepon."
        },
        {
            id: 11,
            waktu: "2026-08-04 13:50",
            petugas: "Rudi Hartono",
            tindakan: "Menyelesaikan kasus",
            laporan: "BLY-2026-0241",
            sekolah: "SMP Negeri 4 Semarang",
            jenis: "Fisik",
            catatan: "Pelaku skors 3 hari. Korban aman. Kasus ditutup."
        },
        {
            id: 12,
            waktu: "2026-08-04 11:00",
            petugas: "Rudi Hartono",
            tindakan: "Berikan sanksi",
            laporan: "BLY-2026-0241",
            sekolah: "SMP Negeri 4 Semarang",
            jenis: "Fisik",
            catatan: "Sanksi skors 3 hari disepakati bersama kepala sekolah."
        },
        {
            id: 13,
            waktu: "2026-08-04 10:20",
            petugas: "Siti Rahayu",
            tindakan: "Update status",
            laporan: "BLY-2026-0239",
            sekolah: "SMA Negeri 5 Surabaya",
            jenis: "Verbal",
            catatan: "Status diubah menjadi Selesai."
        },
        {
            id: 14,
            waktu: "2026-08-04 09:40",
            petugas: "Siti Rahayu",
            tindakan: "Mediasi",
            laporan: "BLY-2026-0239",
            sekolah: "SMA Negeri 5 Surabaya",
            jenis: "Verbal",
            catatan: "Mediasi antara korban dan pelaku berhasil. Kedua pihak sepakat."
        },
        {
            id: 15,
            waktu: "2026-08-03 15:30",
            petugas: "Andi Wijaya",
            tindakan: "Memulai investigasi",
            laporan: "BLY-2026-0243",
            sekolah: "SMP Negeri 8 Yogyakarta",
            jenis: "Verbal",
            catatan: "Investigasi ejekan berulang selama 2 minggu."
        },
        {
            id: 16,
            waktu: "2026-08-03 14:00",
            petugas: "Andi Wijaya",
            tindakan: "Menerima laporan",
            laporan: "BLY-2026-0243",
            sekolah: "SMP Negeri 8 Yogyakarta",
            jenis: "Verbal",
            catatan: "Laporan dari siswa diterima."
        },
        {
            id: 17,
            waktu: "2026-08-02 16:00",
            petugas: "Dewi Lestari",
            tindakan: "Pendampingan korban",
            laporan: "BLY-2026-0235",
            sekolah: "SMA Negeri 1 Makassar",
            jenis: "Sosial",
            catatan: "Korban didampingi guru BK, 2 sesi."
        },
        {
            id: 18,
            waktu: "2026-08-02 11:30",
            petugas: "Dewi Lestari",
            tindakan: "Menyelesaikan kasus",
            laporan: "BLY-2026-0235",
            sekolah: "SMA Negeri 1 Makassar",
            jenis: "Sosial",
            catatan: "Pengucilan dihentikan. Pelaku dibina. Kasus selesai."
        },
        {
            id: 19,
            waktu: "2026-08-01 10:15",
            petugas: "Eko Prasetyo",
            tindakan: "Wawancara pihak terkait",
            laporan: "BLY-2026-0230",
            sekolah: "SMA Negeri 2 Medan",
            jenis: "Cyberbullying",
            catatan: "Wawancara korban terkait video yang dipermalukan."
        },
        {
            id: 20,
            waktu: "2026-07-30 14:20",
            petugas: "Rudi Hartono",
            tindakan: "Hubungi orang tua",
            laporan: "BLY-2026-0236",
            sekolah: "SMP Negeri 8 Yogyakarta",
            jenis: "Verbal",
            catatan: "Orang tua pelaku dan korban diundang ke sekolah."
        },
        {
            id: 21,
            waktu: "2026-07-28 09:00",
            petugas: "Budi Santoso",
            tindakan: "Mediasi",
            laporan: "BLY-2026-0240",
            sekolah: "SMP Negeri 3 Bandung",
            jenis: "Sosial",
            catatan: "Mediasi pengucilan dari kelompok belajar. Sepakat berdamai."
        },
        {
            id: 22,
            waktu: "2026-07-27 11:45",
            petugas: "Siti Rahayu",
            tindakan: "Berikan sanksi",
            laporan: "BLY-2026-0239",
            sekolah: "SMA Negeri 5 Surabaya",
            jenis: "Verbal",
            catatan: "Peringatan tertulis kepada pelaku."
        },
        {
            id: 23,
            waktu: "2026-07-25 13:10",
            petugas: "Andi Wijaya",
            tindakan: "Update status",
            laporan: "BLY-2026-0233",
            sekolah: "SMP Negeri 3 Bandung",
            jenis: "Fisik",
            catatan: "Status diubah ke Selesai setelah sanksi dijalankan."
        },
        {
            id: 24,
            waktu: "2026-07-22 08:30",
            petugas: "Eko Prasetyo",
            tindakan: "Menerima laporan",
            laporan: "BLY-2026-0230",
            sekolah: "SMA Negeri 2 Medan",
            jenis: "Cyberbullying",
            catatan: "Laporan dari siswa terkait video di media sosial."
        },
        {
            id: 25,
            waktu: "2026-07-18 15:00",
            petugas: "Rudi Hartono",
            tindakan: "Menyelesaikan kasus",
            laporan: "BLY-2026-0236",
            sekolah: "SMP Negeri 8 Yogyakarta",
            jenis: "Verbal",
            catatan: "Ejekan dihentikan. Monitoring 2 minggu dijadwalkan."
        },
    ];

    let filtered = [...tindakanData];

    // Warna badge per jenis tindakan
    function badgeTindakan(t) {
        const map = {
            "Menerima laporan": "bg-slate-100 text-slate-700",
            "Memulai investigasi": "bg-blue-100 text-blue-700",
            "Wawancara pihak terkait": "bg-indigo-100 text-indigo-700",
            "Mediasi": "bg-purple-100 text-purple-700",
            "Hubungi orang tua": "bg-cyan-100 text-cyan-700",
            "Berikan sanksi": "bg-orange-100 text-orange-700",
            "Pendampingan korban": "bg-pink-100 text-pink-700",
            "Update status": "bg-amber-100 text-amber-700",
            "Menyelesaikan kasus": "bg-emerald-100 text-emerald-700",
        };
        return `<span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold ${map[t] || "bg-slate-100 text-slate-600"}">${t}</span>`;
    }

    function iconTindakan(t) {
        const map = {
            "Menerima laporan": "bg-slate-100 text-slate-600",
            "Memulai investigasi": "bg-blue-100 text-blue-600",
            "Wawancara pihak terkait": "bg-indigo-100 text-indigo-600",
            "Mediasi": "bg-purple-100 text-purple-600",
            "Hubungi orang tua": "bg-cyan-100 text-cyan-600",
            "Berikan sanksi": "bg-orange-100 text-orange-600",
            "Pendampingan korban": "bg-pink-100 text-pink-600",
            "Update status": "bg-amber-100 text-amber-600",
            "Menyelesaikan kasus": "bg-emerald-100 text-emerald-600",
        };
        return map[t] || "bg-slate-100 text-slate-600";
    }

    function updateStats() {
        document.getElementById("statTotal").textContent = tindakanData.length;
        document.getElementById("statHariIni").textContent = tindakanData.filter(t => t.waktu.startsWith("2026-08-06")).length;
        document.getElementById("statSelesai").textContent = tindakanData.filter(t => t.tindakan === "Menyelesaikan kasus").length;
        document.getElementById("statPetugas").textContent = [...new Set(tindakanData.map(t => t.petugas))].length;
    }

    function populatePetugasFilter() {
        const sel = document.getElementById("filterPetugas");
        const names = [...new Set(tindakanData.map(t => t.petugas))].sort();
        names.forEach(n => {
            const opt = document.createElement("option");
            opt.value = n;
            opt.textContent = n;
            sel.appendChild(opt);
        });
    }

    function renderList() {
        const list = document.getElementById("listTindakan");
        if (filtered.length === 0) {
            list.innerHTML = `<p class="px-5 py-12 text-center text-sm text-slate-400">Tidak ada tindakan ditemukan</p>`;
            document.getElementById("showingCount").textContent = 0;
            return;
        }

        list.innerHTML = filtered.map(t => `
                <div class="px-5 py-4 flex gap-4 hover:bg-slate-50 transition cursor-pointer" onclick='lihatDetail(${JSON.stringify(t)})'>
                    <div class="w-10 h-10 rounded-full ${iconTindakan(t.tindakan)} flex items-center justify-center flex-shrink-0 text-xs font-bold">
                        ${t.petugas.split(" ").map(n => n[0]).slice(0,2).join("")}
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex flex-wrap items-center gap-2 mb-1">
                            <span class="font-medium text-slate-800 text-sm">${t.petugas}</span>
                            ${badgeTindakan(t.tindakan)}
                        </div>
                        <p class="text-xs text-slate-500">${t.laporan} · ${t.sekolah} · ${t.jenis}</p>
                        <p class="text-xs text-slate-400 mt-1 line-clamp-1">${t.catatan}</p>
                    </div>
                    <div class="text-right flex-shrink-0">
                        <p class="text-xs text-slate-400 whitespace-nowrap">${formatWaktu(t.waktu)}</p>
                    </div>
                </div>
            `).join("");

        document.getElementById("showingCount").textContent = filtered.length;
    }

    function applyFilter() {
        const q = document.getElementById("searchInput").value.toLowerCase();
        const petugas = document.getElementById("filterPetugas").value;
        const tindakan = document.getElementById("filterTindakan").value;
        const sekolah = document.getElementById("filterSekolah").value;

        filtered = tindakanData.filter(t => {
            const matchQ = !q || t.laporan.toLowerCase().includes(q) || t.petugas.toLowerCase().includes(q) || t.sekolah.toLowerCase().includes(q) || t.catatan.toLowerCase().includes(q);
            const matchP = !petugas || t.petugas === petugas;
            const matchT = !tindakan || t.tindakan === tindakan;
            const matchS = !sekolah || t.sekolah === sekolah;
            return matchQ && matchP && matchT && matchS;
        });
        renderList();
    }

    function resetFilter() {
        document.getElementById("searchInput").value = "";
        document.getElementById("filterPetugas").value = "";
        document.getElementById("filterTindakan").value = "";
        document.getElementById("filterSekolah").value = "";
        filtered = [...tindakanData];
        renderList();
    }

    function lihatDetail(t) {
        document.getElementById("modalBody").innerHTML = `
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <p class="text-xs text-slate-500">Waktu</p>
                        <p class="font-medium text-slate-800">${formatWaktu(t.waktu)}</p>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500">Petugas</p>
                        <p class="font-medium text-slate-800">${t.petugas}</p>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500">Tindakan</p>
                        <p class="mt-0.5">${badgeTindakan(t.tindakan)}</p>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500">ID Laporan</p>
                        <p class="font-medium text-slate-800">${t.laporan}</p>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500">Sekolah</p>
                        <p class="font-medium text-slate-800">${t.sekolah}</p>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500">Jenis Bullying</p>
                        <p class="font-medium text-slate-800">${t.jenis}</p>
                    </div>
                </div>
                <div>
                    <p class="text-xs text-slate-500 mb-1">Catatan</p>
                    <p class="text-slate-700 bg-slate-50 rounded-lg p-3 leading-relaxed">${t.catatan}</p>
                </div>
            `;
        document.getElementById("modalDetail").classList.remove("hidden");
        document.getElementById("modalDetail").classList.add("flex");
    }

    function tutupModal() {
        document.getElementById("modalDetail").classList.add("hidden");
        document.getElementById("modalDetail").classList.remove("flex");
    }

    function formatWaktu(str) {
        const d = new Date(str.replace(" ", "T"));
        return d.toLocaleString("id-ID", {
            day: "2-digit",
            month: "short",
            year: "numeric",
            hour: "2-digit",
            minute: "2-digit"
        });
    }

    document.getElementById("searchInput").addEventListener("input", applyFilter);
    document.getElementById("filterPetugas").addEventListener("change", applyFilter);
    document.getElementById("filterTindakan").addEventListener("change", applyFilter);
    document.getElementById("filterSekolah").addEventListener("change", applyFilter);

    updateStats();
    populatePetugasFilter();
    renderList();
</script>