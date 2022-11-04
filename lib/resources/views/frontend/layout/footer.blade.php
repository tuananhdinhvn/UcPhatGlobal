
<footer style="padding-top: 5.71429rem !important;">
    <div id="contact" class="g-mb-20">
        <div class="container text-center g-max-width-750 g-mb-70">
            <div class="text-uppercase g-brd-primary">
                <h3 class="h3 g-letter-spacing-5 g-font-size-24 g-font-weight-400 g-color-primary g-mb-25">@lang('messages.contact_title')</h3>
                <p></p>
            </div>
        </div>

        <div class="container-fluid row">
            <div class="col-md-9 col-sm-12">
                <form action="save-data" class="g-pa-30 g-mb-30" accept-charset="UTF-8" method="POST">
                   
                    <div class="form-group row g-mb-25">
                        <label for="example-text-input" class="col-lg-2 col-sm-12 col-form-label"><strong>@lang('messages.contact_label_name'):</strong> </label>
                        <div class="col-lg-10 col-sm-12">
                            <input class="form-control rounded-0 form-control-md" placeholder="@lang('messages.contact_placeholder_name')" type="text" name="cust_ten" id="contact_name" />
                        </div>
                    </div>
                    <div class="form-group row g-mb-25">
                        <label for="example-text-input" class="col-lg-2 col-sm-12 col-form-label"><strong>@lang('messages.contact_label_phone'):</strong></label>
                        <div class="col-lg-10 col-sm-12">
                            <input class="form-control rounded-0 form-control-md" placeholder="@lang('messages.contact_placeholder_phone')" type="text" name="cust_phone" id="contact_phone" />
                        </div>
                    </div>
                    <div class="form-group row g-mb-25">
                        <label for="example-text-input" class="col-lg-2 col-sm-12 col-form-label"><strong>@lang('messages.contact_label_email'):</strong></label>
                        <div class="col-lg-10 col-sm-12">
                            <input class="form-control rounded-0 form-control-md" placeholder="@lang('messages.contact_placeholder_email')1" type="text" name="cust_email" id="contact_email" />
                        </div>
                    </div>
                    {{-- <div class="form-group row g-mb-25">
                        <label for="example-text-input" class="col-2 col-form-label">@lang('messages.contact_label_subject'):</label>
                        <div class="col-10">
                            <input class="form-control rounded-0 form-control-md" placeholder="@lang('messages.contact_placeholder_subject')" type="text" name="contact[subject]" id="contact_subject" />
                        </div>
                    </div> --}}
                    <div class="form-group row g-mb-25">
                        <label for="example-text-input" class="col-lg-2 col-sm-12 col-form-label"><strong>@lang('messages.contact_label_message'):</strong></label>
                        <div class="col-lg-10 col-sm-12">
                            <textarea class="form-control rounded-0 form-control-md" placeholder="@lang('messages.contact_placeholder_message')" name="cust_noidung" id="contact_message" rows="7"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" style="border: 1px solid;" name="commit" value="@lang('messages.contact_submit_btn')" class="btn u-btn-primary btn-md text-uppercase g-line-height-1 g-font-weight-700 g-font-size-11 rounded-0 g-py-12 g-px-25 mb-0" data-disable-with="Submit" />
                    </div>

                    {{ csrf_field() }}
                </form>
            </div>

            <div class="col-md-3 col-sm-12 text-center">
                <div class="col-sm-4 col-md-12 g-mb-30">
                    <i class="fa fa-2x fa-map-marker" style="color: #c94645;"></i>
                    <h3 class="text-uppercase g-font-size-12 g-color-gray-dark-v5 g-font-weight-400 g-mb-5">@lang('messages.contact_address')</h3>
                    <strong class="g-font-size-14 g-color-black">
                        @switch( Config::get('app.locale') )
                            @case('vi')
                                {{ $setting_info[0]->st_diachi_vi }}11
                                @break
                            @case('en')
                                {{ $setting_info[0]->st_diachi_en }}22
                                @break
                            @case('zh')
                                {{ $setting_info[0]->st_diachi_zh }}
                                @break
                            @case('ja')
                                {{ $setting_info[0]->st_diachi_ja }}
                                @break
                        @endswitch
                    </strong>
                </div>
                <div class="col-sm-4 col-md-12 g-mb-30">
                    <i class="fa fa-2x fa-phone" style="color: #c94645;"></i>
                    <h3 class="text-uppercase g-font-size-12 g-color-gray-dark-v5 g-font-weight-400g-mb-5">@lang('messages.contact_phone_number')</h3>
                    <strong class="g-font-size-14 g-color-black">
                        {{ $setting_info[0]->st_hotline }}
                    </strong>
                </div>

                <div class="col-sm-4 col-md-12">
                    <i class="fa fa-2x fa-envelope" style="color: #c94645;"></i>
                    <h3 class="text-uppercase g-font-size-12 g-color-gray-dark-v5 g-font-weight-400 g-mb-5">@lang('messages.contact_email')</h3>
                    <a class="g-color-black g-color-black--hover" href="mailto:{{ $setting_info[0]->st_email }}"><strong class="g-font-size-14">{{ $setting_info[0]->st_email }}</strong></a>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid">
        <div class="">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.306455533199!2d106.69488274110017!3d10.787824146104528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3521078af5%3A0x10a2df92c620eeae!2zMTQwIMSQxrDhu51uZyBOZ3V54buFbiBWxINuIFRo4bunLCDEkGEgS2FvLCBRdeG6rW4gMSwgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1594794031799!5m2!1sen!2s" 
                    width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>

    <div class="text-center g-color-gray-dark-v5 g-theme-bg-blue-dark-v1 g-py-70 ">
        <a class="d-block g-width-140 mx-auto g-mb-30" href="">
            <img class="img-fluid" alt="{{ $setting_info[0]->st_tencongty }}" src="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" />
        </a>

        <ul class="list-inline d-inline-block mb-0">
            <li class="list-inline-item g-mr-10">
                <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-theme-bg-blue-dark-v2 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" 
                    href="{{ $setting_info[0]->st_twitter }}">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item g-mr-10">
                <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-theme-bg-blue-dark-v2 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" 
                    href="{{ $setting_info[0]->st_pinterest }}">
                    <i class="fa fa-pinterest"></i>
                </a>
            </li>
            <li class="list-inline-item g-mr-10">
                <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-theme-bg-blue-dark-v2 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" 
                    href="{{ $setting_info[0]->st_fanpage }}">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-theme-bg-blue-dark-v2 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" 
                    href="{{ $setting_info[0]->st_insta }}">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-theme-bg-blue-dark-v2 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" 
                    href="{{ $setting_info[0]->st_linkedin }}">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
        </ul>
    </div>
	
	
</footer>

<p>Developed by <a href="https://tuananhdinh.vn/">TuanAnhDinh</a></p>
