<script>    
  //parceiros
  $(document).ready(function(){
      $('#parceiros').slick({     
      dots: false,
      autoplay: true,
      slidesToShow: 5,
      arrows: true,
      cssEase: 'ease-in-out',
      prevArrow: '<span title="Anterior" class="slick-nav-esq wow fadeInRight"></span>',
      nextArrow: '<span title="Pr&oacute;ximo" class="slick-nav-dir wow fadeInLeft"></span>',
      responsive: [
                    {
                      breakpoint: 1170,
                      settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                      }
                    },
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                      }
                    },
                    {
                      breakpoint: 650,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                      }
                    },                    
                    {
                      breakpoint: 480,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }
      ]
      });//slick
    });
</script>