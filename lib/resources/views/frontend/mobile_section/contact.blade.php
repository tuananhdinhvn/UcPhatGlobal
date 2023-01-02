<section id="contact-mobile">
    <div class="section-title">Contact us</div>    

    <div class="contact-main-content">
        <div class="contact-info">
            <h2 class="contact-highlight">
                <span class="icon-before">//</span> 
                Head Office:
            </h2>
            <div class="contact-main-info">
                <div class="contact-info-block">
                    <label><i class="fa fa-home"></i>Address:</label>
                    <div class="contact-info-content">
                        @switch( Config::get('app.locale') )
                            @case('vi')
                                {{ $setting_info[0]->st_diachi_vi }}
                                @break
                            @case('en')
                                {{ $setting_info[0]->st_diachi_en }}
                                @break
                            @case('zh')
                                {{ $setting_info[0]->st_diachi_zh }}
                                @break
                            @case('ja')
                                {{ $setting_info[0]->st_diachi_ja }}
                                @break
                            @case('kr')
                                {{ $setting_info[0]->st_diachi_kr }}
                                @break
                        @endswitch
                    </div>
                </div>
                <div class="contact-info-block">
                    <label><i class="fa fa-phone"></i>Phone:</label>
                    <div class="contact-info-content">
                        @switch( Config::get('app.locale') )
                            @case('vi')
                            @case('en')
                            @case('zh')
                            @case('ja')
                                {{ $setting_info[0]->st_hotline }} 
                                @break
                            @case('kr')
                                {{ $setting_info[0]->st_hotline }} 
                                @break
                        @endswitch
                    </div>
                </div>
                <div class="contact-info-block">
                    <label><i class="fa fa-envelope"></i>Email:</label>
                    <div class="contact-info-content">
                        @switch( Config::get('app.locale') )
                            @case('vi')
                            @case('en')
                            @case('zh')
                            @case('ja')
                                {{ $setting_info[0]->st_email }}
                                @break
                            @case('kr')
                                contact.kr@minhglobal.com
                                @break
                        @endswitch
                    </div>
                </div>
            </div>

        </div>
        <div class="contact-form">

        </div>
    </div>


    <div class="contact-main-content">
        <div class="contact-info">
            <h2 class="contact-highlight">
                <span class="icon-before">//</span> 
                Send us:
            </h2>
            <div class="contact-mobile-form">
                <form action="" style="">
                    <div class="form-item">
                        <label for="cust_ten">@lang('messages.contact_label_name'):</label>
                        <input type="text" name="cust_ten" placeholder="@lang('messages.contact_placeholder_name')">
                    </div>
                    <div class="form-item">
                        <label for="cust_phone">@lang('messages.contact_label_phone'):</label>
                        <input type="text" name="cust_phone" placeholder="@lang('messages.contact_placeholder_phone')">
                    </div>
                    <div class="form-item">
                        <label for="cust_email">@lang('messages.contact_label_email'):</label>
                        <input type="text" name="cust_email" placeholder="@lang('messages.contact_placeholder_email')">
                    </div>
                    <div class="form-item">
                        <label for="cust_noidung">@lang('messages.contact_label_message'):</label>
                        <textarea name="cust_noidung" placeholder="@lang('messages.contact_placeholder_message')" cols="" rows="5"></textarea>
                    </div>
                    <div class="form-item">
                        <input class="submit-contact-btn" type="submit" value="@lang('messages.contact_submit_btn')">
                    </div>
                </form>
            </div>
            

        </div>
        <div class="contact-form">

        </div>
    </div>


</section>