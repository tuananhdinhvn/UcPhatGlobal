<style>
    .service-pd-bot{
        padding-bottom: 5.82em !important;
    }
    .no-gutters .col-md-6{
        cursor: pointer;
    }
    .cover-service-1{
        background-image: url({{ asset('public/upload/template/1.jpg') }});
    }
    .cover-service-2{
        background-image: url({{ asset('public/upload/template/2.jpg') }});
    }
    .cover-service-3{
        background-image: url({{ asset('public/upload/template/3.jpg') }});
    }
    .cover-service-4{
        background-image: url({{ asset('public/upload/template/4.jpg') }});
    }

    .pd-news-row{
        padding-bottom: 20px    
    }

    .cover-news, .cover-news-item{
        padding-left: 0;
        padding-right: 0
    }

    .cover-news-item{
        padding-bottom: 20px
    }

    .news-2-cover{
        position: relative;
    }

    .news-2-cover a{
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
    }

    .news-2-cover p{
        position: absolute;
        top: 120px;
        left: 0;
        right: 0;
    }

    @media only screen and (max-width: 768px) {
        .news-box {
            margin: 0 auto !important;
            padding-bottom: 20px;
        }
        .pd-news-row{
            padding-bottom: 0 !important    
        }

        .news-list-pc{
            display: none;
        }

        .news-list-mobile{
            display: block;
        }
    }

    @media only screen and (min-width: 769px) {
        .news-title{
            height: 80px
        }

        .news-list-pc{
            display: block;
        }
        .news-list-mobile{
            display: none;
        }
    }
</style>


@if($news_index_count > 0)
    <section id="news" class="g-pt-100 g-pb-100--md">
        <div class="container text-center g-max-width-750 g-mb-70-md">
            <div class="text-uppercase g-brd-primary">
                <h3 class="h3 g-letter-spacing-5 g-font-size-24 g-font-weight-400 g-color-primary g-mb-25">@lang('messages.news_title')</h3>
            
            </div>
        </div>


        <div class="container-fluid news-list-pc">



            @switch($news_index_count)
                @case(1)
                    <!--Count 1-->
                    @foreach ($news_index_list as $item)
                        <div class="col-12 row">
                            <div class="col-lg-6 news-box">
                                <a href="{{ asset('blog/'.$item->blog_slug.'.'.$item->blog_id) }}">
                                    <img width="100%" src="{{ asset('public/upload/blog/'.$item->blog_thumb) }}" alt="{{ $item->blog_ten_en }}">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a href="{{ asset('blog/'.$item->blog_slug.'.'.$item->blog_id) }}">
                                    <h2 class="text-uppercase g-font-weight-700" style="text-align: justify;">
                                        @switch( Config::get('app.locale') )
                                            @case('vi')
                                                {{ $item->blog_ten_en }}
                                                @break
                                            @case('en')
                                                {{ $item->blog_ten_en }}
                                                @break
                                            @case('zh')
                                                {{ $item->blog_ten_en }}
                                                @break
                                            @case('ja')
                                                {{ $item->blog_ten_en }}
                                                @break
                                        @endswitch   
                                    </h2>
                                </a>
                                <p>
                                    @switch( Config::get('app.locale') )
                                        @case('vi')
                                            {{ $item->blog_mota_vi }}
                                            @break
                                        @case('en')
                                            {{ $item->blog_mota_en }}
                                            @break
                                        @case('zh')
                                            {{ $item->blog_mota_zh }}
                                            @break
                                        @case('ja')
                                            {{ $item->blog_mota_ja }}
                                            @break
                                    @endswitch  
                                </p>
                            </div>
                        </div>
                    @endforeach
                    
                    @break
                @case(2)
                @case(3)
                @case(4)
                    <!--Count 2-->
                    <div class="col-12 row">
                        @foreach ($news_index_list as $item)
                            <div class="col-lg-6 row news-box">
                                <div class="col-lg-6">
                                    <a href="{{ asset('blog/'.$item->blog_slug.'.'.$item->blog_id) }}">
                                        <img width="100%" src="{{ asset('public/upload/blog/'.$item->blog_thumb) }}" alt="{{ $item->blog_ten_en }}">
                                    </a>
                                </div>
                                <div class="col-lg-6 news-2-cover">
                                    <a href="{{ asset('blog/'.$item->blog_slug.'.'.$item->blog_id) }}">
                                        <h2 class="text-uppercase g-font-size-18 news-title" style="">
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
                                            @endswitch 
                                        </h2>
                                    </a>
                                    <p>
                                        @switch( Config::get('app.locale') )
                                            @case('vi')
                                                {{ $item->blog_mota_vi }}
                                                @break
                                            @case('en')
                                                {{ $item->blog_mota_en }}
                                                @break
                                            @case('zh')
                                                {{ $item->blog_mota_zh }}
                                                @break
                                            @case('ja')
                                                {{ $item->blog_mota_ja }}
                                                @break
                                        @endswitch 
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    @break
                {{-- @case(3)
                    <!--Count 3-->
                    <div class="col-12 row">
                        <div class="col-lg-6 col-md-6 col-sm-12 row news-box">
                            <div class="col-12 row news-box">
                                <div class="col-lg-6">
                                    <a href="{{ asset('blog/'.$news_index_list[0]->blog_slug.'.'.$news_index_list[0]->blog_id) }}">
                                        <img width="100%" src="{{ asset('public/upload/blog/'.$news_index_list[0]->blog_thumb) }}" alt="{{ $news_index_list[0]->blog_ten_en }}">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="{{ asset('blog/'.$news_index_list[0]->blog_slug.'.'.$news_index_list[0]->blog_id) }}">
                                        <h2 class="text-uppercase g-font-size-16 news-title" style="">
                                            @switch( Config::get('app.locale') )
                                                @case('vi')
                                                    {{ $news_index_list[0]->blog_ten_vi }}
                                                    @break
                                                @case('en')
                                                    {{ $news_index_list[0]->blog_ten_en }}
                                                    @break
                                                @case('zh')
                                                    {{ $news_index_list[0]->blog_ten_zh }}
                                                    @break
                                                @case('ja')
                                                    {{ $news_index_list[0]->blog_ten_ja }}
                                                    @break
                                            @endswitch 
                                        </h2>
                                    </a>
                                    <p>
                                        @switch( Config::get('app.locale') )
                                            @case('vi')
                                                {{ $news_index_list[0]->blog_mota_vi }}
                                                @break
                                            @case('en')
                                                {{ $news_index_list[0]->blog_mota_en }}
                                                @break
                                            @case('zh')
                                                {{ $news_index_list[0]->blog_mota_zh }}
                                                @break
                                            @case('ja')
                                                {{ $news_index_list[0]->blog_mota_ja }}
                                                @break
                                        @endswitch 
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 row news-box">
                            <div class="col-lg-12 row g-pb-40--lg news-box">
                                <div class="col-lg-6">
                                    <a href="{{ asset('blog/'.$news_index_list[1]->blog_slug.'.'.$news_index_list[1]->blog_id) }}">
                                        <img width="100%" src="{{ asset('public/upload/blog/'.$news_index_list[1]->blog_thumb) }}" alt="{{ $news_index_list[1]->blog_ten_en }}">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="{{ asset('blog/'.$news_index_list[1]->blog_slug.'.'.$news_index_list[1]->blog_id) }}">
                                        <h2 class="text-uppercase g-font-size-16 news-title" style="">
                                            @switch( Config::get('app.locale') )
                                                @case('vi')
                                                    {{ $news_index_list[1]->blog_ten_vi }}
                                                    @break
                                                @case('en')
                                                    {{ $news_index_list[1]->blog_ten_en }}
                                                    @break
                                                @case('zh')
                                                    {{ $news_index_list[1]->blog_ten_zh }}
                                                    @break
                                                @case('ja')
                                                    {{ $news_index_list[1]->blog_ten_ja }}
                                                    @break
                                            @endswitch 
                                        </h2>
                                    </a>
                                    <p>
                                        @switch( Config::get('app.locale') )
                                            @case('vi')
                                                {{ $news_index_list[1]->blog_mota_vi }}
                                                @break
                                            @case('en')
                                                {{ $news_index_list[1]->blog_mota_en }}
                                                @break
                                            @case('zh')
                                                {{ $news_index_list[1]->blog_mota_zh }}
                                                @break
                                            @case('ja')
                                                {{ $news_index_list[1]->blog_mota_ja }}
                                                @break
                                        @endswitch 
                                    </p>
                                </div>
                                
                            </div>
                            <div class="col-lg-12 row news-box">
                                <div class="col-lg-6">
                                    <a href="{{ asset('blog/'.$news_index_list[2]->blog_slug.'.'.$news_index_list[2]->blog_id) }}">
                                        <img width="100%" src="{{ asset('public/upload/blog/'.$news_index_list[2]->blog_thumb) }}" alt="{{ $news_index_list[2]->blog_ten_en }}">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="">
                                        <h2 class="text-uppercase g-font-size-16 news-title" style="">
                                            @switch( Config::get('app.locale') )
                                                @case('vi')
                                                    {{ $news_index_list[2]->blog_ten_vi }}
                                                    @break
                                                @case('en')
                                                    {{ $news_index_list[2]->blog_ten_en }}
                                                    @break
                                                @case('zh')
                                                    {{ $news_index_list[2]->blog_ten_zh }}
                                                    @break
                                                @case('ja')
                                                    {{ $news_index_list[2]->blog_ten_ja }}
                                                    @break
                                            @endswitch 
                                        </h2>
                                    </a>
                                    <p>
                                        @switch( Config::get('app.locale') )
                                            @case('vi')
                                                {{ $news_index_list[2]->blog_mota_vi }}
                                                @break
                                            @case('en')
                                                {{ $news_index_list[2]->blog_mota_en }}
                                                @break
                                            @case('zh')
                                                {{ $news_index_list[2]->blog_mota_zh }}
                                                @break
                                            @case('ja')
                                                {{ $news_index_list[2]->blog_mota_ja }}
                                                @break
                                        @endswitch 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @break
                @case(4)
                    <!--Count 4-->
                    <div class="col-12 row pd-news-row cover-news">

                        @foreach ($news_index_list as $item)
                            
                        @endforeach
                        <div class="col-lg-6 row news-box cover-news-item">
                            <div class="col-lg-6">
                                <a href="{{ asset('blog/'.$item->blog_slug.'.'.$item->blog_id) }}">
                                    <img width="100%" src="{{ asset('public/upload/blog/'.$item->blog_thumb) }}" alt="{{ $item->blog_ten_en }}">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a href="{{ asset('blog/'.$item->blog_slug.'.'.$item->blog_id) }}">
                                    <h2 class="text-uppercase g-font-weight-700" style="text-align: justify;">
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
                                        @endswitch   
                                    </h2>
                                </a>
                                <p>
                                    @switch( Config::get('app.locale') )
                                        @case('vi')
                                            {{ $item->blog_mota_vi }}
                                            @break
                                        @case('en')
                                            {{ $item->blog_mota_en }}
                                            @break
                                        @case('zh')
                                            {{ $item->blog_mota_zh }}
                                            @break
                                        @case('ja')
                                            {{ $item->blog_mota_ja }}
                                            @break
                                    @endswitch 
                                </p>
                            </div>
                        </div>
                       
                    </div>
                    @break --}}
            @endswitch
            
        </div>





        <div class="container-fluid news-list-mobile">

            @foreach ($news_index_list as $item)
                <div class="col-12 g-pb-40">
                    <div class="col-sm-12">
                        <a href="{{ asset('blog/'.$item->blog_slug.'.'.$item->blog_id) }}">
                            <img width="100%" src="{{ asset('public/upload/blog/'.$item->blog_thumb) }}" alt="{{ $item->blog_ten_en }}">
                        </a>
                    </div>
                    <div class="col-sm-12">
                        <a href="{{ asset('blog/'.$item->blog_slug.'.'.$item->blog_id) }}">
                            <h2 class="text-uppercase g-font-weight-700" style="font-size: 20px; padding: 8px 0;">
                                @switch( Config::get('app.locale') )
                                    @case('vi')
                                        {{ $item->blog_ten_en }}
                                        @break
                                    @case('en')
                                        {{ $item->blog_ten_en }}
                                        @break
                                    @case('zh')
                                        {{ $item->blog_ten_en }}
                                        @break
                                    @case('ja')
                                        {{ $item->blog_ten_en }}
                                        @break
                                @endswitch   
                            </h2>
                        </a>
                        <p>
                            @switch( Config::get('app.locale') )
                                @case('vi')
                                    {{ $item->blog_mota_vi }}
                                    @break
                                @case('en')
                                    {{ $item->blog_mota_en }}
                                    @break
                                @case('zh')
                                    {{ $item->blog_mota_zh }}
                                    @break
                                @case('ja')
                                    {{ $item->blog_mota_ja }}
                                    @break
                            @endswitch  
                        </p>
                    </div>
                </div>
            @endforeach

           

            {{-- @foreach ($news_index_list as $item)
                <div class="col-12 row">
                    <div class="col-lg-6 news-box">
                        <a href="{{ asset('blog/'.$item->blog_slug.'.'.$item->blog_id) }}">
                            <img width="100%" src="{{ asset('public/upload/blog/'.$item->blog_thumb) }}" alt="{{ $item->blog_ten_en }}">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{ asset('blog/'.$item->blog_slug.'.'.$item->blog_id) }}">
                            <h2 class="text-uppercase g-font-weight-700" style="text-align: justify;">
                                @switch( Config::get('app.locale') )
                                    @case('vi')
                                        {{ $item->blog_ten_en }}
                                        @break
                                    @case('en')
                                        {{ $item->blog_ten_en }}
                                        @break
                                    @case('zh')
                                        {{ $item->blog_ten_en }}
                                        @break
                                    @case('ja')
                                        {{ $item->blog_ten_en }}
                                        @break
                                @endswitch   
                            </h2>
                        </a>
                        <p>
                            @switch( Config::get('app.locale') )
                                @case('vi')
                                    {{ $item->blog_mota_vi }}
                                    @break
                                @case('en')
                                    {{ $item->blog_mota_en }}
                                    @break
                                @case('zh')
                                    {{ $item->blog_mota_zh }}
                                    @break
                                @case('ja')
                                    {{ $item->blog_mota_ja }}
                                    @break
                            @endswitch  
                        </p>
                    </div>
                </div>
            @endforeach --}}
            
        </div>




        <br/>

    </section>
@endif