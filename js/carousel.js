$(".card-wrapper").slick({
      slidesToShow:4,
      slidesToScroll:1,
      prevArrow: $('.prev-card'),
      nextArrow: $('.next-card'),
      responsive: [
          {
            breakpoint: 1280,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              
            }
          },
          {
            breakpoint: 1000,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
      
  });
