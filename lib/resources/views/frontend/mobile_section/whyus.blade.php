<section id="whyus-mobile">
    <div class="section-title">Why us</div>
    <div class="whyus-tab-header-mobile">
        <div class="whyus-tab-header-mobile-item achievement-header whyus-header-active">@lang('messages.whyus_head_achievement')</div>
        <div class="whyus-tab-header-mobile-item technology-header">@lang('messages.whyus_head_technology')</div>
        <div class="whyus-tab-header-mobile-item certificate-header">@lang('messages.whyus_head_certificate')</div>
        <div class="whyus-tab-header-mobile-item cust-header">@lang('messages.whyus_head_cust')</div>
    </div>


    <div id="whyus-achievement" class="whyus-item-main-content achievement-wrap">
        <div class="achievement-main-content">

            @foreach ($achievement_list as $achievement_item)
                <div class="number-list-item">
                    <img src="{{ asset('public/upload/info/'.$achievement_item->img_src) }}" alt="">
                    <h3 class="achievement-number">{{ $achievement_item->img_number }}</h3>
                    <h3>
                        @switch( Config::get('app.locale') )
                            @case('vi')
                                {{ $achievement_item->img_description_vi }}
                                @break
                            @case('en')
                                {{ $achievement_item->img_description_en }}
                                @break
                            @case('zh')
                                {{ $achievement_item->img_description_zh }}
                                @break
                            @case('ja')
                                {{ $achievement_item->img_description_ja }}
                                @break
                            @case('kr')
                                {{ $achievement_item->img_description_kr }}
                                @break
                        @endswitch
                    </h3>
                </div>
            @endforeach
        </div>

        <div class="achievement-division-line"></div>

        <div class="timeline-mobile">
            <img src="{{ asset('public/upload/template/'.$timeline_img->whyus_timeline_mobile) }}" alt="">
        </div>
    </div>

    <div id="whyus-technology" class="whyus-item-main-content hidden">
        <div class="whyus-tech-main-img">
            <img src="{{ asset('public/upload/template/'.$technology_item->whyus_tech_img_left) }}" class=""/>
            <img src="{{ asset('public/upload/template/'.$technology_item->whyus_tech_img_right) }}" class=""/>
        </div>

        <div class="whyus-tech-slide">
            <div class="swiper whyus-tech-slide-mobile">
                <div class="swiper-wrapper">
                    @foreach ($technology_slide_item as $tech_slide_item)
                        <div class="swiper-slide whyus-tech-item-mobile">
                            <img src="{{ asset('public/upload/info/'.$tech_slide_item->img_src) }}" class=""/>
                            <h2>
                                @switch( Config::get('app.locale') )
                                    @case('vi')
                                        {{ $tech_slide_item->img_description_vi }}
                                        @break
                                    @case('en')
                                        {{ $tech_slide_item->img_description_en }}
                                        @break
                                    @case('zh')
                                        {{ $tech_slide_item->img_description_zh }}
                                        @break
                                    @case('ja')
                                        {{ $tech_slide_item->img_description_js }}
                                        @break
                                    @case('kr')
                                        {{ $tech_slide_item->img_description_kr }}
                                        @break
                                @endswitch    
                            </h2>
                        </div>
                    @endforeach
                </div>
                <div class="tech-mobile-swiper-pagination"></div>
            </div>
        </div>
    </div>

    <div id="whyus-certificate" class="whyus-item-main-content hidden">
        <div class="swiper whyus-certificate-slide-mobile">
            <div class="swiper-wrapper">
                @foreach ($certificate_list as $key => $certi_item)
                    <div class="swiper-slide certification-cover">
                        <img src="{{ asset('public/upload/info/'.$certi_item->img_src) }}" class=""/>
                    </div>
                @endforeach
                
                
            </div>
            <div class="certificate-mobile-swiper-pagination"></div>
        </div>
    </div>

    <div id="whyus-cust" class="whyus-item-main-content hidden">
        <div class="swiper whyus-cust-slide-mobile">
            <div class="swiper-wrapper">
                @foreach ($customer_list as $key => $cust_item)
                    <div class="swiper-slide cust-cover">
                        <img src="{{ asset('public/upload/info/'.$cust_item->img_src) }}" class=""/>
                    </div>
                @endforeach
                
                
            </div>
            <div class="cust-mobile-swiper-pagination"></div>
        </div>
    </div>
    
</section>