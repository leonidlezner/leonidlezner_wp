$(function() {
    
    $('.menu-toggle').click(function() {
        //$('.main-menu ul.menu').slideToggle();
        $('.main-menu ul.menu').toggleClass('menu-opened');
        return false;
    });
});