$(document).ready(function(){  
  // SLICK ---------------------------------------
  //websites
  $("#webslide").slick({
    dots: false,
    infinite: true,
    centerMode: true,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });
  //photo 
  $("#viewphotoslide").carousel({
    fullWidth: true,
    numVisible: 1,
    indicators: true
  });
  /* $("#viewphotoslide").slick({
    dots: true,
    infinite: true,
    centerMode: true,
    arrows: false,
    slidesToShow: 1,
    asNavFor: '#photoslide',
  }); */
  $("#photoslide").slick({
    dots: false,
    infinite: true,
    centerMode: true,
    autoplay: true,
    autoplaySpeed: 4000,
    slidesToShow: 3,
    asNavFor: '#viewphotoslide',
  });
});