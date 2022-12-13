<header class="header">
    <div class="container header-container">
        <div class="header-content">

            <div class="header-left">
                <div class="header-burger">
                    <span></span>
                </div>
                <a href="<?php echo BASE_URL?>" class="header-logo">AniDom</a>
                <nav class="header-nav">
                    <a href="#" class="header-item header-effect">seasons</a>
                    <a href="#" class="header-item header-effect">characters</a>
                    <a href="#" class="header-item header-effect">community</a>
                </nav>
            </div>

            <div class="header-func">
                <?php if (isset($_SESSION['id_user'])): ?>
                    <a href="<?php echo BASE_URL . 'page.php'?>" class="header-sign"><?php echo $_SESSION['name_user']?></a>
                    <div class="header-logout">
                        <a href="<?php echo BASE_URL . 'logout.php'?>">logout</a>
                    </div>
                <?php else:?>
                    <a href="<?php echo BASE_URL . 'log.php'?>" class="header-sign header-effect">Sign Up</a>
                <?php endif;?>
            </div>
        </div>
    </div>
</header>
