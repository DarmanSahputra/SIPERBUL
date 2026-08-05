<!-- Modal Detail Laporan -->

<div id="modalDetail" class="absolute top-0 left-0 z-50 inset-0  hidden items-center justify-center 
                            bg-slate-900/60 p-4 backdrop-blur-sm">
    <div id="modalContent" class="w-[70%] h-[600px] max-w-3xl hidden scale-95 opacity-0 transition-all duration-200 p-2 rounded-xl bg-white ">
        <!-- Header Modal -->
        <div class="flex items-center justify-between bg-white border-b border-slate-200 px-6 py-5">

            <div>

                <p class="text-xs font-bold uppercase tracking-wider text-blue-600">
                    Detail Laporan
                </p>

                <h2 class="mt-1 text-xl font-bold text-slate-800">
                    Informasi Laporan Bullying
                </h2>

            </div>

            <button
                type="button"
                onclick="tutupDetail()"
                class="flex h-10 w-10 items-center justify-center rounded-xl text-slate-400 transition hover:bg-red-50 hover:text-red-600"
                aria-label="Tutup">

                <svg xmlns="http://www.w3.org/2000/svg"
                    width="22"
                    height="22"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round">

                    <path d="M18 6 6 18" />

                    <path d="m6 6 12 12" />

                </svg>

            </button>

        </div>

        <!-- Isi Modal -->
        <div class="max-h-[65vh] overflow-y-auto p-6">

            <!-- ID dan Status -->
            <div class="mb-6 flex flex-col gap-4 rounded-xl bg-blue-50 p-5 sm:flex-row sm:items-center sm:justify-between">

                <div>

                    <p class="text-xs font-semibold uppercase tracking-wide text-blue-500">
                        ID Laporan
                    </p>

                    <h3 id="detailId" class="mt-1 text-2xl font-bold text-blue-700">
                        LP-001
                    </h3>

                </div>

                <span id="detailStatus" class="w-fit rounded-full bg-blue-100 px-4 py-2 text-xs font-bold text-blue-600">
                    Laporan Baru
                </span>

            </div>

            <!-- Informasi Utama -->
            <div class="grid gap-4 sm:grid-cols-2">

                <!-- Kelas -->
                <div class="rounded-xl border border-slate-200 p-4">

                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                        Kelas
                    </p>

                    <p id="detailKelas" class="mt-2 font-bold text-slate-700">
                        XI IPA 1
                    </p>

                </div>

                <!-- Jenis Bullying -->
                <div class="rounded-xl border border-slate-200 p-4">

                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                        Jenis Bullying
                    </p>

                    <p id="detailJenis" class="mt-2 font-bold text-red-600">
                        Bullying Fisik
                    </p>

                </div>

                <!-- Tempat Kejadian -->
                <div class="rounded-xl border border-slate-200 p-4 sm:col-span-2">

                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                        Tempat Kejadian
                    </p>

                    <p id="detailLokasi" class="mt-2 font-bold text-slate-700">
                        Halaman Sekolah
                    </p>

                </div>

            </div>

            <!-- Kronologi -->
            <div class="mt-5">

                <p class="mb-2 text-sm font-bold text-slate-700">
                    Kronologi Kejadian
                </p>

                <div class="rounded-xl border border-yellow-500 bg-slate-50 p-5">

                    <p id="detailKronologi" class="text-[17px] leading-7 text-black">
                        Terjadi tindakan mendorong dan memukul saat jam istirahat. Kejadian tersebut dilaporkan oleh siswa yang melihat langsung dan membutuhkan pemeriksaan lebih lanjut.
                    </p>

                </div>

            </div>

            <!-- Bukti Foto -->
            <div class="mt-5">

                <div class="mb-3 flex items-center justify-between">

                    <p class="text-sm font-bold text-slate-700">
                        Bukti Foto
                    </p>

                    <span class="text-xs text-slate-400">
                        Opsional
                    </span>

                </div>

                <!-- Foto Ada -->
                <div id="fotoTersedia" class="overflow-hidden rounded-xl border border-slate-200">

                    <img
                        id="detailFoto"
                        src="https://placehold.co/900x500/e2e8f0/64748b?text=Bukti+Foto"
                        onclick="fullImage(this.src)"
                        alt="Bukti foto laporan"
                        class="h-64 w-full object-cover">

                </div>
                <!-- Modal Preview Foto -->

                <div id="modalFoto" class="fixed inset-0 z-[10000] hidden items-center justify-center bg-black/90 p-4 opacity-0 backdrop-blur-sm transition-opacity duration-300">
                    <!-- Tombol Tutup -->
                    <button
                        type="button"
                        onclick="tutupFoto()"
                        class="absolute right-5 top-5 z-10 flex h-11 w-11 items-center justify-center rounded-full border border-white/20 bg-white/10 text-white transition hover:bg-white hover:text-red-600"
                        aria-label="Tutup foto">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round">

                            <path d="M18 6 6 18" />

                            <path d="m6 6 12 12" />

                        </svg>

                    </button>

                    <!-- Foto Besar -->
                    <img
                        id="fotoPreview"
                        src=""
                        alt="Preview bukti foto"
                        class="max-h-[90vh] max-w-[95vw] scale-95 cursor-zoom-in select-none rounded-2xl object-contain opacity-0 shadow-2xl transition-all duration-300"
                        draggable="false" >
                </div>

                <!-- Foto Tidak Ada -->
                <div id="fotoTidakAda" class="hidden flex h-48 flex-col items-center justify-center rounded-xl border-2 border-dashed border-slate-200 bg-slate-50">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        width="42"
                        height="42"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="text-slate-300">

                        <rect width="18" height="18" x="3" y="3" rx="2" />

                        <circle cx="8.5" cy="8.5" r="1.5" />

                        <path d="m21 15-5-5L5 21" />

                    </svg>

                    <p class="mt-3 text-sm font-semibold text-slate-500">
                        Tidak ada bukti foto
                    </p>

                    <p class="mt-1 text-xs text-slate-400">
                        Pelapor tidak mengunggah foto.
                    </p>

                </div>

            </div>

        </div>

        <!-- Footer Modal -->
        <div class="flex flex-col-reverse gap-3 border-t border-slate-200 px-6 py-5 sm:flex-row sm:justify-end">

            <button
                type="button"
                onclick="tutupDetail()"
                class="rounded-xl border border-slate-200 px-5 py-3 text-sm font-semibold text-slate-600 transition hover:bg-slate-100">

                Tutup

            </button>

            <a
                id="btnTindakLanjut"
                href="tindak_lanjut.php"
                class="rounded-xl bg-blue-600 px-5 py-3 text-center text-sm font-semibold text-white transition hover:bg-blue-700">

                Tindak Lanjut

            </a>

        </div>

    </div>
    ```

</div>

<script>
const modalDetail = document.getElementById("modalDetail");
const modalContent = document.getElementById("modalContent");

const modalFoto = document.getElementById("modalFoto");
const fotoPreview = document.getElementById("fotoPreview");

let skalaFoto = 1;

function bukaDetail(data) {
    document.getElementById("detailId").textContent = data.id;
    document.getElementById("detailKelas").textContent = data.kelas;
    document.getElementById("detailJenis").textContent = data.jenis;
    document.getElementById("detailLokasi").textContent = data.lokasi;
    document.getElementById("detailKronologi").textContent = data.kronologi;
    document.getElementById("detailStatus").textContent = data.status;

    document.getElementById("btnTindakLanjut").href =
        "tindak_lanjut.php?id=" + encodeURIComponent(data.id);

    const fotoTersedia = document.getElementById("fotoTersedia");
    const fotoTidakAda = document.getElementById("fotoTidakAda");

    if (data.foto) {
        document.getElementById("detailFoto").src = data.foto;

        fotoTersedia.classList.remove("hidden");
        fotoTidakAda.classList.add("hidden");
    } else {
        fotoTersedia.classList.add("hidden");
        fotoTidakAda.classList.remove("hidden");
    }

    modalDetail.classList.remove("hidden");
    modalDetail.classList.add("flex");

    document.body.classList.add("overflow-hidden");

    requestAnimationFrame(() => {
        modalContent.classList.remove("scale-95", "opacity-0");
        modalContent.classList.add("scale-100", "opacity-100");
    });
}

function tutupDetail() {
    modalContent.classList.remove("scale-100", "opacity-100");
    modalContent.classList.add("scale-95", "opacity-0");

    setTimeout(() => {
        modalDetail.classList.remove("flex");
        modalDetail.classList.add("hidden");

        document.body.classList.remove("overflow-hidden");
    }, 200);
}

function fullImage(urlFoto) {
    skalaFoto = 1;

    fotoPreview.src = urlFoto;
    fotoPreview.style.transform = "scale(1)";

    modalFoto.classList.remove("hidden", "opacity-0");
    modalFoto.classList.add("flex", "opacity-100");

    requestAnimationFrame(() => {
        fotoPreview.classList.remove("scale-95", "opacity-0");
        fotoPreview.classList.add("scale-100", "opacity-100");
    });
}

function tutupFoto() {
    fotoPreview.classList.remove("scale-100", "opacity-100");
    fotoPreview.classList.add("scale-95", "opacity-0");

    modalFoto.classList.remove("opacity-100");
    modalFoto.classList.add("opacity-0");

    setTimeout(() => {
        modalFoto.classList.remove("flex");
        modalFoto.classList.add("hidden");

        fotoPreview.src = "";
        fotoPreview.style.transform = "scale(1)";
        skalaFoto = 1;
    }, 300);
}

modalFoto.addEventListener(
    "wheel",
    function(event) {
        event.preventDefault();

        const perubahanZoom =
            event.deltaY < 0 ? 0.1 : -0.1;

        skalaFoto += perubahanZoom;

        skalaFoto = Math.max(
            0.5,
            Math.min(skalaFoto, 4)
        );

        fotoPreview.style.transform =
            `scale(${skalaFoto})`;
    },
    { passive: false }
);

modalDetail.addEventListener(
    "click",
    function(event) {
        if (event.target === modalDetail) {
            tutupDetail();
        }
    }
);

modalFoto.addEventListener(
    "click",
    function(event) {
        if (event.target === modalFoto) {
            tutupFoto();
        }
    }
);

document.addEventListener(
    "keydown",
    function(event) {
        if (event.key !== "Escape") {
            return;
        }

        if (!modalFoto.classList.contains("hidden")) {
            tutupFoto();
            return;
        }

        if (!modalDetail.classList.contains("hidden")) {
            tutupDetail();
        }
    }
);
</script>
