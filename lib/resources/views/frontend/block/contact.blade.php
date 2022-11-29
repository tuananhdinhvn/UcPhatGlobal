<!-- Start Contact Section -->
<div id="contact-us"></div>
<h2 class="section-title" style="margin-top: 100px">@lang('messages.contact_title')</h2>
<div id="contact" class="section contact-section light-section" style="padding-top:20px; background:#fff; border-bottom: #111 1px;">

	<div class="container" style="margin-bottom: 20px;">
    	<div class="row">
        
            <!-- Info Box -->
        	<div class="col-xs-12 col-sm-4 col-md-4 map-info-box">
                <h3>Visit Our Office</h3>
                <div class="hr" style="margin-bottom:8px;"></div>
                <ul class="icons-list">
                    <li><strong>Adress:</strong> 
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
                    </li>
                    <li><strong>Phone:</strong> 
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
                    </li>
                    <li><strong>Email:</strong> 
                        <a href="@switch( Config::get('app.locale') )
                                    @case('vi')
                                    @case('en')
                                    @case('zh')
                                    @case('ja')
                                        {{ $setting_info[0]->st_email }}
                                        @break
                                    @case('kr')
                                        contact.kr@minhglobal.com
                                        @break
                                @endswitch" class="__cf_email__" >
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
                        </a>
                    </li>
                </ul>
                
                <div class="hr" style="margin-bottom:35px;"></div>
                
                <h3>Working Hours</h3>
                <div class="hr" style="margin-bottom:8px;"></div>
                <ul class="icons-list">
                    <li><strong>Monday - Friday</strong> - 9am to 5pm</li>
                    <li><strong>Saturday</strong> - 9am to 2pm</li>
                    <li><strong>Sunday</strong> - Closed</li>
                </ul>
            </div>
        
            <!-- Contact Form -->
        	<div class="col-xs-12 col-sm-8 col-md-8">
                <div id="contant-form-bx" class="contant-form-bx">
                	<div class="contact-loader"></div>
                    <form action="save-data" id="contact-form" class="contact-form" class="g-mb-30" accept-charset="UTF-8" method="POST">
                    	<div class="row">
                            <div class="col-md-6">  
                                <label for="name" id="name_label">@lang('messages.contact_label_name')</label>
                                <span class="name-missing">@lang('messages.contact_placeholder_name')</span>  
                                <input id="name" type="text" value="" name="cust_ten" size="30"> 
                            </div> 
                            <div class="col-md-6 columns"> 
                                <label for="e-mail" id="email_label">@lang('messages.contact_label_phone')</label>
                                <span class="email-missing">@lang('messages.contact_placeholder_phone')</span> 
                                <input id="e-mail" type="text" value="" name="cust_phone" size="30">
                            </div>
                            <div class="col-md-12"> 
                                <label for="message" id="phone_label">@lang('messages.contact_label_email')</label>
                                <span class="message-missing">@lang('messages.contact_placeholder_email')</span>
                                <input id="e-mail" type="email" value="" name="cust_email" cols="40">
                            </div>
                            <div class="col-md-12"> 
                                <label for="message" id="phone_label">@lang('messages.contact_label_message')</label>
                                <span class="message-missing">@lang('messages.contact_placeholder_message')</span>
                                <textarea id="message" name="cust_noidung" rows="7" cols="40"></textarea>
                            </div>
                            <div class="col-md-12 text-center"> 
                                <input type="submit" name="submit" class="button" id="submit_btn" value="@lang('messages.contact_submit_btn')">  
                            </div>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        
        </div>
        
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3021971048356!2d106.6949471153208!3d10.788150861925883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3521078af5%3A0x10a2df92c620eeae!2zMTQwIMSQLiBOZ3V54buFbiBWxINuIFRo4bunLCDEkGEgS2FvLCBRdeG6rW4gMSwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1669276700248!5m2!1sen!2s" 
    width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" 
    style="position: relative; bottom: -10px;"></iframe>

    
</div>
<!-- End Contact Section -->
