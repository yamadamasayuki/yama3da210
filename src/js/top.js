(() => {
'use strict'

const
$win = $(window),
isPC = window.matchMedia('(min-width:769px)').matches,
breakpoint = 768;

let winW = $win.width();
let winH = $win.height();

//////////////////////////////////////////////////
// MV
//////////////////////////////////////////////////

/* Background Image Fixed
--------------------------------------------------*/
const mvImgWrapper = $('.p-tp-mv__item');
const mvImgW = 1200;
const mvImgH = 360;
const baseAR = mvImgH / mvImgW;

let mvWepperW;
let mvWepperH;
let realAR;

$win.on('load resize', (e) => {
  mvWepperW = $win.width() - 100;
  mvWepperH = $win.height() / 2;
  realAR = mvWepperH / mvWepperW;
  mvImgWrapper.find('div').css({ 'width': mvWepperW, 'height': mvWepperH })
  if(realAR >= baseAR) {
    mvImgWrapper.find('div').css({ 'background-size': 'auto ' + mvWepperH + 'px' });
  } else {
    mvImgWrapper.find('div').css({ 'background-size': mvWepperW + 'px auto' });
  }
})

/* MV Image Slider
--------------------------------------------------*/
const mvShowTime = 5000;
const upperLength = $('.p-tp-mv__upper').find('.p-tp-mv__item').length;
const lowerLength = $('.p-tp-mv__lower').find('.p-tp-mv__item').length;
let upperPrev;
let lowerPrev;
let upperPrevIndex;
let lowerPrevIndex;
let upperNext;
let lowerNext;
let upperNextIndex;
let lowerNextIndex;

let mvHandler = setInterval( () => {
  upperPrevIndex = $('.p-tp-mv__upper .is-prev').index()
  lowerPrevIndex = $('.p-tp-mv__lower .is-prev').index()
  if(upperPrevIndex >= upperLength - 1) {
    upperPrev = 0
  } else {
    upperPrev = upperPrevIndex + 1;
  }
  if(lowerPrevIndex >= lowerLength - 1) {
    lowerPrev = 0
  } else {
    lowerPrev = lowerPrevIndex + 1;
  }
  upperNextIndex = $('.p-tp-mv__upper .is-next').index()
  lowerNextIndex = $('.p-tp-mv__lower .is-next').index()
  if(upperNextIndex >= upperLength - 1) {
    upperNext = 0
  } else {
    upperNext = upperNextIndex + 1;
  }
  if(lowerNextIndex >= lowerLength - 1) {
    lowerNext = 0
  } else {
    lowerNext = lowerNextIndex + 1;
  }
  $('.p-tp-mv__upper .is-active').removeClass('is-active')
  $('.p-tp-mv__upper .is-prev').removeClass('is-prev')
  $('.p-tp-mv__upper .is-next').addClass('is-active').removeClass('is-next')
  $('.p-tp-mv__upper .p-tp-mv__item').eq(upperPrev).addClass('is-prev')
  $('.p-tp-mv__upper .p-tp-mv__item').eq(upperNext).addClass('is-next')
  $('.p-tp-mv__lower .is-active').removeClass('is-active')
  $('.p-tp-mv__lower .is-prev').removeClass('is-prev')
  $('.p-tp-mv__lower .is-next').addClass('is-active').removeClass('is-next')
  $('.p-tp-mv__lower .p-tp-mv__item').eq(lowerPrev).addClass('is-prev')
  $('.p-tp-mv__lower .p-tp-mv__item').eq(lowerNext).addClass('is-next')
}, mvShowTime);



})();//All finished

