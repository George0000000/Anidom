
<div class="card">
    <div class="card-content">
        <div class="card-main">
            <div class="card-title"><?=$posts[$i]['title_post']?></div>
            <div class="card-text"><?=$posts[$i]['text_post']?></div>
        </div>
        <div class="card-second">
            <div class="card-date"><?=$posts[$i]['date_post']?></div>
            <div class="card-author">Author: <?=$_SESSION['name_user']?></div>
        </div>
    </div>
</div>