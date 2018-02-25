$(window).on('resize load', function(){
  var imgHeight = $('.shadow img').height();
  $('.shadow').css({height: imgHeight});
});
