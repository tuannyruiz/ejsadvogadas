$(document).ready(function() {
	$('.card-container').click(function() {
    var modal = $(this).parent().find('.modal');
    $(modal).modal('show'); 
	});
});

var cards =document.querySelectorAll(".card-custom .atuacao-card");
if(window.innerWidth > 800) {

var maxSize = 0;
var objs = [];
for(var i=0, j=1; i<cards.length; i++, j++) {
  var el = cards[i];
  
  if(el.offsetHeight > maxSize) {
    maxSize = el.offsetHeight;
  }
}
for(var r = 0; r < objs.length; r++) {
      objs[r].style.height = maxSize + "px";
    }
}
