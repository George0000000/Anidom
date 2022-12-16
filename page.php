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
                        <img class="user-photo" src="assets/img/ava.jpg" alt="">
                        <div class="user-name"><?php echo $_SESSION['name_user']?></div>
                        <div class="user-text"><?php echo $_SESSION['about_user']?></div>
                        <div class="user-date">Account created: <?php echo $_SESSION['created']?></div>
                    </div>

                    <div class="post">
                        <div class="post-content">
                            <h3 class="post-label">Publish a post :)</h3>
                            <textarea name="title" placeholder="Title" class="post-title"></textarea>
                            <textarea name="text" placeholder="Text" class="post-text"></textarea>
                            <button name="post-button" class="post-publish" type="submit">Publish</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php
        include("app/include/footer.php");
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="assets/js/burger.js"></script>
    </div>
</body>
</html>