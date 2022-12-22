
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>
  
    <!-- Basic -->
	<title>{{ $setting_info[0]->st_title }}</title>
    
    <!-- Define Charset -->
	<meta charset="utf-8">
    
    <!-- Responsive MetaTag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Page Description and Author -->
    <meta name="description" content="{{ $setting_info[0]->st_mota }}">
    <meta name="author" content="tuananhdinh.vn">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('public/upload/template/'. $getindex->homepage_logo_plus) }}">


     <link rel="stylesheet" href="{{ asset('css/upg/swiper-bundle.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/upg/upg.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/upg/index.css') }}">


    <!-- Bootstrap CSS Styles -->
    <link rel="stylesheet" href="https://zoomarts.works/html/relway/css/bootstrap.min.css" type="text/css" media="screen" />
    
    <!-- Icons Font CSS Styles -->
    <link rel="stylesheet" type="text/css" href="https://zoomarts.works/html/relway/css/icons.css" media="screen" />
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    
    <!-- Custom project CSS -->
    <link rel="stylesheet" type="text/css" href="css/upg/project.css" media="screen" />
   
    <style>
        /* Custom scroll bar */
        ::-webkit-scrollbar {
            width: 10px;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1; 
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: #888; 
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555; 
            border-radius: 10px;
        }
        /* Custom scroll bar */
    </style>

    {{-- Google font --}}
    <style>
        /* Topline slogan */
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
        /* Botline slogan */
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Alexandria&family=Varela+Round&display=swap');
        /* font-family: 'Alexandria', sans-serif;
        font-family: 'Varela Round', sans-serif; */
    </style>

    <style>
        .menu-top-left{
            line-height: 35px !important;
        }
        .top-menu .menu-top-left .slogan-top-line{
            font-family: 'Oswald', sans-serif;
            font-size: 30px;
            color: #244d86;
            font-weight: 800;
        }
        .top-menu .menu-top-left .slogan-bot-line {
            font-family: 'Nunito', sans-serif;
            font-size: 27px;
            font-style: italic;
            letter-spacing: 2px;
            color: #865f2b;
            font-weight: bold;
        }
        .top-menu .menu-top-right .corp-code{
            line-height: 35px;
        }
        .top-menu .menu-top-right .corp-code .corp {
            font-size: 22px !important;
        }
        .top-menu .menu-top-right .corp-code .code {
            font-size: 40px;
        }

        .top-menu .menu-top-right .news-list{
            padding-top: 10px;
        }
        .top-menu .menu-top-right .news-list .news-title{
            font-size: 22px;
        }

        header{
            height: 150px;
            display: grid;
            grid-template-columns: 3fr 1fr 1fr 2fr;
        }
        .slogan{
            height: 100%;
            text-align: center;
            padding-top: 20px;
        }
        .slogan .slogan-topline{
            font-family: 'Oswald', sans-serif;
            font-size: 30px;
            color: #244d86;
        }
        .slogan .slogan-botline{
            font-family: 'Nunito', sans-serif;
            font-size: 25px;
            font-style: italic;
            letter-spacing: 2px;
            color: #865f2b;
            font-weight: bold;
        }
        .logo{
            text-align: center;
            width: 100%;
            /* top: 20px; */
            z-index: 1;
            padding-top: 20px;
        }
        .logo img{
            width: 150px;
        }
        .company-name{
            font-family: 'Alexandria', sans-serif;
            text-transform: uppercase;
            font-weight: 800;
            /* height: 10vh; */
            justify-content: center;
            color: #bd7e2a;
        }
        .corp-code{
            text-align: center;
            font-size: 20px;
            text-transform: capitalize;
            font-weight: bold;
            font-family: 'Nunito', sans-serif;
            color: #bd7e2a;
            font-style: italic;
            letter-spacing: 1px;
            padding-top: 15px;
            line-height: 35px;
        }
        .code{
            font-family: 'Oswald', sans-serif;
            font-size: 35px;
            color: #244d86;
            font-style: initial;
        }
        .news{
            padding-top: 20px;
            text-align: center;
            padding-right: 20px;
            z-index: 10;
        }
        .news-menu-title{
            color: #bd7e2a;
            font-weight: bold;
            font-family: 'Nunito', sans-serif;
            font-size: 20px;
            text-transform: capitalize;
            font-style: italic;
        }
        .news a{
            font-family: 'Oswald', sans-serif;
            font-style: italic;
            color: #9b9898;
            height: 50px;
            z-index: 100;
            cursor: pointer;
            text-decoration: none;
            font-size: 17px;
            padding-top: 15px;
        }
        .news a:hover{
            color: #000;
            cursor: pointer;
        }
    </style>

</head>
<body>

    <header>
        <div class="slogan">
            <span class="slogan-topline">
                @lang('messages.slogan_topline')<br/>
            </span>
            <span class="slogan-botline">
                @lang('messages.slogan_botline')
            </span>
        </div>
        <div class="logo">
            <a href="{{ route('index') }}" style="text-decoration: none;">
                <img src="{{ asset('public/upload/info/logo-main.png') }}" alt="">
                <p class="company-name">Uc Phat Global</p>
            </a>
        </div>
        
        <div class="corp-code">
            @lang('messages.corp_code')<br/>
            <span class="code">UPG</span>
        </div>
        <div class="news">
            <span class="news-menu-title">On the news:</span><br/>

            <div class="swiper top-news" style="margin-top: 15px; height: 70px;">
                <div class="swiper-wrapper">
                    
                    @foreach ($news_list as $news_item)
                        <div class="swiper-slide" style="height: 20px; margin-bottom: 10px;">
                            <a href="{{ asset('news/'.$news_item->blog_id) }}">
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
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
            
            
        </div>
    </header>

    
    

    <div class="project-label-wrap">
        <div class="project-major-label container" style="margin: 0; width: 100%;">
            <div id="major-header-filter">
                <h3 data-filter="*" class="show-all">All</h3>
                @foreach ($major_list as $major_item)
                    <h3 class="major-filer" data-filter="{{ $major_item->major_id }}">
                        @switch( Config::get('app.locale') )
                            @case('vi')
                                {{ $major_item->major_name_vi }}
                                @break
                            @case('en')
                                {{ $major_item->major_name_en }}
                                @break
                            @case('zh')
                                {{ $major_item->major_name_zh }}
                                @break
                            @case('ja')
                                {{ $major_item->major_name_ja }}
                                @break
                            @case('kr')
                                {{ $major_item->major_name_kr }}
                                @break
                        @endswitch 
                    </h3>
                @endforeach
                
                
            </div>
            
        </div>
    </div>
    

    <style>
        .project-section{
            min-height: 55vh;
        }
    </style>

    <div class="project-section">
        <div class="project-list-wrap">

            @foreach ($project_list as $item)
                <div class="project-item" data-value="{{ $item->pro_major_id }}">
                    <a href="{{ asset('project/'.$item->pro_id) }}">
                        <div class="project-item-cover">
                            @switch( Config::get('app.locale') )
                                @case('vi')
                                    {{ $item->pro_ten_vi }}
                                    @break
                                @case('en')
                                    {{ $item->pro_ten_en }}
                                    @break
                                @case('zh')
                                    {{ $item->pro_ten_zh }}
                                    @break
                                @case('ja')
                                    {{ $item->pro_ten_ja }}
                                    @break
                                @case('kr')
                                    {{ $item->pro_ten_kr }}
                                    @break
                            @endswitch 
                        </div>
                        <img src="{{ asset('public/upload/product/'.$item->pro_thumb) }}" alt="">
                    </a>
                </div>
            @endforeach
            
        </div>
    </div>
    
    
    
    <!-- Start Footer -->
    <div id="footer" class="section footer-section light-section">

        <div class="container">
        
            <div class="row">
            
                <div class="col-md-12">
                    <!-- Footer Logo -->
                    <div class="logo-img"><img alt="" width="100px" src="public/upload/info/logo-main.png" /></div>
                    
                    <!-- Copyright -->
                    <div class="copyright">All rights reserved. Copyright © 2022 <a class="accent-color" href="#">TuanAnhDinh.vn</a></div>
                    <!-- Social Icons -->
                </div>
            
            </div>
        
        </div>
        
    </div>
    <!-- End Footer -->

    <!-- Filter button -->
    <div id="filter-icon">
        <i class="fa fa-home"></i>
    </div>
    <!-- End Filter button -->

    @include('frontend.section.script')

    <script type="text/javascript" src="https://zoomarts.works/html/relway/js/jquery.min.js"></script>

    <!-- News Swiper Plus -->
    <script>
        var swiper = new Swiper(".top-news", {
            direction: "vertical",
            spaceBetween: 30,
            autoplay: true,
            loop: true,
            slidesPerView: 2,
            mousewheel: true,
            pagination: {
                el: ".news-swiper-dot",
                clickable: true,
            },
        });
    </script>


    <script>

        var project_header  = $( "#major-header-filter" ).find( ".major-filer" );
        var project_lists   = $( ".project-list-wrap" ).find( ".project-item" );


        $(".major-filer").click(function(){

            var project_filter_value = $(this).attr( "data-filter" );

            $(project_lists).each(function(){
                $(this).css("display", "none");
            });

            $(project_lists).each(function(){
                if( project_filter_value == "*" ){
                    $(".project-item").css("display", "block");
                } else if ( $(this).attr("data-value") == project_filter_value ){
                    $(this).css("display", "block");
                } 
            });

        });

        $(".show-all").click(function(){
            $(".project-item").css("display", "block");
        });
    </script>


</body>
</html>