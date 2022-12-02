<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
    
    <!--<![endif]-->
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/upload/template/'. $getindex->homepage_logo_plus) }}" />
        <meta charset="utf-8" />

        <title>
            {{ $setting_info[0]->st_title }}
        </title>

        <meta content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0" name="viewport" />
        <link rel="canonical" href="" />
   
    

       

        <script src="https://demos.creative-tim.com/rubik/assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="//hstatic.net/0/0/global/design/js/bootstrap.min.js"></script>
        <script src="//hstatic.net/0/0/global/option_selection.js" type="text/javascript"></script>
        {{-- <script src="//hstatic.net/0/0/global/api.jquery.js" type="text/javascript"></script> --}}

        {{-- <script src="//theme.hstatic.net/1000077855/1000533237/14/scripts.js?v=69" type="text/javascript"></script> --}}
        {{-- <script src="//theme.hstatic.net/1000077855/1000533237/14/modernizr.custom.js?v=69" type="text/javascript"></script> --}}
        {{-- <script src="//hstatic.net/0/0/global/design/theme-default/html5shiv.js"></script> --}}
        <script src="//hstatic.net/0/0/global/design/theme-default/jquery-migrate-1.2.0.min.js"></script>
        {{-- <script src="//hstatic.net/0/0/global/design/theme-default/jquery.touchSwipe.min.js" type="text/javascript"></script> --}}
        {{-- <script data-target=".product-resize" data-parent=".products-resize" data-img-box=".image-resize" src="//hstatic.net/0/0/global/design/js/fixheightproductv2.js"></script> --}}
        {{-- <script src="//hstatic.net/0/0/global/design/js/haravan.plugin.1.0.js"></script> --}}

        {{-- <script src="//hstatic.net/0/0/global/design/theme-default/jquery.flexslider.js" type="text/javascript"></script> --}}

        {{-- <script src="//theme.hstatic.net/1000077855/1000533237/14/classie.js?v=69" type="text/javascript"></script>
        <script src="//theme.hstatic.net/1000077855/1000533237/14/mlpushmenu.js?v=69" type="text/javascript"></script> --}}

        {{-- <script src="//theme.hstatic.net/1000077855/1000533237/14/core.min.js?v=69" type="text/javascript"></script>
        <script src="//theme.hstatic.net/1000077855/1000533237/14/widget.min.js?v=69" type="text/javascript"></script>
        <script src="//theme.hstatic.net/1000077855/1000533237/14/mouse.min.js?v=69" type="text/javascript"></script> --}}

        <script src="//theme.hstatic.net/1000077855/1000533237/14/slider.min.js?v=69" type="text/javascript"></script>
       
        {{-- <link href="//hstatic.net/0/0/global/design/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all" />
        <script src="//hstatic.net/0/0/global/design/plugins/fancybox/jquery.fancybox.js" type="text/javascript"></script>
        <script src="//hstatic.net/290/1000076290/10/2016/3-17/jquery.fancybox-media.js" type="text/javascript"></script> --}}

        {{-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54aa0592190a1461" async="async"></script> --}}
        <!--------------CSS----------->
        <link href="//hstatic.net/0/0/global/design/theme-default/page-contact-form.css" rel="stylesheet" type="text/css" media="all" />

        <!------FONT------>

        <link rel="stylesheet" type="text/css" href="//hstatic.net/0/0/global/design/member/fonts-master/roboto.css" />

        <link rel="stylesheet" type="text/css" href="//hstatic.net/0/0/global/design/member/fonts-master/roboto.css" />

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//hstatic.net/0/0/global/design/css/bootstrap.3.3.1.css" />
        <!-- Theme haravan-->

        <!-- Latest compiled and minified JavaScript -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

        <link href="//hstatic.net/0/0/global/design/theme-default/flexslider.css" rel="stylesheet" type="text/css" media="all" />
        <link href="//theme.hstatic.net/1000077855/1000533237/14/plugin.css?v=69" rel="stylesheet" type="text/css" media="all" />
        <link href="//theme.hstatic.net/1000077855/1000533237/14/responsive.css?v=69" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('public/css/styles-babylon.css?v=69') }}" rel="stylesheet" type="text/css" media="all" />

        <style>
            .grab {
                cursor: -webkit-grab;
                cursor: grab;
            }
            .grabbing {
                cursor: -webkit-grabbing;
                cursor: grabbing !important;
            }

            #info-table td {
                border: none;
                text-transform: uppercase;
                font-size: 14px;
                padding-left: 0;
                padding-right: 0;
                font-family: 'Alexandria', sans-serif;
            }

            .block-social-footer {
                background-color: #272730 !important;
                color: #999 !important;
            }
            .block-social-footer:hover {
                background-color: #c94645 !important;
                color: #fff !important;
            }

            .bread-title {
                padding: 10px 10px 10px 0;
                font-size: 16px;
                text-transform: uppercase;
                font-family: 'Alexandria', sans-serif;
                color: #fff;
            }
            .bread-title a{
                font-family: 'Alexandria', sans-serif;
                color: #fff;
            }
            .bread-title a:hover {
                color: #c94645 !important;
            }

            #table {
                background: #ffffff5c;
            }
            @media  only screen and (min-width: 769px) {
                #table {
                    margin-top: 20px;
                }
            }

            .text-link {
                color: #272730;
                text-decoration: underline;
            }
            .text-link:hover {
                color: #c94645 !important;
            }

            .owl-prev {
                position: absolute;
                left: 0;
                top: 45vh;
                font-size: 2rem;
            }
            .owl-prev span {
                font-size: 3rem;
            }
            .owl-next {
                position: absolute;
                right: 0;
                top: 45vh;
                font-size: 2rem;
            }
            .owl-next span {
                font-size: 3rem;
            }
        </style>

        <!--Galery slide-->
        <script src="{{ asset('public/slide-galery/js/jquery-1.11.3.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/slide-galery/js/jssor.slider-28.0.0.min.js') }}" type="text/javascript"></script>
        
        <style>
            /*jssor slider loading skin spin css*/
            .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes  jssorl-009-spin {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }

            /*jssor slider arrow skin 106 css*/
            .jssora106 {
                display: block;
                position: absolute;
                cursor: pointer;
            }
            .jssora106 .c {
                fill: #fff;
                opacity: 0.3;
            }
            .jssora106 .a {
                fill: none;
                stroke: #000;
                stroke-width: 350;
                stroke-miterlimit: 10;
            }
            .jssora106:hover .c {
                opacity: 0.5;
            }
            .jssora106:hover .a {
                opacity: 0.8;
            }
            .jssora106.jssora106dn .c {
                opacity: 0.2;
            }
            .jssora106.jssora106dn .a {
                opacity: 1;
            }
            .jssora106.jssora106ds {
                opacity: 0.3;
                pointer-events: none;
            }

            /*jssor slider thumbnail skin 101 css*/
            .jssort101 .p {
                position: absolute;
                top: 0;
                left: 0;
                box-sizing: border-box;
                background: #000;
            }
            .jssort101 .p .cv {
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: 2px solid #000;
                box-sizing: border-box;
                z-index: 1;
            }
            .jssort101 .a {
                fill: none;
                stroke: #fff;
                stroke-width: 400;
                stroke-miterlimit: 10;
                visibility: hidden;
            }
            .jssort101 .p:hover .cv,
            .jssort101 .p.pdn .cv {
                border: none;
                border-color: transparent;
            }
            .jssort101 .p:hover {
                padding: 2px;
            }
            .jssort101 .p:hover .cv {
                background-color: rgba(0, 0, 0, 6);
                opacity: 0.35;
            }
            .jssort101 .p:hover.pdn {
                padding: 0;
            }
            .jssort101 .p:hover.pdn .cv {
                border: 2px solid #fff;
                background: none;
                opacity: 0.35;
            }
            .jssort101 .pav .cv {
                border-color: #fff;
                opacity: 0.35;
            }
            .jssort101 .pav .a,
            .jssort101 .p:hover .a {
                visibility: visible;
            }
            .jssort101 .t {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: none;
                opacity: 0.6;
            }
            .jssort101 .pav .t,
            .jssort101 .p:hover .t {
                opacity: 1;
            }
        </style>
        <!--End slide galery-->

        <!--Extra zoom slide-->
        <link href="https://demos.creative-tim.com/rubik/assets/css/bootstrap.css" rel="stylesheet" />
        <link href="{{ asset('css/rubick.css') }}" rel="stylesheet" />
        <link href="https://demos.creative-tim.com/rubik/assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
        <!--End Extra zoom slide-->

        <style>
            /* Custom scroll bar */
            ::-webkit-scrollbar {
                width: 10px;
                border-radius: 4px;
            }
            ::-webkit-scrollbar-track {
                background: #fff; 
                border-radius: 4px;
            }
            ::-webkit-scrollbar-thumb {
                background: rgb(163, 163, 161); 
                border-radius: 4px;
            }
            ::-webkit-scrollbar-thumb:hover {
                background: rgb(163, 163, 161); 
                border-radius: 4px;
            }
            /* Custom scroll bar */
        </style>

        <style>
            
            #jssor_1{
                position: relative; 
                margin: 0 auto; 
                top: 0px; 
                left: 0px; 
                width: 980px; 
                height: 680px; 
                overflow: hidden; 
                visibility: hidden;
            }
            #breadcrumb-header{
                position: relative;
            }
            .black-blur-bread{
                position: absolute;
                top: 0;
                left: 0%;
                width: 100%;
                height: 100%;
                background: #00000087;
            }
            @media(max-width: 768px){
                #jssor_1{
                    /* width: 100% !important;  */
                }
                #detail-main-zone{
                    padding: 0 !important;
                }
            }
        </style>


        <!--Header logo-->
        <style>
            .project-header{
                display: flex;
                justify-content: center;
                align-items: center;
                padding-top: 15px;
                padding-bottom: 15px;
                justify-content: space-between;
            }
            .menu-header-item{
                width: 150px;
                text-transform: uppercase;
                color: #fff;
                font-weight: bold;
                font-family: "Open Sans", Helvetica, Arial, sans-serif;
                line-height: 1.6;
                text-align: center;
                font-size: 1rem;
                cursor: pointer;
            }
            .lang-text{
            }
            .menu-header-item a{
                color: #fff;
                text-align: center;
                font-weight: 750;
            }
            .pc-lang-list{
                position: absolute;
                width: 130px;
                top: 30px;
                right: 20px;
                display: none;
                transition: 0.2s;
            }
            .last-menu-item:hover .pc-lang-list{
                display: block;
            }
            .pc-lang-list a{
                background: #000;
            }
            .pc-lang-list a li{
                padding: 15px 10px;
                background: #000;
            }
            .pc-lang-list a:hover li{
                background: #fff;
                color: #000;
            }
            #mobile-header{
                height: 100px !important;
            }
            .show-mobile-menu-list{
                top: 100px !important;
            }
            @media(max-width: 768px){
                #header{
                    display: none;
                }
            }
        </style>


        <style>
            .hide{
                display: none;
            }
        </style>

        <!-- Custom project CSS -->
        <link rel="stylesheet" type="text/css" href="css/upg/project-detail.css" media="screen" />

        <style>
            .breadcumb-cover{
                background: #428bff;
                padding: 20px 0 0 0;
            }
            #header-project{
                height: 20vh;
                width: 100%;
                z-index: 10;
                background: #fff;
            }
            .top-menu{
                height: 7vh;
                font-family: 'Alexandria', sans-serif;
            }
            .top-left-menu{
                width: 50%;
                float: left;
                text-align: center;
                height: 100%;
                text-shadow: 0 0 0.5px #000;
                font-size: 1.5rem;
                line-height: 30px;
                position: relative;
                top: 10px;
                font-weight: bold;
                text-transform: uppercase;
                color: #ffbd00;
                text-transform: capitalize;
                font-size: 1.8rem;
                letter-spacing: 2px;
                line-height: 35px;
                text-shadow: 0 0 1px #000;
            }
            .slogan-topline{
                color: #224b84;
            }
            .slogan-botline{
                color: #e79d3e;
                font-style: italic;
            }
            .top-right-menu{
                width: 50%;
                float: right;
            }
            .top-right-menu .corp-code{
                width: 35%;
                float: left;
                text-align: center;
                padding-top: 10px;
                font-weight: 800;
                font-family: 'Alexandria', sans-serif;
                font-size: 1rem;
            }
            .top-right-menu .corp-code .corp-text{
                color: #e79d3e;
                font-size: 1.4rem;
                letter-spacing: 1px;
                text-shadow: 0 0 0.1px #000;
            }
            .top-right-menu .corp-code .upg{
                font-size: 3rem;
                position: relative;
                top: 0px;
                font-weight: 800;
            }
            .top-right-menu .news{
                width: 65%;
                float: right;
                padding: 20px 30px;
                font-style: italic;
                opacity: 0.7;
                font-weight: bold;
            }

            .bot-menu{
                height: 10vh;
            }
            .main-menu-wraper{
                height: 100%;
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 2fr 1fr 1fr 1fr;
                margin: 0;
                width: 100%;
            }
            .main-menu-wraper::before{
                display: none;
            }
            .main-menu-wraper .main-menu-item{
                text-align: center;
                margin: auto;
                font-weight: 800;
                color: #000;
                text-transform: uppercase;
                font-family: 'Alexandria', sans-serif;
                position: relative;
                top: -25px;
                font-size: 1.1rem;
            }
            .main-menu-wraper .main-menu-item a{
                font-family: 'Alexandria', sans-serif;
            }
            .main-menu-wraper .main-menu-item a img{
                width: 150px;
                position: relative;
                top: -50px;
            }
            .main-menu-wraper .main-menu-item a .logo-slogan{
                width: 100%;
                position: relative;
                top: -50px;
                font-weight: 800;
                color: #dba408;
            }

            
        </style>

        {{-- Google font --}}
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Alexandria&family=Varela+Round&display=swap');
            /* font-family: 'Alexandria', sans-serif;
            font-family: 'Varela Round', sans-serif; */
        </style>


    </head>
    <body class="home page page-id-1579 page-template page-template-template page-template-home-template page-template-templatehome-template-php">
        <div id="main-wrapper" class="clearfix">
            

            <header id="header-project container-fluid">
                <div class="top-menu container-fluid">
                    <div class="top-left-menu">
                        <span class="slogan-topline">
                            Turkey project solution<br/>
                        </span>
                        <span class="slogan-botline">
                            - We buils assets -
                        </span>
                        
                    </div>
                    <div class="top-right-menu">
                        <div class="corp-code">
                            <span class="corp-text">
                                Corp Code:<br/>
                            </span>
                            
                            <span class="upg">UPG</span>
                        </div>
                        <div class="news">
                            News 1: Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
                <div class="bot-menu">
                    <div class="main-menu-wraper container-fluid">
                        <div class="main-menu-item">
                            <a href="{{ asset('/')}}">
                                Home
                            </a>
                        </div>
                        <div class="main-menu-item">
                            <a href="{{ asset('/#why-us')}}">
                                @lang('messages.menu_why_us')
                            </a>
                        </div>
                        <div class="main-menu-item">
                            <a href="{{ asset('/#our-service')}}">
                                @lang('messages.menu_services')
                            </a>
                        </div>
                        <div class="main-menu-item">
                            <a href="{{ asset('/')}}">
                                <img src="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" alt="">
                                <span class="logo-slogan">UC PHAT GLOBAL</span>
                            </a>
                        </div>
                        <div class="main-menu-item">
                            <a href="{{ asset('/#our-projects')}}">
                                @lang('messages.menu_projects')
                            </a>
                        </div>
                        <div class="main-menu-item">
                            <a href="{{ asset('/#contact-us')}}">
                                @lang('messages.menu_contact_us')
                            </a>
                        </div>
                        <div class="main-menu-item">
                            <a >
                                Language
                            </a>
                        </div>
                    </div>
                </div>
            </header>

            <div id="main" class="site-main clearfix">
                <div id="main" class="site-main clearfix" style="">
                    
                    <div class="breadcumb-cover">
                        <div class="info container" style="padding-bottom: 20px;">
                            <span class="bread-title">
                                <i class="fa fa-lg fa-home"></i>
                                <a href="{{ asset('/#projects') }}"> @lang('messages.project_detail_breadcumb_home') </a>
                            </span>

                            <span class="bread-title">
                                <i class="fa fa-lg fa-caret-right"></i>
                                <a href="{{ asset('project') }}"> @lang('messages.project_detail_breadcumb_project') </a>
                            </span>
                            <span class="bread-title">
                                <i class="fa fa-lg fa-caret-right"></i>

                                @switch( Config::get('app.locale') )
                                    @case('vi')
                                        {{ $project_item->pro_ten_vi }}
                                        @break
                                    @case('en')
                                        {{ $project_item->pro_ten_en }}
                                        @break
                                    @case('zh')
                                        {{ $project_item->pro_ten_zh }}
                                        @break
                                    @case('ja')
                                        {{ $project_item->pro_ten_ja }}
                                        @break
                                    @case('kr')
                                        {{ $project_item->pro_ten_kr }}
                                        @break
                                @endswitch   
                            </span>
                        </div>
                    </div>
                   

                    <section id="content" class="clearfix">
                        <div class="room-detail-wrap wrapper clearfix" style="padding-top: 20px; padding-bottom: 0; background: transparent;">
                            <div class="container" style="">
                                <!--Breadcumb-->
                                

                                <div class="row">
                                    <div class="clearfix" style="margin-bottom: 40px;">
                                        <div id="detail-main-zone" class="room-slider col-md-6">
                                            


                                            <style>
                                                #header-img{
                                                    display: flex;
                                                    flex-direction: row;
                                                    justify-content: space-between;
                                                    padding: 0 0 20px 0;
                                                    margin-bottom: 40px;
                                                }
                                                #header-img .header-img-item{
                                                    width: 32%;
                                                    height: auto;
                                                    background: #2f2f2f;
                                                    padding: 4px;
                                                }
                                                #header-img .header-img-1{
                                                    
                                                }
                                                #header-img .header-img-2{
                                                    position: relative;
                                                    bottom: -20px;
                                                }
                                                #header-img .header-img-3{
                                                    position: relative;
                                                    bottom: -40px;
                                                }
                                            </style>

                                            <div id="header-img">
                                                <img class="header-img-item header-img-1" src="@if($project_item->pro_catalouge_1 != '') {{ asset('public/upload/product/'.$project_item->pro_catalouge_1) }} @else {{ asset('public/upload/template/blank1.jpg') }} @endif" alt="">
                                                <img class="header-img-item header-img-2" src="@if($project_item->pro_catalouge_2 != '') {{ asset('public/upload/product/'.$project_item->pro_catalouge_2) }} @else {{ asset('public/upload/template/blank1.jpg') }} @endif" alt="">
                                                <img class="header-img-item header-img-3" src="@if($project_item->pro_catalouge_3 != '') {{ asset('public/upload/product/'.$project_item->pro_catalouge_3) }} @else {{ asset('public/upload/template/blank1.jpg') }} @endif" alt="">
                                            </div>



                                            <img data-u="image" src="{{ asset('public/upload/product/'.$project_item->pro_thumb) }}" />

                                            <!--Old thumbnail version-->
                                            
                                            <!-- #endregion Jssor Slider End -->


                                            <div class="col-md-12 col-sm-12">
                                                <style>
                                                    #project-detail-cover{
                                                        position: relative;
                                                        padding-top: 20px;
                                                    }
                                                    #project-nation-flag{
                                                        padding: 0;
                                                        margin: 0;
                                                        display: flex;
                                                        align-items: center;
                                                    }
                                                    #project-nation-flag img{
                                                        border: 1px solid;
                                                    }
                                                    .project-info-name{
                                                        font-size: 1.5em;
                                                        font-weight: bold;
                                                        color: #8e0c0c;
                                                        padding-left: 5px;
                                                        font-family: 'Alexandria', sans-serif;
                                                    }
                                                    #project-nation-flag div{
                                                        float: left;
                                                    }
                                                    #table{
                                                        margin-left: 40px;
                                                        background: transparent;
                                                    }
                                                    #info-table .table-title{
                                                        width: 25%;
                                                        font-family: 'Alexandria', sans-serif;
                                                    }
                                                    @media(max-width: 768px){
                                                        #table{
                                                            margin: 0;
                                                        }
                                                        #info-table .table-title{
                                                            width: 35%;
                                                        }
                                                    }
                                                </style>
                                                
                                                <div id="project-detail-cover">
                                                    <div id="project-nation-flag" class="row">
                                                        <div>
                                                            @foreach ($nation_list as $nation_item)
                                                                @if($nation_item->nation_id == $project_item->pro_nation)
                                                                <img src="{{ asset('public/upload/nation/'.$nation_item->nation_id.'.png') }}" width="35px" alt="">
                                                                    {{-- {{ Config::get('app.locale') == 'en' ? $nation_item->nation_name_en : ( Config::get('app.locale') == 'zh' ? $nation_item->nation_name_zh_tra : $nation_item->nation_name_ja ) }} --}}
                                                                @endif
                                                            @endforeach
                                                            
                                                        </div>
                                                        <span class="project-info-name">
                                                            @switch( Config::get('app.locale') )
                                                                @case('vi')
                                                                    {{ $project_item->pro_ten_vi }}
                                                                    @break
                                                                @case('en')
                                                                    {{ $project_item->pro_ten_en }}
                                                                    @break
                                                                @case('zh')
                                                                    {{ $project_item->pro_ten_zh }}
                                                                    @break
                                                                @case('ja')
                                                                    {{ $project_item->pro_ten_ja }}
                                                                    @break
                                                                @case('kr')
                                                                    {{ $project_item->pro_ten_kr }}
                                                                    @break
                                                            @endswitch   
                                                        </span>
                                                    </div>
                                                    <table id="table" class="table">
                                                        <tbody id="info-table">

                                                            @if($project_item->pro_mgd_team == true)
                                                            <tr>
                                                                <td colspan="2" style="font-weight: bold; color: #3064a4; ">Made by MGD team</td>
                                                            </tr>
                                                            @endif


                                                            <!--Location-->
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_location')</strong></td>
                                                                <td class="table-box" style="">
                                                                    :   @foreach ($location_list as $location_item)
                                                                            @if($location_item->locate_id == $project_item->pro_location_id)
                                                                                @switch( Config::get('app.locale') )
                                                                                    @case('vi')
                                                                                        {{ $location_item->locate_name_vi }}
                                                                                        @break
                                                                                    @case('en')
                                                                                        {{ $location_item->locate_name_en }}
                                                                                        @break
                                                                                    @case('zh')
                                                                                        {{ $location_item->locate_name_zh }}
                                                                                        @break
                                                                                    @case('ja')
                                                                                        {{ $location_item->locate_name_ja }}
                                                                                        @break
                                                                                    @case('kr')
                                                                                        {{ $location_item->locate_name_kr }}
                                                                                        @break
                                                                                @endswitch 
                                                                            @endif
                                                                        @endforeach 
                                                                </td>
                                                            </tr>

                                                            
    
                                                            <!--Owner-->
                                                            
                                                            @if($project_item->pro_owner_en  != '')
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_investor')</strong></td>
                                                                <td class="table-box">: {{ $project_item->pro_owner_en }}</td>
                                                            </tr>
                                                            @endif
    
                                                            <!--Floor area-->
                                                            @if($project_item->pro_area  != '')
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_area')</strong></td>
                                                                <td class="table-box">: {{ number_format($project_item->pro_area, 0, ',', '.') }} m2</td>
                                                            </tr>
                                                            @endif

                                                            <!--Land area-->
                                                            @if($project_item->pro_land_area  != '')
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_land')</strong></td>
                                                                <td class="table-box">: {{ number_format($project_item->pro_land_area, 0, ',', '.') }} m2</td>
                                                            </tr>
                                                            @endif
        
                                                            {{-- <!--General contractor-->
                                                            <tr>
                                                                <td class="table-box table-title"><strong>General Contractor:</strong></td>
                                                                <td class="table-box">: SAKURA COLOR PRODUCTS OF VIETNAM CO., LTD</td>
                                                            </tr> --}}
    
                                                            <!--Construction contractor-->
                                                            @if( $project_item->pro_contractor != '' )
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_contractor')</strong></td>
                                                                <td class="table-box">: {{ $project_item->pro_contractor }}</td>
                                                            </tr>
                                                            @endif


                                                            <!--Scope of work-->
                                                            @if( $project_item->pro_scope_work != '' )
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_scope_of_work')</strong></td>
                                                                <td class="table-box">: {{ $project_item->pro_scope_work }}</td>
                                                            </tr>
                                                            @endif


                                                            <!--Industrial park-->
                                                            @if( $project_item->pro_induspark != '' )
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_industrial_park')</strong></td>
                                                                <td class="table-box">: {{ $project_item->pro_induspark }}</td>
                                                            </tr>
                                                            @endif
        
                                                            <!--Major-->
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_major')</strong></td>
                                                                <td class="table-box">
                                                                    :   @foreach ($major_list as $major_item)
                                                                            @if($major_item->major_id == $project_item->pro_major_id)
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
                                                                            @endif
                                                                        @endforeach    
                                                                </td>
                                                            </tr>


                                                        
    
															
                                                            <!--Status-->
                                                            @if($project_item->pro_status != 'unknow')
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_status')</strong></td>
                                                                <td class="table-box">
                                                                    :   @if($project_item->pro_status == 'ongoing')
                                                                            @lang('messages.project_detail_status_on_going')
                                                                        @elseif($project_item->pro_status == 'finished')
                                                                            @lang('messages.project_detail_status_finished')
                                                                        @endif
                                                                </td>
                                                            </tr>
                                                            @endif


															@if( Auth::check() )
                                                            <!--3D Render Video-->
                                                            @if($project_item->pro_3d_video  != '')
                                                                <tr>
                                                                    <td class="table-box table-title"><strong>@lang('messages.project_detail_3d_video')</strong></td>
                                                                    <td class="table-box">
                                                                        :   <a href="{{ $project_item->pro_3d_video }}" target="_blank" style="font-weight: bold; color: rgb(22, 59, 90)">Link</a>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            <!--4D video-->
                                                            @if($project_item->pro_4d_video != '')
                                                                <tr>
                                                                    <td class="table-box table-title"><strong>@lang('messages.project_detail_4d_video')</strong></td>
                                                                    <td class="table-box">
                                                                        :   <a href="{{ $project_item->pro_4d_video }}" target="_blank" style="font-weight: bold; color: rgb(22, 59, 90)">Link</a>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            <!--Progress video-->
                                                            @if($project_item->pro_progress_video != '')
                                                                <tr>
                                                                    <td class="table-box table-title"><strong>@lang('messages.project_detail_progress_video')</strong></td>
                                                                    <td class="table-box">
                                                                        :   <a href="{{ $project_item->pro_progress_video }}" target="_blank" style="font-weight: bold; color: rgb(22, 59, 90)">Link</a>
                                                                    </td>
                                                                </tr>
                                                            @endif
															@endif
    
                                                            <!--Time-->
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_time')</strong></td>
                                                                <td class="table-box">: {{ \Carbon\Carbon::parse($project_item->pro_time_work)->format('Y')}}</td>
                                                            </tr>

                                                            
        
        
                                                         
                                                        </tbody>
                                                    </table>
                                                </div>
    
                                            </div>
                                            
                                        </div>


                                        


                                        <style>
                                            table{
                                                background: #fff !important;
                                                padding: 1px;
                                                margin: 0;
                                            }
                                            table tr td{
                                            }
                                            #extra-photo{
                                                float: right;
                                            }
                                            #extra-photo .row-1{

                                            }
                                            #extra-photo .row-2{
                                                min-height: 50px;
                                            }
                                            #extra-photo .extra-img{
                                                border: 2px solid;
                                                padding: 5px;
                                            }
                                            #extra-photo .extra-img img{
                                                
                                                
                                            }
                                            #extra-photo .extra-img-1{
                                                width: 40%;
                                                float: left;
                                            }
                                            #extra-photo .extra-img-1 img{
                                                height: 220px;
                                                width: 100%;
                                            }
                                            #extra-photo .extra-img-2{
                                                width: 60%;
                                                float: right;
                                            }
                                            #extra-photo .extra-img-2 img{
                                                height: 220px;
                                                width: 100%;
                                            }
                                            #extra-photo .extra-img-3{
                                                width: 40%;
                                                float: right;
                                                
                                            }
                                            #extra-photo .extra-img-3 img{
                                                
                                            }
                                            #extra-photo .extra-img-4{
                                                width: 60%;
                                                float: left;
                                            }
                                            #extra-photo .extra-img-4 img{
                                                
                                            }
                                            #extra-photo .extra-img-5{
                                                width: 100%;
                                            }
                                            #extra-photo .extra-img-5 img{
                                                
                                            }
                                        </style>
                                        <div class="col-md-6">
                                            <div id="extra-photo" class="">
                                                
                                                <table style="">
                                                    <tr>
                                                        <td class="extra-img extra-img-1" style="border-right: none; border-bottom: none;">
                                                            <img class="" src="@if($project_item->pro_catalouge_4 != '') {{ asset('public/upload/product/'.$project_item->pro_catalouge_4) }} @else {{ asset('public/upload/template/blank4.jpg') }} @endif" alt="">
                                                        </td>
                                                        <td class="extra-img extra-img-2" style="border-bottom: none;">
                                                            <img class="" src="@if($project_item->pro_catalouge_5 != '') {{ asset('public/upload/product/'.$project_item->pro_catalouge_5) }} @else {{ asset('public/upload/template/blank5.jpg') }} @endif" alt="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="extra-img extra-img-1" style="border-right: none; border-bottom: none;">
                                                            <img class="" src="@if($project_item->pro_catalouge_6 != '') {{ asset('public/upload/product/'.$project_item->pro_catalouge_6) }} @else {{ asset('public/upload/template/blank4.jpg') }} @endif" alt="">
                                                        </td>
                                                        <td class="extra-img extra-img-2" style="border-bottom: none;">
                                                            <img class="" src="@if($project_item->pro_catalouge_7 != '') {{ asset('public/upload/product/'.$project_item->pro_catalouge_7) }} @else {{ asset('public/upload/template/blank5.jpg') }} @endif" alt="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="extra-img extra-img-5" colspan="2">
                                                            <img class="" src="@if($project_item->pro_catalouge_8 != '') {{ asset('public/upload/product/'.$project_item->pro_catalouge_8) }} @else {{ asset('public/upload/template/blank8.jpg') }} @endif" alt="">
                                                        </td>
                                                    </tr>

                                                </table>

  



                                            </div>
                                        </div>

                                        
                                    </div>

                                    <!--Project description-->
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <style>
                .owl-item {
                    height: 100vh !important;
                    display: flex !important;
                    align-items: center !important;
                }
                .img-zoom-cover{
                    margin-bottom: 0; 
                    margin-top: 0; 
                    height: 100vh; 
                    padding-top: 20px; 
                    padding-bottom: 40px;
                }
                .img-zoom{
                    height: ; 
                    width: 80%; 
                    margin: 0 auto;
                }
                @media (max-width: 768px){
                    .img-zoom-cover{
                        padding-top: 5px !important; 
                        padding-bottom: 5px !important;
                    }
                    .img-zoom{
                        width: 100% !important; 
                    }
                    .project-content > div .project-details .container{
                        margin-top: 0px !important;
                    }
                }
            </style>

            <!--Zoom slide item-->
            <div class="project-content" id="project_photo">
                <span class="icon-close"><i class="pe-7s-close-circle"></i></span>
                <div>
                    <div class="project-details">
                        <div class="container img-zoom-cover" style="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="owl-carousel">
                                        <!--Project thumb-->
                                        <div class="zoom-img col-lg-12 col-md-12 col-sm-12">
                                            <img style="" class="img-zoom" alt="" src="{{ asset('public/upload/product/1597129791SKAbia.png') }}" />
                                        </div>

                                        <!--Photo-->
                                        <!--If user login-->
                                        <!--If user logout-->
                                        <div class="zoom-img col-lg-12 col-md-12 col-sm-12">
                                            <img style="" class="img-zoom" alt="" src="{{ asset('public/upload/product/1597129791SKAbia.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End zoom slide item-->

            <style>
                .margin-left-15{
                    margin-left: 15px;
                }
            
                #footer{
                    height: 20vh;
                    background: #d9d9d9;
                    text-align: center;
                }
                #footer .logo-img img{
                    margin: auto;
                    margin-bottom: 20px;
                }
                #footer .copyright{
                    font-size: 11px;
                    font-weight: 500;
                    letter-spacing: 1px;
                    margin-bottom: 2px;
                    text-transform: uppercase;
                    font-family: 'Alexandria', sans-serif;
                }
                
            </style>
            
            <!-- Start Footer -->
            <div id="footer" class="section footer-section light-section">

                <div class="container">
                
                    <div class="row">
                    
                        <div class="col-md-12">
                            <!-- Footer Logo -->
                            <div class="logo-img"><img alt="" width="100px" src="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" /></div>
                            
                            <div class="copyright">All rights reserved. Copyright © 2022 <a class="accent-color" href="#">TuanAnhDinh.vn</a></div>
                            
                        </div>
                    
                    </div>
                
                </div>
                
            </div>
            <!-- End Footer -->

            <script>
                $(".room-slider .flexslider").flexslider({
                    animation: "slide",
                    controlNav: "thumbnails",
                });

                $(".gapura_room .flexslider").flexslider({
                    animation: "slide",
                    controlNav: true,
                });
            </script>
        </div>

        <!--Extra zoom slide-->
        <!--   file for adding vertical points where we activate the elements animation   -->
        <script type="text/javascript" src="https://demos.creative-tim.com/rubik/assets/js/jquery.waypoints.min.js"></script>
        <!--   file where we handle all the script from the Rubik page   -->
        <script type="text/javascript" src="https://demos.creative-tim.com/rubik/assets/js/rubick.js"></script>

        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

        <script>
            $(document).ready(function () {
                $(".owl-carousel").owlCarousel({
                    loop: true,
                    nav: true,
                    dots: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        600: {
                            items: 1,
                        },
                        1000: {
                            items: 1,
                        },
                    },
                });
            });

            $(document).ready(function () {
                $(".zoom-img").hover(function () {
                    $(this).removeClass("grabbing").addClass("grab");
                });
                $(".zoom-img").mousedown(function () {
                    $(this).removeClass("grab").addClass("grabbing");
                });
                $(".zoom-img").mouseup(function () {
                    $(this).removeClass("grabbing").addClass("grab");
                });
            });
        </script>
        <!--End Extra zoom slide-->



        <!--Roll down mobile main menu-->
        <script>
            $('#toggle-mobile-btn').click(function(){
                $('.mobile-menu-list').toggleClass('show-mobile-menu-list');
                $(this).addClass('hide');
                $("#close-toggle-mobile-btn").removeClass('hide');
            });

            $('#close-toggle-mobile-btn').click(function(){
                $('.mobile-menu-list').toggleClass('show-mobile-menu-list');
                $(this).addClass('hide');
                $("#toggle-mobile-btn").removeClass('hide');
            });

            $('.menu-item-hide').click(function(){
                $('.mobile-menu-list').removeClass('show-mobile-menu-list');
                $('#close-toggle-mobile-btn').addClass('hide');
                $("#toggle-mobile-btn").removeClass('hide');
            });
        </script>

        <!--Roll down lang mobile-->
        <script>
            $("#roll-down-lang-mobile").click(function(){
                $(this).toggleClass('rotate-animation', 500);
                $('.lang-mobile-cover').toggleClass('hide', 500);
            });
            $(".lang-mobile-title").click(function(){
                $("#roll-down-lang-mobile").toggleClass('rotate-animation', 500);
                $('.lang-mobile-cover').toggleClass('hide', 500);
            });
        </script>


        <!--mobile lang click-->
        <script>
            $( ".mobile-lang-vi" ).click(function(e) {
                e.preventDefault();
                $(location).attr('href','https://minhglobal.com/change-language/vi');
            });
            $( ".mobile-lang-en" ).click(function(e) {
                e.preventDefault();
                $(location).attr('href','https://minhglobal.com/change-language/en');
            });
            $( ".mobile-lang-zh" ).click(function(e) {
                e.preventDefault();
                $(location).attr('href','https://minhglobal.com/change-language/zh');
            });
            $( ".mobile-lang-ja" ).click(function(e) {
                e.preventDefault();
                $(location).attr('href','https://minhglobal.com/change-language/ja');
            });
            $( ".mobile-lang-kr" ).click(function(e) {
                e.preventDefault();
                $(location).attr('href','https://minhglobal.com/change-language/kr');
            });
        </script>
    </body>
</html>
