$(function(){
  var about = document.getElementById('about');
      works = document.getElementById('works');
      gallery = document.getElementById('gallery');
      blog = document.getElementById('index');
      single = document.getElementById('single');
      contact = document.getElementById('contact');
  if(about) {
    $('#headerNavi nav ul li:nth-child(2)').addClass('active');
  }
  if(works) {
    $('#headerNavi nav ul li:nth-child(3)').addClass('active');
  }
  if(gallery) {
    $('#headerNavi nav ul li:nth-child(4)').addClass('active');
  }
  if(blog) {
    $('#headerNavi nav ul li:nth-child(5)').addClass('active');
  }
  if(single) {
    $('#headerNavi nav ul li:nth-child(5)').addClass('active');
  }
  if(contact) {
    $('#headerNavi nav ul li:nth-child(6)').addClass('active');
  }
});
