function init() {
  //   new Splide(".splide").mount({});

  // Menu
  $(".menu-button").click(function () {
    $(".header-responsive-menu").slideToggle(300);
    $(this).toggleClass("open");
  });
  $(".nav-link").click(function () {
    $(".header-responsive-menu").slideUp(300);
    $(".menu-button").removeClass("open");
  });

  $(".members-js").slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 2,
    rows: 2,
    dots: true,

    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          arrows: false,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          dots: true,
          slidesToShow: 2,
          arrows: false,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          dots: true,
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          rows: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  $("a").click(function () {
    $("html, body").animate(
      {
        scrollTop: $($(this).attr("href")).offset().top + "px",
      },
      {
        duration: 500,
        easing: "swing",
      }
    );
    return false;
  });
}

window.onload = init;
