// MUDANÇA DE COR DA BARRA DE NAVEGAÇÃO

$(document).ready(function(){       
  var scroll_pos = 0;
  $(document).scroll(function() { 
    scroll_pos = $(this).scrollTop();
    if(scroll_pos > 250) {
      $("nav.navbar-fixed-top").css({'background-color': '#6e131d', 'transition': 'all 1s ease'});
    } else {
      $("nav.navbar-fixed-top").css('background-color', 'transparent');
    }
  });
});

$(".navbar-toggle").click(function () {
  $("nav.navbar-fixed-top").toggleClass("toggle-background");
});
  