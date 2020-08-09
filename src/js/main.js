$(function() {
    
    $('.menu-toggle').click(function() {
        //$('.main-menu ul.menu').slideToggle();
        $('.main-menu').toggleClass('menu-opened');
        return false;
    });
});