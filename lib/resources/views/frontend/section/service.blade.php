<div class="swiper-slide service-section">

    <div id="prev-service-btn" class="prev-service-btn" count="1">
        <img src="{{ asset('public/upload/info/prev.png') }}" />
    </div>
    <div id="next-service-btn" class="next-service-btn" count="1">
        <img src="{{ asset('public/upload/info/next.png') }}" />
    </div>

    
    <div class="service-content">
        <div class="service-section">

            <div id="service-design" class="service-cover service-1 hidden-item" >
                <div class="service-title">
                    <h2>
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
                </div>
                <div class="service-item-inside">
                    <div class="service-design-top-content">
                        <p>
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
                        </p>
                        <div class="service-img-right">
                            <img src="{{ asset('public/upload/service/'.$service_index->service_img_info_1) }}"/>
                            <div class="right-img-bg"></div>
                        </div>
                    </div>
                </div>

                <div class="service-design-bot-content">
                    <div class="swiper mySwiper-service-design mySwiper-service">
                        <div class="swiper-wrapper service-design-slide-cover">
                            @foreach ($service_design_slide as $design_slide_item)
                                <div class="swiper-slide service-slide-item">
                                    <img src="{{ asset('public/upload/service/'.$design_slide_item->img_src) }}" class=""/>
                                    <h2>
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
                                    </h2>
                                </div>
                            @endforeach
                            
                           
                        </div>
                        <div class="swiper-service-design-button-next"></div>
                        <div class="swiper-service-design-button-prev"></div>
                        <div class="swiper-pagination-service-design" style="opacity: 0;"></div>
                    </div>
                </div>
            </div>

            <div id="service-management" class="service-cover service-2 hidden-item">
                <div class="service-title">
                    <h2>
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
                </div>
                <div class="service-item-inside">
                    <div class="service-management-top-content">
                        <div class="service-img-left">
                            <img src="{{ asset('public/upload/service/'.$service_index->service_img_info_2) }}"/>
                            <div class="left-img-bg"></div>
                        </div>
                        <p>
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
                        </p>
                        
                    </div>
                </div>

                <div class="service-design-bot-content">
                    <div class="swiper mySwiper-service-management mySwiper-service">
                        <div class="swiper-wrapper service-management-slide-cover">
                            @foreach ($service_manage_slide as $manage_slide_item)
                                <div class="swiper-slide service-slide-item">
                                    <img src="{{ asset('public/upload/service/'.$manage_slide_item->img_src) }}" class=""/>
                                    <h2>
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
                                    </h2>
                                </div>
                            @endforeach

                        </div>
                        <div class="swiper-service-management-button-next"></div>
                        <div class="swiper-service-management-button-prev"></div>
                        <div class="swiper-pagination-service-management"></div>
                    </div>
                </div>
            </div>

            <div id="service-construction" class="service-cover service-3 hidden-item">
                <div class="service-title">
                    <h2>
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
                </div>
                <div class="service-item-inside">
                    <div class="service-construction-top-content">
                        <p>
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
                        </p>
                        <div class="service-img-left">
                            <img src="{{ asset('public/upload/service/'.$service_index->service_img_info_3) }}"/>
                            <div class="left-img-bg"></div>
                        </div>
                        
                    </div>
                </div>


                <div class="service-design-bot-content">
                    <div class="swiper mySwiper-service-construction mySwiper-service">
                        <div class="swiper-wrapper service-construction-slide-cover">
                            @foreach ($service_construction_slide as $construction_slide_item)
                                <div class="swiper-slide service-slide-item">
                                    <img src="{{ asset('public/upload/service/'.$construction_slide_item->img_src) }}" class=""/>
                                    <h2>
                                        @switch( Config::get('app.locale') )
                                            @case('vi')
                                                {{ $construction_slide_item->img_description_vi }}
                                                @break
                                            @case('en')
                                                {{ $construction_slide_item->img_description_en }}
                                                @break
                                            @case('zh')
                                                {{ $construction_slide_item->img_description_zh }}
                                                @break
                                            @case('ja')
                                                {{ $construction_slide_item->img_description_ja }}
                                                @break
                                            @case('kr')
                                                {{ $construction_slide_item->img_description_kr }}
                                                @break
                                        @endswitch
                                    </h2>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-service-construction-button-next"></div>
                        <div class="swiper-service-construction-button-prev"></div>
                        <div class="swiper-pagination-service-construction"></div>
                    </div>
                </div>
            </div>
            
            <div id="service-development" class="service-cover service-4 ">
                <div class="service-title">
                    <h2>
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
                </div>
                <div class="service-item-inside">
                    <div class="service-construction-top-content">
                        <div class="service-img-left">
                            <img src="{{ asset('public/upload/service/'.$service_index->service_img_info_4) }}"/>
                            <div class="left-img-bg" style="left: -90px;"></div>
                        </div>

                        <p>
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
                        </p>
                        
                        
                    </div>
                </div>


                <div class="service-design-bot-content">
                    <div class="swiper mySwiper-service-construction mySwiper-service">
                        <div class="swiper-wrapper service-construction-slide-cover">
                            @foreach ($service_develop_slide as $dev_slide_item)
                                <div class="swiper-slide service-slide-item">
                                    <img src="{{ asset('public/upload/service/'.$dev_slide_item->img_src) }}" class=""/>
                                    <h2>
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
                                    </h2>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-service-construction-button-next"></div>
                        <div class="swiper-service-construction-button-prev"></div>
                        <div class="swiper-pagination-service-construction"></div>
                    </div>
                </div>
                


            </div>
        
        </div>
    </div>

</div>