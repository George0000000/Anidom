<?php
include 'path.php';
include 'app/controllers/post.php';
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

        <div class="main">
            <div class="container main-container">

                <div class="user-content">
                    <div class="user-sticky">
                        <div class="user-about">
                            <img class="user-photo" src="assets/img/ava.jpg" alt="">
                            <div class="user-name"><?php echo $_SESSION['name_user']?></div>
                            <div class="user-text"><?php echo $_SESSION['about_user']?></div>
                            <div class="user-date">Account created: <?php echo $_SESSION['created']?></div>
                        </div>
                    </div>

                    <div class="post">
                        <div class="post-publish">
                            <div class="post-err"><?=$errMsg?></div>
                            <form class="post-content" method="post" action="page.php">
                                <h3 class="post-label">Publish a post :)</h3>
                                <textarea name="title" placeholder="Title" class="post-title"></textarea>
                                <textarea name="text" placeholder="Text" class="post-text"></textarea>
                                <button name="post-button" class="post-button" type="submit">Publish</button>
                                <select name="post-hs" class="post-hs">
                                    <option name="1" value="1">1 season</option>
                                    <option name="2" value="2">2 season</option>
                                    <option name="3" value="3">3 season</option>
                                    <option name="4" value="4">4 season</option>
                                    <option name="5" value="5">5 season</option>
                                    <option name="6" value="6">6 season</option>
                                </select>
                            </form>
                        </div>
                        <div class="blog">
                            <div class="blog-title">Posts</div>
                            <?php if (isset($posts[0]['id_post'])): ?>
                                <?php
                                    for ($i = count($posts) - 1; $i >= 0; $i--) {

                                        include("app/include/card.php");

                                    }
                                ?>
                            <?php else:?>
                                <h2 class="post-none">You don't have a post</h2>
                            <?php endif;?>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="stop"></div>
        <?php
        include("app/include/footer.php");
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="assets/js/burger.js"></script>
        <script src="assets/js/popup.js"></script>
    </div>
</body>
</html>