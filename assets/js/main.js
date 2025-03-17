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

  $('.js-slider-review').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: false,
    dots: true,
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
    if ($(this).scrollTop() > 100) {
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
    if ($showMenuFlag.hasClass("is-active") && !$subMenu.is(e.target) && !$showMenuFlag.is(e.target) && !$subMenu.has(e.target).length && !$showMenuFlag.has(e.target).length) {
      $showMenuFlag.removeClass("is-active");
    }
  });

  $(".js-popup-show-menu").click(function () {
    $(this).toggleClass("is-active");
  });
  $(document).on('click', function (event) {
    if ($('.js-popup-show-menu').hasClass('is-active')) {
      if (!$(event.target).closest('.js-popup-show-menu').length) {
        $('.js-popup-show-menu').removeClass('is-active');
      }
    }
  });

  $(".js-popup-select-menu").click(function (e) {
    e.preventDefault();
    $(this).data("flag");
    if ($(this).data("flag") === "popup-01") {
      $(".js-img-popup-01").show();
      $(".js-img-popup-02").hide();
    } else {
      $(".js-img-popup-02").show();
      $(".js-img-popup-01").hide();
    }
  });

  $.smoothScroll = function (config) {
    var c = $.extend(
      {
        speed: 1000,
        noScrollClass: ".noScroll",
        offset: 110,
      },
      config
    );

    $("a[href^='#']")
      .not("a[href='#'], area[href='#'], " + c.noScrollClass)
      .click(function (e) {
        e.preventDefault();

        var href = $(this).attr("href"),
          targetElement = $(href);

        if (targetElement.length) {
          let position = targetElement.offset().top - c.offset;

          if (/; CPU.*OS (?:3_2|4_0)/i.test(navigator.userAgent)) {
            position -= $(window).scrollTop();
          }

          $("html, body").animate({ scrollTop: position }, c.speed, "swing");
        }
      });
  };

  $.smoothScroll({
    speed: 800,
    offset: 100,
  });
});