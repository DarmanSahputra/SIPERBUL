<?php
$bulanSekarang = date("m");
$tahunSekarang = date("Y");
?>

<div class="min-h-full w-full bg-slate-50 p-4 sm:p-6">

    ```
    <!-- Header -->
    <div class="mb-6 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">

        <div class="flex flex-col justify-between gap-5 lg:flex-row lg:items-center">

            <div>

                <p class="text-sm font-semibold text-blue-600">
                    Laporan Bulanan
                </p>

                <h1 class="mt-1 text-2xl font-bold text-slate-800">
                    Rekapitulasi Laporan Bullying
                </h1>

                <p class="mt-2 text-sm text-slate-500">
                    Pilih periode laporan untuk melihat data dan mengunduh rekap dalam format CSV.
                </p>

            </div>

            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-100 text-blue-600">

                <svg xmlns="http://www.w3.org/2000/svg"
                    width="28"
                    height="28"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round">

                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />

                    <path d="M14 2v6h6" />

                    <path d="M8 13h8" />

                    <path d="M8 17h8" />

                    <path d="M8 9h2" />

                </svg>

            </div>

        </div>

    </div>

    <!-- Filter -->
    <div class="mb-6 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

        <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">

            <!-- Bulan -->
            <div>

                <label class="mb-2 block text-sm font-semibold text-slate-700">
                    Bulan
                </label>

                <select
                    id="bulan"
                    class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-700 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100">

                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>

                </select>

            </div>

            <!-- Tahun -->
            <div>

                <label class="mb-2 block text-sm font-semibold text-slate-700">
                    Tahun
                </label>

                <select
                    id="tahun"
                    class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-700 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100">

                    <?php for ($tahun = date("Y"); $tahun >= 2023; $tahun--) : ?>

                        <option value="<?= $tahun ?>">
                            <?= $tahun ?>
                        </option>

                    <?php endfor; ?>

                </select>

            </div>

            <!-- Status -->
            <div>

                <label class="mb-2 block text-sm font-semibold text-slate-700">
                    Status Laporan
                </label>

                <select
                    id="status"
                    class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-700 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100">

                    <option value="">
                        Semua Status
                    </option>

                    <option value="baru">
                        Laporan Baru
                    </option>

                    <option value="proses">
                        Dalam Proses
                    </option>

                    <option value="selesai">
                        Selesai
                    </option>

                </select>

            </div>

            <!-- Tombol -->
            <div class="flex items-end">

                <button
                    type="button"
                    onclick="ambilLaporan()"
                    class="flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-blue-700">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        width="18"
                        height="18"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2">

                        <circle cx="11" cy="11" r="8" />

                        <path d="m21 21-4.3-4.3" />

                    </svg>

                    Tampilkan Data

                </button>

            </div>

        </div>

    </div>

    <!-- Ringkasan -->
    <div class="mb-6 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">

        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <p class="text-sm font-medium text-slate-500">
                Total Laporan
            </p>

            <h2
                id="totalLaporan"
                class="mt-2 text-3xl font-bold text-slate-800">
                0
            </h2>

        </div>

        <div class="rounded-2xl border border-blue-100 bg-blue-50 p-5">

            <p class="text-sm font-medium text-blue-600">
                Laporan Baru
            </p>

            <h2
                id="totalBaru"
                class="mt-2 text-3xl font-bold text-blue-700">
                0
            </h2>

        </div>

        <div class="rounded-2xl border border-amber-100 bg-amber-50 p-5">

            <p class="text-sm font-medium text-amber-600">
                Dalam Proses
            </p>

            <h2
                id="totalProses"
                class="mt-2 text-3xl font-bold text-amber-700">
                0
            </h2>

        </div>

        <div class="rounded-2xl border border-emerald-100 bg-emerald-50 p-5">

            <p class="text-sm font-medium text-emerald-600">
                Selesai
            </p>

            <h2
                id="totalSelesai"
                class="mt-2 text-3xl font-bold text-emerald-700">
                0
            </h2>

        </div>

    </div>

    <!-- Tabel -->
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

        <div class="flex flex-col justify-between gap-4 border-b border-slate-200 p-5 sm:flex-row sm:items-center">

            <div>

                <h2 class="text-lg font-bold text-slate-800">
                    Preview Data Laporan
                </h2>

                <p class="mt-1 text-sm text-slate-500">
                    Data yang tampil dapat langsung diunduh dalam format CSV.
                </p>

            </div>

            <button
                type="button"
                onclick="downloadCSV()"
                class="flex items-center justify-center gap-2 rounded-xl bg-emerald-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-emerald-700">

                <svg xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2">

                    <path d="M12 3v12" />

                    <path d="m8 11 4 4 4-4" />

                    <path d="M5 21h14" />

                </svg>

                Download CSV

            </button>

        </div>

        <div class="max-h-[500px] overflow-auto">

            <table class="w-full min-w-[1000px] text-left">

                <thead class="sticky top-0 z-10 bg-slate-50">

                    <tr class="border-b border-slate-200">

                        <th class="px-5 py-4 text-xs font-bold uppercase text-slate-500">
                            ID
                        </th>

                        <th class="px-5 py-4 text-xs font-bold uppercase text-slate-500">
                            Tanggal
                        </th>

                        <th class="px-5 py-4 text-xs font-bold uppercase text-slate-500">
                            Kelas
                        </th>

                        <th class="px-5 py-4 text-xs font-bold uppercase text-slate-500">
                            Jenis Bullying
                        </th>

                        <th class="px-5 py-4 text-xs font-bold uppercase text-slate-500">
                            Lokasi
                        </th>

                        <th class="px-5 py-4 text-xs font-bold uppercase text-slate-500">
                            Status
                        </th>

                    </tr>

                </thead>

                <tbody
                    id="dataLaporan"
                    class="divide-y divide-slate-100">

                    <tr>

                        <td
                            colspan="6"
                            class="px-5 py-16 text-center text-sm text-slate-400">
                            Memuat data laporan...
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>
    ```

</div>

<script>
    const bulan = document.getElementById("bulan");
    const tahun = document.getElementById("tahun");
    const status = document.getElementById("status");

    bulan.value = "<?= $bulanSekarang ?>";
    tahun.value = "<?= $tahunSekarang ?>";

    function ambilLaporan() {

        const tbody =
            document.getElementById("dataLaporan");

        tbody.innerHTML = `
        <tr>
            <td
                colspan="6"
                class="px-5 py-16 text-center text-sm text-slate-400"
            >
                Memuat data...
            </td>
        </tr>
    `;

        const parameter =
            new URLSearchParams({
                bulan: bulan.value,
                tahun: tahun.value,
                status: status.value
            });

        fetch(
                "get_laporan_bulanan.php?" +
                parameter.toString()
            )
            .then(
                response => response.json()
            )
            .then(
                hasil => {

                    document.getElementById(
                            "totalLaporan"
                        ).textContent =
                        hasil.ringkasan.total;

                    document.getElementById(
                            "totalBaru"
                        ).textContent =
                        hasil.ringkasan.baru;

                    document.getElementById(
                            "totalProses"
                        ).textContent =
                        hasil.ringkasan.proses;

                    document.getElementById(
                            "totalSelesai"
                        ).textContent =
                        hasil.ringkasan.selesai;

                    tampilkanData(
                        hasil.data
                    );

                }
            )
            .catch(
                error => {

                    console.error(error);

                    tbody.innerHTML = `
                <tr>
                    <td
                        colspan="6"
                        class="px-5 py-16 text-center text-red-500"
                    >
                        Gagal mengambil data.
                    </td>
                </tr>
            `;

                }
            );

    }

    function tampilkanData(data) {

        const tbody =
            document.getElementById(
                "dataLaporan"
            );

        if (
            data.length === 0
        ) {

            tbody.innerHTML = `
            <tr>
                <td
                    colspan="6"
                    class="px-5 py-16 text-center text-sm text-slate-400"
                >
                    Tidak ada laporan pada periode ini.
                </td>
            </tr>
        `;

            return;

        }

        tbody.innerHTML =
            data.map(
                laporan => {

                    return `
                    <tr class="transition hover:bg-slate-50">

                        <td class="px-5 py-4 font-semibold text-blue-600">
                            ${laporan.id}
                        </td>

                        <td class="px-5 py-4 text-sm text-slate-600">
                            ${laporan.tanggal}
                        </td>

                        <td class="px-5 py-4 text-sm font-medium text-slate-700">
                            ${laporan.kelas}
                        </td>

                        <td class="px-5 py-4 text-sm text-slate-600">
                            ${laporan.jenis}
                        </td>

                        <td class="px-5 py-4 text-sm text-slate-600">
                            ${laporan.lokasi}
                        </td>

                        <td class="px-5 py-4">
                            ${buatStatus(
                                laporan.status
                            )}
                        </td>

                    </tr>
                `;

                }
            ).join("");

    }

    function buatStatus(statusLaporan) {

        const status =
            statusLaporan.toLowerCase();

        if (
            status === "baru"
        ) {

            return `
            <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-bold text-blue-600">
                Laporan Baru
            </span>
        `;

        }

        if (
            status === "proses"
        ) {

            return `
            <span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-bold text-amber-600">
                Dalam Proses
            </span>
        `;

        }

        return `
        <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-600">
            Selesai
        </span>
    `;

    }

    function downloadCSV() {

        const parameter =
            new URLSearchParams({
                bulan: bulan.value,
                tahun: tahun.value,
                status: status.value
            });

        window.location.href =
            "export_csv.php?" +
            parameter.toString();

    }

    ambilLaporan();
</script>