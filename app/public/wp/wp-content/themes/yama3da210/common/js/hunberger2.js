$('.tcon').on('click', function(){
  $('#headerNavi').slideToggle();
});
$(window).on('resize', function(){
  $('#headerNavi').removeAttr('style');
  $('#humberger').removeClass('tcon-transform');
});

transformicons.add('.tcon');
