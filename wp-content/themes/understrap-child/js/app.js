(function ($) {
    
    "use strict";
    var nav = $('nav');
	var navHeight = nav.outerHeight();
    
    $('a.js-scroll[href*="#"]:not([href="#"])').on("click", function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
            console.log(target.length);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: (target.offset().top - navHeight + 5)
				}, 1000);
				return false;
			}
		}
	});
    
    setTimeout(function() {
        var elemento = $(".widget_media_image");
        for(var i = 0; i < elemento.length; i++) {

            $(".widget_media_image").addClass("swiper-slide");
        }
        $("#media_image-2").removeClass("swiper-slide");
      }, 10);

    /*--/ Animate Scroll /--*/
    $(window).trigger('scroll');
    $(window).on('scroll', function () {
        var pixels = 50;
        var top = 1200;
        if ($(window).scrollTop() > pixels) {
            $('.navbar-header ').addClass('navbar-reduce');
        } else {
            $('.navbar-header ').removeClass('navbar-reduce');
        }
    });

    $('.btn-open').on('click', function() {
        $('.nav-sidebar').addClass('active');        
    })

    setTimeout(function() {
        var swiper = new Swiper('.aliados', {
          
            slidesPerView: 1,
            spaceBetween: 20,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            loop: true,
            breakpoints: {
              640: {
                slidesPerView: 2,
                spaceBetween: 20,
              },
              1024: {
                slidesPerView: 3,
                spaceBetween: 20,
              },
            }
          });

    }, 20);

    var swiper = new Swiper('.swiper-video', {
        effect: 'coverflow',
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        loop: true,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 0,
            modifier: 1,
            slideShadows: true,
        }
    });

    var swiper = new Swiper('.swiper-last-project', {
      slidesPerView: 1,
      spaceBetween: 20,
      autoplay: {
          delay: 2500,
          disableOnInteraction: false,
      },
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
      }
    });



    $('.btn-close').on('click', function() {
        $('.nav-sidebar').removeClass('active');
    })

    $('.btn-intro0').on('click', function(e){
        e.preventDefault();
        let contenido = $('#gato').html()
        $('#video-overlay').addClass('open');
        $("#video-overlay").append(contenido);
    });
      
      $('.video-overlay, .video-overlay-close').on('click', function(e){
        e.preventDefault();
        close_video();
      });

      
      $(document).keyup(function(e){
        if(e.keyCode === 27) { close_video(); }
      });
      
      function close_video() {
        $('.video-overlay.open').removeClass('open').find('iframe').remove();
      };

      
            var portafolioIsotope = $('.portafolio-container').isotope({
                layoutMode: 'fitRows'
            })

            $('#portafolio-filter li').on('click', function() {
                console.log('f');
                $('#portafolio-filter li').removeClass('filter-active');
                $(this).addClass('filter-active');
                portafolioIsotope.isotope({ filter: $(this).data('filter')});
            })

            objectFitVideos();
})(jQuery);

