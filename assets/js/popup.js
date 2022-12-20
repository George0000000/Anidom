
$(document).ready(function(){
    //Скрыть PopUp при загрузке страницы
    PopUpHide();
});
//Функция отображения PopUp
function PopUpShow(){
    $(".popup1").show();
}
//Функция скрытия PopUp
function PopUpHide(){
    $(".popup1").hide();
}

// $('.b-container').click(function (e) {
//     e.preventDefault();
//     $('b-popup').fadeIn(600);
// })
// $('.chcard-close').click(function (e) {
//     e.preventDefault();
//     $('b-popup').fadeOut(600);
// })