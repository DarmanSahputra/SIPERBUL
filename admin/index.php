<?php

$pages = $_GET['page'] ?? 'dashboard';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPERBUL - Sistem Informasi Pelaporan Bully</title>
    <link rel="stylesheet" href="../src/output.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <style>
        @media print {
            body * { visibility: hidden; }
            #printArea, #printArea * { visibility: visible; }
            #printArea { position: absolute; left: 0; top: 0; width: 100%; }
            .no-print { display: none !important; }
        }
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', system-ui, sans-serif; }
        .nav-item.active {
            background: linear-gradient(135deg, rgba(34,197,94,0.25), rgba(22,163,74,0.15));
            border-left: 3px solid #22c55e;
        }
        .nav-item.active span,
        .nav-item.active svg { color: #86efac; }
        .nav-item:not(.active):hover {
            background: rgba(255,255,255,0.06);
        }
        .sidebar-scroll::-webkit-scrollbar { width: 4px; }
        .sidebar-scroll::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.15); border-radius: 4px; }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50:  '#f0fdf6',
                            100: '#dcfce9',
                            200: '#bbf7d4',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                            950: '#052e16',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body>
    <div class="flex h-screen overflow-hidden">
        <?php include "navbar/navbar.php" ?>
        <div class="w-full h-full overflow-y-auto scrollbar-none">
            <?php include "navbar/navbar_top.php" ?>
            <?php include "pages/$pages.php" ?>
        </div>
    </div>
</body>
</html>