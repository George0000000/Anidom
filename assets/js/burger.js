$(document).ready(function () {
    $('.header-burger').click(function (event) {
        $('.header-burger,.header-nav').toggleClass('active');
    })
})

$('.header-sign').click(function(e){
    e.stopPropagation();
    $('.header-logout').fadeIn();
});
$('.header-logout').click(function(e){
    e.stopPropagation();
})
$(document,'body').on('click',function(e){
    $('.header-logout').fadeOut();
})