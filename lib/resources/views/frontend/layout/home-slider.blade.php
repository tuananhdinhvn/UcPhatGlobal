<section id="head-home">
    <div id="header-slide" class="owl-carousel owl-theme">
        @foreach ($slide_list as $item)
            <div class="slide-head-home item" style="background-image: url({{ asset('public/upload/image/'.$item->img_src) }})"></div>
        @endforeach
    </div>
    <div id="slogan">
        <h2 class="company-name">MINH GLOBAL</h2>
        @if( Config::get('app.locale') == 'vi' )
            @lang('messages.slide_title')
        @else
            <p class="slogan-1">@lang('messages.slide_title')</p>
        @endif

        <p class="slogan-2">Quest for BEST</p>
    </div>
    <div id="slide-black-cover"></div>

    <div id="news-btn">@lang('messages.menu_news')</div>
    

    <div>

    </div>


    <div id="news-carousel" class="owl-carousel owl-theme">
        
        @foreach ($news_list as $item)
            <div class="item">
                <a href="{{ asset('blog/'.$item->blog_slug.'.'.$item->blog_id) }}">
                    <img src="{{ asset('public/upload/blog/'.$item->blog_thumb) }}" alt="">
                    <h3>
                        @switch( Config::get('app.locale') )
                            @case('vi')
                                {{ $item->blog_ten_vi }}
                                @break
                            @case('en')
                                {{ $item->blog_ten_en }}
                                @break
                            @case('zh')
                                {{ $item->blog_ten_zh }}
                                @break
                            @case('ja')
                                {{ $item->blog_ten_ja }}
                                @break
                            @case('kr')
                                {{ $item->blog_ten_kr }}
                                @break
                        @endswitch
                    </h3>
                </a>
            </div>
        @endforeach
        
        
        
    </div>

</section>