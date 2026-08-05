<?php

$pages = $_GET['page'] ?? 'dashboard';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/output.css">
    <title>Document</title>
</head>
<body class="h-screen  bg-slate-100">
    <div class="flex h-screen overflow-hidden">
        <?php include "navbar/navbar.php" ?>
        <div class="w-full h-full overflow-y-auto scrollbar-none">
            <?php include "navbar/navbar_top.php" ?>
            <?php include "pages/$pages.php" ?>
        </div>
    </div>

</body>
</html>