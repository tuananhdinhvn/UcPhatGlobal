<!-- Start Services Section -->
<div id="our-service" style=""></div>


<h2 class="service-title-name">@lang('messages.service_title')</h2>
<div class="">

    <div class="container">
        <div class="service-label-head">
            <div class="service-label-tab-head service-design-label service-visible-display">
                <div class="service-underline-indicator service-design-underline service-visible-display"></div> 
                    @switch( Config::get('app.locale') )
                        @case('vi')
                            {!! $service_index->service_title1_vi !!}
                            @break
                        @case('en')
                            {!! $service_index->service_title1_en !!}
                            @break
                        @case('zh')
                            {!! $service_index->service_title1_zh !!}
                            @break
                        @case('ja')
                            {!! $service_index->service_title1_ja !!}
                            @break
                        @case('kr')
                            {!! $service_index->service_title1_kr !!}
                            @break
                    @endswitch  
            </div>

            <div class="service-label-tab-head service-management-label">
                <div class="service-underline-indicator service-management-underline service-hidden-display"></div> 
                    @switch( Config::get('app.locale') )
                        @case('vi')
                            {!! $service_index->service_title2_vi !!}
                            @break
                        @case('en')
                            {!! $service_index->service_title2_en !!}
                            @break
                        @case('zh')
                            {!! $service_index->service_title2_zh !!}
                            @break
                        @case('ja')
                            {!! $service_index->service_title2_ja !!}
                            @break
                        @case('kr')
                            {!! $service_index->service_title2_kr !!}
                            @break
                    @endswitch  
            </div>

            <div class="service-label-tab-head service-construction-label">
                <div class="service-underline-indicator service-construction-underline service-hidden-display"></div> 
                    @switch( Config::get('app.locale') )
                        @case('vi')
                            {!! $service_index->service_title3_vi !!}
                            @break
                        @case('en')
                            {!! $service_index->service_title3_en !!}
                            @break
                        @case('zh')
                            {!! $service_index->service_title3_zh !!}
                            @break
                        @case('ja')
                            {!! $service_index->service_title3_ja !!}
                            @break
                        @case('kr')
                            {!! $service_index->service_title3_kr !!}
                            @break
                    @endswitch  
            </div>

            <div class="service-label-tab-head service-development-label">
                <div class="service-underline-indicator service-development-underline service-hidden-display"></div> 
                    @switch( Config::get('app.locale') )
                        @case('vi')
                            {!! $service_index->service_title4_vi !!}
                            @break
                        @case('en')
                            {!! $service_index->service_title4_en !!}
                            @break
                        @case('zh')
                            {!! $service_index->service_title4_zh !!}
                            @break
                        @case('ja')
                            {!! $service_index->service_title4_ja !!}
                            @break
                        @case('kr')
                            {!! $service_index->service_title4_kr !!}
                            @break
                    @endswitch  
            </div>
        </div>
    </div>
    

    {{-- Design --}}
    <div class="service-wrap-item service-item-content-inside service-design-content">
        <div class="service-item-block-left">
            <p>
                @switch( Config::get('app.locale') )
                    @case('vi')
                        {!! $service_index->service_des1_vi !!}
                        @break
                    @case('en')
                        {!! $service_index->service_des1_en !!}
                        @break
                    @case('zh')
                        {!! $service_index->service_des1_zh !!}
                        @break
                    @case('ja')
                        {!! $service_index->service_des1_ja !!}
                        @break
                    @case('kr')
                        {!! $service_index->service_des1_kr !!}
                        @break
                @endswitch 
            </p>
        </div>
        <div class="service-item-block-right">
            <img src="public\pic\24701-nature-natural-beauty.jpg" alt="">
            <div class="service-item-bg-right"></div>
        </div>

        <div class="swiper mySwiper service-inside service-item-slide-inside">
            <div class="swiper-wrapper">
                @foreach ($service_design_slide as $item)

                    <div class="swiper-slide inside-service-item">
                        <img src="{{ asset('public/upload/service/'.$item->img_src) }}" alt="">
                        <p>
                            @switch( Config::get('app.locale') )
                                @case('vi')
                                    {{ $item->img_description_vi }}
                                    @break
                                @case('en')
                                    {{ $item->img_description_en }}
                                    @break
                                @case('zh')
                                    {{ $item->img_description_zh }}
                                    @break
                                @case('ja')
                                    {{ $item->img_description_ja }}
                                    @break
                                @case('kr')
                                    {{ $item->img_description_kr }}
                                    @break
                            @endswitch 
                        </p>
                    </div>
                
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination" style="visibility: hidden"></div>
        </div>
        
    </div>


    {{-- Management --}}
    <div class="service-wrap-item service-item-content-inside service-management-content service-hidden-display">
        <div class="service-item-block-left">
            <p>
                @switch( Config::get('app.locale') )
                    @case('vi')
                        {!! $service_index->service_des2_vi !!}
                        @break
                    @case('en')
                        {!! $service_index->service_des2_en !!}
                        @break
                    @case('zh')
                        {!! $service_index->service_des2_zh !!}
                        @break
                    @case('ja')
                        {!! $service_index->service_des2_ja !!}
                        @break
                    @case('kr')
                        {!! $service_index->service_des2_kr !!}
                        @break
                @endswitch 
            </p>
        </div>
        <div class="service-item-block-right">
            <img src="public\pic\24701-nature-natural-beauty.jpg" alt="">
            <div class="service-item-bg-left"></div>
        </div>

        <div class="swiper mySwiper service-inside service-item-slide-inside">
            <div class="swiper-wrapper">
                @foreach ($service_manage_slide as $item)
                <div class="swiper-slide inside-service-item">
                    <img src="{{ asset('public/upload/service/'.$item->img_src) }}" alt="">
                    <p>
                        @switch( Config::get('app.locale') )
                            @case('vi')
                                {{ $item->img_description_vi }}
                                @break
                            @case('en')
                                {{ $item->img_description_en }}
                                @break
                            @case('zh')
                                {{ $item->img_description_zh }}
                                @break
                            @case('ja')
                                {{ $item->img_description_ja }}
                                @break
                            @case('kr')
                                {{ $item->img_description_kr }}
                                @break
                        @endswitch 
                    </p>
                </div>
               @endforeach
                
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination" style="visibility: hidden"></div>
        </div>
        
    </div>
    

    {{-- Construction --}}
    <div class="service-wrap-item service-item-content-inside service-construction-content service-hidden-display">
        <div class="service-item-block-left">
            <p>
                @switch( Config::get('app.locale') )
                    @case('vi')
                        {!! $service_index->service_des3_vi !!}
                        @break
                    @case('en')
                        {!! $service_index->service_des3_en !!}
                        @break
                    @case('zh')
                        {!! $service_index->service_des3_zh !!}
                        @break
                    @case('ja')
                        {!! $service_index->service_des3_ja !!}
                        @break
                    @case('kr')
                        {!! $service_index->service_des3_kr !!}
                        @break
                @endswitch

            </p>
        </div>
        <div class="service-item-block-right">
            <img src="public\pic\24701-nature-natural-beauty.jpg" alt="">
            <div class="service-item-bg-right"></div>
        </div>

        <div class="swiper mySwiper service-inside service-item-slide-inside">
            <div class="swiper-wrapper">
                @foreach ($service_construction_slide as $item)
                <div class="swiper-slide inside-service-item">
                    <img src="{{ asset('public/upload/service/'.$item->img_src) }}" alt="">
                    <p>
                        @switch( Config::get('app.locale') )
                            @case('vi')
                                {{ $item->img_description_vi }}
                                @break
                            @case('en')
                                {{ $item->img_description_en }}
                                @break
                            @case('zh')
                                {{ $item->img_description_zh }}
                                @break
                            @case('ja')
                                {{ $item->img_description_ja }}
                                @break
                            @case('kr')
                                {{ $item->img_description_kr }}
                                @break
                        @endswitch 
                    </p>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination" style="visibility: hidden"></div>
        </div>
        
    </div>


    {{-- Development --}}
    <div class="service-wrap-item service-item-content-inside service-development-content service-hidden-display">
        <div class="service-item-block-left">
            <p>
                @switch( Config::get('app.locale') )
                    @case('vi')
                        {!! $service_index->service_des4_vi !!}
                        @break
                    @case('en')
                        {!! $service_index->service_des4_en !!}
                        @break
                    @case('zh')
                        {!! $service_index->service_des4_zh !!}
                        @break
                    @case('ja')
                        {!! $service_index->service_des4_ja !!}
                        @break
                    @case('kr')
                        {!! $service_index->service_des4_kr !!}
                        @break
                @endswitch 

            </p>
        </div>
        <div class="service-item-block-right">
            <img src="public\pic\24701-nature-natural-beauty.jpg" alt="">
            <div class="service-item-bg-left"></div>
        </div>

        <div class="swiper mySwiper service-inside service-item-slide-inside">
            <div class="swiper-wrapper">
                @foreach ($service_develop_slide as $item)
                <div class="swiper-slide inside-service-item">
                    <img src="{{ asset('public/upload/service/'.$item->img_src) }}" alt="">
                    <p>
                        @switch( Config::get('app.locale') )
                            @case('vi')
                                {{ $item->img_description_vi }}
                                @break
                            @case('en')
                                {{ $item->img_description_en }}
                                @break
                            @case('zh')
                                {{ $item->img_description_zh }}
                                @break
                            @case('ja')
                                {{ $item->img_description_ja }}
                                @break
                            @case('kr')
                                {{ $item->img_description_kr }}
                                @break
                        @endswitch 
                    </p>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination" style="visibility: hidden"></div>
        </div>
        
    </div>

   


</div>

<!-- End Services Section -->
    
    
    
