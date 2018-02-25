$(window).on('scroll load resize', function(){
  var screenTop = $(window).scrollTop();
  if(screenTop > 0){
    $('#scrollTop').fadeIn(800);
  } else {
    $('#scrollTop').fadeOut(800);
  }
});
$('#scrollTop a').on('click', function(e){
    e.preventDefault;
    $('html, body').animate({scrollTop:'0'}, 500);
      return false
 });
