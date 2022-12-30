<div class="swiper-slide whyus-section">
    <div class="whyus-header">
        <div class="header-item active-header">@lang('messages.whyus_head_achievement')</div>
        <div class="header-item">@lang('messages.whyus_head_technology')</div>
        <div class="header-item">@lang('messages.whyus_head_certificate')</div>
        <div class="header-item">@lang('messages.whyus_head_cust')</div>
    </div>

    <div class="whyus-content">
        
        <div class="achievement-display whyus-display show">
            <div class="achievements-cover">
                <div class="achievements">

                    
                    @foreach ($achievement_list as $achievement_item)
                    <div class="achievement-item">
                        <img src="{{ asset('public/upload/info/'.$achievement_item->img_src) }}"/>
                        <h3>{{ $achievement_item->img_number }}</h3>
                        <p>
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
                        </p>
                    </div>
                    @endforeach

                </div>

                <style>
                    .timeline-img-cover{
                        position: fixed;
                        bottom: 20px;
                    }
                    .achievement-horizone-line{
                        width: 100%;
                        height: 35px;
                        background: #244d86;
                    }
                    .achievement-horizone-line img{
                        padding-top: 50px;
                    }
                </style>

                <div class="timeline-img-cover">
                    <div class="achievement-horizone-line"></div>
                    <img src="{{ asset('public/upload/template/'.$timeline_img->whyus_timeline_pc) }}" alt="">
                </div>

                {{-- <style>
                    .timeline-blur-item{
                        background: #0000006b;
                        width: 100%;
                        height: 100%;
                        position: absolute;
                        top: 0;
                        left: 0;
                        z-index: -1;
                    }
                    .timeline-item{
                        background-size: cover !important;
                        background-repeat: no-repeat !important;
                        background-position-x: 50% !important;
                        height: 20vh !important;
                    }
                    .timeline-item time{
                        color: #ddd;
                        text-shadow: 0 0 10px black;
                    }
                    .timeline-item p{
                        color: #fff;
                        text-shadow: 0 0 15px black;
                        text-align: center;
                        font-weight: 500; 
                    }
                </style>
                <section class="timeline">
                    <ol>
                        @foreach ($timeline_index as $timeline_item)
                        <li>
                            <div class="timeline-item" style="background-image: url({{ asset('public/upload/timeline/'.$timeline_item->event_img) }});">
                                <section class="timeline-blur-item"></section>
                                <time>{{ \Carbon\Carbon::parse($timeline_item->event_date)->format('Y')}}</time> 
                                <p>
                                    @switch( Config::get('app.locale') )
                                        @case('vi')
                                            {{ $timeline_item->event_title_vi }}
                                            @break
                                        @case('en')
                                            {{ $timeline_item->event_title_en }}
                                            @break
                                        @case('zh')
                                            {{ $timeline_item->event_title_zh }}
                                            @break
                                        @case('ja')
                                            {{ $timeline_item->event_title_ja }}
                                            @break
                                        @case('kr')
                                            {{ $timeline_item->event_title_kr }}
                                            @break
                                    @endswitch
                                </p>
                                 
                            </div>
                        </li>
                        @endforeach
                        <li></li>
                    </ol>

                    
                    <div class="arrows">
                        <button class="arrow arrow__prev disabled" disabled>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_prev.svg" alt="prev timeline arrow">
                        </button>
                        <button class="arrow arrow__next">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_next.svg" alt="next timeline arrow">
                        </button>
                    </div>
                </section> --}}
            </div>
        </div>
        

        <div class="technology-display whyus-display hidden">
            <div class="technology-cover">
                <div class="tech-top-line">
                    <img src="{{ asset('public/upload/template/'.$technology_item->whyus_tech_img_left) }}" class=""/>
                    <img src="{{ asset('public/upload/template/'.$technology_item->whyus_tech_img_right) }}" class=""/>
                </div>

                <div class="tech-bot-line">
                    <div class="swiper mySwiper-tech">
                        <div class="swiper-wrapper">
                            
                            @foreach ($technology_slide_item as $tech_slide_item)
                                <div class="swiper-slide tech-item-slide">
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
                        <div class="swiper-tech-button-next"></div>
                        <div class="swiper-tech-button-prev"></div>
                        <div class="swiper-pagination-tech"></div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="certificate-display whyus-display hidden">
            <div class="certificate-cover">
                <div class="certi-topline">
                    @foreach ($certificate_list as $key => $certi_item)
                        @if ($key < 3)
                            <div class="certi-photo-cover">
                                <img src="{{ asset('public/upload/info/'.$certi_item->img_src) }}" class="" />
                            </div>
                        @endif
                    @endforeach
                    
                </div>
                <div class="certi-botline">
                    @foreach ($certificate_list as $key => $certi_item)
                        @if ($key >= 3 && $key <= 6)
                            <div class="certi-photo-cover">
                                <img src="{{ asset('public/upload/info/'.$certi_item->img_src) }}" class="" />
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        

        <style>
            .customer-swiper-item{
                background: #e9ef97;
                height: 85vh;
                z-index: 0;
            }
            .customer-cover{
                display: grid;
                grid-gap: 20px;
                padding: 20px;
                width: 100%;
                background: #e9ef97;
            }
            .cust-slide-wrap{
                width: 100%;
                display: grid;
                grid-template-columns: repeat(6, 1fr);
                background: #e9ef97;
                grid-gap: 20px;
                padding: 20px 0;
                position: absolute;
                top: 0;
            }
            .customer-zone-cover{
                width: 100%;
                height: 22vh;
                background-repeat: no-repeat;
                background-size: contain;
                opacity: 0.7;
            }
            .customer-zone-cover img{
                display: block;
                width: 100%;
                height: 90%;
                object-fit: cover;
                background: #e9ef97;
                object-fit: contain;
            }
        </style>

        <div class="customer-display whyus-display hidden">
            <div class="customer-blur"></div>
            <div class="customer-cover">


                <div class="swiper customer_swiper">
                    <div class="swiper-wrapper">
                        @foreach ($customer_list->chunk(18) as $cust_screen)
                        
                            <div class="swiper-slide customer-swiper-item">
                                <div class="cust-slide-wrap">
                                    @foreach ($cust_screen as $item)
                                    <div class="customer-zone-cover" style="background-image: url()">
                                        <img src="{{ asset('public/upload/info/'.$item->img_src) }}" alt="">
                                    </div>
                                    @endforeach
                                </div>
                                
                            </div>
                        @endforeach




                    </div>
                    <div class="customer-swiper-button-next"></div>
                    <div class="customer-swiper-button-prev"></div>
                    <div class="customer-swiper-pagination"></div>
                </div>



                {{-- @foreach ($customer_list->chunk(18) as $cust_screen)
                    @foreach ($cust_screen as $item)
                        <div class="customer-item">
                            <img src="{{ asset('public/upload/info/'.$item->img_src) }}"" class="customer-img"/>
                        </div>
                    @endforeach
                    https://minhglobal.com/public/upload/image/1670988082ICCI.png
                    https://minhglobal.com/public/upload/image/1670988062GOLDEN%20BASE%201.png
                @endforeach --}}
            </div>
        </div>
        
    </div>


</div>