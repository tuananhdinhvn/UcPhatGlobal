
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

    <!-- Bootstrap CSS Styles -->
    <link rel="stylesheet" href="https://zoomarts.works/html/relway/css/bootstrap.min.css" type="text/css" media="screen" />
    
    <!-- Icons Font CSS Styles -->
    <link rel="stylesheet" type="text/css" href="https://zoomarts.works/html/relway/css/icons.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="https://zoomarts.works/html/relway/css/font-awesome.min.css" media="screen" />
    
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
        @import url('https://fonts.googleapis.com/css2?family=Alexandria&family=Varela+Round&display=swap');
        /* font-family: 'Alexandria', sans-serif;
        font-family: 'Varela Round', sans-serif; */
    </style>

</head>
<body>

    <header id="header-project">
        <div class="container-fluid">
            <div class="menu-top">
                <div class="menu-top-left">
                    <span class="slogan-topline">
                        Turkey Project Solution<br/>
                    </span>
                    <span class="slogan-botline">
                        - We Buils Assets -
                    </span>
                </div>
                <div class="menu-top-right">
                    <div class="corp-code"> <span class="corp-text">Corp code: </span> <br/><span class="sorp-code-signal">UPG</span></div>
                    <div class="news">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        </p>
                    </div>
                </div>

            </div>

            <div class="menu-bot">
                <h3 class="menu-item"><span><a href="{{ asset('/')}}">Home</a></span></h3>
                <h3 class="menu-item"><span><a href="{{ asset('/#why-us')}}">@lang('messages.menu_why_us')</a></span> </h3>
                <h3 class="menu-item"><span><a href="{{ asset('/#our-service')}}">@lang('messages.menu_services')</a></span></h3>
                <h3 class="menu-item">
                    
                        <div class="logo-main">
                            <a href="{{ asset('/')}}">
                                <img src="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" alt="">
                            </a>
                        </div>
                        <a href="{{ asset('/')}}">
                            <span class="logo-slogan">Uc phat global</span>
                        </a>
                        
                </h3>
                <h3 class="menu-item"><span><a href="{{ asset('/#our-projects')}}">@lang('messages.menu_projects')</a></span></h3>
                <h3 class="menu-item"><span><a href="{{ asset('/#contact-us')}}">@lang('messages.menu_contact_us')</a></span></h3>
                <h3 class="menu-item lang-menu"><span><a>Language</a></span>
                    <div class="lang-items">
                        <div class="lang-item"><a href="{!! route('user.change-language', ['vi']) !!}" >Tiếng Việt</a></div>
                        <div class="lang-item"><a href="{!! route('user.change-language', ['en']) !!}" >English</a></div>
                        <div class="lang-item"><a href="{!! route('user.change-language', ['zh']) !!}">中 文</a></div>
                        <div class="lang-item"><a href="{!! route('user.change-language', ['ja']) !!}">日 本 語</a></div>
                        <div class="lang-item"><a href="{!! route('user.change-language', ['kr']) !!}">한국어</a></div>
                    </div>
                </h3>
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


    <script type="text/javascript" src="https://zoomarts.works/html/relway/js/jquery.min.js"></script>


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