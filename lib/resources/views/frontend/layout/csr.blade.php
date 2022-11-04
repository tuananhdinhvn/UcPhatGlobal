<section id="social" class="container g-pt-100">
    <div class="text-center">
        <div class="text-uppercase g-brd-primary">
            <h3 id="social-title" class="h3 g-letter-spacing-5 g-font-size-24 g-font-weight-400 g-color-primary g-mb-25">@lang('messages.csr_title')</h3>
            
            <p>
                @switch( Config::get('app.locale') )
                    @case('vi')
                        {!! $social_index->social_intro_vi !!}
                        @break
                    @case('en')
                        {!! $social_index->social_intro_en !!}
                        @break
                    @case('zh')
                        {!! $social_index->social_intro_zh !!}
                        @break
                    @case('ja')
                        {!! $social_index->social_intro_ja !!}
                        @break
                    @case('kr')
                        {!! $social_index->social_intro_kr !!}
                        @break
                @endswitch
            </p>
            <br />
        </div>
    </div>


    <div id="social-heading" class="row">
        <!--Transfered to why us-->
        {{-- @if($social_index->csr_certificate_show == true)
        <div id="certificate-header" class="social-header">@lang('messages.social_tab_1_heading')</div>
        @endif

        @if($social_index->csr_letter_show == true)
        <div id="letter-header" class="social-header">@lang('messages.social_tab_2_heading')</div>
        @endif --}}
        <!--End transfered to why us-->
        
        @if($social_index->csr_social_show == true)
        <div id="social-header" class="social-header">@lang('messages.social_tab_3_heading')</div>
        @endif
    </div>     


    <!--Transfered to why us-->

    {{-- @if($social_index->csr_certificate_show == true)
    <div id="certificate-content" class="social-content social-active">
        <div id="certificate-slide" class=" owl-carousel owl-theme">

            @foreach ($social_certificate->chunk(4) as $chunk)
                <div class="row cert-row" >
                    @foreach ($chunk as $key => $item)
                        <div class="col-lg-3 col-md-3 cert-item">
                            <img class="cert-1" src="{{ asset('public/upload/image/'.$item->img_src) }}" alt="">
                        </div>
                    @endforeach

                </div>
            @endforeach


        </div>
    </div>
    @endif --}}
    

    {{-- @if($social_index->csr_letter_show == true)
    <div id="letter-content" class="social-content">
        <img src="{{ asset('public/upload/template/'.$social_letter->social_letter_img) }}" alt="">
    </div>
    @endif --}}

    <!--End transfered to why us-->


    @if($social_index->csr_social_show == true)
    <div id="social-content" class="social-content">
        <div id="social-slide" class=" owl-carousel owl-theme">

            @foreach ($social_activity as $item)
                <div class="social-item item">
                    <img src="{{ asset('public/upload/image/'.$item->img_src) }}" alt="">
                    <h4>
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
                    </h4>
                </div>
            @endforeach
            
        </div>
    </div>
    @endif

</section>