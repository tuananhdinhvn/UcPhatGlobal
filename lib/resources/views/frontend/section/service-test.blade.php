<div class="swiper-slide service-section">

    


    <style>
        .main-serice-slide{
            height: 100%;
        }
        .service-zone{
            width: 100%;
            height: 100%;
        }
        .design-top-zone{
            width: 100%;
            height: 67%;
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            cursor: pointer;
        }
        .design-top-zone .left-zone{
            width: 100%;
            height: 100%;
            background: #fff;
            text-align: justify;
            padding-left: 20px;
            font-size: 1.5rem;
            color: #244d86;
            position: relative;
        }
        .design-zone-description{
            position: absolute;
            top: 15%;
            right: 0;
            left: 20px;
        }
        .design-top-zone .mid-zone{
            font-family: 'Alexandria', sans-serif;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
            padding-top: 10px;
            color: #244d86;
        }
        .design-top-zone .right-zone{
            width: 100%;
            height: 100%;
            background: #fff;
            position: relative; 
        }
        .design-top-zone .right-zone .right-zone-bg{
            position: absolute;
            width: 80%;
            height: 100%;
            top: 0;
            right: 0;
            background: #244d86;
        }
        .design-top-zone .right-zone .design-img-info{
            position: absolute;
            width: 85%;
            top: 15%;
            left: 0;
            height: 70%;
        }
        .design-top-zone .right-zone .design-img-info img{
            width: 100%;
            height: 100%;
            object-fit: fill;
        }
        
    </style>
    <style>
        .design-bot-zone{
            width: 100%;
            height: 100%;
            background: #33333d;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            padding: 10px;
            grid-gap: 10px;
            position: fixed;
            bottom: -67%;
            z-index: 100;
        }
        .design-bot-item{
            height: 100%;
            width: 100%;
            position: relative;
        }
        .design-bot-item img{
            width: 100%;
            height: 190px;
            object-fit: cover;
        }
        .design-bot-item h3{
            position: absolute;
            color: #fff;
            width: 100%;
            font-size: 22px;
            font-family: 'Alexandria', sans-serif;
            padding-top: 10px;
        }

        .design-bot-zone .design-slide-item{
            background: transparent;
        }
        .design-slide-item .slide-inside{
            position: absolute;
            color: #fff;
            top: 0;
            width: 100%;
            height: 200px;
        }
        .design-slide-item .slide-inside img{
            height: 100%;
            width: 100%;
            object-fit: fill;
        }
        .design-slide-item .slide-inside h3{
            font-family: 'Alexandria', sans-serif;
            font-size: 16px;
            text-transform: uppercase;
            padding-top: 10px;
        }
        .service-main-slide{
            height: 100% !important;
        }

        .main-serice-slide-pagination{
            position: fixed;
            top: 35px;
            background: transparent;
            z-index: 1;
            height: 35px;
        }
        .main-serice-slide-pagination .swiper-pagination-bullet{
            width: 14px;
            height: 14px;
        }
    </style>


    <div class="swiper main-serice-slide">
        <div class="swiper-wrapper">
            {{-- Design start item --}}
            <div class="swiper-slide" style="z-index: 10;">
                <div class="service-zone">
                    <div class="design-top-zone">
                        <div class="left-zone">
                            <p class="design-zone-description">
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
                        </div>
                        <div class="mid-zone">
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
                        </div>
                        <div class="right-zone">
                            <div class="right-zone-bg"></div>
                            <div class="design-img-info">
                                <img src="{{ asset('public/upload/service/'.$service_index->service_img_info_1) }}"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper design-bot-zone design-zone-bot-slide">
                        <div class="swiper-wrapper">
                            @foreach ($service_design_slide as $design_slide_item)
                                <div class="swiper-slide design-slide-item">
                                    <div class="slide-inside">
                                        <img src="{{ asset('public/upload/service/'.$design_slide_item->img_src) }}" alt="">
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
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            {{-- Design end item --}}

            {{-- Management start item --}}
            <style>
                .design-top-zone .right-zone .left-zone-bg{
                    position: absolute;
                    width: 80%;
                    height: 100%;
                    top: 0;
                    left: 0;
                    background: #244d86;
                }
                .design-top-zone .right-zone .management-img-info{
                    position: absolute;
                    width: 85%;
                    top: 15%;
                    right: 0;
                    height: 70%;
                }
                .design-top-zone .right-zone .management-img-info img{
                    width: 100%;
                    height: 100%;
                    object-fit: fill;
                }
                .design-top-zone .management-left-zone{
                    width: 100%;
                    height: 100%;
                    background: #fff;
                    text-align: justify;
                    padding-right: 20px;
                    font-size: 1.5rem;
                    color: #244d86;
                    position: relative;
                }
                .design-top-zone .management-left-zone .management-zone-description{
                    position: absolute;
                    top: 15%;
                    left: 0;
                    right: 20px;
                }
            </style>
            <div class="swiper-slide" style="z-index: 10;">
                <div class="service-zone">
                    <div class="design-top-zone">
                        <div class="right-zone">
                            <div class="left-zone-bg"></div>
                            <div class="management-img-info">
                                <img src="{{ asset('public/upload/service/'.$service_index->service_img_info_2) }}"/>
                            </div>
                        </div>
                        <div class="mid-zone">
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
                        </div>
                        <div class="management-left-zone">
                            <p class="management-zone-description">
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
                    
                    <div class="swiper design-bot-zone design-zone-bot-slide">
                        <div class="swiper-wrapper">
                            @foreach ($service_manage_slide as $manage_slide_item)
                                <div class="swiper-slide design-slide-item">
                                    <div class="slide-inside">
                                        <img src="{{ asset('public/upload/service/'.$manage_slide_item->img_src) }}" alt="">
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
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            {{-- Management end item --}}

            {{-- Construction start item --}}
            <div class="swiper-slide" style="z-index: 10;">
                <div class="service-zone">
                    <div class="design-top-zone">
                        <div class="left-zone">
                            <p class="design-zone-description">
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
                        </div>
                        <div class="mid-zone">
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
                        </div>
                        <div class="right-zone">
                            <div class="right-zone-bg"></div>
                            <div class="design-img-info">
                                <img src="{{ asset('public/upload/service/'.$service_index->service_img_info_3) }}"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper design-bot-zone design-zone-bot-slide">
                        <div class="swiper-wrapper">
                            @foreach ($service_construction_slide as $construct_slide_item)
                                <div class="swiper-slide design-slide-item">
                                    <div class="slide-inside">
                                        <img src="{{ asset('public/upload/service/'.$construct_slide_item->img_src) }}" alt="">
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
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            {{-- Construction end item --}}

            {{-- Development start item --}}
            <style>
                .design-top-zone .right-zone .left-zone-bg{
                    position: absolute;
                    width: 80%;
                    height: 100%;
                    top: 0;
                    left: 0;
                    background: #244d86;
                }
                .design-top-zone .right-zone .management-img-info{
                    position: absolute;
                    width: 85%;
                    top: 15%;
                    right: 0;
                    height: 70%;
                }
                .design-top-zone .right-zone .management-img-info img{
                    width: 100%;
                    height: 100%;
                    object-fit: fill;
                }
                .design-top-zone .management-left-zone{
                    width: 100%;
                    height: 100%;
                    background: #fff;
                    text-align: justify;
                    padding-right: 20px;
                    font-size: 1.5rem;
                    color: #244d86;
                    position: relative;
                }
                .design-top-zone .management-left-zone .management-zone-description{
                    position: absolute;
                    top: 15%;
                    left: 0;
                    right: 20px;
                }
            </style>
            <div class="swiper-slide" style="z-index: 10;">
                <div class="service-zone">
                    <div class="design-top-zone">
                        <div class="right-zone">
                            <div class="left-zone-bg"></div>
                            <div class="management-img-info">
                                <img src="{{ asset('public/upload/service/'.$service_index->service_img_info_4) }}"/>
                            </div>
                        </div>
                        <div class="mid-zone">
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
                        </div>
                        <div class="management-left-zone">
                            <p class="management-zone-description">
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
                    
                    <div class="swiper design-bot-zone design-zone-bot-slide">
                        <div class="swiper-wrapper">
                            @foreach ($service_develop_slide as $dev_slide_item)
                                <div class="swiper-slide design-slide-item">
                                    <div class="slide-inside">
                                        <img src="{{ asset('public/upload/service/'.$dev_slide_item->img_src) }}" alt="">
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
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            {{-- Development end item --}}
        </div>
        <div class="main-serice-slide-pagination"></div>
    </div>

    
    {{-- <div class="service-zone">
        <div class="design-top-zone">
            <div class="left-zone">
                <p class="design-zone-description">
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
            </div>
            <div class="mid-zone">
                Design
            </div>
            <div class="right-zone">
                <div class="right-zone-bg"></div>
                <div class="design-img-info">
                    <img src="{{ asset('public/upload/service/'.$service_index->service_img_info_1) }}"/>
                </div>
            </div>
        </div>
        
        <div class="swiper design-bot-zone design-zone-bot-slide">
            <div class="swiper-wrapper">
                @foreach ($service_design_slide as $design_slide_item)
                    <div class="swiper-slide design-slide-item">
                        <div class="slide-inside">
                            <img src="{{ asset('public/upload/service/'.$design_slide_item->img_src) }}" alt="">
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
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div> --}}











    {{-- <style>
        .service-main-swiper-pagination{
            background: #fff0;
            position: fixed;
            top: 30px;
            z-index: 1;
            height: 35px;
        }
        .service-main-swiper-pagination .swiper-pagination-bullet{
            cursor: pointer;
            width: 12px;
            height: 12px;
        }
    </style>
    

    <div class="swiper service-main-slide">
        <div class="swiper-wrapper">
            <div class="swiper-slide" 
                style=" ">
                <div class="service-zone">
                    <div class="design-top-zone">
                        <div class="left-zone">
                            <p class="design-zone-description">
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
                        </div>
                        <div class="mid-zone">
                            Design
                        </div>
                        <div class="right-zone">
                            <div class="right-zone-bg"></div>
                            <div class="design-img-info">
                                <img src="{{ asset('public/upload/service/'.$service_index->service_img_info_1) }}"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper design-bot-zone design-zone-bot-slide" 
                            style=" ">
                            @foreach ($service_design_slide as $design_slide_item)
                                <div class="swiper-slide design-slide-item">
                                    <div class="slide-inside">
                                        <img src="{{ asset('public/upload/service/'.$design_slide_item->img_src) }}" alt="">
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
                                </div>
                            @endforeach
                        </div>
                        <div class="service-item-swiper-button-next"></div>
                        <div class="service-item-swiper-button-prev"></div>
                        <div class="service-item-swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-zone">
                    <div class="design-top-zone">
                        <div class="left-zone">
                            <p class="design-zone-description">
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
                        </div>
                        <div class="mid-zone">
                            Design
                        </div>
                        <div class="right-zone">
                            <div class="right-zone-bg"></div>
                            <div class="design-img-info">
                                <img src="{{ asset('public/upload/service/'.$service_index->service_img_info_1) }}"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper design-bot-zone design-zone-bot-slide">
                        <div class="swiper-wrapper">
                            @foreach ($service_design_slide as $design_slide_item)
                                <div class="swiper-slide design-slide-item">
                                    <div class="slide-inside">
                                        <img src="{{ asset('public/upload/service/'.$design_slide_item->img_src) }}" alt="">
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
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-zone">
                    <div class="design-top-zone">
                        <div class="left-zone">
                            <p class="design-zone-description">
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
                        </div>
                        <div class="mid-zone">
                            Design
                        </div>
                        <div class="right-zone">
                            <div class="right-zone-bg"></div>
                            <div class="design-img-info">
                                <img src="{{ asset('public/upload/service/'.$service_index->service_img_info_1) }}"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper design-bot-zone design-zone-bot-slide">
                        <div class="swiper-wrapper">
                            @foreach ($service_design_slide as $design_slide_item)
                                <div class="swiper-slide design-slide-item">
                                    <div class="slide-inside">
                                        <img src="{{ asset('public/upload/service/'.$design_slide_item->img_src) }}" alt="">
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
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-zone">
                    <div class="design-top-zone">
                        <div class="left-zone">
                            <p class="design-zone-description">
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
                        </div>
                        <div class="mid-zone">
                            Design
                        </div>
                        <div class="right-zone">
                            <div class="right-zone-bg"></div>
                            <div class="design-img-info">
                                <img src="{{ asset('public/upload/service/'.$service_index->service_img_info_1) }}"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper design-bot-zone design-zone-bot-slide">
                        <div class="swiper-wrapper">
                            @foreach ($service_design_slide as $design_slide_item)
                                <div class="swiper-slide design-slide-item">
                                    <div class="slide-inside">
                                        <img src="{{ asset('public/upload/service/'.$design_slide_item->img_src) }}" alt="">
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
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-main-swiper-button-next"></div>
        <div class="service-main-swiper-button-prev"></div>
        <div class="service-main-swiper-pagination"></div>
    </div> --}}


</div>