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
                
                <style>
                    .news-zone-tiltle{
                        font-size: 18px;
                        text-transform: capitalize;
                        font-weight: bold;
                        font-family: 'Nunito', sans-serif;
                        color: #bd7e2a;
                        font-style: italic;
                        letter-spacing: 1px;
                    }
                    .news-zone-list{
                        height: 6vh;
                        padding: 5px 0;
                    }
                    .news-item-index{
                        height: 3vh;
                        color: rgb(90, 90, 90);
                        font-family: 'Oswald', sans-serif;
                        font-style: italic;
                        color: #9b9898;
                        font-size: 15px;
                        text-decoration: none;
                        width: 100%;
                    }
                    .news-item-index:hover{
                        color: #000;
                        text-decoration: none;
                    }
                </style>
                <div class="news-zone-tiltle">
                    On The News
                </div>

                <div class="news-zone-list swiper news-zone-index">
                    <div class="swiper-wrapper">


                        @foreach ($news_list->chunk(2) as $two)
                        <div class="swiper-slide news-fix-css" style="">
                            <p>
                                @foreach($two as $news_item)
                                <a class="news-item-index" href="{{ asset('news/'.$news_item->blog_id) }}">
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
                    <div class="swiper-pagination" style="display: none;"></div>
                </div>
                


            </div>
        </div>
    </div>




    <div class="bot-menu">
        <div class="menu-item">
            <div class="main-menu-item active-bot-menu" aria-label="Go to slide 1" href="">
                Home
            </div>
        </div>
        <div class="menu-item">
            <div class="main-menu-item" aria-label="Go to slide 2" href="">
                @lang('messages.menu_why_us')
            </div>
            
        </div>
        <div class="menu-item">
            <div class="main-menu-item" aria-label="Go to slide 3" href="">
                @lang('messages.menu_services')
            </div>
            
        </div>
        <div class="menu-item">
            <div class="main-menu-logo" aria-label="Go to slide 1" href="" style="color: #bd7e2a;">
                <div class="main-logo">
                    <img src="{{ asset('public/upload/info/logo-main.png') }}" alt="">
                </div>
                Uc Phat Global
            </div>
            
        </div>
        <div class="menu-item">
            <div class="main-menu-item" aria-label="Go to slide 4" href="">
                @lang('messages.menu_projects')
            </div>
            
        </div>
        <div class="menu-item">
            <div class="main-menu-item"  aria-label="Go to slide5" href="">
                @lang('messages.menu_contact_us')
            </div>
        </div>
        

        <div class="menu-item lang-index-menu">
            Languages
            <div class="lang-index-list">
                <div class="lang-index-item"><a href="{!! route('user.change-language', ['vi']) !!}" >Tiếng Việt</a></div>
                <div class="lang-index-item"><a href="{!! route('user.change-language', ['en']) !!}" >English</a></div>
                <div class="lang-index-item"><a href="{!! route('user.change-language', ['zh']) !!}">中 文</a></div>
                <div class="lang-index-item"><a href="{!! route('user.change-language', ['ja']) !!}">日 本 語</a></div>
                <div class="lang-index-item"><a href="{!! route('user.change-language', ['kr']) !!}">한국어</a></div>
            </div>
        </div>

    </div>
</header>