<style>
    .plus-icon{
        position: absolute;
        top: 51px;
    }
</style>

<section id="why-us" class="container g-pt-100 g-pb-100">
    <!--Why us title-->
    <div class="text-center g-mb-40">
        <div class="text-uppercase g-brd-primary">
            <h3 class="h3 g-letter-spacing-5 g-font-size-24 g-font-weight-400 g-color-primary g-mb-25">@lang('messages.whyus_title')</h3>
    
            <p>
                @switch( Config::get('app.locale') )
                    @case('vi')
                        {!! $whyus_intro->whyus_intro_vi !!}
                        @break
                    @case('en')
                        {!! $whyus_intro->whyus_intro_en !!}
                        @break
                    @case('zh')
                        {!! $whyus_intro->whyus_intro_zh !!}
                        @break
                    @case('ja')
                        {!! $whyus_intro->whyus_intro_ja !!}
                        @break
                    @case('kr')
                        {!! $whyus_intro->whyus_intro_kr !!}
                        @break
                @endswitch
            </p>
            <br />
        </div>
    </div>

    <!--Why us tab heading-->
    <div id="why-us-heading" class="row">
        @if($whyus_intro->whyus_timeline_show == true)
            <div id="timeline-header" class="why-us-header">@lang('messages.whyus_head_company_timeline')</div>
        @endif
        
        @if($whyus_intro->whyus_process_show == true)
        <div id="process-header" class="why-us-header">@lang('messages.whyus_head_process')</div>
        @endif

        @if($whyus_intro->whyus_tech_show == true)
        <div id="tech-header" class="why-us-header ">@lang('messages.whyus_head_technology')</div>
        @endif

        @if($whyus_intro->whyus_profile_show == true)
        <div id="profile-header" class="why-us-header ">@lang('messages.whyus_head_profile')</div>
        @endif

        <!--CSR transfer-->
        @if($social_index->csr_certificate_show == true)
        <div id="certificate-header" class="why-us-header ">@lang('messages.social_tab_1_heading')</div>
        @endif

        @if($social_index->csr_letter_show == true)
        <div id="thanks-letter-header" class="why-us-header ">@lang('messages.social_tab_2_heading')</div>
        @endif
        <!--End CSR transfer-->

        @if($whyus_intro->whyus_cust_show == true)
        <div id="cust-header" class="why-us-header ">@lang('messages.whyus_head_cust')</div>
        @endif

    </div>

    <!--Why us intro text-->
    @if($whyus_intro->whyus_timeline_show == true)
    <div id="timeline-content" class="why-us-content ">
        <img class="timeline-img" src="{{ asset('public/upload/template/'.$whyus_company_timeline->whyus_timeline_pc) }}" alt="">
        <img class="timeline-img-mb" src="{{ asset('public/upload/template/'.$whyus_company_timeline->whyus_timeline_mobile) }}" alt="">
                    
                <div id="number-company-list" class="row">
                    @foreach ($numbers_icon as $item)
                        <div class="row number-item">
                            <img src="{{ asset('public/upload/image/'.$item->img_src) }}" style=""/>
                            <p class="number timeline-counter g-font-size-35">{{ $item->img_number }} @if($item->img_plus_icon == true) <span class="plus-icon">+</span> @endif</p>
                            <p class="title-number">
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
    </div>
    @endif

    <!--Process-->
    @if($whyus_intro->whyus_process_show == true)
    <div id="process-content" class="why-us-content">

        <!--Process thumbail-->
        <div id="process-thumb-cover" class="row">

            @foreach ($prcess_thumb as $key => $item)
                <div id="process-step-{{ $key+1 }}" class="col-lg-3 col-md-3 col-sm-6 text-center process-thumnail">
                    <img src="{{ asset('public/upload/template/'.$item->whyus_process_thumb) }}" alt="">
                    <h4><strong>@lang('messages.whyus_process_step') {{ $key+1 }}:</strong> 
                        @switch( Config::get('app.locale') )
                            @case('vi')
                                {{ $item->whyus_process_title_vi }}
                                @break
                            @case('en')
                                {{ $item->whyus_process_title_en }}
                                @break
                            @case('zh')
                                {{ $item->whyus_process_title_zh }}
                                @break
                            @case('ja')
                                {{ $item->whyus_process_title_ja }}
                                @break
                            @case('kr')
                                {{ $item->whyus_process_title_kr }}
                                @break
                        @endswitch
                    </h4>
                </div>
            @endforeach

        </div>

        <!--Process detail-->
        @foreach ($prcess_thumb as $key=>$process_thumb)

            <div id="step-{{$key+1}}-detail" class="process-step-detail hide">
                <h4>
                    {{-- <span class="process-step-back-btn"><i class="fa fa-2x fa-backward"></i></span>  --}}
                    <span class="process-step-title-name"><strong>@lang('messages.whyus_process_step') {{$key+1}}:</strong> 
                        @switch( Config::get('app.locale') )
                            @case('vi')
                                {{ $process_thumb->whyus_process_title_vi }}
                                @break
                            @case('en')
                                {{ $process_thumb->whyus_process_title_en }}
                                @break
                            @case('zh')
                                {{ $process_thumb->whyus_process_title_zh }}
                                @break
                            @case('ja')
                                {{ $process_thumb->whyus_process_title_ja }}
                                @break
                            @case('kr')
                                {{ $process_thumb->whyus_process_title_kr }}
                                @break
                        @endswitch
                    </span>
                </h4>
                <div id="slide-step-{{$key+1}}" class="owl-carousel owl-theme process-steps">
                    @foreach ($prcess_slide_item as $process_slide_item)
                        @if( $process_slide_item->img_process_id ==  $process_thumb->whyus_process_id )
                            <div class="item">
                            <img src="{{ asset('public/upload/process/'.$process_slide_item->img_src) }}" alt="">
                            </div>
                        @endif
                    @endforeach
                
                </div>
            </div>
        @endforeach

        
    </div>
    @endif

    <div id="blur-cover-process"></div>


    <!--Technology-->
    @if($whyus_intro->whyus_tech_show == true)
    <div id="technology-content-cover" class="why-us-content ">
        <div id="technology-info" class="row">
            <img class="tech-photo-info" src="{{ asset('public/upload/template/'.$whyus_tech_thumb->whyus_tech_img_left) }}" alt="">
            <img class="tech-photo-info" src="{{ asset('public/upload/template/'.$whyus_tech_thumb->whyus_tech_img_right) }}" alt="">
        </div>
        <div id="technology-content-slide" class=" owl-carousel owl-theme">

            @foreach ($tech_slide_item as $item)
                <div class="item" >
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
    


    <!--Company profile-->
    @if($whyus_intro->whyus_profile_show == true)
    <div id="profile-content" class="why-us-content container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 profile-colum">
                <img src="{{ asset('public/upload/template/'.$whyus_profile_img->whyus_profile_img) }}" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 profile-colum">
                <table id="profile-table" class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col-4">@lang('messages.whyus_profile_doc_title')</th>
                            <th scope="col-2">@lang('messages.whyus_profile_doc_category')</th>
                            <th scope="col-4">@lang('messages.whyus_profile_doc_time')</th>
                            <th scope="col-2" class="center-align">@lang('messages.whyus_profile_doc_download')</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($whyus_profile_doc_list as $item)
                            <tr>
                                <th scope="row">
                                    @switch( Config::get('app.locale') )
                                        @case('vi')
                                            {{ $item->event_ten_vi }}
                                            @break
                                        @case('en')
                                            {{ $item->event_ten_en }}
                                            @break
                                        @case('zh')
                                            {{ $item->event_ten_zh }}
                                            @break
                                        @case('ja')
                                            {{ $item->event_ten_ja }}
                                            @break
                                        @case('kr')
                                            {{ $item->event_ten_kr }}
                                            @break
                                    @endswitch
                                </th>
                                <td>
                                    @if($item->event_category == 'doc' )
                                        Document
                                    @else
                                        Video
                                    @endif
                                </td>
                                <td>{{ \Carbon\Carbon::parse($item->updated_at)->format('d M Y')}}</td>
                                <td class="download-btn center-align"><a href="{{ $item->event_link }}">@lang('messages.whyus_profile_doc_download_btn')</a></td>
                            </tr>
                        @endforeach

                     
                    </tbody>
                </table>
            </div>
        </div>

         
    </div>
    @endif
    

    <!--Certificate-->
    @if($social_index->csr_certificate_show == true)
    <div id="certificate-content" class="why-us-content">
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
    @endif

    <!--Thanks letter-->
    @if($social_index->csr_letter_show == true)
    <div id="letter-content" class="why-us-content">
        <img src="{{ asset('public/upload/template/'.$social_letter->social_letter_img) }}" alt="">
    </div>
    @endif


    <!--Customer & partners-->
    @if($whyus_intro->whyus_cust_show == true)
    <div id="customer-content-cover" class="why-us-content">
        <div id="customer-content" >
            <!--Customer logo-->
            @foreach ($customer_list as $item)
                <img src="{{ asset('public/upload/image/'.$item->img_src) }}" alt="">
            @endforeach
            
            <!--Company member-->
            <div class="row">
                @foreach ($company_member_list as $item)
                    <img src="{{ asset('public/upload/image/'.$item->img_src) }}" alt="">
                @endforeach
            </div>
        </div>
    </div>
    @endif


</section>