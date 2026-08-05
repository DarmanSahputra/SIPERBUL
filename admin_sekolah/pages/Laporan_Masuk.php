<div class="w-full p-4 md:p-6">

    <!-- Header Halaman -->
    <div class="mb-6 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <p class="text-sm font-semibold text-blue-600">SIPERBUL</p>
        <h1 class="mt-1 text-2xl font-bold text-slate-800">Laporan Masuk</h1>
        <p class="mt-2 text-sm text-slate-500">
            Kelola dan pantau laporan bullying yang masuk dari sekolah.
        </p>
    </div>

    <!-- Card Tabel -->
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

        <!-- Search dan Filter -->
        <div class="flex flex-col gap-4 border-b border-slate-200 p-5 xl:flex-row xl:items-center xl:justify-between">

            <div class="grid w-full gap-3 md:grid-cols-3 xl:max-w-4xl">

                <!-- Search -->
                <div class="relative">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2">

                        <circle cx="11" cy="11" r="7" />
                        <path d="m20 20-4-4" />

                    </svg>

                    <input
                        id="searchLaporan"
                        type="text"
                        placeholder="Cari kelas, lokasi, atau kronologi..."
                        class="w-full rounded-xl border border-slate-200 py-3 pl-11 pr-4 text-sm text-slate-700 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-100">

                </div>

                <!-- Filter Jenis Bullying -->
                <select
                    id="filterJenis"
                    class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-600 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100">

                    <option value="">Semua Jenis Bullying</option>
                    <option value="Fisik">Bullying Fisik</option>
                    <option value="Verbal">Bullying Verbal</option>
                    <option value="Siber">Cyberbullying</option>
                    <option value="Sosial">Bullying Sosial</option>

                </select>

                <!-- Filter Status -->
                <select
                    id="filterStatus"
                    class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-600 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100">

                    <option value="">Semua Status</option>
                    <option value="Baru">Laporan Baru</option>
                    <option value="Diproses">Dalam Proses</option>
                    <option value="Selesai">Selesai</option>

                </select>

            </div>

            <!-- Total dan Reset -->
            <div class="flex items-center justify-between gap-3 xl:justify-end">

                <p class="whitespace-nowrap text-sm text-slate-500">

                    Menampilkan

                    <span
                        id="totalLaporan"
                        class="font-bold text-slate-700">
                        6
                    </span>

                    laporan

                </p>

                <button
                    id="resetFilter"
                    type="button"
                    class="rounded-xl border border-slate-200 px-5 py-3 text-sm font-semibold text-slate-600 transition hover:bg-slate-100">
                    Reset
                </button>

            </div>

        </div>

        <!-- Area Tabel -->
        <div class="h-[520px] overflow-auto">

            <table class="w-full min-w-[550px] text-left">

                <!-- Header Tabel -->
                <thead>

                    <tr>

                        <th class="sticky top-0 z-10 bg-slate-50 px-5 py-4 text-xs font-bold uppercase tracking-wide text-slate-500">
                            ID
                        </th>

                        <th class="sticky top-0 z-10 bg-slate-50 px-5 py-4 text-xs font-bold uppercase tracking-wide text-slate-500">
                            Kelas
                        </th>

                        <th class="sticky top-0 z-10 bg-slate-50 px-5 py-4 text-xs font-bold uppercase tracking-wide text-slate-500">
                            Jenis Bullying
                        </th>

                        <th class="sticky top-0 z-10 bg-slate-50 px-5 py-4 text-xs font-bold uppercase tracking-wide text-slate-500">
                            Lokasi Kejadian
                        </th>

                        <th class="sticky top-0 z-10 bg-slate-50 px-5 py-4 text-xs font-bold uppercase tracking-wide text-slate-500">
                            Kronologi
                        </th>

                        <th class="sticky top-0 z-10 bg-slate-50 px-5 py-4 text-center text-xs font-bold uppercase tracking-wide text-slate-500">
                            Bukti Foto
                        </th>

                        <th class="sticky top-0 z-10 bg-slate-50 px-5 py-4 text-center text-xs font-bold uppercase tracking-wide text-slate-500">
                            Status
                        </th>
                    </tr>

                </thead>

                <!-- Isi Tabel -->
                <tbody
                    id="dataLaporan"
                    class="divide-y divide-slate-100">

                    <!-- Data 1 -->
                    <tr
                        data-jenis="Fisik"
                        data-status="Baru"
                        class="transition hover:bg-slate-50">

                        <td class="px-5 py-4 font-semibold text-blue-600">
                            LP-001
                        </td>

                        <td class="px-5 py-4 text-sm font-semibold text-slate-700">
                            XI IPA 1
                        </td>

                        <td class="px-5 py-4">

                            <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-600">
                                Fisik
                            </span>

                        </td>

                        <td class="px-5 py-4 text-sm text-slate-600">
                            Halaman Sekolah
                        </td>
                        <td class="py-4 px-5">

                            <button
                                type="button"
                                class="rounded-lg border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-600 transition hover:bg-slate-100"
                                onclick="bukaDetail()">
                                Detail
                            </button>
                        </td>
                        <td class="px-5 py-4 text-center">

                            <button
                                type="button"
                                class="rounded-lg bg-blue-50 px-3 py-2 text-xs font-semibold text-blue-600 transition hover:bg-blue-600 hover:text-white">
                                Lihat Foto
                            </button>

                        </td>

                        <td class="px-5 py-4 text-center">

                            <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-600">
                                Baru
                            </span>

                        </td>

                        
                    </tr>
                   
                    </tr>

                </tbody>

            </table>

        </div>

    </div>
</div>
<?php include "./detail_laporan/detail_laporan.php" ?>
<!-- <div class="absolute top-0 left-0">
</div> -->
<script>
    function bukaDetail(){
        modalDetail.classList.add('flex', 'opacity-100')
        modalDetail.classList.remove('hidden', 'opacity-0')

        modalContent.classList.remove('hidden', 'opacity-0')
        modalContent.classList.add('block', 'opacity-100')
    }
    const searchLaporan = document.getElementById("searchLaporan");
    const filterJenis = document.getElementById("filterJenis");
    const filterStatus = document.getElementById("filterStatus");
    const dataLaporan = document.querySelectorAll("#dataLaporan tr:not(#dataKosong)");
    const dataKosong = document.getElementById("dataKosong");
    const totalLaporan = document.getElementById("totalLaporan");
    const resetFilter = document.getElementById("resetFilter");

    function filterLaporan() {

        const kataKunci = searchLaporan.value.toLowerCase().trim();

        const jenisDipilih = filterJenis.value;

        const statusDipilih = filterStatus.value;

        let jumlahData = 0;

        dataLaporan.forEach((baris) => {

            const isiBaris = baris.textContent.toLowerCase();

            const jenis = baris.dataset.jenis;

            const status = baris.dataset.status;

            const cocokPencarian = isiBaris.includes(kataKunci);

            const cocokJenis =
                jenisDipilih === "" ||
                jenis === jenisDipilih;

            const cocokStatus =
                statusDipilih === "" ||
                status === statusDipilih;

            const tampil =
                cocokPencarian &&
                cocokJenis &&
                cocokStatus;

            baris.classList.toggle(
                "hidden",
                !tampil
            );

            if (tampil) {

                jumlahData++;

            }

        });

        totalLaporan.textContent =
            jumlahData;

        dataKosong.classList.toggle(
            "hidden",
            jumlahData !== 0
        );

    }

    searchLaporan.addEventListener(
        "input",
        filterLaporan
    );

    filterJenis.addEventListener(
        "change",
        filterLaporan
    );

    filterStatus.addEventListener(
        "change",
        filterLaporan
    );

    resetFilter.addEventListener(
        "click",
        () => {
            searchLaporan.value = "";
            filterJenis.value = "";
            filterStatus.value = "";
            filterLaporan();
        }
    );
</script>