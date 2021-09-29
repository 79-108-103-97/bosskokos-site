
document.querySelector(".btn_open_burger-menu").onclick = function(){
    document.querySelector(".header-mobile-panel").classList.add("element-hide");
    document.querySelector(".header-part-top").classList.add("element-show");
    document.querySelector(".header_mobile-head").classList.add("element-show");
};
document.querySelector(".btn_close_burger-menu").onclick = function(){
    document.querySelector(".header-mobile-panel").classList.remove("element-hide");
    document.querySelector(".header-part-top").classList.remove("element-show");
    document.querySelector(".header_mobile-head").classList.remove("element-show");
};
document.querySelector(".header-mobile-panel_open_search_btn").onclick = function(){
    document.querySelector(".header-mobile_search-form").classList.toggle("form-element-show");
};
document.querySelector(".header-mobile_search-input").onblur = function(){
  document.querySelector(".header-mobile_search-form").classList.toggle("form-element-show");
}
document.querySelector(".header-show_catalog").onclick = function(){
  document.querySelector(".header-part-cataloge").classList.toggle("element-show");
};

$(function(){
  $('.main-promitions_slider').slick({
    arrows: false,
    infinite: true,
    touchThreshold: 10,
    dots: true,
    autoplay: true,
  });
});
// Слайдер фрукты
$(function(){
  $('.main-products_slider').slick({
    infinite: false,
    slidesToShow: 5,
    slidesToScroll: 3,
    touchThreshold: 10,
    dots: true,
    arrows: false,
    // respondTo:'min',
    responsive:[
        {
        breakpoint: 1400,
        settings: {
          slidesToShow: 4,
          slidesToScroll:1,
          arrows: false,
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll:1,
          arrows: false,
        }
      },
      {
        breakpoint: 990,
        settings: {
          slidesToShow: 2,
          slidesToScroll:1,
          arrows: false,
        }
      }, 
      {
        breakpoint: 485,
        settings: {
          slidesToShow: 1,
          slidesToScroll:1,
          arrows: false,
        }
      },
      
    ]
  });
});
