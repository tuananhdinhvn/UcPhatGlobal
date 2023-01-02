<section id="service-mobile">
    <div class="section-title">Service</div>    


     <div class="swiper service-swiper service-wrap-mobile">
      <div class="swiper-wrapper">

        <div class="swiper-slide service-mobile-item service-mobile-design">
            <h2 class="service-mobile-title">
                @switch( Config::get('app.locale') )
                    @case('vi')
                        {{ $service_index->service_title1_vi }}
                        @break
                    @case('en')
                        {{ $service_index->service_title1_en }}
                        @break
                    @case('zh')
                        {{ $service_index->service_title1_zh }}
                        @break
                    @case('ja')
                        {{ $service_index->service_title1_ja }}
                        @break
                    @case('kr')
                        {{ $service_index->service_title1_kr }}
                        @break
                @endswitch
            </h2>
            <div class="service-mobile-main-odd-bg">
                <img src="{{ asset('public/upload/service/'.$service_index->service_img_info_1) }}" alt="">
            </div>
            <div class="service-mobile-description">
                @switch( Config::get('app.locale') )
                    @case('vi')
                        {{ $service_index->service_des1_vi }}
                        @break
                    @case('en')
                        {{ $service_index->service_des1_en }}
                        @break
                    @case('zh')
                        {{ $service_index->service_des1_zh }}
                        @break
                    @case('ja')
                        {{ $service_index->service_des1_ja }}
                        @break
                    @case('kr')
                        {{ $service_index->service_des1_kr }}
                        @break
                @endswitch
            </div>


            <div class="swiper service-mobile-slide">
                <div class="swiper-wrapper">
                    @foreach ($service_design_slide as $design_slide_item)
                        <div class="swiper-slide service-mobile-slide-item">
                            <img src="{{ asset('public/upload/service/'.$design_slide_item->img_src) }}" />
                            <h3>
                                @switch( Config::get('app.locale') )
                                    @case('vi')
                                        {{ $design_slide_item->img_description_vi }}
                                        @break
                                    @case('en')
                                        {{ $design_slide_item->img_description_en }}
                                        @break
                                    @case('zh')
                                        {{ $design_slide_item->img_description_zh }}
                                        @break
                                    @case('ja')
                                        {{ $design_slide_item->img_description_ja }}
                                        @break
                                    @case('kr')
                                        {{ $design_slide_item->img_description_kr }}
                                        @break
                                @endswitch
                            </h3>
                        </div>
                    @endforeach
                </div>
                <div class="service-mobile-slide-pagination"></div>
            </div>

        </div>

        <div class="swiper-slide service-mobile-item service-mobile-design">
            <h2 class="service-mobile-title">
                @switch( Config::get('app.locale') )
                    @case('vi')
                        {{ $service_index->service_title2_vi }}
                        @break
                    @case('en')
                        {{ $service_index->service_title2_en }}
                        @break
                    @case('zh')
                        {{ $service_index->service_title2_zh }}
                        @break
                    @case('ja')
                        {{ $service_index->service_title2_ja }}
                        @break
                    @case('kr')
                        {{ $service_index->service_title2_kr }}
                        @break
                @endswitch
            </h2>
            <div class="service-mobile-main-odd-bg">
                <img src="{{ asset('public/upload/service/'.$service_index->service_img_info_2) }}" alt="">
            </div>
            <div class="service-mobile-description">
                @switch( Config::get('app.locale') )
                    @case('vi')
                        {{ $service_index->service_des2_vi }}
                        @break
                    @case('en')
                        {{ $service_index->service_des2_en }}
                        @break
                    @case('zh')
                        {{ $service_index->service_des2_zh }}
                        @break
                    @case('ja')
                        {{ $service_index->service_des2_ja }}
                        @break
                    @case('kr')
                        {{ $service_index->service_des2_kr }}
                        @break
                @endswitch
            </div>

            <div class="swiper service-mobile-slide">
                <div class="swiper-wrapper">
                    @foreach ($service_manage_slide as $manage_slide_item)
                        <div class="swiper-slide service-mobile-slide-item">
                            <img src="{{ asset('public/upload/service/'.$manage_slide_item->img_src) }}" />
                            <h3>
                                @switch( Config::get('app.locale') )
                                    @case('vi')
                                        {{ $manage_slide_item->img_description_vi }}
                                        @break
                                    @case('en')
                                        {{ $manage_slide_item->img_description_en }}
                                        @break
                                    @case('zh')
                                        {{ $manage_slide_item->img_description_zh }}
                                        @break
                                    @case('ja')
                                        {{ $manage_slide_item->img_description_ja }}
                                        @break
                                    @case('kr')
                                        {{ $manage_slide_item->img_description_kr }}
                                        @break
                                @endswitch
                            </h3>
                        </div>
                    @endforeach
                </div>
                <div class="service-mobile-slide-pagination"></div>
            </div>
        </div>

        <div class="swiper-slide service-mobile-item service-mobile-design">
            <h2 class="service-mobile-title">
                @switch( Config::get('app.locale') )
                    @case('vi')
                        {{ $service_index->service_title3_vi }}
                        @break
                    @case('en')
                        {{ $service_index->service_title3_en }}
                        @break
                    @case('zh')
                        {{ $service_index->service_title3_zh }}
                        @break
                    @case('ja')
                        {{ $service_index->service_title3_ja }}
                        @break
                    @case('kr')
                        {{ $service_index->service_title3_kr }}
                        @break
                @endswitch
            </h2>
            <div class="service-mobile-main-odd-bg">
                <img src="{{ asset('public/upload/service/'.$service_index->service_img_info_3) }}" alt="">
            </div>
            <div class="service-mobile-description">
                @switch( Config::get('app.locale') )
                    @case('vi')
                        {{ $service_index->service_des3_vi }}
                        @break
                    @case('en')
                        {{ $service_index->service_des3_en }}
                        @break
                    @case('zh')
                        {{ $service_index->service_des3_zh }}
                        @break
                    @case('ja')
                        {{ $service_index->service_des3_ja }}
                        @break
                    @case('kr')
                        {{ $service_index->service_des3_kr }}
                        @break
                @endswitch
            </div>

            <div class="swiper service-mobile-slide">
                <div class="swiper-wrapper">
                    @foreach ($service_construction_slide as $construct_slide_item)
                        <div class="swiper-slide service-mobile-slide-item">
                            <img src="{{ asset('public/upload/service/'.$construct_slide_item->img_src) }}" />
                            <h3>
                                @switch( Config::get('app.locale') )
                                    @case('vi')
                                        {{ $construct_slide_item->img_description_vi }}
                                        @break
                                    @case('en')
                                        {{ $construct_slide_item->img_description_en }}
                                        @break
                                    @case('zh')
                                        {{ $construct_slide_item->img_description_zh }}
                                        @break
                                    @case('ja')
                                        {{ $construct_slide_item->img_description_ja }}
                                        @break
                                    @case('kr')
                                        {{ $construct_slide_item->img_description_kr }}
                                        @break
                                @endswitch
                            </h3>
                        </div>
                    @endforeach
                </div>
                <div class="service-mobile-slide-pagination"></div>
            </div>
        </div>

        <div class="swiper-slide service-mobile-item service-mobile-design">
            <h2 class="service-mobile-title">
                @switch( Config::get('app.locale') )
                    @case('vi')
                        {{ $service_index->service_title4_vi }}
                        @break
                    @case('en')
                        {{ $service_index->service_title4_en }}
                        @break
                    @case('zh')
                        {{ $service_index->service_title4_zh }}
                        @break
                    @case('ja')
                        {{ $service_index->service_title4_ja }}
                        @break
                    @case('kr')
                        {{ $service_index->service_title4_kr }}
                        @break
                @endswitch
            </h2>
            <div class="service-mobile-main-odd-bg">
                <img src="{{ asset('public/upload/service/'.$service_index->service_img_info_4) }}" alt="">
            </div>
            <div class="service-mobile-description">
                @switch( Config::get('app.locale') )
                    @case('vi')
                        {{ $service_index->service_des4_vi }}
                        @break
                    @case('en')
                        {{ $service_index->service_des4_en }}
                        @break
                    @case('zh')
                        {{ $service_index->service_des4_zh }}
                        @break
                    @case('ja')
                        {{ $service_index->service_des4_ja }}
                        @break
                    @case('kr')
                        {{ $service_index->service_des4_kr }}
                        @break
                @endswitch
            </div>

            <div class="swiper service-mobile-slide">
                <div class="swiper-wrapper">
                    @foreach ($service_develop_slide as $dev_slide_item)
                        <div class="swiper-slide service-mobile-slide-item">
                            <img src="{{ asset('public/upload/service/'.$dev_slide_item->img_src) }}" />
                            <h3>
                                @switch( Config::get('app.locale') )
                                    @case('vi')
                                        {{ $dev_slide_item->img_description_vi }}
                                        @break
                                    @case('en')
                                        {{ $dev_slide_item->img_description_en }}
                                        @break
                                    @case('zh')
                                        {{ $dev_slide_item->img_description_zh }}
                                        @break
                                    @case('ja')
                                        {{ $dev_slide_item->img_description_ja }}
                                        @break
                                    @case('kr')
                                        {{ $dev_slide_item->img_description_kr }}
                                        @break
                                @endswitch
                            </h3>
                        </div>
                    @endforeach
                </div>
                <div class="service-mobile-slide-pagination"></div>
            </div>
        </div>

      </div>
      <div class="service-mobile-swiper-pagination"></div>
    </div>

    
</section>