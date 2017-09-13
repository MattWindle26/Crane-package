
$(document).ready(function(){
$('.nav-trigger').click(function(){
  $('.nav-bar').toggleClass('active');
  $('.nav-bar img').toggleClass('show');
});
$('.nav-bar .close').click(function(){
  $('.nav-bar').toggleClass('active');
  $('.nav-bar img').toggleClass('show');
});
});

$(document).ready(function(){
  $('.h-menu').on('click',function(){
    $(this).toggleClass('is-active');
    if(!$("header .nav-toggle > ul").hasClass('slideinleft')){
        $("header .nav-toggle > ul").addClass('slideinleft');
        $("header .nav-toggle > ul").removeClass('slideoutleft');
        $("body").addClass('no-scroll');
    }else{
        $("header .nav-toggle > ul").addClass('slideoutleft');
        $("body").removeClass('no-scroll');
        function explode(){
          $("header .nav-toggle > ul").removeClass('slideoutleft').removeClass('slideinleft');
        }
        setTimeout(explode, 20);
    }
  });
  $(".has-dropdown span").click(function(){
    if($(window).width() < 800){
      console.log($(this).next());
      $(this).next().slideToggle();
      $(this).parent().toggleClass('dropdown--active');
    }
  });
  $(".has-dropdown").hover(function(e){
    if($(window).width() > 800){
      console.log($(this).next());
      $(this).children("ul").slideToggle();
    }
  });
  e.preventDefault();
});

$(document).ready(function () {

  $('.accordion__item__title').on('click', function(){
     if ($(this).parent().hasClass('accordion-active')) {
       $(this).next().slideUp();
       $(this).parent().removeClass('accordion-active');
     } else{
       $('.accordion__item__content').not(this).slideUp();
       $('.accordion__item').removeClass('accordion-active');
       $(this).parent().addClass('accordion-active');
       $(this).next().slideDown();
     }
  });
});
