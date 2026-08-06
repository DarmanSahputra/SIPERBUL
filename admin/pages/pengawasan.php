<div class="max-w-7xl m-4 p-2">

    <!-- Header -->
    <h1 class="text-2xl md:text-3xl font-bold text-slate-900 mb-1">Verifikasi Tindak Lanjut</h1>
    <p class="text-slate-500 text-sm mb-8">Memeriksa apakah laporan sudah ditindaklanjuti dengan benar</p>

    <!-- Stats -->
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-6">
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Menunggu Verifikasi</p>
            <p class="text-2xl font-bold text-amber-500" id="statMenunggu">0</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Lulus Verifikasi</p>
            <p class="text-2xl font-bold text-emerald-600" id="statLulus">0</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Perlu Perbaikan</p>
            <p class="text-2xl font-bold text-red-600" id="statPerbaikan">0</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Total Dicek</p>
            <p class="text-2xl font-bold text-slate-900" id="statTotal">0</p>
        </div>
    </div>

    <!-- Filter -->
    <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm mb-5">
        <div class="flex flex-col lg:flex-row gap-3 lg:items-center lg:justify-between">
            <div class="relative flex-1 max-w-md">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" id="searchInput" placeholder="Cari ID laporan, sekolah, atau petugas..."
                    class="w-full pl-10 pr-4 py-2.5 text-sm border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50">
            </div>
            <div class="flex flex-wrap gap-2">
                <select id="filterStatus" class="text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua Status Verifikasi</option>
                    <option value="Menunggu">Menunggu</option>
                    <option value="Lulus">Lulus</option>
                    <option value="Perlu Perbaikan">Perlu Perbaikan</option>
                </select>
                <select id="filterJenis" class="text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua Jenis</option>
                    <option value="Verbal">Verbal</option>
                    <option value="Fisik">Fisik</option>
                    <option value="Sosial">Sosial</option>
                    <option value="Cyberbullying">Cyberbullying</option>
                </select>
                <button onclick="resetFilter()" class="text-sm px-4 py-2.5 rounded-lg border border-slate-200 bg-white hover:bg-slate-50 text-slate-600 transition">Reset</button>
            </div>
        </div>
    </div>

    <!-- Tabel -->
    <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider border-b border-slate-200">
                        <th class="text-left py-3.5 px-4 font-medium">ID Laporan</th>
                        <th class="text-left py-3.5 px-4 font-medium">Sekolah</th>
                        <th class="text-left py-3.5 px-4 font-medium">Jenis</th>
                        <th class="text-left py-3.5 px-4 font-medium">Petugas</th>
                        <th class="text-left py-3.5 px-4 font-medium">Tanggal Selesai</th>
                        <th class="text-left py-3.5 px-4 font-medium">Checklist</th>
                        <th class="text-left py-3.5 px-4 font-medium">Status Verifikasi</th>
                        <th class="text-left py-3.5 px-4 font-medium">Aksi</th>
                    </tr>
                </thead>
                <tbody id="tbodyVerifikasi" class="divide-y divide-slate-100"></tbody>
            </table>
        </div>
        <div class="px-4 py-3 border-t border-slate-200 bg-slate-50 text-sm text-slate-500">
            Menampilkan <span id="showingCount">0</span> laporan
        </div>
    </div>
</div>

<!-- Modal Verifikasi -->
<div id="modalVerifikasi" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl shadow-xl max-w-lg w-full max-h-[90vh] overflow-y-auto">
        <div class="flex items-center justify-between p-5 border-b border-slate-200">
            <h3 class="text-lg font-semibold text-slate-900">Verifikasi Tindak Lanjut</h3>
            <button onclick="tutupModal()" class="text-slate-400 hover:text-slate-600 text-xl leading-none">&times;</button>
        </div>
        <div id="modalBody" class="p-5 space-y-5 text-sm"></div>
        <div class="p-5 border-t border-slate-200 flex flex-wrap justify-end gap-2">
            <button onclick="tutupModal()" class="px-4 py-2 text-sm rounded-lg border border-slate-200 hover:bg-slate-50 transition">Batal</button>
            <button onclick="simpanVerifikasi('Perlu Perbaikan')" class="px-4 py-2 text-sm rounded-lg bg-red-600 hover:bg-red-700 text-white transition">Perlu Perbaikan</button>
            <button onclick="simpanVerifikasi('Lulus')" class="px-4 py-2 text-sm rounded-lg bg-emerald-600 hover:bg-emerald-700 text-white transition">Lulus Verifikasi</button>
        </div>
    </div>
</div>

<!-- Toast -->
<div id="toast" class="fixed bottom-6 right-6 bg-slate-900 text-white text-sm px-5 py-3 rounded-xl shadow-lg hidden z-50"></div>

<script>
    // Checklist standar tindak lanjut
    const checklistItems = [{
            key: "investigasi",
            label: "Investigasi dilakukan (wawancara korban, pelaku, saksi)"
        },
        {
            key: "dokumentasi",
            label: "Dokumentasi lengkap (kronologi, bukti, laporan tertulis)"
        },
        {
            key: "mediasi",
            label: "Mediasi / penanganan sesuai SOP"
        },
        {
            key: "orangtua",
            label: "Orang tua / wali dihubungi dan dilibatkan"
        },
        {
            key: "tindak_lanjut",
            label: "Tindak lanjut ke pelaku (sanksi / pembinaan)"
        },
        {
            key: "pendampingan",
            label: "Pendampingan korban tersedia"
        },
        {
            key: "monitoring",
            label: "Monitoring pasca penanganan dijadwalkan"
        },
    ];

    // Data dummy
    let dataVerifikasi = [{
            id: "BLY-2026-0242",
            sekolah: "SMA Negeri 1 Makassar",
            jenis: "Cyberbullying",
            petugas: "Dewi Lestari",
            tanggalSelesai: "2026-07-28",
            statusVerifikasi: "Menunggu",
            checklist: {
                investigasi: true,
                dokumentasi: true,
                mediasi: true,
                orangtua: true,
                tindak_lanjut: true,
                pendampingan: false,
                monitoring: false
            },
            catatanPetugas: "Akun pelaku sudah dihapus. Korban mendapat konseling 1 sesi.",
            catatanVerifikator: ""
        },
        {
            id: "BLY-2026-0241",
            sekolah: "SMP Negeri 4 Semarang",
            jenis: "Fisik",
            petugas: "Rudi Hartono",
            tanggalSelesai: "2026-07-27",
            statusVerifikasi: "Menunggu",
            checklist: {
                investigasi: true,
                dokumentasi: true,
                mediasi: true,
                orangtua: true,
                tindak_lanjut: true,
                pendampingan: true,
                monitoring: true
            },
            catatanPetugas: "Pelaku mendapat sanksi skors 3 hari. Korban aman, tidak ada cedera serius.",
            catatanVerifikator: ""
        },
        {
            id: "BLY-2026-0240",
            sekolah: "SMP Negeri 3 Bandung",
            jenis: "Sosial",
            petugas: "Budi Santoso",
            tanggalSelesai: "2026-07-25",
            statusVerifikasi: "Lulus",
            checklist: {
                investigasi: true,
                dokumentasi: true,
                mediasi: true,
                orangtua: true,
                tindak_lanjut: true,
                pendampingan: true,
                monitoring: true
            },
            catatanPetugas: "Mediasi berhasil. Kedua belah pihak sepakat berdamai.",
            catatanVerifikator: "Semua langkah sudah sesuai SOP. Baik."
        },
        {
            id: "BLY-2026-0239",
            sekolah: "SMA Negeri 5 Surabaya",
            jenis: "Verbal",
            petugas: "Siti Rahayu",
            tanggalSelesai: "2026-07-24",
            statusVerifikasi: "Lulus",
            checklist: {
                investigasi: true,
                dokumentasi: true,
                mediasi: true,
                orangtua: true,
                tindak_lanjut: true,
                pendampingan: true,
                monitoring: false
            },
            catatanPetugas: "Pelaku diberi peringatan tertulis. Monitoring akan dilakukan minggu depan.",
            catatanVerifikator: "Lengkap, monitoring sudah dijadwalkan."
        },
        {
            id: "BLY-2026-0238",
            sekolah: "SMP Negeri 12 Jakarta",
            jenis: "Cyberbullying",
            petugas: "Andi Wijaya",
            tanggalSelesai: "2026-07-22",
            statusVerifikasi: "Perlu Perbaikan",
            checklist: {
                investigasi: true,
                dokumentasi: false,
                mediasi: true,
                orangtua: false,
                tindak_lanjut: true,
                pendampingan: false,
                monitoring: false
            },
            catatanPetugas: "Pesan ancaman sudah dihapus. Pelaku ditegur.",
            catatanVerifikator: "Dokumentasi kurang lengkap. Orang tua belum dihubungi. Pendampingan korban belum ada."
        },
        {
            id: "BLY-2026-0236",
            sekolah: "SMP Negeri 8 Yogyakarta",
            jenis: "Verbal",
            petugas: "Rudi Hartono",
            tanggalSelesai: "2026-07-18",
            statusVerifikasi: "Lulus",
            checklist: {
                investigasi: true,
                dokumentasi: true,
                mediasi: true,
                orangtua: true,
                tindak_lanjut: true,
                pendampingan: true,
                monitoring: true
            },
            catatanPetugas: "Penanganan sesuai prosedur. Tidak ada keberatan dari pihak korban.",
            catatanVerifikator: "Sesuai SOP."
        },
        {
            id: "BLY-2026-0235",
            sekolah: "SMA Negeri 1 Makassar",
            jenis: "Sosial",
            petugas: "Budi Santoso",
            tanggalSelesai: "2026-07-15",
            statusVerifikasi: "Menunggu",
            checklist: {
                investigasi: true,
                dokumentasi: true,
                mediasi: false,
                orangtua: true,
                tindak_lanjut: true,
                pendampingan: true,
                monitoring: false
            },
            catatanPetugas: "Pelaku sudah dibina. Mediasi belum sempat dilakukan karena jadwal bentrok.",
            catatanVerifikator: ""
        },
        {
            id: "BLY-2026-0234",
            sekolah: "SMP Negeri 4 Semarang",
            jenis: "Cyberbullying",
            petugas: "Siti Rahayu",
            tanggalSelesai: "2026-07-12",
            statusVerifikasi: "Perlu Perbaikan",
            checklist: {
                investigasi: true,
                dokumentasi: true,
                mediasi: true,
                orangtua: true,
                tindak_lanjut: false,
                pendampingan: true,
                monitoring: false
            },
            catatanPetugas: "Akun palsu sudah dilaporkan. Korban mendapat konseling.",
            catatanVerifikator: "Sanksi/pembinaan ke pelaku belum tercatat dengan jelas."
        },
        {
            id: "BLY-2026-0233",
            sekolah: "SMP Negeri 3 Bandung",
            jenis: "Fisik",
            petugas: "Andi Wijaya",
            tanggalSelesai: "2026-07-10",
            statusVerifikasi: "Lulus",
            checklist: {
                investigasi: true,
                dokumentasi: true,
                mediasi: true,
                orangtua: true,
                tindak_lanjut: true,
                pendampingan: true,
                monitoring: true
            },
            catatanPetugas: "Kasus fisik ringan. Sanksi skors 2 hari. Kedua orang tua hadir.",
            catatanVerifikator: "Lengkap dan sesuai."
        },
        {
            id: "BLY-2026-0229",
            sekolah: "SMP Negeri 8 Yogyakarta",
            jenis: "Fisik",
            petugas: "Budi Santoso",
            tanggalSelesai: "2026-07-01",
            statusVerifikasi: "Menunggu",
            checklist: {
                investigasi: true,
                dokumentasi: true,
                mediasi: true,
                orangtua: true,
                tindak_lanjut: true,
                pendampingan: false,
                monitoring: true
            },
            catatanPetugas: "Pelaku skors 3 hari. Korban tidak cedera permanen.",
            catatanVerifikator: ""
        },
    ];

    let currentId = null;
    let filtered = [...dataVerifikasi];

    function badgeStatus(s) {
        const map = {
            "Menunggu": "bg-amber-100 text-amber-700",
            "Lulus": "bg-emerald-100 text-emerald-700",
            "Perlu Perbaikan": "bg-red-100 text-red-700"
        };
        return `<span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold ${map[s]}">${s}</span>`;
    }

    function checklistScore(c) {
        const total = checklistItems.length;
        const done = checklistItems.filter(i => c[i.key]).length;
        return {
            done,
            total,
            pct: Math.round((done / total) * 100)
        };
    }

    function progressChecklist(c) {
        const {
            done,
            total,
            pct
        } = checklistScore(c);
        let color = "bg-emerald-500";
        if (pct < 50) color = "bg-red-500";
        else if (pct < 85) color = "bg-amber-400";
        return `
                <div class="flex items-center gap-2 min-w-[120px]">
                    <div class="flex-1 h-2 bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full ${color} rounded-full" style="width:${pct}%"></div>
                    </div>
                    <span class="text-xs text-slate-500 whitespace-nowrap">${done}/${total}</span>
                </div>
            `;
    }

    function updateStats() {
        document.getElementById("statMenunggu").textContent = dataVerifikasi.filter(d => d.statusVerifikasi === "Menunggu").length;
        document.getElementById("statLulus").textContent = dataVerifikasi.filter(d => d.statusVerifikasi === "Lulus").length;
        document.getElementById("statPerbaikan").textContent = dataVerifikasi.filter(d => d.statusVerifikasi === "Perlu Perbaikan").length;
        document.getElementById("statTotal").textContent = dataVerifikasi.length;
    }

    function renderTable() {
        const tbody = document.getElementById("tbodyVerifikasi");
        tbody.innerHTML = filtered.map(d => `
                <tr class="hover:bg-slate-50 transition">
                    <td class="py-3 px-4 font-medium text-slate-800">${d.id}</td>
                    <td class="py-3 px-4 text-slate-700">${d.sekolah}</td>
                    <td class="py-3 px-4 text-slate-600">${d.jenis}</td>
                    <td class="py-3 px-4 text-slate-600">${d.petugas}</td>
                    <td class="py-3 px-4 text-slate-500 text-xs">${formatTanggal(d.tanggalSelesai)}</td>
                    <td class="py-3 px-4">${progressChecklist(d.checklist)}</td>
                    <td class="py-3 px-4">${badgeStatus(d.statusVerifikasi)}</td>
                    <td class="py-3 px-4">
                        <button onclick="bukaVerifikasi('${d.id}')" class="text-blue-600 hover:text-blue-800 text-xs font-medium hover:underline">
                            ${d.statusVerifikasi === "Menunggu" ? "Verifikasi" : "Lihat"}
                        </button>
                    </td>
                </tr>
            `).join("");
        document.getElementById("showingCount").textContent = filtered.length;
    }

    function applyFilter() {
        const q = document.getElementById("searchInput").value.toLowerCase();
        const st = document.getElementById("filterStatus").value;
        const jn = document.getElementById("filterJenis").value;

        filtered = dataVerifikasi.filter(d => {
            const matchQ = !q || d.id.toLowerCase().includes(q) || d.sekolah.toLowerCase().includes(q) || d.petugas.toLowerCase().includes(q);
            const matchSt = !st || d.statusVerifikasi === st;
            const matchJn = !jn || d.jenis === jn;
            return matchQ && matchSt && matchJn;
        });
        renderTable();
    }

    function resetFilter() {
        document.getElementById("searchInput").value = "";
        document.getElementById("filterStatus").value = "";
        document.getElementById("filterJenis").value = "";
        filtered = [...dataVerifikasi];
        renderTable();
    }

    function bukaVerifikasi(id) {
        currentId = id;
        const d = dataVerifikasi.find(x => x.id === id);
        if (!d) return;

        const checklistHtml = checklistItems.map(item => {
            const checked = d.checklist[item.key];
            return `
                    <label class="flex items-start gap-3 p-2.5 rounded-lg ${checked ? "bg-emerald-50" : "bg-red-50"} cursor-default">
                        <span class="mt-0.5 w-5 h-5 rounded flex items-center justify-center flex-shrink-0 ${checked ? "bg-emerald-500 text-white" : "bg-red-400 text-white"}">
                            ${checked
                                ? '<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>'
                                : '<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"/></svg>'
                            }
                        </span>
                        <span class="text-sm ${checked ? "text-slate-700" : "text-red-700"}">${item.label}</span>
                    </label>
                `;
        }).join("");

        document.getElementById("modalBody").innerHTML = `
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <p class="text-xs text-slate-500">ID Laporan</p>
                        <p class="font-medium text-slate-800">${d.id}</p>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500">Status Saat Ini</p>
                        <p class="mt-0.5">${badgeStatus(d.statusVerifikasi)}</p>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500">Sekolah</p>
                        <p class="font-medium text-slate-800">${d.sekolah}</p>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500">Jenis</p>
                        <p class="font-medium text-slate-800">${d.jenis}</p>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500">Petugas</p>
                        <p class="font-medium text-slate-800">${d.petugas}</p>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500">Tanggal Selesai</p>
                        <p class="font-medium text-slate-800">${formatTanggal(d.tanggalSelesai)}</p>
                    </div>
                </div>

                <div>
                    <p class="text-xs text-slate-500 mb-1">Catatan Petugas</p>
                    <p class="text-slate-700 bg-slate-50 rounded-lg p-3 leading-relaxed">${d.catatanPetugas || "—"}</p>
                </div>

                <div>
                    <p class="text-xs text-slate-500 mb-2">Checklist Tindak Lanjut (${checklistScore(d.checklist).done}/${checklistItems.length})</p>
                    <div class="space-y-1.5">${checklistHtml}</div>
                </div>

                <div>
                    <label class="text-xs text-slate-500 mb-1 block">Catatan Verifikator</label>
                    <textarea id="inputCatatan" rows="3" placeholder="Tulis catatan hasil verifikasi..."
                        class="w-full px-3 py-2.5 text-sm border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50 resize-none">${d.catatanVerifikator || ""}</textarea>
                </div>
            `;

        document.getElementById("modalVerifikasi").classList.remove("hidden");
        document.getElementById("modalVerifikasi").classList.add("flex");
    }

    function simpanVerifikasi(status) {
        const d = dataVerifikasi.find(x => x.id === currentId);
        if (!d) return;
        d.statusVerifikasi = status;
        d.catatanVerifikator = document.getElementById("inputCatatan").value;
        showToast(`Laporan ${d.id} ditandai: ${status}`);
        tutupModal();
        updateStats();
        applyFilter();
    }

    function tutupModal() {
        document.getElementById("modalVerifikasi").classList.add("hidden");
        document.getElementById("modalVerifikasi").classList.remove("flex");
        currentId = null;
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

    document.getElementById("searchInput").addEventListener("input", applyFilter);
    document.getElementById("filterStatus").addEventListener("change", applyFilter);
    document.getElementById("filterJenis").addEventListener("change", applyFilter);

    updateStats();
    renderTable();
</script>