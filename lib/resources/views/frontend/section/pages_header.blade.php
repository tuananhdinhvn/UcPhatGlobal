<style>
    .news-header-wrap{
        height: 6vh;
    }
    .news-link{
        color: rgb(90, 90, 90);
        text-align: left;
        /* width: 100%; */
    }
    .news-link:hover{
        color: #000;
        text-decoration: none;
    }
    .swipe-news-item{
        height: 100%;
    }
    .swipe-news-item p{

    }
    .news-link{
        height: 3vh;
        font-family: 'Oswald', sans-serif;
        font-style: italic;
        color: #9b9898;
    }
    .news-link:hover{
        color: #000;
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

                <div class="swiper newsSwiper" style="padding-top: 5px;">
                    <div class="news-header-wrap swiper-wrapper">
                        @foreach ($news_list->chunk(2) as $two)
                        <div class="swipe-news-item swiper-slide">
                            <p>
                                 @foreach($two as $news_item)
                                <a class="news-link" href="{{ asset('news/'.$news_item->blog_id) }}">
                                    @switch( Config::get('app.locale') )
                                        @case('vi')
                                            {{ str_limit($news_item->blog_ten_vi, 50) }}
                                            @break
                                        @case('en')
                                            {{ str_limit($news_item->blog_ten_en, 50) }}
                                            @break
                                        @case('zh')
                                            {{ str_limit($news_item->blog_ten_zh, 50) }}
                                            @break
                                        @case('ja')
                                            {{ str_limit($news_item->blog_ten_ja, 50) }}
                                            @break
                                        @case('kr')
                                            {{ str_limit($news_item->blog_ten_kr, 50) }}
                                            @break
                                    @endswitch  
                                </a><br/>
                                @endforeach
                            </p>
                        </div>
                        @endforeach
                    </div>
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