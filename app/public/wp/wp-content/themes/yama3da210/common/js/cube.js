$(function(){
  var cube = $('.cube');
  setInterval(function(){
    cube.toggleClass('rolling');
    cube.toggleClass('pitching');
  }, 6000);
});
$(window).mousemove(function(e){
    var y = e.pageY,
        x = e.pageX;
    $('.move').css({top:y}).css({left:x});
});
$('html').click(function(){
  $('.cubeWrap').toggleClass('move');
});
