<div id="base-swiper" class="swiper mySwiper">
    
    <div id="base-swiper-inside" class="swiper-wrapper">
        
        @include('frontend.section.video')

        @include('frontend.section.whyus')

        @include('frontend.section.service-test')

        {{-- @include('frontend.section.service') --}}
        
        @include('frontend.section.project-test')

        {{-- @include('frontend.section.project') --}}

        @include('frontend.section.contact')

    </div>

    <div id="main-swiper-dot" class="swiper-pagination" style="opacity: 0;"></div>

</div>