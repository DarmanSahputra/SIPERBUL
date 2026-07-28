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
<body>
    <div class="flex  ">
        <?php include "pages/navbar.php" ?>
        <div class="w-full h-screen ">
            <?php include "pages/$pages.php" ?>
        </div>
    </div>

</body>
</html>