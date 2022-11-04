<!-- Main JS  -->
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/jquery.migrate.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/jquery.outside-events.min.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/jquery.parallax.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/initmap.min.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/jquery.mb.YTPlayer.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="twitter/jquery.tweet.min.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/jquery.appear.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/jquery.nav.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/counter.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/imagesloaded.min.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/smooth-scroll.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/contact-form.js"></script>
<script type="text/javascript" src="https://zoomarts.works/html/relway/js/portfolio.js"></script>
<script type="text/javascript" src="js/main_upg.js"></script>

{{-- About timeline --}}
<script src="js/timeline.js"></script>
{{-- End about timeline --}}

{{--Single screen swiper --}}
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
  // News
  var swiper4 = new Swiper(".mySwiper4", {
          loop: true,
          grabCursor: true,
          effect: "creative",
          autoplay: {
            delay: 3000,
          },
          creativeEffect: {
            prev: {
              shadow: true,
              translate: [0, 0, -800],
              rotate: [180, 0, 0],
            },
            next: {
              shadow: true,
              translate: [0, 0, -800],
              rotate: [-180, 0, 0],
            },
          },
        });

  // Clients
  var swiper = new Swiper(".clients-list", {
      effect: "coverflow",
      grabCursor: true,
      loop: true,
      centeredSlides: true,
      autoplay: {
            delay: 3000,
      },
      slidesPerView: "auto",
      coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
      },
      pagination: {
      el: ".swiper-pagination",
      },
  });

  // Why us
  var swiper1 = new Swiper('.swiper-container-1', { 
          direction: "vertical",
          pagination: {
          el: ".swiper-pagination",
          clickable: true,
          },
      });

  var whyustech = new Swiper(".why-us-tech-item", {
          slidesPerView: 6,
          spaceBetween: 30,
          slidesPerGroup: 4,
          loop: true,
          loopFillGroupWithBlank: false,
          autoplay: {
            delay: 3000,
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });

  // Services
  var swiper2 = new Swiper(".swiper-container-2", {
      direction: "vertical",
          pagination: {
          el: ".swiper-pagination",
          clickable: true,
          },
      });

  // Service items
  var swiper3 = new Swiper(".service-inside", {
          slidesPerView: 3,
          spaceBetween: 30,
          slidesPerGroup: 4,
          loop: true,
          loopFillGroupWithBlank: false,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });


  // Hidden/ Show service tab
  $( ".service-design-label" ).click(function() {
    $(".service-label-tab-head").removeClass('service-visible-display');
    $(this).addClass('service-visible-display');

    $('.service-underline-indicator').addClass('service-hidden-display');
    $('.service-design-underline').removeClass('service-hidden-display').addClass('service-visible-display', {duration:500});

    $(".service-item-content-inside").addClass('service-hidden-display');
    $('.service-design-content').removeClass('service-hidden-display');
  });

  $( ".service-management-label" ).click(function() {
    $(".service-label-tab-head").removeClass('service-visible-display');
    $(this).addClass('service-visible-display');

    $('.service-underline-indicator').addClass('service-hidden-display');
    $('.service-management-underline').removeClass('service-hidden-display').addClass('service-visible-display', {duration:500});

    $(".service-item-content-inside").addClass('service-hidden-display');
    $('.service-management-content').removeClass('service-hidden-display');
  });

  $( ".service-construction-label" ).click(function() {
    $(".service-label-tab-head").removeClass('service-visible-display');
    $(this).addClass('service-visible-display');

    $('.service-underline-indicator').addClass('service-hidden-display');
    $('.service-construction-underline').removeClass('service-hidden-display').addClass('service-visible-display', {duration:500});

    $(".service-item-content-inside").addClass('service-hidden-display');
    $('.service-construction-content').removeClass('service-hidden-display');
  });

  $( ".service-development-label" ).click(function() {
    $(".service-label-tab-head").removeClass('service-visible-display');
    $(this).addClass('service-visible-display');

    $('.service-underline-indicator').addClass('service-hidden-display');
    $('.service-development-underline').removeClass('service-hidden-display').addClass('service-visible-display', {duration:500});

    $(".service-item-content-inside").addClass('service-hidden-display');
    $('.service-development-content').removeClass('service-hidden-display');
  });
</script>
{{-- End single screen swiper --}}

{{-- Project --}}
<script>
  $( ".get-all-project" ).click(function(e) {
      e.preventDefault(); 
      var currentlink = window.location.pathname; 
      window.open(currentlink + "project", '_self');
  });
</script>