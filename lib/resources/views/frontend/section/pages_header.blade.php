<style>
    .news-link{
        color: rgb(90, 90, 90);
        text-align: left;
        /* width: 100%; */
    }
    .news-link:hover{
        color: #000;
        text-decoration: none;
    }
</style>
<header id="main-header" class="container-fluid">
    <div class="top-menu">
        <div class="menu-top-left">
            <span class="slogan-top-line">
                @lang('messages.slogan_topline')<br/>
            </span>
            <span class="slogan-bot-line">
                @lang('messages.slogan_botline')
            </span>
        </div>
        <div class="menu-top-right">
            <div class="corp-code">
                <span class="corp">
                    @lang('messages.corp_code'):<br/>
                </span>
                <span class="code">
                    UPG
                </span>
            </div>
            <div class="news-list">
                <span class="news-title">
                    On The News:<br/>
                </span>


                <div id="news-highlight" class="swiper newsSwiper">
                    <div id="news-swiper-inside" class="swiper-wrapper">
                        @foreach ($news_list as $news_item)
                            <div class="news-item swiper-slide">
                                <a class="news-link" href="{{ asset('news/'.$news_item->blog_id) }}">
                                @switch( Config::get('app.locale') )
                                    @case('vi')
                                        {{ str_limit($news_item->blog_ten_vi, 60) }}
                                        @break
                                    @case('en')
                                        {{ str_limit($news_item->blog_ten_en, 60) }}
                                        @break
                                    @case('zh')
                                        {{ str_limit($news_item->blog_ten_zh, 60) }}
                                        @break
                                    @case('ja')
                                        {{ str_limit($news_item->blog_ten_ja, 60) }}
                                        @break
                                    @case('kr')
                                        {{ str_limit($news_item->blog_ten_kr, 60) }}
                                        @break
                                @endswitch  
                                </a> 
                            </div>
                            
                        @endforeach

                    </div>
                    <div id="news-swiper-dot" class="swiper-pagination" style="opacity: 0;"></div>
                </div>


            </div>
        </div>
    </div>




    <div class="bot-menu">
        <div class="menu-item">
            <div class="main-menu-item active-bot-menu" >
                {{-- <a style="color: #000; text-decoration: none;" href="{{ route('index') }}">
                    Home
                </a> --}}
                
            </div>
        </div>
        <div class="menu-item">
            <div class="main-menu-item" >
                {{-- <a style="color: #000; text-decoration: none;" href="{{ route('index') }}">
                    @lang('messages.menu_why_us')
                </a> --}}
                
            </div>
            
        </div>
        <div class="menu-item">
            <div class="main-menu-item" >
                {{-- <a style="color: #000; text-decoration: none;" href="{{ route('index') }}">
                    @lang('messages.menu_services')
                </a> --}}
                
            </div>
            
        </div>
        <div class="menu-item">
            <div class="main-menu-logo"  style="color: #bd7e2a;">
                <div class="main-logo">
                    <a style="color: #000; text-decoration: none;" href="{{ route('index') }}">
                        <img src="{{ asset('public/upload/info/logo-main.png') }}" alt="">
                    </a>
                    
                </div>
                Uc Phat Global
            </div>
            
        </div>
        <div class="menu-item">
            <div class="main-menu-item" >
                {{-- <a style="color: #000; text-decoration: none;" href="{{ route('index') }}">
                    @lang('messages.menu_projects')
                </a> --}}
                
            </div>
            
        </div>
        <div class="menu-item">
            <div class="main-menu-item"  >
                {{-- <a style="color: #000; text-decoration: none;" href="{{ route('index') }}">
                    @lang('messages.menu_contact_us')
                </a> --}}
                
            </div>
        </div>
        

        <div class="menu-item lang-index-menu">
            {{-- Languages
            <div class="lang-index-list">
                <div class="lang-index-item"><a href="{!! route('user.change-language', ['vi']) !!}" >Tiếng Việt</a></div>
                <div class="lang-index-item"><a href="{!! route('user.change-language', ['en']) !!}" >English</a></div>
                <div class="lang-index-item"><a href="{!! route('user.change-language', ['zh']) !!}">中 文</a></div>
                <div class="lang-index-item"><a href="{!! route('user.change-language', ['ja']) !!}">日 本 語</a></div>
                <div class="lang-index-item"><a href="{!! route('user.change-language', ['kr']) !!}">한국어</a></div>
            </div> --}}
        </div>

    </div>
</header>