// Bouton burger
const burgerButton = document.querySelector(".burger-button");
const burgerMenu = document.querySelector(".burger-menu");

burgerButton.addEventListener('click', () => {
    burgerButton.classList.toggle('active');
    burgerMenu.classList.toggle('active');
})
// Tableaux cliquables
$('.event1').click(function () { 
    $('.case1').addClass('active');
    $('.active').css('bottom', '250px');
    $('.cache').fadeOut();
    $('footer').css('position', 'absolute');
});
$('.event2').click(function () { 
    $('.case2').addClass('active');
    $('.active').css('bottom', '55px');
    $('.cache').fadeOut();
    $('footer').css('position', 'absolute');
});
$('.event3').click(function () { 
    $('.case3').addClass('active');
    $('.active').css('bottom', '200px');
    $('.cache').fadeOut();
    $('footer').css('position', 'absolute');
});
$('.bouton').click(function () { 
    $('.cases').removeClass('active').addClass('desactive');
    $('.desactive').css('bottom', '-1000px');
    $('.cache').fadeIn();
    $('footer').css('position', 'sticky');   
});