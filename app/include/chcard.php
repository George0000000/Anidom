
<div class="chcard">
    <a href="javascript:PopUpShow()" class="chcard-content">

        <div class="b-container" style="background-image: url(<?= $chars[$i]['img_char'] ?>);">
            <h1 class="chcard-title"><?= $chars[$i]['name_char'] ?></h1>
        </div>
        <div class="b-popup popup1" >
            <div class="b-popup-content">
                <div class="chard-about">
                    <h2 class="chcard-name"><?= $chars[$i]['name_char'] ?></h2>
                    <div class="chcard-text"><?= $chars[$i]['text_char'] ?></div>
                </div>
                <div class="chcard-another">
                    <img class="chcard-img" src="<?= $chars[$i]['img_char'] ?>" alt="">
                </div>
            </div>
            <a class="chcard-close" href="javascript:PopUpHide()">Close</a>
        </div>

    </a>
</div>