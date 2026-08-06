<div class="max-w-7xl m-4 p-2">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl md:text-3xl font-bold text-slate-900 mb-1">Kelola Petugas</h1>
            <p class="text-slate-500 text-sm">Mengelola akun petugas, melihat aktivitas, dan mengirim notifikasi laporan belum ditangani</p>
        </div>
        <button onclick="bukaModalTambah()" class="inline-flex items-center gap-2 px-4 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition shadow-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Tambah Petugas
        </button>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-6">
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Total Petugas</p>
            <p class="text-2xl font-bold text-slate-900" id="statTotal">0</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Aktif</p>
            <p class="text-2xl font-bold text-emerald-600" id="statAktif">0</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Laporan Belum Ditangani</p>
            <p class="text-2xl font-bold text-red-600" id="statBelum">0</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Notifikasi Terkirim (hari ini)</p>
            <p class="text-2xl font-bold text-blue-600" id="statNotif">0</p>
        </div>
    </div>

    <!-- Tabs -->
    <div class="flex gap-1 mb-5 bg-white border border-slate-200 rounded-xl p-1 shadow-sm w-fit">
        <button onclick="switchTab('petugas')" id="tabPetugas" class="px-4 py-2 text-sm font-medium rounded-lg bg-blue-600 text-white transition">Daftar Petugas</button>
        <button onclick="switchTab('aktivitas')" id="tabAktivitas" class="px-4 py-2 text-sm font-medium rounded-lg text-slate-600 hover:bg-slate-50 transition">Aktivitas</button>
        <button onclick="switchTab('notifikasi')" id="tabNotifikasi" class="px-4 py-2 text-sm font-medium rounded-lg text-slate-600 hover:bg-slate-50 transition">Notifikasi</button>
    </div>

    <!-- ===================== TAB: DAFTAR PETUGAS ===================== -->
    <div id="panelPetugas">
        <!-- Filter -->
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm mb-5">
            <div class="flex flex-col sm:flex-row gap-3 sm:items-center sm:justify-between">
                <div class="relative flex-1 max-w-sm">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input type="text" id="searchPetugas" placeholder="Cari nama atau email..."
                        class="w-full pl-10 pr-4 py-2.5 text-sm border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50">
                </div>
                <div class="flex gap-2">
                    <select id="filterStatusPetugas" class="text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Semua Status</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Nonaktif">Nonaktif</option>
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
                </div>
            </div>
        </div>

        <!-- Tabel Petugas -->
        <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider border-b border-slate-200">
                            <th class="text-left py-3.5 px-4 font-medium">Petugas</th>
                            <th class="text-left py-3.5 px-4 font-medium">Sekolah</th>
                            <th class="text-left py-3.5 px-4 font-medium">Kasus Ditangani</th>
                            <th class="text-left py-3.5 px-4 font-medium">Selesai</th>
                            <th class="text-left py-3.5 px-4 font-medium">Status</th>
                            <th class="text-left py-3.5 px-4 font-medium">Terakhir Aktif</th>
                            <th class="text-center py-3.5 px-4 font-medium">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tbodyPetugas" class="divide-y divide-slate-100"></tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ===================== TAB: AKTIVITAS ===================== -->
    <div id="panelAktivitas" class="hidden">
        <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
            <div class="px-5 py-4 border-b border-slate-200 flex items-center justify-between">
                <h2 class="text-base font-semibold text-slate-800">Log Aktivitas Petugas</h2>
                <select id="filterAktivitasPetugas" class="text-sm border border-slate-200 rounded-lg px-3 py-2 bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua Petugas</option>
                </select>
            </div>
            <div class="divide-y divide-slate-100" id="listAktivitas"></div>
        </div>
    </div>

    <!-- ===================== TAB: NOTIFIKASI ===================== -->
    <div id="panelNotifikasi" class="hidden">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
            <!-- Laporan belum ditangani -->
            <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
                <div class="px-5 py-4 border-b border-slate-200">
                    <h2 class="text-base font-semibold text-slate-800">Laporan Belum Ditangani</h2>
                    <p class="text-xs text-slate-500 mt-0.5">Kirim notifikasi ke petugas untuk menindaklanjuti</p>
                </div>
                <div class="divide-y divide-slate-100 max-h-[420px] overflow-y-auto" id="listBelumDitangani"></div>
            </div>

            <!-- Riwayat notifikasi -->
            <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
                <div class="px-5 py-4 border-b border-slate-200">
                    <h2 class="text-base font-semibold text-slate-800">Riwayat Notifikasi</h2>
                    <p class="text-xs text-slate-500 mt-0.5">Notifikasi yang sudah dikirim ke petugas</p>
                </div>
                <div class="divide-y divide-slate-100 max-h-[420px] overflow-y-auto" id="listRiwayatNotif"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah / Edit Petugas -->
<div id="modalPetugas" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl shadow-xl max-w-md w-full">
        <div class="flex items-center justify-between p-5 border-b border-slate-200">
            <h3 class="text-lg font-semibold text-slate-900" id="modalTitle">Tambah Petugas</h3>
            <button onclick="tutupModal()" class="text-slate-400 hover:text-slate-600 text-xl leading-none">&times;</button>
        </div>
        <form id="formPetugas" class="p-5 space-y-4" onsubmit="simpanPetugas(event)">
            <input type="hidden" id="editId">
            <div>
                <label class="text-xs text-slate-500 mb-1 block">Nama Lengkap</label>
                <input type="text" id="inputNama" required class="w-full px-3 py-2.5 text-sm border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50">
            </div>
            <div>
                <label class="text-xs text-slate-500 mb-1 block">Email</label>
                <input type="email" id="inputEmail" required class="w-full px-3 py-2.5 text-sm border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50">
            </div>
            <div>
                <label class="text-xs text-slate-500 mb-1 block">Sekolah</label>
                <select id="inputSekolah" required class="w-full px-3 py-2.5 text-sm border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50">
                    <option value="">Pilih sekolah</option>
                    <option value="SMP Negeri 3 Bandung">SMP Negeri 3 Bandung</option>
                    <option value="SMA Negeri 5 Surabaya">SMA Negeri 5 Surabaya</option>
                    <option value="SMP Negeri 12 Jakarta">SMP Negeri 12 Jakarta</option>
                    <option value="SMA Negeri 2 Medan">SMA Negeri 2 Medan</option>
                    <option value="SMP Negeri 8 Yogyakarta">SMP Negeri 8 Yogyakarta</option>
                    <option value="SMA Negeri 1 Makassar">SMA Negeri 1 Makassar</option>
                    <option value="SMP Negeri 4 Semarang">SMP Negeri 4 Semarang</option>
                </select>
            </div>
            <div>
                <label class="text-xs text-slate-500 mb-1 block">Status</label>
                <select id="inputStatus" class="w-full px-3 py-2.5 text-sm border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50">
                    <option value="Aktif">Aktif</option>
                    <option value="Nonaktif">Nonaktif</option>
                </select>
            </div>
            <div class="flex justify-end gap-2 pt-2">
                <button type="button" onclick="tutupModal()" class="px-4 py-2 text-sm rounded-lg border border-slate-200 hover:bg-slate-50 transition">Batal</button>
                <button type="submit" class="px-4 py-2 text-sm rounded-lg bg-blue-600 hover:bg-blue-700 text-white transition">Simpan</button>
            </div>
        </form>
    </div>
</div>

<!-- Toast -->
<div id="toast" class="fixed bottom-6 right-6 bg-slate-900 text-white text-sm px-5 py-3 rounded-xl shadow-lg hidden z-50 transition"></div>

<script>
    // ========== DATA ==========
    let petugasData = [{
            id: 1,
            nama: "Budi Santoso",
            email: "budi.santoso@dinas.edu",
            sekolah: "SMP Negeri 3 Bandung",
            ditangani: 42,
            selesai: 35,
            status: "Aktif",
            terakhir: "2026-08-06 14:20"
        },
        {
            id: 2,
            nama: "Siti Rahayu",
            email: "siti.rahayu@dinas.edu",
            sekolah: "SMA Negeri 5 Surabaya",
            ditangani: 38,
            selesai: 30,
            status: "Aktif",
            terakhir: "2026-08-06 11:05"
        },
        {
            id: 3,
            nama: "Andi Wijaya",
            email: "andi.wijaya@dinas.edu",
            sekolah: "SMP Negeri 12 Jakarta",
            ditangani: 35,
            selesai: 28,
            status: "Aktif",
            terakhir: "2026-08-05 16:40"
        },
        {
            id: 4,
            nama: "Dewi Lestari",
            email: "dewi.lestari@dinas.edu",
            sekolah: "SMA Negeri 1 Makassar",
            ditangani: 29,
            selesai: 24,
            status: "Aktif",
            terakhir: "2026-08-06 09:15"
        },
        {
            id: 5,
            nama: "Rudi Hartono",
            email: "rudi.hartono@dinas.edu",
            sekolah: "SMP Negeri 4 Semarang",
            ditangani: 27,
            selesai: 22,
            status: "Aktif",
            terakhir: "2026-08-04 13:50"
        },
        {
            id: 6,
            nama: "Maya Putri",
            email: "maya.putri@dinas.edu",
            sekolah: "SMP Negeri 8 Yogyakarta",
            ditangani: 18,
            selesai: 15,
            status: "Nonaktif",
            terakhir: "2026-07-20 10:00"
        },
        {
            id: 7,
            nama: "Eko Prasetyo",
            email: "eko.prasetyo@dinas.edu",
            sekolah: "SMA Negeri 2 Medan",
            ditangani: 22,
            selesai: 18,
            status: "Aktif",
            terakhir: "2026-08-06 08:30"
        },
    ];

    const aktivitasData = [{
            petugas: "Budi Santoso",
            aksi: "Menyelesaikan kasus",
            detail: "BLY-2026-0242 — Cyberbullying",
            waktu: "2026-08-06 14:20"
        },
        {
            petugas: "Siti Rahayu",
            aksi: "Memulai penanganan",
            detail: "BLY-2026-0244 — Sosial",
            waktu: "2026-08-06 11:05"
        },
        {
            petugas: "Dewi Lestari",
            aksi: "Update status",
            detail: "BLY-2026-0237 → Dalam Proses",
            waktu: "2026-08-06 09:15"
        },
        {
            petugas: "Eko Prasetyo",
            aksi: "Login sistem",
            detail: "Akses dashboard monitoring",
            waktu: "2026-08-06 08:30"
        },
        {
            petugas: "Andi Wijaya",
            aksi: "Menyelesaikan kasus",
            detail: "BLY-2026-0238 — Cyberbullying",
            waktu: "2026-08-05 16:40"
        },
        {
            petugas: "Budi Santoso",
            aksi: "Memulai penanganan",
            detail: "BLY-2026-0245 — Fisik",
            waktu: "2026-08-05 15:10"
        },
        {
            petugas: "Rudi Hartono",
            aksi: "Menyelesaikan kasus",
            detail: "BLY-2026-0241 — Fisik",
            waktu: "2026-08-04 13:50"
        },
        {
            petugas: "Siti Rahayu",
            aksi: "Update status",
            detail: "BLY-2026-0239 → Selesai",
            waktu: "2026-08-04 10:20"
        },
        {
            petugas: "Andi Wijaya",
            aksi: "Memulai penanganan",
            detail: "BLY-2026-0243 — Verbal",
            waktu: "2026-08-03 14:00"
        },
        {
            petugas: "Dewi Lestari",
            aksi: "Menyelesaikan kasus",
            detail: "BLY-2026-0235 — Sosial",
            waktu: "2026-08-02 11:30"
        },
    ];

    const laporanBelum = [{
            id: "BLY-2026-0247",
            sekolah: "SMP Negeri 3 Bandung",
            jenis: "Verbal",
            tanggal: "2026-08-04"
        },
        {
            id: "BLY-2026-0246",
            sekolah: "SMA Negeri 5 Surabaya",
            jenis: "Cyberbullying",
            tanggal: "2026-08-03"
        },
        {
            id: "BLY-2026-0230",
            sekolah: "SMA Negeri 2 Medan",
            jenis: "Cyberbullying",
            tanggal: "2026-07-03"
        },
        {
            id: "BLY-2026-0224",
            sekolah: "SMP Negeri 12 Jakarta",
            jenis: "Verbal",
            tanggal: "2026-06-18"
        },
        {
            id: "BLY-2026-0220",
            sekolah: "SMP Negeri 8 Yogyakarta",
            jenis: "Sosial",
            tanggal: "2026-06-10"
        },
    ];

    let riwayatNotif = [{
            ke: "Budi Santoso",
            laporan: "BLY-2026-0240",
            waktu: "2026-08-05 09:00",
            status: "Terkirim"
        },
        {
            ke: "Siti Rahayu",
            laporan: "BLY-2026-0239",
            waktu: "2026-08-04 08:30",
            status: "Terkirim"
        },
        {
            ke: "Andi Wijaya",
            laporan: "BLY-2026-0238",
            waktu: "2026-08-03 10:15",
            status: "Terkirim"
        },
        {
            ke: "Eko Prasetyo",
            laporan: "BLY-2026-0230",
            waktu: "2026-08-02 14:00",
            status: "Terkirim"
        },
    ];

    let notifHariIni = 0;

    // ========== TABS ==========
    function switchTab(tab) {
        ["Petugas", "Aktivitas", "Notifikasi"].forEach(t => {
            document.getElementById("panel" + t).classList.add("hidden");
            document.getElementById("tab" + t).classList.remove("bg-blue-600", "text-white");
            document.getElementById("tab" + t).classList.add("text-slate-600", "hover:bg-slate-50");
        });
        document.getElementById("panel" + tab.charAt(0).toUpperCase() + tab.slice(1)).classList.remove("hidden");
        const btn = document.getElementById("tab" + tab.charAt(0).toUpperCase() + tab.slice(1));
        btn.classList.add("bg-blue-600", "text-white");
        btn.classList.remove("text-slate-600", "hover:bg-slate-50");
    }

    // ========== STATS ==========
    function updateStats() {
        document.getElementById("statTotal").textContent = petugasData.length;
        document.getElementById("statAktif").textContent = petugasData.filter(p => p.status === "Aktif").length;
        document.getElementById("statBelum").textContent = laporanBelum.length;
        document.getElementById("statNotif").textContent = notifHariIni;
    }

    // ========== BADGE ==========
    function badgeStatus(s) {
        return s === "Aktif" ?
            '<span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-700">Aktif</span>' :
            '<span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold bg-slate-100 text-slate-500">Nonaktif</span>';
    }

    // ========== RENDER PETUGAS ==========
    function renderPetugas() {
        const q = document.getElementById("searchPetugas").value.toLowerCase();
        const st = document.getElementById("filterStatusPetugas").value;
        const sk = document.getElementById("filterSekolah").value;

        const data = petugasData.filter(p => {
            const matchQ = !q || p.nama.toLowerCase().includes(q) || p.email.toLowerCase().includes(q);
            const matchSt = !st || p.status === st;
            const matchSk = !sk || p.sekolah === sk;
            return matchQ && matchSt && matchSk;
        });

        document.getElementById("tbodyPetugas").innerHTML = data.map(p => `
                <tr class="hover:bg-slate-50 transition">
                    <td class="py-3 px-4">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center text-sm font-semibold">${p.nama.split(" ").map(n => n[0]).slice(0,2).join("")}</div>
                            <div>
                                <p class="font-medium text-slate-800">${p.nama}</p>
                                <p class="text-xs text-slate-500">${p.email}</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-3 px-4 text-slate-600">${p.sekolah}</td>
                    <td class="py-3 px-4 font-medium text-slate-800">${p.ditangani}</td>
                    <td class="py-3 px-4 text-emerald-600 font-medium">${p.selesai}</td>
                    <td class="py-3 px-4">${badgeStatus(p.status)}</td>
                    <td class="py-3 px-4 text-slate-500 text-xs">${formatWaktu(p.terakhir)}</td>
                    <td class="py-3 px-4">
                        <div class="flex gap-2">
                            <button onclick="editPetugas(${p.id})" class="text-blue-600 hover:text-blue-800 text-xs font-medium hover:underline">Edit</button>
                            <button onclick="toggleStatus(${p.id})" class="text-amber-600 hover:text-amber-800 text-xs font-medium hover:underline">${p.status === "Aktif" ? "Nonaktifkan" : "Aktifkan"}</button>
                            <button onclick="hapusPetugas(${p.id})" class="text-red-600 hover:text-red-800 text-xs font-medium hover:underline">Hapus</button>
                        </div>
                    </td>
                </tr>
            `).join("");
    }

    // ========== RENDER AKTIVITAS ==========
    function renderAktivitas() {
        const filter = document.getElementById("filterAktivitasPetugas").value;
        const data = filter ? aktivitasData.filter(a => a.petugas === filter) : aktivitasData;

        // Populate select
        const sel = document.getElementById("filterAktivitasPetugas");
        if (sel.options.length <= 1) {
            petugasData.forEach(p => {
                const opt = document.createElement("option");
                opt.value = p.nama;
                opt.textContent = p.nama;
                sel.appendChild(opt);
            });
        }

        const iconMap = {
            "Menyelesaikan kasus": "bg-emerald-100 text-emerald-600",
            "Memulai penanganan": "bg-blue-100 text-blue-600",
            "Update status": "bg-amber-100 text-amber-600",
            "Login sistem": "bg-slate-100 text-slate-600"
        };

        document.getElementById("listAktivitas").innerHTML = data.map(a => `
                <div class="px-5 py-4 flex gap-4 hover:bg-slate-50 transition">
                    <div class="w-9 h-9 rounded-full ${iconMap[a.aksi] || "bg-slate-100 text-slate-600"} flex items-center justify-center flex-shrink-0 text-xs font-bold">
                        ${a.petugas.split(" ").map(n => n[0]).slice(0,2).join("")}
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm text-slate-800"><span class="font-medium">${a.petugas}</span> — ${a.aksi}</p>
                        <p class="text-xs text-slate-500 mt-0.5">${a.detail}</p>
                    </div>
                    <p class="text-xs text-slate-400 whitespace-nowrap">${formatWaktu(a.waktu)}</p>
                </div>
            `).join("");
    }

    // ========== RENDER NOTIFIKASI ==========
    function renderNotifikasi() {
        // Laporan belum ditangani
        document.getElementById("listBelumDitangani").innerHTML = laporanBelum.map(l => {
            // Cari petugas di sekolah yang sama
            const petugasSekolah = petugasData.filter(p => p.sekolah === l.sekolah && p.status === "Aktif");
            return `
                    <div class="px-5 py-4 hover:bg-slate-50 transition">
                        <div class="flex items-start justify-between gap-3">
                            <div>
                                <p class="text-sm font-medium text-slate-800">${l.id}</p>
                                <p class="text-xs text-slate-500 mt-0.5">${l.sekolah} · ${l.jenis}</p>
                                <p class="text-xs text-slate-400 mt-0.5">${formatTanggal(l.tanggal)}</p>
                            </div>
                            <div class="flex flex-col gap-1.5 items-end">
                                ${petugasSekolah.length
                                    ? petugasSekolah.map(p => `
                                        <button onclick="kirimNotif('${p.nama}', '${l.id}')"
                                            class="text-xs px-3 py-1.5 rounded-lg bg-blue-600 hover:bg-blue-700 text-white transition whitespace-nowrap">
                                            Notif → ${p.nama.split(" ")[0]}
                                        </button>
                                    `).join("")
                                    : `<span class="text-xs text-slate-400">Tidak ada petugas aktif</span>`
                                }
                            </div>
                        </div>
                    </div>
                `;
        }).join("") || `<p class="px-5 py-8 text-center text-sm text-slate-400">Tidak ada laporan belum ditangani</p>`;

        // Riwayat
        document.getElementById("listRiwayatNotif").innerHTML = riwayatNotif.map(n => `
                <div class="px-5 py-4 flex items-center justify-between hover:bg-slate-50 transition">
                    <div>
                        <p class="text-sm text-slate-800">Ke: <span class="font-medium">${n.ke}</span></p>
                        <p class="text-xs text-slate-500 mt-0.5">Laporan ${n.laporan}</p>
                    </div>
                    <div class="text-right">
                        <span class="inline-block px-2 py-0.5 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-700">${n.status}</span>
                        <p class="text-xs text-slate-400 mt-1">${formatWaktu(n.waktu)}</p>
                    </div>
                </div>
            `).join("") || `<p class="px-5 py-8 text-center text-sm text-slate-400">Belum ada notifikasi</p>`;
    }

    // ========== KIRIM NOTIF ==========
    function kirimNotif(nama, laporanId) {
        const now = new Date();
        const waktu = now.toISOString().slice(0, 16).replace("T", " ");
        riwayatNotif.unshift({
            ke: nama,
            laporan: laporanId,
            waktu,
            status: "Terkirim"
        });
        notifHariIni++;
        updateStats();
        renderNotifikasi();
        showToast(`Notifikasi berhasil dikirim ke ${nama}`);
    }

    // ========== CRUD PETUGAS ==========
    function bukaModalTambah() {
        document.getElementById("modalTitle").textContent = "Tambah Petugas";
        document.getElementById("editId").value = "";
        document.getElementById("formPetugas").reset();
        document.getElementById("modalPetugas").classList.remove("hidden");
        document.getElementById("modalPetugas").classList.add("flex");
    }

    function editPetugas(id) {
        const p = petugasData.find(x => x.id === id);
        if (!p) return;
        document.getElementById("modalTitle").textContent = "Edit Petugas";
        document.getElementById("editId").value = p.id;
        document.getElementById("inputNama").value = p.nama;
        document.getElementById("inputEmail").value = p.email;
        document.getElementById("inputSekolah").value = p.sekolah;
        document.getElementById("inputStatus").value = p.status;
        document.getElementById("modalPetugas").classList.remove("hidden");
        document.getElementById("modalPetugas").classList.add("flex");
    }

    function simpanPetugas(e) {
        e.preventDefault();
        const id = document.getElementById("editId").value;
        const data = {
            nama: document.getElementById("inputNama").value,
            email: document.getElementById("inputEmail").value,
            sekolah: document.getElementById("inputSekolah").value,
            status: document.getElementById("inputStatus").value,
        };

        if (id) {
            const p = petugasData.find(x => x.id === +id);
            Object.assign(p, data);
            showToast("Data petugas diperbarui");
        } else {
            petugasData.push({
                id: Date.now(),
                ...data,
                ditangani: 0,
                selesai: 0,
                terakhir: new Date().toISOString().slice(0, 16).replace("T", " ")
            });
            showToast("Petugas baru ditambahkan");
        }
        tutupModal();
        updateStats();
        renderPetugas();
        renderNotifikasi();
    }

    function toggleStatus(id) {
        const p = petugasData.find(x => x.id === id);
        if (!p) return;
        p.status = p.status === "Aktif" ? "Nonaktif" : "Aktif";
        showToast(`${p.nama} sekarang ${p.status}`);
        updateStats();
        renderPetugas();
        renderNotifikasi();
    }

    function hapusPetugas(id) {
        const p = petugasData.find(x => x.id === id);
        if (!p) return;
        if (!confirm(`Hapus petugas "${p.nama}"? Tindakan ini tidak dapat dibatalkan.`)) return;
        petugasData = petugasData.filter(x => x.id !== id);
        showToast(`${p.nama} berhasil dihapus`);
        updateStats();
        renderPetugas();
        renderNotifikasi();
    }

    function tutupModal() {
        document.getElementById("modalPetugas").classList.add("hidden");
        document.getElementById("modalPetugas").classList.remove("flex");
    }

    // ========== HELPERS ==========
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

    function formatTanggal(iso) {
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

    // Events
    document.getElementById("searchPetugas").addEventListener("input", renderPetugas);
    document.getElementById("filterStatusPetugas").addEventListener("change", renderPetugas);
    document.getElementById("filterSekolah").addEventListener("change", renderPetugas);
    document.getElementById("filterAktivitasPetugas").addEventListener("change", renderAktivitas);

    // Init
    updateStats();
    renderPetugas();
    renderAktivitas();
    renderNotifikasi();
</script>