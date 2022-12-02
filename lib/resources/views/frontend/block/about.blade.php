<!-- Start About Section -->
<div id="about" class="section about-section " >

    {{-- Timeline --}}
	<div class="timeline-container" id="timeline-1" style="">
            <div class="timeline-header">
                <h2 class="timeline-header__title">We born with a mission</h2>
                {{-- <h3 class="timeline-header__subtitle">FATHER OF THE TURKS</h3> --}}
            </div>
            <div class="timeline">

                @foreach ($timeline_index as $timeline_item)
                    <div class="timeline-item" 
                        data-text="
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
                        ">
                        <div class="timeline__content">
                            <img class="timeline__img" src="{{ asset('public/upload/timeline/'.$timeline_item->event_img) }}" />
                            <h2 class="timeline__content-title">{{ \Carbon\Carbon::parse($timeline_item->event_date)->format('Y')}}</h2>
                            <p class="timeline__content-desc">
                                @switch( Config::get('app.locale') )
                                    @case('vi')
                                        {{ $timeline_item->event_description_vi }}
                                        @break
                                    @case('en')
                                        {{ $timeline_item->event_description_en }}
                                        @break
                                    @case('zh')
                                        {{ $timeline_item->event_description_zh }}
                                        @break
                                    @case('ja')
                                        {{ $timeline_item->event_description_ja }}
                                        @break
                                    @case('kr')
                                        {{ $timeline_item->event_description_kr }}
                                        @break
                                @endswitch
                            </p>
                        </div>
                    </div>
                @endforeach
                
             
                
            </div>
    </div>
    {{-- End timeline --}}
      

    <div id="why-us"></div>

    <h2 class="section-title" style="position: relative; top: -19px;">@lang('messages.whyus_title')</h2>
 
    <div class="container-fluid why-us-wrap" >
        <div class="tabs ">
            <input type="radio" id="tab1" name="tab-control" checked />
            <input type="radio" id="tab2" name="tab-control" />
            <input type="radio" id="tab3" name="tab-control" />
            <input type="radio" id="tab4" name="tab-control" />
            <ul>
                <li title="Features">
                    <label for="tab1" role="button">
                        <span>@lang('messages.whyus_head_achievement')</span>
                    </label>
                </li>
                <li title="Delivery Contents">
                    <label for="tab2" role="button">
                        <span>@lang('messages.whyus_head_technology')</span>
                    </label>
                </li>
                <li title="Shipping">
                    <label for="tab3" role="button">
                        <span>@lang('messages.whyus_head_certificate')</span>
                    </label>
                </li>
                <li title="Returns">
                    <label for="tab4" role="button">
                        <span>@lang('messages.whyus_head_cust')</span>
                    </label>
                </li>
            </ul>

            <div class="slider">
                <div class="indicator"></div>
            </div>
            <div class="content">

                <section class="tab-1-why-us">
                    <h2>@lang('messages.whyus_head_achievement')</h2>
                    <div class="grid-number-container">
                        @foreach ($numbers_icon as $item)
                        <div class="number-item">
                            <img class="achievement-img" src="{{ asset('public/upload/image/'.$item->img_src) }}" alt="">
                            <h3 class="achievement-number">{{ $item->img_number }}</h3>
                            <p class="achievement-des">
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
                </section>

                <section class="tab-2-why-us">
                    <h2>@lang('messages.whyus_head_technology')</h2>
                    <div class="grid-tech-container">
                        <div class="tech-img-big-1">
                            <img class="" src="https://minhglobal.com/public/upload/template/1601621667img.png" alt="">
                        </div>
                        <div class="tech-img-big-2">
                            <img class="" src="https://minhglobal.com/public/upload/template/1603079241Tech1.jpg" alt="">
                        </div>                      
                    </div>

                    <div class="swiper mySwiper why-us-tech-item" style="position: relative; top: 50px;">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide tech-item-wrap">
                                <img class="tech-item-img" src="https://minhglobal.com/public/upload/image/16018310801601622121SITE%20CAMERA.png" alt=""><br/>
                                <p class="tech-item-title">Site Camera</p>
                            </div>
                            <div class="swiper-slide tech-item-wrap">
                                <img class="tech-item-img" src="https://minhglobal.com/public/upload/image/16018313311601622247FLYCAM.jpg" alt=""><br/>
                                <p class="tech-item-title">Flycam</p>
                            </div>
                            <div class="swiper-slide tech-item-wrap">
                                <img class="tech-item-img" src="https://minhglobal.com/public/upload/image/16018313691601622339AR.png" alt=""><br/>
                                <p class="tech-item-title">AR</p>
                            </div>
                            <div class="swiper-slide tech-item-wrap">
                                <img class="tech-item-img" src="https://minhglobal.com/public/upload/image/16018314161601622036BIM.jpg" alt=""><br/>
                                <p class="tech-item-title">BIM</p>
                            </div>
                            <div class="swiper-slide tech-item-wrap">
                                <img class="tech-item-img" src="https://minhglobal.com/public/upload/image/16018310801601622121SITE%20CAMERA.png" alt=""><br/>
                                <p class="tech-item-title">Site Camera</p>
                            </div>
                            <div class="swiper-slide tech-item-wrap">
                                <img class="tech-item-img" src="https://minhglobal.com/public/upload/image/160183147516017996711601622595img3.png" alt=""><br/>
                                <p class="tech-item-title">LEED & HACCP</p>
                            </div>
                            <div class="swiper-slide tech-item-wrap">
                                <img class="tech-item-img" src="https://minhglobal.com/public/upload/image/16018310801601622121SITE%20CAMERA.png" alt=""><br/>
                                <p class="tech-item-title">Site Camera</p>
                            </div>
                            <div class="swiper-slide tech-item-wrap">
                                <img class="tech-item-img" src="https://minhglobal.com/public/upload/image/16018313311601622247FLYCAM.jpg" alt=""><br/>
                                <p class="tech-item-title">Flycam</p>
                            </div>
                            <div class="swiper-slide tech-item-wrap">
                                <img class="tech-item-img" src="https://minhglobal.com/public/upload/image/16018313691601622339AR.png" alt=""><br/>
                                <p class="tech-item-title">AR</p>
                            </div>

                        </div>
                        {{-- <div class="swiper-button-next" style="right: 0px;"></div>
                        <div class="swiper-button-prev" style="left: 0px;"></div> --}}
                        <div class="swiper-pagination" style="visibility: hidden"></div>
                    </div>

                </section>

                <section class="tab-3-why-us">
                    <h2>@lang('messages.whyus_head_certificate')</h2>
                    <div class="grid-adward-container">
                        @foreach ($social_certificate as $key => $item)
                            <img class="adw-{{$key+1}}" src="{{ asset('public/upload/image/'.$item->img_src) }}" alt="">
                        @endforeach
                    </div>
                </section>

                <section class="tab-4-why-us">
                    <div class="partner-cover"></div>
                    <h2>@lang('messages.whyus_head_cust')</h2>
                    <div class="partner-wrap">
                        @foreach ($customer_list as $item)
                        <img class="partner-item" src="{{ asset('public/upload/image/'.$item->img_src) }}" alt="">
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>
    {{-- End single screen --}}

</div>
<!-- End About Section -->

    