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

    <main class="main">
        <div class="container main-container">
            <div class="com-content">
                <div class="com-s">
                    <form class="com-seasons" method="post" action="com.php">
                        <button class="com-season" type="submit" name="s1-button">#SEASON 1</button>
                        <button class="com-season" type="submit" name="s2-button">#SEASON 2</button>
                        <button class="com-season" type="submit" name="s3-button">#SEASON 3</button>
                        <button class="com-season" type="submit" name="s4-button">#SEASON 4</button>
                        <button class="com-season" type="submit" name="s5-button">#SEASON 5</button>
                        <button class="com-season" type="submit" name="s6-button">#SEASON 6</button>
                        <button class="com-season" type="submit" name="sa-button">#SELECT ALL</button>
                    </form>
                </div>

                <div class="com-post">
                    <div class="blog-title">Posts</div>
                    <?php
                    for ($i = count($posts) - 1; $i >= 0; $i--) {

                        include("app/include/card.php");

                    }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <?php
    include("app/include/footer.php");
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="assets/js/burger.js"></script>
</div>
</body>
</html>
