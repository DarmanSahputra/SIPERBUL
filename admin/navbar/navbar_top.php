<?php
$namePage = $_GET['page'] ?? 'dashboard';

$titles = [
    'dashboard'       => 'Dashboard',
    'monitoring'      => 'Monitoring Laporan',
    'data_sekolah'    => 'Data Sekolah',
    'petugas_sekolah' => 'Petugas Sekolah',
    'pengawasan'      => 'Pengawasan Penanganan',
    'riwayat'         => 'Riwayat Tindakan',
    'laporan_bulanan' => 'Laporan Bulanan',
];
$pageTitle = $titles[$namePage] ?? 'Dashboard';
?>

<div class="w-full px-4 pt-3 pb-2">
    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 px-5 py-3.5 flex items-center justify-between gap-4">

        <!-- Judul Halaman -->
        <div class="min-w-0">
            <p class="text-[11px] font-medium text-slate-400 uppercase tracking-wider">SIPERBUL · Dinas Pendidikan</p>
            <h1 class="text-xl font-bold text-slate-800 truncate mt-0.5"><?= htmlspecialchars($pageTitle) ?></h1>
        </div>

        <!-- Profil -->
        <div class="relative flex-shrink-0">
            <button id="profileButton" type="button" aria-label="Menu profil"
                class="flex items-center gap-3 pl-2 pr-2.5 py-1.5 rounded-xl border border-slate-200 bg-slate-50 hover:bg-slate-100 transition">
                <img src="../assets/images/dinas.png" alt="Avatar"
                    class="w-9 h-9 object-contain bg-white">
                <div class="text-left hidden sm:block">
                    <p class="text-sm font-semibold text-slate-700 leading-tight">Darman Sahputra Harefa</p>
                    <p class="text-[11px] text-slate-400 leading-tight">Petugas Dinas</p>
                </div>
                <svg id="profileIcon" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </button>

            <!-- Dropdown -->
            <div id="profileMenu" class="absolute right-0 top-full z-50 mt-2 hidden w-56 overflow-hidden rounded-xl border border-slate-200 bg-white py-1.5 shadow-lg">
                <div class="border-b border-slate-100 px-4 py-3">
                    <p class="text-sm font-semibold text-slate-700">Darman Sahputra Harefa</p>
                    <p class="mt-0.5 text-xs text-slate-400">Kantor Dinas · Pematangsiantar</p>
                </div>

                <a href="profile.php" class="flex items-center gap-3 px-4 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-green-50 hover:text-green-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="8" r="4" />
                        <path d="M4 21a8 8 0 0 1 16 0" />
                    </svg>
                    Profil Saya
                </a>
                <a href="profile.php" class="flex items-center gap-3 px-4 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-green-50 hover:text-green-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3" />
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z" />
                    </svg>
                    Pengaturan
                </a>
                <a href="profile.php" class="flex items-center gap-3 px-4 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-green-50 hover:text-green-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M12 16v-4" />
                        <path d="M12 8h.01" />
                    </svg>
                    Tentang Kita
                </a>

                <div class="my-1 border-t border-slate-100"></div>

                <a href="logout.php" class="flex items-center gap-3 px-4 py-2.5 text-sm font-medium text-red-500 transition hover:bg-red-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                        <polyline points="16 17 21 12 16 7" />
                        <line x1="21" x2="9" y1="12" y2="12" />
                    </svg>
                    Keluar
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    const profileButton = document.getElementById("profileButton");
    const profileMenu = document.getElementById("profileMenu");
    const profileIcon = document.getElementById("profileIcon");

    profileButton.addEventListener("click", (event) => {
        event.stopPropagation();
        profileMenu.classList.toggle("hidden");
        profileIcon.classList.toggle("rotate-180");
    });

    document.addEventListener("click", (event) => {
        if (!profileMenu.contains(event.target) && !profileButton.contains(event.target)) {
            profileMenu.classList.add("hidden");
            profileIcon.classList.remove("rotate-180");
        }
    });
</script>