
<div class="popup-content">
    <div class="box" style="background-image: url(<?=$chars[$i]['img_char']?>);">
        <a class="button" href="#popup<?=$chars[$i]['id_char']?>"><?=$chars[$i]['name_char']?></a>
    </div>


    <div id="popup<?=$chars[$i]['id_char']?>" class="overlay">
        <div class="popup">
            <h2 id="nm" class="popup-name"><?=$chars[$i]['name_char']?></h2>
            <a class="close" href="#">&times;</a>
            <div id="tx" class="content"><?=$chars[$i]['text_char']?></div>
        </div>
    </div>
</div>
