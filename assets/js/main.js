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

  $(".js-btn-show-menu").click(function (e) {
    e.preventDefault();
    $(this).toggleClass("is-active");
    $(".js-menu-header").toggleClass("is-active");
    $("body").css("overflow", "hidden");

    if ($(".js-menu-header").hasClass("is-active")) {
      $("body").css("overflow", "hidden");
    } else {
      $("body").css("overflow", "auto");
    }
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 400) {
      $(".js-header").addClass("is-fixed");
    } else {
      $(".js-header").removeClass("is-fixed");
    }
  });

  $(".js-btn-close-popup").click(function () {
    $(".js-popup").hide();
  });

  const $showMenuFlag = $(".js-show-menu-flag");
  const $hideMenuFlag = $(".js-hide-menu-flag");
  const $subMenu = $(".c-header__sub-menu-flag");

  $showMenuFlag.on("click", function (e) {
    e.preventDefault();
    $(this).toggleClass("is-active");
  });

  $hideMenuFlag.on("click", () => {
    $showMenuFlag.removeClass("is-active");
  });

  $(document).on("click", (e) => {
    if ( $showMenuFlag.hasClass("is-active") && !$subMenu.is(e.target) && !$showMenuFlag.is(e.target) && !$subMenu.has(e.target).length && !$showMenuFlag.has(e.target).length ) {
      $showMenuFlag.removeClass("is-active");
    }
  });

});