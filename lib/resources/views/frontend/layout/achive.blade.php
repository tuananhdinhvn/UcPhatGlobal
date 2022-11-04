
<section id="testimonials" class="g-theme-bg-blue-dark-v1 g-py-80">
    <div class="container">
        <div class="container text-center g-max-width-850 g-mb-70">
            <div class="text-uppercase g-brd-primary">
                <h3 class="h3 g-letter-spacing-5 g-font-size-24 g-font-weight-400 g-color-primary g-mb-25">@lang('messages.achievement_title')</h3>
                <p class="col-lg-12 text-center" style="margin: auto; color: #cdcdcd">
                    
                    @switch( Config::get('app.locale') )
                        @case('vi')
                            {!! $achievement_index->achievement_intro_vi !!}
                            @break
                        @case('en')
                            {!! $achievement_index->achievement_intro_en !!}
                            @break
                        @case('zh')
                            {!! $achievement_index->achievement_intro_zh !!}
                            @break
                        @case('ja')
                            {!! $achievement_index->achievement_intro_ja !!}
                            @break
                    @endswitch

                </p>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12  g-mb-40 g-mb-0--lg">
                <div class="g-overflow-hidden">
                    <div class="row text-center no-gutters g-ml-minus-1 g-mb-minus-1">
                        
                        @foreach ($achievement_list as $item)
                        
                            <div class="col-md-3 col-sm-6 achieve-{{ $item->pro_id }}" style="cursor: pointer; height: 220px;">
                                <div class="g-brd-left g-brd-bottom g-theme-brd-blue-dark-v5 g-py-60">

                                    @foreach ($achieve_relate_photo as $key => $photo)
                                        <!--Achievement thumb and the first certificate-->
                                        @if($photo->product_id == $item->pro_id)
                                            
                                            <a  style="padding: 50px 0"
                                                class=" g-mr-10 g-mb-15"
                                                class="js-fancybox g-mr-10 g-mb-15"
                                                href="javascript:;"
                                                data-fancybox="lightbox-gallery-hidden-{{ $item->pro_id }}"
                                                data-src="{{ asset('public/upload/productphoto/'.$photo->photo_url) }}"
                                                data-caption="{{ Config::get('app.locale') == 'en' ? $item->pro_ten_en : ( Config::get('app.locale') == 'zh' ? $item->pro_ten_zh : $item->pro_ten_ja ) }}"
                                                data-speed="500"
                                                data-slideshow-speed="1000" >

                                                @break
                                        @endif
                                    @endforeach
                                            
                                    <img
                                        class="img-fluid g-opacity-0_6 g-opacity-1--hover g-transition-0_2"
                                        alt="Image Description"
                                        src="{{ asset('public/upload/product/'.$item->pro_thumb) }}"
                                        style="height: auto; width: 100px;" />
                                                
                                    @foreach ($achieve_relate_photo as $key => $photo)
                                        <!--Achievement thumb and the first certificate-->
                                        @if($photo->product_id == $item->pro_id)
                                            </a>
                                            @break
                                        @endif
                                    @endforeach
                                    
                                </div>
                            </div>

                            
    
                            <!--certificate start the second-->
                            @php
                                $i = 0
                            @endphp

                            @foreach ($achieve_relate_photo as $key => $photo)
                                @if($photo->product_id == $item->pro_id )
                                    @php
                                        $i += 1
                                    @endphp

                                    @if($i != 1)
                                        <img
                                            class="js-fancybox g-hidden-xs-up"
                                            data-fancybox="lightbox-gallery-hidden-{{ $item->pro_id }}"
                                            data-src="{{ asset('public/upload/productphoto/'.$photo->photo_url) }}"
                                            data-caption="{{ Config::get('app.locale') == 'en' ? $item->pro_ten_en : ( Config::get('app.locale') == 'zh' ? $item->pro_ten_zh : $item->pro_ten_ja ) }}"
                                            data-speed="500"
                                            data-slideshow-speed="1000"
                                        />
                                    @endif
                                @endif
                            @endforeach

                        @endforeach

                        
                    </div>
                </div>
            </div>
          


        </div>
    </div>
</section>


