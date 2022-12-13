<?php
include 'path.php';
include 'app/controllers/users.php';
?>

<!doctype html>
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

        <div class="main">
            <div class="container main-container">
                <div class="user-content">
                    <div class="user-about">
                        <img src="" alt="">
                        <div class="user-name"><?php echo $_SESSION['name_user']?></div>
                        <div class="user-about"></div>
                        <div class="user-date"></div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include("app/include/footer.php");
        ?>
    </div>
</body>
</html>