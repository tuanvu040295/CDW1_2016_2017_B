
jQuery(document).ready(function () {
(function($) {
  var repl = $('#changingtext span').text()
  var t=[ "Swag",repl],
      $h1 = $("#changingtext"),
      $sp = $h1.find("span"),
      i=0,
      widths=[];

  $.each(t, function(i, v){
      var el = $('<span />', {text:v}).appendTo($h1);
      widths.push(el.width());
      el.remove();
  });
  
  $sp.css({opacity:0});
  
  (function loop(){
     i = ++i%t.length;    
     $sp.text(t[i]).animate({width:widths[i]}, 500, function(){
       $(this).animate({opacity:1},500).delay(3000).animate({opacity: 0}, 500, loop); 
      });     
  })(); 

})(jQuery);
});
