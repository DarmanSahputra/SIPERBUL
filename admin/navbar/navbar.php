<?php 

$current = $_GET['page'] ?? 'dashboard';

?>


<div class="w-[330px] h-screen bg-blue-900 rounded-r-4xl">
    <div class="w-full h-16 py-16 px-6 border-b-2 border-slate-300 flex ">
        <div class="flex items-center ">
            <img src="../assets/images/dinas.png" alt="" class="w-16 h-16 rounded-full">
            <h1 class="ml-2 font-bold text-white">SIPERBUL<p class="font-medium text-xs ">Kota Pematangsiantar</p></h1>
        </div>
    </div>
    <div class="flex flex-col p-2">
        <a href="index.php?page=Dashboard">
            <div class="w-full flex gap-2 p-4 rounded-2xl text-white hover:bg-blue-500 hover:font-semibold cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-dashboard-icon lucide-layout-dashboard"><rect width="7" height="9" x="3" y="3" rx="1"/><rect width="7" height="5" x="14" y="3" rx="1"/><rect width="7" height="9" x="14" y="12" rx="1"/><rect width="7" height="5" x="3" y="16" rx="1"/></svg>
                Dashboard
            </div>
        </a>
        <a href="index.php?page=Laporan_Masuk">
            <div class="w-full flex gap-2  p-4 rounded-2xl text-white hover:bg-blue-500 hover:font-semibold cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-notebook-pen-icon lucide-notebook-pen"><path d="M13.4 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7.4"/><path d="M2 6h4"/><path d="M2 10h4"/><path d="M2 14h4"/><path d="M2 18h4"/><path d="M21.378 5.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z"/></svg>
                Laporan Masuk 
                <span class="ml-auto rounded-full bg-white/15 px-2 py-0.5 text-[10px] flex justify-center">1</span>
            </div>
        </a>
        <a href="index.php?page=Tindak_Lanjut">
            <div class="w-full flex gap-2  p-4 rounded-2xl text-white hover:bg-blue-500 hover:font-semibold cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-check-icon lucide-clipboard-check"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="m9 14 2 2 4-4"/></svg>
                Tindak Lanjut
            </div>
        </a>
        <a href="index.php?page=Laporan_Bulanan">
            <div class="w-full flex gap-2  p-4 rounded-2xl text-white hover:bg-blue-500 hover:font-semibold cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-chart-column-icon lucide-file-chart-column"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"/><path d="M14 2v5a1 1 0 0 0 1 1h5"/><path d="M8 18v-1"/><path d="M12 18v-6"/><path d="M16 18v-3"/></svg>
                Laporan Bulanan
            </div>
        </a>
        <div class="absolute bottom-2 left-2  flex gap-2  p-4 rounded-2xl text-white hover:bg-blue-500 hover:font-semibold cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out-icon lucide-log-out"><path d="m16 17 5-5-5-5"/><path d="M21 12H9"/><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/></svg>
            Keluar
        </div>
        
    </div>
</div>