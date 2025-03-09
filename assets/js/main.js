$(document).ready(function () {

  const $slideMV = $(".js-slider-mv");
  $slideMV.on("init", function (event, slick) {
    const $dots = $(".slick-dots li");
    $dots.each(function (index) {
      $(this).append('<div class="progress"></div>');
    });
  });
  
  $slideMV.slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: "linear",
    autoplay: true,
    autoplaySpeed: 5000,
    dots: true,
    arrows: true,
    pauseOnHover: false,
    pauseOnDotsHover: true,
  });
  
  $slideMV.on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    $(".progress").removeClass("active"); // Xóa progress bar cũ
    $(".slick-dots li").eq(nextSlide).find(".progress").addClass("active"); // Kích hoạt progress bar mới
  });
});