<?php
include("path.php");
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

  <!--HEADER-->
    <?php
    include("app/include/header.php");
    ?>

  <!--MAIN-->

  <main class="main-reg">
    <div class="container main-container">
      <div class="main-reg__content">

        <form class="reg" action="">

          <div class="reg-email">
            <label class="reg-email__label" for="reg-email__input">Email address</label>
            <input placeholder="Enter your email" type="email" class="reg-email__input" id="reg-email__input">
            <div class="reg-email__help">We'll never share your email with anyone else</div>
          </div>

          <div class="reg-password">
            <label class="reg-password__label" for="reg-password__input">Password</label>
            <input type="password" class="reg-password__input" id="reg-password__input">
          </div>

          <!--                    <div class="reg-check">-->
          <!--                        <input type="checkbox" class="reg-check__input" id="reg-check__input">-->
          <!--                        <label class="reg-check__label" for="reg-check__input">Check me out</label>-->
          <!--                    </div>-->

          <div class="reg-buttons">
            <button class="reg-button">Log in</button>
            <a href="reg.php" class="reg-registration">Registration</a>
          </div>

        </form>

      </div>
    </div>
  </main>

  <!--FOOTER-->

    <?php
    include("app/include/footer.php");
    ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="assets/js/burger.js"></script>
</div>
</body>
</html>