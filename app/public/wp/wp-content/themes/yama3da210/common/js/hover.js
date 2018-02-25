$('.post').hover(
  function(){
    $(this).find('h3, p').css({color:'#fff'});
  },
  function(){
    $(this).find('h3, p').removeAttr('style');
  }
);
$('.prev').hover(
  function(){
    $(this).find('p').css({color:'#fff'});
  },
  function(){
    $(this).find('p').removeAttr('style');
  }
);
$('.next').hover(
  function(){
    $(this).find('p').css({color:'#fff'});
  },
  function(){
    $(this).find('p').removeAttr('style');
  }
);
$('.widget ul li').hover(
  function(){
    $(this).css({color:'#fff'});
  },
  function(){
    $(this).removeAttr('style');
  }
);
