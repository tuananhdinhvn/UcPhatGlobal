<section id="service" class="g-pt-100 g-pb-100--md">
    <div class="container text-center g-mb-70-md">
        <div class="text-uppercase g-brd-primary">
            <h3 class="h3 g-letter-spacing-5 g-font-size-24 g-font-weight-400 g-color-primary g-mb-25"><span id="service-section-title" style="cursor: pointer;">@lang('messages.service_title')</span></h3>
            <p class="col-lg-8 text-center" style="margin: auto; color: #7c7c7c;"></p>
    
            <p>
                @switch( Config::get('app.locale') )
                    @case('vi')
                        {!! $service_index->service_intro_vi !!}
                        @break
                    @case('en')
                        {!! $service_index->service_intro_en !!}
                        @break
                    @case('zh')
                        {!! $service_index->service_intro_zh !!}
                        @break
                    @case('ja')
                        {!! $service_index->service_intro_ja !!}
                        @break
                    @case('kr')
                        {!! $service_index->service_intro_kr !!}
                        @break
                @endswitch    
            </p>
            <br />
        </div>
    </div>

    
    <div id="service-thumb" class="container service-cover row">
        <div id="service-design-thumb" class="col-lg-3 col-md-6 col-sm-12 service-box" rel="design-tab-content">
            <img class="service-bg" src="{{ asset('public/upload/template/service-bg-1.jpg') }}" alt="">
            <div class="service-blackblur-cover"></div>
            <div class="service-content">
                <img src="{{ asset('public/upload/template/service-icon-1.PNG') }}" alt="">
                <h3>
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
                </h3>
                <P>
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
                </P>
            </div>
        </div>
        <div id="service-management-thumb" class="col-lg-3 col-md-6 col-sm-12 service-box" rel="management-tab-content">
            <img class="service-bg" src="{{ asset('public/upload/template/service-bg-2.jpg') }}" alt="">
            <div class="service-blackblur-cover"></div>
            <div class="service-content">
                <img src="{{ asset('public/upload/template/service-icon-2.PNG') }}" alt="">
                <h3>
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
                </h3>
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
        </div>
        <div id="service-construction-thumb" class="col-lg-3 col-md-6 col-sm-12 service-box" rel="construction-tab-content">
            <img class="service-bg" src="{{ asset('public/upload/template/service-bg-3.jpg') }}" alt="">
            <div class="service-blackblur-cover"></div>
            <div class="service-content">
                <img src="{{ asset('public/upload/template/service-icon-3.PNG') }}" alt="">
                <h3>
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
                </h3>
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
        </div>
        <div id="service-development-thumb" class="col-lg-3 col-md-6 col-sm-12 service-box" rel="development-tab-content">
            <img class="service-bg" src="{{ asset('public/upload/template/service-bg-4.jpg') }}" alt="">
            <div class="service-blackblur-cover"></div>
            <div class="service-content">
                <img src="{{ asset('public/upload/template/service-icon-4.PNG') }}" alt="">
                <h3>
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
                </h3>
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
        </div>
    </div>

    <div id="service-content-detail" class="container service-detail-cover hide">
        <div id="service-content-detail-inside" class="service-detail">

            <!--Service detail tab heading-->
            <div class="row service-detail-tab-heading" style="position: relative">
                <div rel="design-tab-content" class="service-design-tab-heading col-md-3 service-detail-tab-heading-item service-detail-tab-heading-item-active row">
                    <img src="{{ asset('public/upload/template/service-icon-1.PNG') }}" alt="">
                    <h3>
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
                    </h3>
                </div>

                <div rel="management-tab-content" class="service-management-tab-heading col-md-3 service-detail-tab-heading-item row">
                    <img src="{{ asset('public/upload/template/service-icon-2.PNG') }}" alt="">
                    <h3>
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
                    </h3>
                </div>

                <div rel="construction-tab-content" class="service-construction-tab-heading col-md-3 service-detail-tab-heading-item row">
                    <img src="{{ asset('public/upload/template/service-icon-3.PNG') }}" alt="">
                    <h3>
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
                    </h3>
                </div>

                <div rel="development-tab-content" class="service-development-tab-heading col-md-3 service-detail-tab-heading-item row">
                    <img src="{{ asset('public/upload/template/service-icon-4.PNG') }}" alt="">
                    <h3>
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
                    </h3>
                </div>

                
                
            </div>

            <!--Design tab content-->
            <div class="service-show-content design-tab-content hide">
                <div class="service-detail-content row">
                    <p class="col-lg-7 col-md-7 col-sm-12">
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
                    <p class="col-lg-5 col-md-5 col-sm-12">
                        <img    src="{{ asset('public/upload/service/'.$service_index->service_img_info_1) }}" 
                                alt="">
                        
                    </p>
                </div>
                <div id="service-design-slide" class="service-detail-slide owl-carousel owl-theme">

                    @foreach ($service_design_slide as $item)
                        <div class="item text-center">
                            <img src="{{ asset('public/upload/service/'.$item->img_src) }}" alt="">
                            <h3 style="color: #fff; margin: 0; width: 100%;">
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
                            </h3>
                        </div>
                    @endforeach
                   
                </div>
            </div>

            <!--Management tab content-->
            <div class="service-show-content management-tab-content hide">
                <div class="service-detail-content row">
                    <p class="col-lg-7 col-md-7 col-sm-12">
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
                    <p class="col-lg-5 col-md-5 col-sm-12">
                        <img    src="{{ asset('public/upload/service/'.$service_index->service_img_info_2) }}" 
                                alt="">
                    </p>
                </div>
                <div id="service-management-slide" class="service-detail-slide owl-carousel owl-theme">
                    @foreach ($service_manage_slide as $item)
                        <div class="item text-center">
                            <img src="{{ asset('public/upload/service/'.$item->img_src) }}" alt="">
                            <h3 style="color: #fff; margin: 0; width: 100%;">
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
                            </h3>
                        </div>
                    @endforeach
                </div>
            </div>

            <!--construction tab content-->
            <div class="service-show-content construction-tab-content hide">
                <div class="service-detail-content row">
                    <p class="col-lg-7 col-md-7 col-sm-12">
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
                    <p class="col-lg-5 col-md-5 col-sm-12">
                        <img    src="{{ asset('public/upload/service/'.$service_index->service_img_info_3) }}" 
                                alt="">
                    </p>
                    
                </div>
                <div id="service-construction-slide" class="service-detail-slide owl-carousel owl-theme">
                    @foreach ($service_construction_slide as $item)
                        <div class="item text-center">
                            <img src="{{ asset('public/upload/service/'.$item->img_src) }}" alt="">
                            <h3 style="color: #fff; margin: 0; width: 100%;">
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
                            </h3>
                        </div>
                    @endforeach
                </div>
            </div>

            <!--development tab content-->
            <div class="service-show-content development-tab-content hide">
                <div class="service-detail-content row">
                    <p class="col-lg-7 col-md-7 col-sm-12">
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
                    <p class="col-lg-5 col-md-5 col-sm-12">
                        <img    src="{{ asset('public/upload/service/'.$service_index->service_img_info_4) }}" 
                                alt="">
                    </p>
                </div>
                <div id="service-development-slide" class="service-detail-slide owl-carousel owl-theme">
                    @foreach ($service_develop_slide as $item)
                        <div class="item text-center">
                            <img src="{{ asset('public/upload/service/'.$item->img_src) }}" alt="">
                            <h3 style="color: #fff; margin: 0; width: 100%;">
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
                            </h3>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- <div id="service-blur-cover"></div> --}}
    
    </div>
    

    <br />
</section>  
