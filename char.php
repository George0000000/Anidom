
<?php
include 'path.php';
include 'app/controllers/chcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/reset.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <title>Anidom</title>
</head>
<body>
<div class="wrapper">

    <?php
    include("app/include/header.php");
    ?>

    <main class="main">
        <div class="container main-container">
            <div class="char-content">
                <?php
                for ($i = count($chars) - 1; $i >= 0; $i--) {
                    include("app/include/chcard.php");
                }
                ?>
            </div>
        </div>
    </main>

    <?php
    include("app/include/footer.php");
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="assets/js/burger.js"></script>
    <script src="assets/js/accord.js"></script>
</div>
</body>
</html>
