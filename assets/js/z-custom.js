console.log('okay');


jQuery('.home-banners-container').slick({
  dots: true,
  infinite: true,
  arrows: false,
  speed: 300,
  autoplay: true,
  slidesToShow: 1,
  slidesToScroll: 1
});

jQuery('.values-carousel').slick({
  dots: true,
  infinite: true,
  prevArrow: '<button type="button" class="slick-prev icon-flecha-izq"></button>',
  nextArrow: '<button type="button" class="slick-next icon-flecha-der"></button>',
  speed: 300,
  autoplay: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});


jQuery('.home-services-carousel').slick({
  dots: true,
  infinite: true,
  prevArrow: '<button type="button" class="slick-prev icon-flecha-izq"></button>',
  nextArrow: '<button type="button" class="slick-next icon-flecha-der"></button>',
  speed: 300,
  autoplay: false,
  slidesToShow: 3,
  slidesToScroll: 2,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


jQuery('.marcas-carousel').slick({
  dots: false,
  infinite: true,
  prevArrow: '<button type="button" class="slick-prev icon-flecha-izq"></button>',
  nextArrow: '<button type="button" class="slick-next icon-flecha-der"></button>',
  speed: 300,
  autoplay: false,
  slidesToShow: 4,
  slidesToScroll: 2,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


