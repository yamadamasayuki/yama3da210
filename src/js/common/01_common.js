///////////////////////////////////////////////////////
// function
///////////////////////////////////////////////////////
const
$win = $(window),
isPC = window.matchMedia('(min-width:769px)').matches,
breakpoint = 768;

let winW = $win.width();
let winH = $win.height();



///////////////////////////////////////////////////////
// common.js
///////////////////////////////////////////////////////
( () => {
'use strict';



// Smooth Scroll
//---------------------------------------------------
$('a[href^="#"]').not('.noscroll').on('click', function(){
  const href = $(this).attr('href');
  const target = $(href == '#' || href == '' ? 'html' : href);
  const headerH = $('.header').height();
  const position = (href == '#top') ? 0 : target.offset().top - headerH;
  $('html, body').stop(false,false).animate({scrollTop: position}, 700, 'easeOutExpo');
  return false;
});



// data-sp-src
//---------------------------------------------------
$('img[data-sp-src]').each( (idx, elm) => {
  const pcSrc = $(elm).attr('src');
  const spSrc = $(elm).data('sp-src');

  enquire.register('screen and (max-width:768px)',{
    match: () => {
      $(elm).attr('src',spSrc);
    },
    unmatch: () => {
      $(elm).attr('src',pcSrc).filter('.is-rollover').rollover()
    }
  })
});



// Object Fit Images
//---------------------------------------------------
objectFitImages('img.cover');





// Cube
//---------------------------------------------------
const cube = $('.cube');
const cInterval = 6000;

setInterval(() => {
  cube.toggleClass('rolling');
  cube.toggleClass('pitching');
}, cInterval);

$win.mousemove((e) => {
  let y = e.pageY;
  let x = e.pageX;
  $('.move').css({top:y}).css({left:x});
});

$('html').on('click', () => {
  $('.cubeWrap').toggleClass('move');
});




})();//All finished





//---------------------------------------------------
// Youtube Player
//---------------------------------------------------

if($('#ytplayer').length > 0) {

  const tag = document.createElement('script');
  tag.src = "https://www.youtube.com/iframe_api";
  const firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  const ytPlayer = [];
  const ytData = [
    {
      id: '94hfhfj-cSM',
      area: 'ytplayer'
    }
  ];

  // サムネイルの埋め込み
  const onYouTubeIframeAPIReady = () => {
    const mWidth = window.matchMedia('(min-width:769px)').matches ? 880 : window.innerWidth;
    const mHeight = Math.floor(mWidth * (9 / 16));

    for (let i = 0; i < ytData.length; i++) {
      // document.getElementById(ytData[i]['area']).innerHTML = '<img id="yt-thumb' + i + '" src="http://i.ytimg.com/vi/' + ytData[i]['id'] + '/sddefault.jpg">';
      // embedYoutube(i);
      ytPlayer[i] = new YT.Player(ytData[i]['area'], {
        width: mWidth,
        height: mHeight,
        videoId: ytData[i]['id'],
        playerVars: {
          rel: 0,
          // controls: 0,
          showinfo: 0
        }/*,
        events: {
          'onReady': onPlayerReady
        }*/
      });
    }
  }

  // YouTubeの埋め込みの準備
  // const mvTrg = $('#mv-trg');
  // const mvElm = $('.mv-elm');

  // // プレーヤー読み込み後の処理
  // function onPlayerReady(event) {
  //   event.target.playVideo();
  //   mvTrg.on('click', (e) => {
  //     $(e.currentTarget).fadeOut(300);
  //     mvElm.fadeOut(300);
  //     event.target.playVideo();
  //   });
  // }

}
