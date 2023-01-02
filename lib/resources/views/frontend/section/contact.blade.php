<div class="swiper-slide contact-section">
    <div class="contact-box-left">
        <div class="contact-title">
            <h2>
                <span>// </span> Head Office:
            </h2> 
        </div>
        <div class="contact-line">
            <div class="contact-label">
                <i class="fa fa-map-marker" style=""></i> 
            </div>
            <div class="contact-header">Address: </div>
            <div class="contact-detail">
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

            

            <div class="contact-label">
                <i class="fa fa-phone" style=""></i> 
            </div>
            <div class="contact-header">Phone: </div>
            <div class="contact-detail">
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

            <div class="contact-label">
                <i class="fa fa-envelope" style=""></i> 
            </div>
            <div class="contact-header">Email: </div>
            <div class="contact-detail">
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

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3021971048356!2d106.6949471153208!3d10.788150861925883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3521078af5%3A0x10a2df92c620eeae!2zMTQwIMSQLiBOZ3V54buFbiBWxINuIFRo4bunLCDEkGEgS2FvLCBRdeG6rW4gMSwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1669276700248!5m2!1sen!2s" 
                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" 
                style="position: relative; bottom: -10px;"></iframe>
    </div>


    <div class="contact-box-right">
        <div class="contact-title">
            <h2>
                <span>>> </span> Send Us:
            </h2> 
        </div>
        
        <form action="save-data" id="contact-form" class="contact-main-form" class="g-mb-30" accept-charset="UTF-8" method="POST">
            <div class="contact-form-row">
                <label for="cust_ten">@lang('messages.contact_label_name'):</label>
                <input type="text" name="cust_ten" placeholder="@lang('messages.contact_placeholder_name')">
            </div>
            <div class="contact-form-row">
                <label for="cust_phone">@lang('messages.contact_label_phone'):</label>
                <input type="text" name="cust_phone" placeholder="@lang('messages.contact_placeholder_phone')">
            </div>
            <div class="contact-form-row">
                <label for="cust_email">@lang('messages.contact_label_email'):</label>
                <input type="text" name="cust_email" placeholder="@lang('messages.contact_placeholder_email')">
            </div>
            <div class="contact-form-row">
                <label for="cust_noidung">@lang('messages.contact_label_message'):</label>
                <textarea name="cust_noidung" placeholder="@lang('messages.contact_placeholder_message')" cols="30" rows="5"></textarea>
            </div>
            <div class="contact-form-row">
                <div class="contact-form-submit">
                    <input class="submit-contact-btn" type="submit" value="@lang('messages.contact_submit_btn')">
                </div>
            </div>


        </form>

    </div>


    <footer id="footer">
        <div class="footer-logo">
            <img class="footer-logo-img" src="{{ asset('public/upload/info/logo-main.png') }}" alt="">
        </div>
        <div class="social-footer">
            <i class="fa fa-facebook" style=""></i> 
            <i class="fa fa-youtube" style=""></i> 
        </div>
    </footer>

</div>