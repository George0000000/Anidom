<?php
include "app/controllers/series.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/reset.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link href="https://vjs.zencdn.net/7.20.3/video-js.css" rel="stylesheet" />
    <title>Anidom</title>
</head>
<body>
<div class="wrapper">

    <?php
    include("app/include/header.php");
    ?>

    <main class="main">
        <div class="container main-container">
            <div class="season-content">
                <div class="season-first">
                    <div class="season-title">1 season</div>

                </div>
            </div>
        </div>
    </main>

    <?php
    include("app/include/footer.php");
    ?>
    <script src="assets/js/user.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="assets/js/burger.js"></script>
</div>
</body>
</html>