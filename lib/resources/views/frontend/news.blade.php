
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ $setting_info[0]->st_title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('public/upload/template/'. $getindex->homepage_logo_plus) }}">

        <meta name="description" content="{{ $setting_info[0]->st_mota }}">
        <meta name="author" content="tuananhdinh.vn">

        <!-- Bootstrap CSS Styles -->
        {{-- <link rel="stylesheet" href="{{ asset('css/upg/bootstrap.min.css') }}" type="text/css" media="screen" /> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="{{ asset('css/upg/swiper-bundle.min.css') }}" />

        <link rel="stylesheet" href="{{ asset('css/upg/upg.css') }}" />

        <!-- Timeline CSS -->
        <link rel="stylesheet" href="{{ asset('css/upg/timeline.css') }}" />


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <!--Font awesome css-->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />


        <!-- Google font -->
        <style>
            /* Topline slogan */
            @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
            /* Botline slogan */
            @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap');
            /* Main menu */
            @import url('https://fonts.googleapis.com/css2?family=Alexandria:wght@500&display=swap');
        </style>

        <link rel="stylesheet" href="{{ asset('css/upg/index.css') }}">

    
    </head>

  <body>

    @include('frontend.section.pages_header')
 
    <style>
        .news-wrap{
            padding-top: 30px;
            display: grid;
            grid-template-columns: 3fr 1fr;
            column-gap: 40px;
            min-height: 60vh;
        }
        .news-wrap .news-content{
            padding-left: 10%;
        }
        .news-wrap .news-content .content{
            text-align: justify;
        }
        .news-wrap .news-relate{
            height: 900px;
        }
        .relate-title{
            font-size: 1.8rem;
            font-weight: bold;
            text-transform: uppercase;
        }
        .relate-item{
            max-height: 300px !important;
            position: relative;
            margin-bottom: 35px !important;
            float: left;
        }
        .relate-item img{
            width: 300px;
            height: 170px;
        }
        .relate-item h2{
            font-family: 'Alexandria', sans-serif;
            padding-top: 10px;
            font-size: 0.8rem;
            font-weight: bold;
            color: #565656;
            text-align: left;
            width: 300px;
        }
        .relate-link{
            float: left;
            width: 100%;
            position: absolute;
            top: 0;
            text-decoration: none;
        }
        .relate-link:hover {
            color: #000 !important;
            text-decoration: none;
        }
        .title-post{
            font-family: 'Alexandria', sans-serif;
            text-align: left;
            padding-bottom: 40px;
            font-size: 2rem;
            text-transform: uppercase;
            font-weight: bold;
        }
    </style>
    <div class="news-wrap container-fluid">
        <div class="news-content">
            <h3 class="title-post">
                @switch( Config::get('app.locale') )
                    @case('vi')
                        {{ $news_detail->blog_ten_vi }}
                        @break
                    @case('en')
                        {{ $news_detail->blog_ten_en }}
                        @break
                    @case('zh')
                        {{ $news_detail->blog_ten_zh }}
                        @break
                    @case('ja')
                        {{ $news_detail->blog_ten_ja }}
                        @break
                    @case('kr')
                        {{ $news_detail->blog_ten_kr }}
                        @break
                @endswitch   
            </h3>

            <div id="news-content" class="content">
                @switch( Config::get('app.locale') )
                    @case('vi')
                        {!! $news_detail->blog_noidung_vi !!}
                        @break
                    @case('en')
                        {!! $news_detail->blog_noidung_en !!}
                        @break
                    @case('zh')
                        {!! $news_detail->blog_noidung_zh !!}
                        @break
                    @case('ja')
                        {!! $news_detail->blog_noidung_ja !!}
                        @break
                    @case('kr')
                        {!! $news_detail->blog_noidung_kr !!}
                        @break
                @endswitch  

                
            </div>
        </div>
        
        

        <div class="news-relate">
            <h2 class="relate-title">Related news</h2>
            <div class="swiper related-list">
                <div id="news-swiper-inside" class="swiper-wrapper">

                    @foreach ($news_list as $related_item)
                        @if ( $news_detail->blog_id != $related_item->blog_id )
                            <div class="news-item swiper-slide relate-item">
                                <a class="relate-link" href="{{ asset('news/'.$related_item->blog_id) }}">
                                    <img src="{{ asset('public/upload/blog/'.$related_item->blog_thumb) }}" alt="">
                                    <h2>
                                    @switch( Config::get('app.locale') )
                                        @case('vi')
                                            {{ $related_item->blog_ten_vi }}
                                            @break
                                        @case('en')
                                            {{ $related_item->blog_ten_en }}
                                            @break
                                        @case('zh')
                                            {{ $related_item->blog_ten_zh }}
                                            @break
                                        @case('ja')
                                            {{ $related_item->blog_ten_ja }}
                                            @break
                                        @case('kr')
                                            {{ $related_item->blog_ten_kr }}
                                            @break
                                    @endswitch       
                                    </h2>
                                </a> 
                            </div>
                        @endif
                    @endforeach
                </div>
                <div id="news-swiper-dot" class="swiper-pagination" style="opacity: 0;"></div>
            </div>
        </div>
        
    </div>


    <style>
        #footer-news{
            display: block;
            height: 200px;
            background: #245898;
            width: 100%;
            text-align: center;
            padding: 20px;
        }
        #footer-news img{
            width: 150px;
        }
    </style>
    <footer id="footer-news">
        <img src="{{ asset('public/upload/info/logo-main.png') }}" alt="">
        <div class="social-footer">
            <i class="fa fa-facebook" style=""></i> 
            <i class="fa fa-youtube" style=""></i> 
        </div>
    </footer>



    @include('frontend.section.script')

    <script>
        var img_array = $("#news-content").find("img");

        $.each(img_array, function (index, value) {

            var src_img = value.attributes.src.value;
            var slice_string = src_img.slice(6);

            console.log( slice_string );
            $(value).attr('src', slice_string ).attr('width', '100%').attr('height', 'auto');

        });

       

    </script>

  </body>
</html>
