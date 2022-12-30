<script>
    $( ".togle-mobile-menu" ).click(function() {
        $(this).toggleClass("togle-mobile-menu-togle");
        $( ".mid-line" ).toggleClass("hidden");
        $( ".top-line" ).toggleClass("top-line-rotate");
        $( ".bot-line" ).toggleClass("bot-line-rotate");

        $(".menu-list-mobile").toggleClass("menu-list-toggle");
    });

    // Why us header
    $( ".whyus-tab-header-mobile-item" ).click(function() {
        $(".whyus-tab-header-mobile-item").removeClass("whyus-header-active");
        $(this).addClass("whyus-header-active");

        if ( $('.achievement-header').hasClass('whyus-header-active') ) {

            $('.whyus-item-main-content').addClass('hidden');
            $('#whyus-achievement').removeClass('hidden');

        } else if( $('.technology-header').hasClass('whyus-header-active') ){

            $('.whyus-item-main-content').addClass('hidden');
            $('#whyus-technology').removeClass('hidden');

        } else if( $('.certificate-header').hasClass('whyus-header-active') ){

            $('.whyus-item-main-content').addClass('hidden');
            $('#whyus-certificate').removeClass('hidden');

        } else if( $('.cust-header').hasClass('whyus-header-active') ){

            $('.whyus-item-main-content').addClass('hidden');
            $('#whyus-cust').removeClass('hidden');

        }
    });

    // Why us tech slide
    var swiper = new Swiper(".whyus-tech-slide-mobile", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: "auto",
        coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
        },
        pagination: {
        el: ".tech-mobile-swiper-pagination",
        },
    });


    // Why us certificate slide
    var swiper = new Swiper(".whyus-certificate-slide-mobile", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: "auto",
        coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
        },
        pagination: {
        el: ".certificate-mobile-swiper-pagination",
        },
    });

    // Why us cust slide
    var swiper = new Swiper(".whyus-cust-slide-mobile", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: "auto",
        coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
        },
        pagination: {
        el: ".cust-mobile-swiper-pagination",
        },
    });



</script>