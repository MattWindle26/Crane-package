
$(document).ready(function(){

$('.nav-trigger').click(function(){
  $('.nav-bar').toggleClass('active');
  $('.nav-bar img').toggleClass('show');
});
$('.nav-bar img').click(function(){
  $('.nav-bar').toggleClass('active');
  $('.nav-bar img').toggleClass('show');
});

  $('.menu li.menu-item-has-children').on('click', function(event) {
    if($(window).width() < 915){
      $(this).children('ul').slideToggle();
      $(this).parent().toggleClass('dropdown--active');

      // if($('.menu').hasClass('dropdown--active')){
      //   $('.menu li.menu-item-has-children').toggleClass('active;')
      // }
      // else {
      //   $('.menu li.menu-item-has-children').toggleClass('active;')
      // }
    }
  });

  $(".menu li.menu-item-has-children").hover(function(e){
    if($(window).width() > 915){
      $(this).children('ul').fadeToggle();
      $(this).toggleClass('dropdown--active');
    }
  });
  e.preventDefault();



});
