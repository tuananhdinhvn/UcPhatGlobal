<script src="{{ asset('js/jquery.min.js') }}"></script>


<script>
    $(document).ready(function () {
        

        $( ".main-menu-item" ).click(function() {
            var index_result    = $(".main-menu-item").index(this);
            switch(index_result) {
                case 0:
                    $("#main-swiper-dot .swiper-pagination-bullet:nth-child(1)").click();
                    $("#main-swiper-dot .swiper-pagination-bullet").removeClass("swiper-pagination-bullet-active");
                    $("#main-swiper-dot .swiper-pagination-bullet:nth-child(1)").addClass("swiper-pagination-bullet-active");
                    $(".main-menu-item").removeClass("active-bot-menu");
                    $(this).addClass("active-bot-menu");
                    break;
                case 1:
                    $("#main-swiper-dot .swiper-pagination-bullet:nth-child(2)").click();
                    $("#main-swiper-dot .swiper-pagination-bullet").removeClass("swiper-pagination-bullet-active");
                    $("#main-swiper-dot .swiper-pagination-bullet:nth-child(2)").addClass("swiper-pagination-bullet-active");
                    $(".main-menu-item").removeClass("active-bot-menu");
                    $(this).addClass("active-bot-menu");
                    break;
                case 2:
                    $("#main-swiper-dot .swiper-pagination-bullet:nth-child(3)").click();
                    $("#main-swiper-dot .swiper-pagination-bullet").removeClass("swiper-pagination-bullet-active");
                    $("#main-swiper-dot .swiper-pagination-bullet:nth-child(3)").addClass("swiper-pagination-bullet-active");
                    $(".main-menu-item").removeClass("active-bot-menu");
                    $(this).addClass("active-bot-menu");
                    break;
                case 3:
                    $("#main-swiper-dot .swiper-pagination-bullet:nth-child(4)").click();
                    $("#main-swiper-dot .swiper-pagination-bullet").removeClass("swiper-pagination-bullet-active");
                    $("#main-swiper-dot .swiper-pagination-bullet:nth-child(4)").addClass("swiper-pagination-bullet-active");
                    $(".main-menu-item").removeClass("active-bot-menu");
                    $(this).addClass("active-bot-menu");
                    break;
                case 4:
                    $("#main-swiper-dot .swiper-pagination-bullet:nth-child(5)").click();
                    $("#main-swiper-dot .swiper-pagination-bullet").removeClass("swiper-pagination-bullet-active");
                    $("#main-swiper-dot .swiper-pagination-bullet:nth-child(5)").addClass("swiper-pagination-bullet-active");
                    $(".main-menu-item").removeClass("active-bot-menu");
                    $(this).addClass("active-bot-menu");
                    break;
            }
        });
        
        $( ".main-menu-logo" ).click(function() {
            $("#main-swiper-dot .swiper-pagination-bullet:nth-child(1)").click();
            $("#main-swiper-dot .swiper-pagination-bullet").removeClass("swiper-pagination-bullet-active");
            $("#main-swiper-dot .swiper-pagination-bullet:nth-child(1)").addClass("swiper-pagination-bullet-active");
            $(".main-menu-item").removeClass("active-bot-menu");
            $(".main-menu-item").first().addClass("active-bot-menu");
        });

    });
</script>




<script>
    $(document).ready(function () {
        var count = 1;
        // var count_service = 

        $( ".prev-service-btn" ).click(function() {
            count = count--;

            if( count >= 1 && count <= 3 ){
                count = count++;
                $(".service-cover").addClass("hidden-item");
                $(".service-cover[count-display='" + count + "']").removeClass("hidden-item");

            } elseif( count < 1 ){
                count = 3;
                $(".service-cover").addClass("hidden-item");
                $(".service-cover[count-display='" + count + "']").removeClass("hidden-item");

            } elseif( count > 3 ){
                count = 1;
                $(".service-cover").addClass("hidden-item");
                $(".service-cover[count-display='" + count + "']").removeClass("hidden-item");

            }

        });

        $( ".next-service-btn" ).click(function() {
            count = count++;

            if( count >= 1 && count <= 3 ){
                $(".service-cover").addClass("hidden-item");
                $(".service-cover[count-display='" + count + "']").removeClass("hidden-item");

            } elseif( count < 1 ){
                count = 3;
                $(".service-cover").addClass("hidden-item");
                $(".service-cover[count-display='" + count + "']").removeClass("hidden-item");

            } elseif( count > 3 ){
                count = 1;
                $(".service-cover").addClass("hidden-item");
                $(".service-cover[count-display='" + count + "']").removeClass("hidden-item");

            }

        });

      
    });



</script>


<!-- Swiper JS -->
<script src="{{ asset('js/upg/swiper-bundle.min.js') }}"></script>

<!-- Base Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        direction: "vertical",
        slidesPerView: 1,
        spaceBetween: 30,
        mousewheel: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>


<!-- News Swiper -->
<script>
    var swiper = new Swiper(".newsSwiper", {
        direction: "vertical",
        spaceBetween: 30,
        autoplay: true,
        loop: true,
        slidesPerView: 2,
        mousewheel: true,
        pagination: {
            el: ".news-swiper-dot",
            clickable: true,
        },
    });
</script>



<!-- News relates -->
<script>
    var swiper = new Swiper(".related-list", {
        direction: "vertical",
        spaceBetween: 30,
        autoplay: true,
        loop: true,
        slidesPerView: 3,
        mousewheel: true,
        pagination: {
            el: ".news-swiper-dot",
            clickable: true,
        },
    });
</script>


<!-- Switch Service slide -->
<script>

    $( "#prev-service-btn" ).click(function() {
        var count_prev          = parseInt( $(this).attr('count') );
        var count_prev_active   = count_prev - 1;

        if( count_prev_active >= 1 && count_prev_active <= 4 ){
            
            $( ".service-cover" ).addClass("hidden-item");
            $( '.service-' + count_prev_active ).removeClass("hidden-item");

            $("#prev-service-btn").attr('count', count_prev_active);
            $("#next-service-btn").attr('count', count_prev_active);

        } else if( count_prev_active < 1 ){
            // console.log('<1');
            $("#prev-service-btn").attr('count', 4);
            $("#next-service-btn").attr('count', 4);
            
            $( ".service-cover" ).addClass("hidden-item");
            $( '.service-4' ).removeClass("hidden-item");
        } else if( count_prev_active > 4 ){
            $("#prev-service-btn").attr('count', 1);
            $("#next-service-btn").attr('count', 1);
            
            $( ".service-cover" ).addClass("hidden-item");
            $( '.service-1' ).removeClass("hidden-item");
        }
    });

</script>

<script>
    $( "#next-service-btn" ).click(function() {
        var count_next          = parseInt( $(this).attr('count') );
        var count_next_active   = (count_next+1);


        if( count_next_active >= 1 && count_next_active <= 4 ){
            $( ".service-cover" ).addClass("hidden-item");
            $( '.service-' + count_next_active ).removeClass("hidden-item");

            $("#prev-service-btn").attr('count', count_next_active);
            $("#next-service-btn").attr('count', count_next_active);

        } else {
            $("#prev-service-btn").attr('count', 1);
            $("#next-service-btn").attr('count', 1);
            
            $( ".service-cover" ).addClass("hidden-item");
            $( '.service-1' ).removeClass("hidden-item");
        } 
    });
</script>


<!-- Technology Swiper -->
<script>
    var swiper = new Swiper(".mySwiper-tech", {
    slidesPerView: 5,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination-tech",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-tech-button-next",
        prevEl: ".swiper-tech-button-prev",
    },
    });
</script>

<!-- Service design Swiper -->
<script>
    var swiper = new Swiper(".mySwiper-service-design", {
    slidesPerView: 5,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination-service-design",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-service-design-button-next",
        prevEl: ".swiper-service-design-button-prev",
    },
    });
</script>

<!-- Service management Swiper -->
<script>
    var swiper = new Swiper(".mySwiper-service-management", {
    slidesPerView: 5,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination-service-management",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-service-management-button-next",
        prevEl: ".swiper-service-management-button-prev",
    },
    });
</script>

<!-- Service construction Swiper -->
<script>
    var swiper = new Swiper(".mySwiper-service-construction", {
    slidesPerView: 5,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination-service-construction",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-service-construction-button-next",
        prevEl: ".swiper-service-construction-button-prev",
    },
    });
</script>


<!-- Service main Swiper -->
<script>
    var swiper = new Swiper(".main-serice-slide", {
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: ".main-serice-slide-pagination",
        clickable: true,
    },
    });
</script>


<!-- Service Swiper -->
<script>
    var swiper = new Swiper(".design-zone-bot-slide", {
    slidesPerView: 4,
    spaceBetween: 30,
    slidesPerGroup: 1,
    autoplay: true,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".service-item-swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".service-item-swiper-button-next",
        prevEl: ".service-item-swiper-button-prev",
    },
    });
</script>
{{-- <script>
    
    var swiper = new Swiper(".design-zone-bot-slide", {
    slidesPerView: 4,
    spaceBetween: 30,
    loop: true,
    autoplay: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    });
</script> --}}





<!-- timeline -->
<script>
(function() {

    // VARIABLES
    const timeline = document.querySelector(".timeline ol"),
        elH = document.querySelectorAll(".timeline li > div"),
        arrows = document.querySelectorAll(".timeline .arrows .arrow"),
        arrowPrev = document.querySelector(".timeline .arrows .arrow__prev"),
        arrowNext = document.querySelector(".timeline .arrows .arrow__next"),
        firstItem = document.querySelector(".timeline li:first-child"),
        lastItem = document.querySelector(".timeline li:last-child"),
        xScrolling = 280,
        disabledClass = "disabled";

    // START
    window.addEventListener("load", init);

    function init() {
        setEqualHeights(elH);
        animateTl(xScrolling, arrows, timeline);
        setSwipeFn(timeline, arrowPrev, arrowNext);
        setKeyboardFn(arrowPrev, arrowNext);
    }

    // SET EQUAL HEIGHTS
    function setEqualHeights(el) {
        let counter = 0;
        for (let i = 0; i < el.length; i++) {
        const singleHeight = el[i].offsetHeight;

        if (counter < singleHeight) {
            counter = singleHeight;
        }
        }

        for (let i = 0; i < el.length; i++) {
        el[i].style.height = `${counter}px`;
        }
    }

    // CHECK IF AN ELEMENT IS IN VIEWPORT
    // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // SET STATE OF PREV/NEXT ARROWS
    function setBtnState(el, flag = true) {
        if (flag) {
        el.classList.add(disabledClass);
        } else {
        if (el.classList.contains(disabledClass)) {
            el.classList.remove(disabledClass);
        }
        el.disabled = false;
        }
    }

    // ANIMATE TIMELINE
    function animateTl(scrolling, el, tl) {
        let counter = 0;
        for (let i = 0; i < el.length; i++) {
        el[i].addEventListener("click", function() {
            if (!arrowPrev.disabled) {
            arrowPrev.disabled = true;
            }
            if (!arrowNext.disabled) {
            arrowNext.disabled = true;
            }
            const sign = (this.classList.contains("arrow__prev")) ? "" : "-";
            if (counter === 0) {
            tl.style.transform = `translateX(-${scrolling}px)`;
            } else {
            const tlStyle = getComputedStyle(tl);
            // add more browser prefixes if needed here
            const tlTransform = tlStyle.getPropertyValue("-webkit-transform") || tlStyle.getPropertyValue("transform");
            const values = parseInt(tlTransform.split(",")[4]) + parseInt(`${sign}${scrolling}`);
            tl.style.transform = `translateX(${values}px)`;
            }

            setTimeout(() => {
            isElementInViewport(firstItem) ? setBtnState(arrowPrev) : setBtnState(arrowPrev, false);
            isElementInViewport(lastItem) ? setBtnState(arrowNext) : setBtnState(arrowNext, false);
            }, 1100);

            counter++;
        });
        }
    }

    // ADD SWIPE SUPPORT FOR TOUCH DEVICES
    function setSwipeFn(tl, prev, next) {
        const hammer = new Hammer(tl);
        hammer.on("swipeleft", () => next.click());
        hammer.on("swiperight", () => prev.click());
    }

    // ADD BASIC KEYBOARD FUNCTIONALITY
    function setKeyboardFn(prev, next) {
        document.addEventListener("keydown", (e) => {
        if ((e.which === 37) || (e.which === 39)) {
            const timelineOfTop = timeline.offsetTop;
            const y = window.pageYOffset;
            if (timelineOfTop !== y) {
            window.scrollTo(0, timelineOfTop);
            }
            if (e.which === 37) {
            prev.click();
            } else if (e.which === 39) {
            next.click();
            }
        }
        });
    }

    // Swich why us header
    $( ".header-item" ).click(function() {
        $( ".header-item" ).removeClass("active-header");
        $(this).addClass("active-header");
    });

    // Switch Why us content -->
    $( ".header-item:nth-child(1)" ).click(function() {
        $( ".header-item" ).removeClass("active-achievements active-technology active-certification active-partners");
        $(this).addClass("active-achievements");

        $( ".whyus-display" ).addClass("hidden");
        $( ".achievement-display" ).removeClass("hidden");
    });
    $( ".header-item:nth-child(2)" ).click(function() {
        $( ".header-item" ).removeClass("active-achievements active-technology active-certification active-partners");
        $(this).addClass("active-technology");

        $( ".whyus-display" ).addClass("hidden");
        $( ".technology-display" ).removeClass("hidden");
    });
    $( ".header-item:nth-child(3)" ).click(function() {
        $( ".header-item" ).removeClass("active-achievements active-technology active-certification active-partners");
        $(this).addClass("active-certification");

        $( ".whyus-display" ).addClass("hidden");
        $( ".certificate-display" ).removeClass("hidden");
    });
    $( ".header-item:nth-child(4)" ).click(function() {
        $( ".header-item" ).removeClass("active-achievements active-technology active-certification active-partners");
        $(this).addClass("active-partners");

        $( ".whyus-display" ).addClass("hidden");
        $( ".customer-display" ).removeClass("hidden");
    });

})();
</script>