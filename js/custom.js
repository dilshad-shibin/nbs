if ($('#tes-video-slider').length) {
    $('#tes-video-slider').slick({
        autoplay: false,
        pauseOnHover: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 1000,
        speed: 800,
        infinite:false,
        dots: false,
        arrows: true,
        prevArrow:'.navid1 .prev',
        nextArrow:'.navid1 .next',
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    adaptiveHeight: true,
                    dots: false
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    
                    
                }
            },
            {
                breakpoint: 570,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
}


if ($('#testimonial-slider').length) {
        $('#testimonial-slider').slick({
            autoplay: false,
            fade:false,
           pauseOnHover: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            speed: 800,
            dots: true,
            arrows: false,
			prevArrow:'.navid2 .prev',
            nextArrow:'.navid2 .next',
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
						adaptiveHeight: true
						
                    }
                },
				{
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
						
						
                    }
                },
				{
                    breakpoint: 570,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }



 $('.totop').tottTop({
            scrollTop: 100
        });  


   $('a.mm-original-link').click( function(e) {e.preventDefault(); return false; } );


    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();

    /*==========================================================================
        ACCORDION
    ==========================================================================*/

    // (Optional) Active an item if it has the class "is-active"	
    $(".accordion > .accordion-item.is-active").children(".accordion-panel").slideDown();

    $(".accordion > .accordion-item").click(function() {
        // Cancel the siblings
        $(this).siblings(".accordion-item").removeClass("is-active").children(".accordion-panel").slideUp();
        // Toggle the item
        $(this).toggleClass("is-active").children(".accordion-panel").slideToggle("ease-out");
    });


   /* LoadMore Js-NSM */
	    $(function () {
            $(".box-hidden").slice(0, 4).show();
            $("#loadMore").on('click', function (e) {
                e.preventDefault();
                $(".box-hidden:hidden").slice(0, 2).slideDown();
                if ($(".box-hidden:hidden").length == 0) {
                    $("#load").fadeOut('slow');
                }
                $('html,body').animate({
                    scrollTop: $(this).offset().top
                }, 1500);
            });

            /* loadmore jbs */
            $(".box-hidden-jbs").slice(0, 4).show();
            $("#loadMore-Jbs").on('click', function (e) {
                e.preventDefault();
                $(".box-hidden-jbs:hidden").slice(0, 2).slideDown();
                if ($(".box-hidden-jbs:hidden").length == 0) {
                    $("#load").fadeOut('slow');
                }
                $('html,body').animate({
                    scrollTop: $(this).offset().top
                }, 1500);
            });

        });

        /* LoadMore Js-JBS */
	    // $(function () {
            
        // });
