<?php
$current = $_GET['page'] ?? 'dashboard';
?>

<style>
    .nav-item.active {
        background: rgba(34, 197, 94, 0.2);
        border-left: 3px solid #22c55e;
    }
    .nav-item.active span,
    .nav-item.active svg {
        color: #86efac;
    }
    .nav-item:not(.active):hover {
        background: rgba(255, 255, 255, 0.06);
    }
    .sidebar-scroll::-webkit-scrollbar {
        width: 4px;
    }
    .sidebar-scroll::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.15);
        border-radius: 4px;
    }
</style>

<aside class="w-72 h-screen flex flex-col bg-green-900 text-white shadow-lg sticky top-0">

    <!-- Logo / Brand -->
    <div class="px-5 pt-6 pb-5 border-b border-white/10">
        <div class="flex items-center gap-3">
            <div class="w-12 h-12 rounded-xl bg-white/10 border border-white/15 flex items-center justify-center flex-shrink-0 overflow-hidden">
                <img src="../assets/images/dinas.png" alt="Logo Dinas" class="w-10 h-10 object-contain"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                <div class="hidden w-full h-full items-center justify-center text-green-400 font-bold text-lg">DP</div>
            </div>
            <div class="min-w-0">
                <h1 class="text-base font-bold tracking-wide text-white leading-tight">SIPERBUL</h1>
                <p class="text-[11px] text-green-200/80 font-medium leading-tight mt-0.5">Kota Pematangsiantar</p>
            </div>
        </div>
        <div class="mt-3">
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-semibold uppercase tracking-wider bg-green-500/20 text-green-200 border border-green-500/30">
                <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                Dinas Pendidikan
            </span>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 overflow-y-auto sidebar-scroll px-3 py-4 space-y-1">
        <p class="px-3 mb-2 text-[10px] font-semibold uppercase tracking-widest text-white/30">Menu Utama</p>

        <!-- Dashboard -->
        <a href="index.php?page=dashboard"
            class="nav-item group flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all duration-200 <?= $current === 'dashboard' ? 'active' : '' ?>">
            <span class="w-9 h-9 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white/70">
                    <rect width="7" height="9" x="3" y="3" rx="1" />
                    <rect width="7" height="5" x="14" y="3" rx="1" />
                    <rect width="7" height="9" x="14" y="12" rx="1" />
                    <rect width="7" height="5" x="3" y="16" rx="1" />
                </svg>
            </span>
            <span class="text-sm font-medium text-white/80">Dashboard</span>
        </a>

        <!-- Monitoring Laporan -->
        <a href="index.php?page=monitoring"
            class="nav-item group flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all duration-200 <?= $current === 'monitoring' ? 'active' : '' ?>">
            <span class="w-9 h-9 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white/70">
                    <path d="M12 16v5" />
                    <path d="M16 14.639V21" />
                    <path d="M20 10.656V21" />
                    <path d="m22 3-8.646 8.646a.5.5 0 0 1-.708 0L9.354 8.354a.5.5 0 0 0-.707 0L2 15" />
                    <path d="M4 18.463V21" />
                    <path d="M8 14.656V21" />
                </svg>
            </span>
            <span class="text-sm font-medium text-white/80">Monitoring Laporan</span>
        </a>

        <!-- Data Sekolah -->
        <a href="index.php?page=data_sekolah"
            class="nav-item group flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all duration-200 <?= $current === 'data_sekolah' ? 'active' : '' ?>">
            <span class="w-9 h-9 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white/70">
                    <path d="M14 21v-3a2 2 0 0 0-4 0v3" />
                    <path d="M18 4.933V21" />
                    <path d="m4 6 7.106-3.79a2 2 0 0 1 1.788 0L20 6" />
                    <path d="m6 11-3.52 2.147a1 1 0 0 0-.48.854V19a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-5a1 1 0 0 0-.48-.853L18 11" />
                    <path d="M6 4.933V21" />
                    <circle cx="12" cy="9" r="2" />
                </svg>
            </span>
            <span class="text-sm font-medium text-white/80">Data Sekolah</span>
        </a>

        <!-- Petugas Sekolah -->
        <a href="index.php?page=petugas_sekolah"
            class="nav-item group flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all duration-200 <?= $current === 'petugas_sekolah' ? 'active' : '' ?>">
            <span class="w-9 h-9 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white/70">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                    <path d="M16 3.128a4 4 0 0 1 0 7.744" />
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                    <circle cx="9" cy="7" r="4" />
                </svg>
            </span>
            <span class="text-sm font-medium text-white/80">Petugas Sekolah</span>
        </a>

        <p class="px-3 mt-5 mb-2 text-[10px] font-semibold uppercase tracking-widest text-white/30">Pengawasan</p>

        <!-- Pengawasan Penanganan -->
        <a href="index.php?page=pengawasan"
            class="nav-item group flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all duration-200 <?= $current === 'pengawasan' ? 'active' : '' ?>">
            <span class="w-9 h-9 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white/70">
                    <circle cx="10" cy="8" r="5" />
                    <path d="M2 21a8 8 0 0 1 10.434-7.62" />
                    <circle cx="18" cy="18" r="3" />
                    <path d="m22 22-1.9-1.9" />
                </svg>
            </span>
            <span class="text-sm font-medium text-white/80">Pengawasan Penanganan</span>
        </a>

        <!-- Riwayat Tindakan -->
        <a href="index.php?page=riwayat"
            class="nav-item group flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all duration-200 <?= $current === 'riwayat' ? 'active' : '' ?>">
            <span class="w-9 h-9 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white/70">
                    <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8" />
                    <path d="M3 3v5h5" />
                    <path d="M12 7v5l4 2" />
                </svg>
            </span>
            <span class="text-sm font-medium text-white/80">Riwayat Tindakan</span>
        </a>

        <!-- Laporan Bulanan -->
        <a href="index.php?page=laporan_bulanan"
            class="nav-item group flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all duration-200 <?= $current === 'laporan_bulanan' ? 'active' : '' ?>">
            <span class="w-9 h-9 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white/70">
                    <path d="M19 17V5a2 2 0 0 0-2-2H4" />
                    <path d="M8 21h12a2 2 0 0 0 2-2v-1a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1v1a2 2 0 1 1-4 0V5a2 2 0 1 0-4 0v2a1 1 0 0 0 1 1h3" />
                </svg>
            </span>
            <span class="text-sm font-medium text-white/80">Laporan Bulanan</span>
        </a>
    </nav>

    <!-- Footer / User -->
    <div class="px-4 py-4 border-t border-white/10">
        <div class="flex items-center gap-3 px-2 py-2 rounded-xl hover:bg-white/5 transition cursor-pointer">
            <div class="w-9 h-9 rounded-full bg-green-500/30 border border-green-500/40 flex items-center justify-center text-sm font-bold text-green-200">
                AD
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-white truncate">Admin Dinas</p>
                <p class="text-[11px] text-white/40 truncate">admin@disdik.siantar.go.id</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white/30">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                <polyline points="16 17 21 12 16 7" />
                <line x1="21" x2="9" y1="12" y2="12" />
            </svg>
        </div>
    </div>
</aside>