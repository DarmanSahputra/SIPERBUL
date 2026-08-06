<div class="max-w-7xl m-4 p-2">

    <!-- Header -->
    <h1 class="text-2xl md:text-3xl font-bold text-slate-900 mb-1">Monitoring Laporan</h1>
    <p class="text-slate-500 text-sm mb-8">Memantau semua laporan yang masuk dan status penanganannya</p>

    <!-- Stats Ringkas -->
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 mb-6">
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Total Laporan</p>
            <p class="text-2xl font-bold text-slate-900">247</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Baru</p>
            <p class="text-2xl font-bold text-blue-600">25</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Dalam Proses</p>
            <p class="text-2xl font-bold text-amber-500">54</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Selesai</p>
            <p class="text-2xl font-bold text-emerald-600">168</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-1">Ditolak / Ditutup</p>
            <p class="text-2xl font-bold text-slate-500">0</p>
        </div>
    </div>

    <!-- Filter & Search -->
    <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm mb-5">
        <div class="flex flex-col lg:flex-row gap-3 lg:items-center lg:justify-between">
            <!-- Search -->
            <div class="relative flex-1 max-w-md">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" id="searchInput" placeholder="Cari ID, sekolah, atau pelapor..."
                    class="w-full pl-10 pr-4 py-2.5 text-sm border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-slate-50">
            </div>

            <!-- Filters -->
            <div class="flex flex-wrap gap-2">
                <select id="filterStatus" class="text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua Status</option>
                    <option value="Baru">Baru</option>
                    <option value="Dalam Proses">Dalam Proses</option>
                    <option value="Selesai">Selesai</option>
                    <option value="Ditolak">Ditolak</option>
                </select>
                <select id="filterJenis" class="text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua Jenis</option>
                    <option value="Verbal">Verbal</option>
                    <option value="Fisik">Fisik</option>
                    <option value="Sosial">Sosial / Relasional</option>
                    <option value="Cyberbullying">Cyberbullying</option>
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
                <button onclick="resetFilter()" class="text-sm px-4 py-2.5 rounded-lg border border-slate-200 bg-white hover:bg-slate-50 text-slate-600 transition">
                    Reset
                </button>
            </div>
        </div>
    </div>

    <!-- Tabel Laporan -->
    <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm" id="tabelLaporan">
                <thead>
                    <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider border-b border-slate-200">
                        <th class="text-left py-3.5 px-4 font-medium">ID Laporan</th>
                        <th class="text-left py-3.5 px-4 font-medium">Tanggal</th>
                        <th class="text-left py-3.5 px-4 font-medium">Sekolah</th>
                        <th class="text-left py-3.5 px-4 font-medium">Jenis</th>
                        <th class="text-left py-3.5 px-4 font-medium">Pelapor</th>
                        <th class="text-left py-3.5 px-4 font-medium">Status</th>
                        <th class="text-left py-3.5 px-4 font-medium">Petugas</th>
                        <th class="text-left py-3.5 px-4 font-medium">Aksi</th>
                    </tr>
                </thead>
                <tbody id="tbodyLaporan" class="divide-y divide-slate-100">
                    <!-- Data diisi via JS -->
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-3 px-4 py-3 border-t border-slate-200 bg-slate-50">
            <p class="text-sm text-slate-500">
                Menampilkan <span id="showingFrom">1</span>–<span id="showingTo">10</span> dari <span id="totalRows">0</span> laporan
            </p>
            <div class="flex gap-1">
                <button onclick="prevPage()" id="btnPrev" class="px-3 py-1.5 text-sm rounded-lg border border-slate-200 bg-white hover:bg-slate-100 disabled:opacity-40 disabled:cursor-not-allowed transition">
                    Sebelumnya
                </button>
                <span id="pageInfo" class="px-3 py-1.5 text-sm text-slate-600"></span>
                <button onclick="nextPage()" id="btnNext" class="px-3 py-1.5 text-sm rounded-lg border border-slate-200 bg-white hover:bg-slate-100 disabled:opacity-40 disabled:cursor-not-allowed transition">
                    Berikutnya
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail -->
<div id="modalDetail" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl shadow-xl max-w-lg w-full max-h-[90vh] overflow-y-auto">
        <div class="flex items-center justify-between p-5 border-b border-slate-200">
            <h3 class="text-lg font-semibold text-slate-900">Detail Laporan</h3>
            <button onclick="tutupModal()" class="text-slate-400 hover:text-slate-600 text-xl leading-none">&times;</button>
        </div>
        <div id="modalBody" class="p-5 space-y-4 text-sm">
            <!-- Diisi via JS -->
        </div>
        <div class="p-5 border-t border-slate-200 flex justify-end gap-2">
            <button onclick="tutupModal()" class="px-4 py-2 text-sm rounded-lg border border-slate-200 hover:bg-slate-50 transition">Tutup</button>
        </div>
    </div>
</div>

<script>
    // ========== DATA DUMMY ==========
    const laporanData = [{
            id: "BLY-2026-0247",
            tanggal: "2026-08-04",
            sekolah: "SMP Negeri 3 Bandung",
            jenis: "Verbal",
            pelapor: "Orang Tua",
            status: "Baru",
            petugas: "-",
            deskripsi: "Siswa sering diejek terkait penampilan oleh beberapa teman sekelas."
        },
        {
            id: "BLY-2026-0246",
            tanggal: "2026-08-03",
            sekolah: "SMA Negeri 5 Surabaya",
            jenis: "Cyberbullying",
            pelapor: "Siswa",
            status: "Baru",
            petugas: "-",
            deskripsi: "Akun media sosial siswa dibanjiri komentar negatif dan ancaman."
        },
        {
            id: "BLY-2026-0245",
            tanggal: "2026-08-02",
            sekolah: "SMP Negeri 12 Jakarta",
            jenis: "Fisik",
            pelapor: "Guru",
            status: "Dalam Proses",
            petugas: "Budi Santoso",
            deskripsi: "Terjadi dorong-dorongan dan pukulan ringan di koridor sekolah."
        },
        {
            id: "BLY-2026-0244",
            tanggal: "2026-08-01",
            sekolah: "SMA Negeri 2 Medan",
            jenis: "Sosial",
            pelapor: "Orang Tua",
            status: "Dalam Proses",
            petugas: "Siti Rahayu",
            deskripsi: "Anak dikucilkan dari kelompok teman sebaya secara sistematis."
        },
        {
            id: "BLY-2026-0243",
            tanggal: "2026-07-30",
            sekolah: "SMP Negeri 8 Yogyakarta",
            jenis: "Verbal",
            pelapor: "Siswa",
            status: "Dalam Proses",
            petugas: "Andi Wijaya",
            deskripsi: "Nama panggilan menghina terus-menerus selama 2 minggu."
        },
        {
            id: "BLY-2026-0242",
            tanggal: "2026-07-28",
            sekolah: "SMA Negeri 1 Makassar",
            jenis: "Cyberbullying",
            pelapor: "Orang Tua",
            status: "Selesai",
            petugas: "Dewi Lestari",
            deskripsi: "Foto pribadi disebar tanpa izin di grup kelas."
        },
        {
            id: "BLY-2026-0241",
            tanggal: "2026-07-27",
            sekolah: "SMP Negeri 4 Semarang",
            jenis: "Fisik",
            pelapor: "Guru",
            status: "Selesai",
            petugas: "Rudi Hartono",
            deskripsi: "Siswa dipukul di kantin oleh kakak kelas."
        },
        {
            id: "BLY-2026-0240",
            tanggal: "2026-07-25",
            sekolah: "SMP Negeri 3 Bandung",
            jenis: "Sosial",
            pelapor: "Siswa",
            status: "Selesai",
            petugas: "Budi Santoso",
            deskripsi: "Pengucilan dari kegiatan kelompok belajar."
        },
        {
            id: "BLY-2026-0239",
            tanggal: "2026-07-24",
            sekolah: "SMA Negeri 5 Surabaya",
            jenis: "Verbal",
            pelapor: "Orang Tua",
            status: "Selesai",
            petugas: "Siti Rahayu",
            deskripsi: "Ejekan berulang terkait kemampuan akademik."
        },
        {
            id: "BLY-2026-0238",
            tanggal: "2026-07-22",
            sekolah: "SMP Negeri 12 Jakarta",
            jenis: "Cyberbullying",
            pelapor: "Siswa",
            status: "Selesai",
            petugas: "Andi Wijaya",
            deskripsi: "Pesan ancaman melalui aplikasi chat."
        },
        {
            id: "BLY-2026-0237",
            tanggal: "2026-07-20",
            sekolah: "SMA Negeri 2 Medan",
            jenis: "Fisik",
            pelapor: "Guru",
            status: "Dalam Proses",
            petugas: "Dewi Lestari",
            deskripsi: "Insiden dorong di lapangan olahraga."
        },
        {
            id: "BLY-2026-0236",
            tanggal: "2026-07-18",
            sekolah: "SMP Negeri 8 Yogyakarta",
            jenis: "Verbal",
            pelapor: "Orang Tua",
            status: "Selesai",
            petugas: "Rudi Hartono",
            deskripsi: "Siswa dipanggil dengan nama kasar setiap hari."
        },
        {
            id: "BLY-2026-0235",
            tanggal: "2026-07-15",
            sekolah: "SMA Negeri 1 Makassar",
            jenis: "Sosial",
            pelapor: "Siswa",
            status: "Selesai",
            petugas: "Budi Santoso",
            deskripsi: "Dikecualikan dari undangan ulang tahun teman sekelas secara sengaja."
        },
        {
            id: "BLY-2026-0234",
            tanggal: "2026-07-12",
            sekolah: "SMP Negeri 4 Semarang",
            jenis: "Cyberbullying",
            pelapor: "Orang Tua",
            status: "Selesai",
            petugas: "Siti Rahayu",
            deskripsi: "Akun palsu dibuat untuk mencemarkan nama baik."
        },
        {
            id: "BLY-2026-0233",
            tanggal: "2026-07-10",
            sekolah: "SMP Negeri 3 Bandung",
            jenis: "Fisik",
            pelapor: "Guru",
            status: "Selesai",
            petugas: "Andi Wijaya",
            deskripsi: "Pergelutan di belakang gedung sekolah."
        },
        {
            id: "BLY-2026-0232",
            tanggal: "2026-07-08",
            sekolah: "SMA Negeri 5 Surabaya",
            jenis: "Verbal",
            pelapor: "Siswa",
            status: "Dalam Proses",
            petugas: "Dewi Lestari",
            deskripsi: "Ejekan terkait suku dan bahasa daerah."
        },
        {
            id: "BLY-2026-0231",
            tanggal: "2026-07-05",
            sekolah: "SMP Negeri 12 Jakarta",
            jenis: "Sosial",
            pelapor: "Orang Tua",
            status: "Selesai",
            petugas: "Rudi Hartono",
            deskripsi: "Anak tidak diajak bermain dan dihindari di kelas."
        },
        {
            id: "BLY-2026-0230",
            tanggal: "2026-07-03",
            sekolah: "SMA Negeri 2 Medan",
            jenis: "Cyberbullying",
            pelapor: "Siswa",
            status: "Baru",
            petugas: "-",
            deskripsi: "Video dipermalukan di media sosial sekolah."
        },
        {
            id: "BLY-2026-0229",
            tanggal: "2026-07-01",
            sekolah: "SMP Negeri 8 Yogyakarta",
            jenis: "Fisik",
            pelapor: "Guru",
            status: "Selesai",
            petugas: "Budi Santoso",
            deskripsi: "Siswa didorong hingga terjatuh di tangga."
        },
        {
            id: "BLY-2026-0228",
            tanggal: "2026-06-28",
            sekolah: "SMA Negeri 1 Makassar",
            jenis: "Verbal",
            pelapor: "Orang Tua",
            status: "Selesai",
            petugas: "Siti Rahayu",
            deskripsi: "Ancaman verbal di depan kelas."
        },
        {
            id: "BLY-2026-0227",
            tanggal: "2026-06-25",
            sekolah: "SMP Negeri 4 Semarang",
            jenis: "Sosial",
            pelapor: "Siswa",
            status: "Dalam Proses",
            petugas: "Andi Wijaya",
            deskripsi: "Penyebaran rumor negatif di kalangan siswa."
        },
        {
            id: "BLY-2026-0226",
            tanggal: "2026-06-22",
            sekolah: "SMP Negeri 3 Bandung",
            jenis: "Cyberbullying",
            pelapor: "Orang Tua",
            status: "Selesai",
            petugas: "Dewi Lestari",
            deskripsi: "Chat grup kelas berisi ejekan terhadap anak."
        },
        {
            id: "BLY-2026-0225",
            tanggal: "2026-06-20",
            sekolah: "SMA Negeri 5 Surabaya",
            jenis: "Fisik",
            pelapor: "Guru",
            status: "Selesai",
            petugas: "Rudi Hartono",
            deskripsi: "Tindakan kekerasan ringan di toilet sekolah."
        },
        {
            id: "BLY-2026-0224",
            tanggal: "2026-06-18",
            sekolah: "SMP Negeri 12 Jakarta",
            jenis: "Verbal",
            pelapor: "Siswa",
            status: "Baru",
            petugas: "-",
            deskripsi: "Siswa sering dipanggil nama yang merendahkan."
        },
        {
            id: "BLY-2026-0223",
            tanggal: "2026-06-15",
            sekolah: "SMA Negeri 2 Medan",
            jenis: "Sosial",
            pelapor: "Orang Tua",
            status: "Selesai",
            petugas: "Budi Santoso",
            deskripsi: "Pengucilan dari kegiatan ekstrakurikuler."
        },
    ];

    // ========== STATE ==========
    let filtered = [...laporanData];
    let currentPage = 1;
    const perPage = 10;

    // ========== BADGE STATUS ==========
    function badgeStatus(status) {
        const map = {
            "Baru": "bg-blue-100 text-blue-700",
            "Dalam Proses": "bg-amber-100 text-amber-700",
            "Selesai": "bg-emerald-100 text-emerald-700",
            "Ditolak": "bg-slate-100 text-slate-600"
        };
        return `<span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold ${map[status] || 'bg-slate-100 text-slate-600'}">${status}</span>`;
    }

    // ========== RENDER TABLE ==========
    function renderTable() {
        const tbody = document.getElementById("tbodyLaporan");
        const start = (currentPage - 1) * perPage;
        const end = start + perPage;
        const pageData = filtered.slice(start, end);

        tbody.innerHTML = pageData.map(row => `
                <tr class="hover:bg-slate-50 transition">
                    <td class="py-3 px-4 font-medium text-slate-800">${row.id}</td>
                    <td class="py-3 px-4 text-slate-600">${formatTanggal(row.tanggal)}</td>
                    <td class="py-3 px-4 text-slate-700">${row.sekolah}</td>
                    <td class="py-3 px-4 text-slate-600">${row.jenis}</td>
                    <td class="py-3 px-4 text-slate-600">${row.pelapor}</td>
                    <td class="py-3 px-4">${badgeStatus(row.status)}</td>
                    <td class="py-3 px-4 text-slate-600">${row.petugas}</td>
                    <td class="py-3 px-4">
                        <button onclick='lihatDetail(${JSON.stringify(row)})' class="text-blue-600 hover:text-blue-800 text-xs font-medium hover:underline">
                            Detail
                        </button>
                    </td>
                </tr>
            `).join("");

        // Update pagination info
        const total = filtered.length;
        document.getElementById("totalRows").textContent = total;
        document.getElementById("showingFrom").textContent = total === 0 ? 0 : start + 1;
        document.getElementById("showingTo").textContent = Math.min(end, total);
        document.getElementById("pageInfo").textContent = `Hal ${currentPage} / ${Math.max(1, Math.ceil(total / perPage))}`;
        document.getElementById("btnPrev").disabled = currentPage === 1;
        document.getElementById("btnNext").disabled = currentPage >= Math.ceil(total / perPage) || total === 0;
    }

    function formatTanggal(iso) {
        const d = new Date(iso);
        return d.toLocaleDateString("id-ID", {
            day: "2-digit",
            month: "short",
            year: "numeric"
        });
    }

    // ========== FILTER ==========
    function applyFilter() {
        const q = document.getElementById("searchInput").value.toLowerCase();
        const status = document.getElementById("filterStatus").value;
        const jenis = document.getElementById("filterJenis").value;
        const sekolah = document.getElementById("filterSekolah").value;

        filtered = laporanData.filter(row => {
            const matchQ = !q || row.id.toLowerCase().includes(q) || row.sekolah.toLowerCase().includes(q) || row.pelapor.toLowerCase().includes(q);
            const matchStatus = !status || row.status === status;
            const matchJenis = !jenis || row.jenis === jenis || (jenis === "Sosial" && row.jenis === "Sosial");
            const matchSekolah = !sekolah || row.sekolah === sekolah;
            return matchQ && matchStatus && matchJenis && matchSekolah;
        });

        currentPage = 1;
        renderTable();
    }

    function resetFilter() {
        document.getElementById("searchInput").value = "";
        document.getElementById("filterStatus").value = "";
        document.getElementById("filterJenis").value = "";
        document.getElementById("filterSekolah").value = "";
        filtered = [...laporanData];
        currentPage = 1;
        renderTable();
    }

    // ========== PAGINATION ==========
    function prevPage() {
        if (currentPage > 1) {
            currentPage--;
            renderTable();
        }
    }

    function nextPage() {
        if (currentPage < Math.ceil(filtered.length / perPage)) {
            currentPage++;
            renderTable();
        }
    }

    // ========== MODAL ==========
    function lihatDetail(row) {
        const body = document.getElementById("modalBody");
        body.innerHTML = `
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <p class="text-xs text-slate-500">ID Laporan</p>
                        <p class="font-medium text-slate-800">${row.id}</p>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500">Tanggal Laporan</p>
                        <p class="font-medium text-slate-800">${formatTanggal(row.tanggal)}</p>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500">Sekolah</p>
                        <p class="font-medium text-slate-800">${row.sekolah}</p>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500">Jenis Bullying</p>
                        <p class="font-medium text-slate-800">${row.jenis}</p>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500">Pelapor</p>
                        <p class="font-medium text-slate-800">${row.pelapor}</p>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500">Status</p>
                        <p class="mt-0.5">${badgeStatus(row.status)}</p>
                    </div>
                    <div class="col-span-2">
                        <p class="text-xs text-slate-500">Petugas Penanganan</p>
                        <p class="font-medium text-slate-800">${row.petugas}</p>
                    </div>
                    <div class="col-span-2">
                        <p class="text-xs text-slate-500">Deskripsi</p>
                        <p class="text-slate-700 mt-1 leading-relaxed">${row.deskripsi}</p>
                    </div>
                </div>
            `;
        const modal = document.getElementById("modalDetail");
        modal.classList.remove("hidden");
        modal.classList.add("flex");
    }

    function tutupModal() {
        const modal = document.getElementById("modalDetail");
        modal.classList.add("hidden");
        modal.classList.remove("flex");
    }

    // Event listeners
    document.getElementById("searchInput").addEventListener("input", applyFilter);
    document.getElementById("filterStatus").addEventListener("change", applyFilter);
    document.getElementById("filterJenis").addEventListener("change", applyFilter);
    document.getElementById("filterSekolah").addEventListener("change", applyFilter);

    // Init
    renderTable();
</script>