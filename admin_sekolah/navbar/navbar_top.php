<?php $namePage = $_GET['page'] ?? 'dashboard' ?>

<div class="w-full py-2 px-4">
    <div class="p-2 bg-white shadow-sm rounded-xl flex items-center relative">
        <h1 class="font-bold text-black text-2xl p-6">
            <?php
            if ($namePage == "Dashboard") {
                echo "Dashboard";
            } elseif ($namePage == "Laporan_Masuk") {
                echo "Laporan Masuk";
            } elseif ($namePage == "tindak_lanjut") {
                echo "Tindak Lanjut";
            } elseif ($namePage == "Laporan_Masuk") {
                echo "Laporan Masuk";
            } elseif ($namePage == "Laporan_Bulanan") {
                echo "Laporan Bulanan";
            }
            ?>
        </h1>
        <div class="absolute right-2 rounded-sm  border-slate-200">
            <div class="w-auto p-2 flex gap-2 items-center rounded-xl border-2 border-slate-200">
                <div class="relative">
                    <button id="profileButton" type="button" aria-label="Menu profil" class="flex h-9 w-9 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-600 shadow-sm transition hover:bg-slate-100">
                        <svg id="profileIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>

                    <div id="profileMenu" class="absolute right-0 top-full z-50 mt-2 hidden w-48 overflow-hidden rounded-xl border border-slate-200 bg-white py-2 shadow-lg">
                        <!-- Informasi Petugas -->
                        <div class="border-b border-slate-100 px-4 py-3">
                            <p class="text-sm font-semibold text-slate-700">Petugas Sekolah</p>
                            <p class="mt-1 text-xs text-slate-400">Darman Sahputra Harefa</p>
                        </div>

                        <!-- Menu Profil -->
                        <a href="profile.php" class="flex items-center gap-3 px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-blue-50 hover:text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="8" r="4" />
                                <path d="M4 21a8 8 0 0 1 16 0" />
                            </svg>
                            Profil Saya
                        </a>
                        <a href="profile.php" class="flex items-center gap-3 px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-blue-50 hover:text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings-icon lucide-settings"><path d="M9.671 4.136a2.34 2.34 0 0 1 4.659 0 2.34 2.34 0 0 0 3.319 1.915 2.34 2.34 0 0 1 2.33 4.033 2.34 2.34 0 0 0 0 3.831 2.34 2.34 0 0 1-2.33 4.033 2.34 2.34 0 0 0-3.319 1.915 2.34 2.34 0 0 1-4.659 0 2.34 2.34 0 0 0-3.32-1.915 2.34 2.34 0 0 1-2.33-4.033 2.34 2.34 0 0 0 0-3.831A2.34 2.34 0 0 1 6.35 6.051a2.34 2.34 0 0 0 3.319-1.915"/><circle cx="12" cy="12" r="3"/></svg>
                            Pengaturan
                        </a>
                        <a href="profile.php" class="flex items-center gap-3 px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-blue-50 hover:text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info-icon lucide-info"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                            Tentang Kita
                        </a>

                        <!-- Menu Keluar -->
                        <a href="logout.php" class="flex items-center gap-3 px-4 py-3 text-sm font-medium text-red-500 transition hover:bg-red-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M10 17l5-5-5-5" />
                                <path d="M15 12H3" />
                                <path d="M21 19V5a2 2 0 0 0-2-2h-6" />
                            </svg>
                            Keluar
                        </a>

                    </div>


                </div>

                <h1 class="text-right">Petugas<p class="text-xs text-slate-400 ">Darman Sahputra Harefa</p>
                </h1>
                <img src="../assets/images/dinas.png" alt="" class="w-10 h-10 rounded-full">
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
                const klikDiLuar = !profileMenu.contains(event.target) && !profileButton.contains(event.target);

                if (klikDiLuar) {
                    profileMenu.classList.add("hidden");
                    profileIcon.classList.remove("rotate-180");
                }
            });
        </script>

    </div>
</div>