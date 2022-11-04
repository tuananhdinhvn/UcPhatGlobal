<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Minh Global | Design, Build &amp; Development</title>
        <base href="/">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/upload/template/'. $getindex->homepage_logo_plus) }}" />
        <!-- Google Fonts -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Roboto:300,400,500,700,900" rel="stylesheet" />
        <meta name="csrf-param" content="authenticity_token" />
        <meta name="csrf-token" content="2cz2CQpZMehFLpTveoTIbZ1vgpD183EzrUWlIf/XJr8GU6Noe64MSJrnBafbw27vWyUXVa7d/5f15dtSZtqtvQ==" />
    
        <link rel="stylesheet" media="all" href="{{ asset('css/application-3663d9d313e196f76d919f7dca4bc1a83ecef45ede70ea08266a1ca585907c62.css') }}" />
        <script src="{{ asset('js/application-4482f6b21ab02b9f0dcb57094c50c9d5b2675f3051b174ed31f43d0627e9af79.js') }}"></script>
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!--external css-->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

        <!--Sweet alert-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

        <!--owl-->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

		<!--Intro cover-->
		<style>
			#intro-cover{
				width: 100%;
				height: 100vh;
				background: #fff;
				position: fixed;
				z-index: 9000;
				opacity: 1;
			}
		</style>

        <!--Scroll bar-->
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

        <!--Slider and news-->
        <style>
            .hide{
                display: none !important;
				opacity: 0 !important;
            }
            .home-slide{
                height: 100vh;
                background-repeat: no-repeat;
                background-size: cover;
                width: 100%;
                z-index: 0
            }
            #home .owl-item{
                width: 100% !important;
            }
            #head-home{
                position: relative;

            }
            #head-home .owl-nav, #head-home .owl-dots{
                display: none;
            }
            #slogan{
                position: absolute;
                top: 25vh;
                z-index: 100;
                color: white;
                left: 20%;
                right: 20%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                text-align: center;
            }
            #slogan .company-name{
                font-weight: bold !important;
                font-size: 76px !important;
                font-family: "Roboto", serif;
                color: #fff !important;
                margin-bottom: 15px;
                border-bottom: 3px solid #de2121;
                width: 500px;
            }
            #slogan .slogan-1{
                color: #fff !important;
                line-height: 1 !important;
                letter-spacing: 0.07143rem;
                font-size: 34.7px !important;
                width: 500px;
                text-align: center;
                font-style: italic;
                margin-bottom: 30px;
            }
            #slogan .slogan-2{
                color: #fff !important;
                line-height: 1 !important;
                letter-spacing: 0.07143rem;
                font-size: 66px !important;
                width: 500px;
                font-weight: bold;
            }
            #slide-black-cover{
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                background: #1f1e1ed6;
                opacity: 0.6;
                z-index: 1;
            }
            #news-btn{
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                height: 7vh;
                z-index: 11;
                background: #e22c2ce0;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                text-transform: uppercase;
                font-weight: bold;
                letter-spacing: 5px;
                font-size: 1.5em;
                cursor: pointer;
                transition: 0.5s;
            }
            #news-btn:hover{
                background: #e22c2ce0;
                text-shadow: 0 0 5px white;
            }
            

            #news-list .news-item img{
                width: 100px;
                height: auto;
            }
            #news-carousel{
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                height: 35vh;
                background: #33333f9e;
                display: flex;
                justify-content: center;
                align-items: center;
                display: none;
                z-index: 101;
                padding-top: 0px;
            }
            #news-carousel .item{
                margin-bottom: -20px
            }
            #news-carousel .item img{
                width: auto;
                height: 25vh;
                margin: 0px auto;
                padding: 10px 0 10px 0;
            }
            #news-carousel .item h3{
                text-align: center;
                font-size: 16px;
                padding: 0 20px 20px 20px;
                color: #fff;
            }
            

            @media(max-width: 768px){
                #slogan .company-name{
                    font-size: 60px !important;
                    width: 100%;
                }
                #slogan .slogan-1 {
                    font-size: 29px !important;
                    width: 100%;
                    text-align: center;
                }
                #slogan .slogan-2{
                    font-size: 50px !important;
                    width: 100%;
                }
                #slogan{
                    top: 20vh;
                }
                #news-carousel{
                    min-height: 20vh;
                    padding-top: 0px;
                }
            }
        </style>
        @if( Config::get('app.locale') == 'vi' )
        <style>
            #slogan .slogan-1{
                text-align: center !important;
                font-size: 53.7px !important;
                letter-spacing: 2px;
                margin-top: 0px;
                margin-bottom: 20px;
            }
            @media(max-width: 768px){
                #slogan .slogan-1{
                    font-size: 25.7px !important;
                    letter-spacing: 0px;
                }
            }
        </style>
        @elseif( Config::get('app.locale') == 'en' )
        <style>
            #slogan .slogan-1{
                text-align: justify !important;
            }
            @media(max-width: 768px){
                #slogan .slogan-1{
                    text-align: center !important;
                }
            }
        </style>
        @elseif( Config::get('app.locale') == 'zh' )
        <style>
            #slogan .slogan-1{
                text-align: center !important;
                font-size: 40.7px !important;
                letter-spacing: 21px;
            }
            @media(max-width: 768px){
                #slogan .slogan-1{
                    font-size: 40.7px !important;
                    letter-spacing: 11px;
                }
            }
        </style>
        @elseif( Config::get('app.locale') == 'ja' )
        <style>
            #slogan .slogan-1{
                text-align: center !important;
                font-size: 40.7px !important;
                letter-spacing: 25px;
            }
            @media(max-width: 768px){
                #slogan .slogan-1{
                    font-size: 38.7px !important;
                    letter-spacing: 11px;
                }
            }
        </style>
        @endif

        <!--Cover news-->
        <style>
            #show-cover-news{
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background: transparent;
                z-index: 100;
                display: none;
                cursor: pointer;
            }
        </style>
        

        <!--Display header PC & mobile-->
        <style>
            .main-logo {
                margin: 0 auto !important;
            }
            #mobile-header{
                display: none;
            }

            @media  only screen and (min-width: 769px) {
                .lang-list {
                    text-align: right;
                }
                .cover-menu {
                    width: 100%;
                    text-align: center;
                }
                .width-menu-pc {
                    width: 15%;
                }
                .width-logo-pc {
                    width: 10%;
                }
                #navBar a {
                    font-size: 14px !important;
                }

                #li-logo {
                    position: relative;
                }
                #li-logo > a {
                    position: absolute;
                    bottom: -25px;
                    left: -20%;
                }
            }

            @media  only screen and (max-width: 768px) {
                #mobile-header{
                    display: block;
                }
                .main-logo img {
                    width: 150px !important;
                }

                .cover-menu .nav-item > a {
                    float: right;
                    padding-top: 10px !important;
                    padding-bottom: 10px !important;
                    text-shadow: 0 0 2px white;
                }
                .cover-menu .nav-item .btn-group {
                    float: right;
                    padding-top: 10px !important;
                    padding-bottom: 10px !important;
                }
                .navbar-nav .dropdown-menu {
                    float: left;
                }
            }
        </style>


        <!--Header PC-->   
        <style>
            #header-pc{
                display: block;
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 95px;
				background: #000000ad;
				z-index: 102;
				padding-top: 15px;
            }
            #header-pc nav{
                padding-top: 12px;
            }
            #header-pc .pc-menu-item{
                list-style: none;
                color: #fff;
                text-transform: uppercase;
                font-weight: bold;
                float: left;
                display: flex;
                width: 150px;
                justify-content: center;
                align-items: center;
            }
            #header-pc .pc-menu-item a{
                color: #fff;
                text-decoration: none;
            }
            .flex-main-menu{
                display: flex;
                justify-content: space-between;
                padding: 0 5%;
                align-items: center;
            }
            .lang-menu-item{
                position: relative;
                cursor: pointer;
            }
            
            .pc-lang-list{
                position: absolute;
                right: 10px;
                top: 0px;
                transition: 0.5s;
                display: none;
                opacity: 0;
            }
            .lang-menu-item:hover .pc-lang-list{
                display: block;
                opacity: 1;
            }
            .pc-lang-list li{
                list-style: none;
                padding: 15px 21px;
                width: 120px;
                text-align: right;
                background: #000;
            }
            .pc-lang-list li:hover{
                background: #fff;
                color: #000 !important
            }
            .pc-lang-list li:hover a{
                color: #000 !important;
            }
            .pc-lang-list li a{

            }

            @media(max-width: 768px){
                #header-pc{
                    display: none;
                }
            }
        </style>

        <!--Home slider-->
        <style>
            #header-slide .slide-head-home{
                height: 100vh;
                width: 100%;
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
            }
        </style>

        <!--Why us-->
        <style>
            #why-us{
                min-height: 100vh;
            }
            #slide-why-us {
                position: relative;
            }
            #slide-why-us .item{
                height: 70vh;
            }
            #slide-why-us .item img{
                width: 100%;
                height: auto;
            }
            #slide-why-us .owl-nav .owl-prev{
                font-size: 60px;
                position: absolute !important;
                top: 44% !important;
                left: -100px;
                color: #c94645;
                border: 2px solid #c94746;
                width: 80px;
                height: 81px;
                border-radius: 50%;
            }
            #slide-why-us .owl-nav span{
                position: relative;
                top: -15px;
            }
        
            #slide-why-us .owl-nav .owl-next{
                font-size: 60px;
                position: absolute !important;
                top: 44% !important;
                right: -100px;
                color: #c94645;
                border: 2px solid #c94746;
                width: 80px;
                height: 81px;
                border-radius: 50%;
            }
            #slide-why-us .owl-next span{
                position: relative;
                top: -15px;
            }
        
            @media  only screen and (max-width: 768px) {
                #slide-why-us .owl-nav .owl-prev, #slide-why-us .owl-nav .owl-next{
                    display: none
                }
            }
        
            /* Ipad display */
            @media  only screen and (min-width: 1024px) and (max-width: 1366px) {
                #why-us{
                    min-height: 50vh;
                }
            }
        
            #number-company-list .number-item{
                display: flex;
                flex-direction: column;
                width: 12.5%;
                align-items: center;
                text-align: center;
                position: relative;
            }
            #number-company-list .number-item img{
                width: 55px;
                height: auto;
            }
            #number-company-list .number-item .number{
                margin-top: 10px;
                font-weight: 400;
                font-size: 1rem;
                font-family: "Open Sans", Helvetica, Arial, sans-serif;
                line-height: 1.6;
                color: #4e4e50;
                margin-bottom: 0;
            }
            #number-company-list .number-item .title-number{
                font-size: 13px;
                font-weight: bold;
            }
            @media    only screen and (max-width: 768px) {
                #number-company-list .number-item{
                    width: 50%;
                }
            }
        
        
            .why-us-heading-active{
                color: #c94645 !important;
                border: 1px solid #c94645 !important;
                background: white !important;
                border-bottom: none !important;
            }
            #why-us-heading{
                display: flex;
                flex-wrap: wrap;
                flex-direction: row;
                justify-content: center;
                border-bottom: 2px solid #ca4b4a;
                position: relative;
                z-index: 101;
            }
            #why-us-heading .why-us-header{
                width: 12%;
                text-align: center;
                padding: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
                margin: 0 10px;
                cursor: pointer;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                margin-bottom: -2px;
                background: transparent;
                border: 1px solid #8e8e8e;
                border-bottom: none;
                color: #a09e9e;
            }
            #why-us-heading .why-us-header:hover{
                color: #c94645;
            }
        
            #timeline-content{
                text-align: center;
            }
            #timeline-content img{
                width: 100%;
                
            }
            #timeline-content .timeline-img{
                margin-bottom: 40px;
                padding-top: 20px;
            }
            #timeline-content .timeline-img-mb{
                display: none;
            }
        
            #process-content{
                text-align: center;
            }
            #process-content img{
                width: 100%;
            }
        
            #technology-content-slide{
                margin-top: 25px;
                background: #33333f;
                padding: 30px;
                padding-top: 0;
            }
            #technology-content-slide .item{
                text-align: center;
            }
            #technology-content-slide .item img{
                margin: 0 auto;
            }
            #technology-content-slide .item h4{
                padding: 20px 0 20px 0;
                color: #fff;
            }
            #technology-content-slide .owl-nav{
                display: none;
            }
        
        
            #profile-content{
                margin-top: 20px;
                min-height: 70vh;
            }
            #profile-content .owl-nav{
                display: none;
            }
            #profile-content .item img{
                height: 500px;
                width: auto;
                margin: 0 auto;
            }
        
            .why-us-content{
                display: none;   
            }
            .why-us-active{
                display: block;
            }
        
            #profile-content img{
                width: 550px;
                display: flex;
                justify-content: center;
                margin: 0 auto;
            }
        
            @media  only screen and (max-width: 768px) {
                #why-us-heading .why-us-header{
                    width: 40%;
                    height: 55px;
                    margin-bottom: 10px;
                    background: transparent;
                    color: #8e8e8e;
                    border-radius: 15px;
                    border: 1px solid #8e8e8e;
                }
                .why-us-heading-active{
                    color: #fff!important;
                    border: 1px solid #c94645 !important;
                    background: #c94645 !important;
                    border-bottom: none !important;
                }
        
                #timeline-content .timeline-img{
                    display: none;
                }
                #timeline-content .timeline-img-mb{
                    display: block;
                }
        
                
                #profile-content img{
                    width: 100%;
                }
        
                #technology-content-slide .item h4{
                    padding: 15px 0 0px 0;
        
                }
                #technology-info .tech-photo-info{
                    width: 100%;
                }
                #technology-info .tech-photo-info:last-child{
                    margin-top: 30px;
                }
            }
        
        
            /* Ipad display */
            @media  only screen and (min-width: 1024px) and (max-width: 1366px) {
                #profile-content{
                    min-height: 30vh;
                }
            }
        
            #blur-cover-process{
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background: transparent;
                z-index: 100;
                cursor: pointer;
                display: none;
            }
        
        
            /*====Process====*/
            #process-content{
                margin-top: 20px;
                z-index: 101;
                position: relative;
            }
            .process-thumnail{
                margin-bottom: 20px;
                cursor: pointer;
            }
            .process-thumnail h4{
                padding-top: 10px
            }
            .process-thumnail strong{
                color: #c94645
            }
        
            .process-steps{
                position: relative;   
            }
            .process-steps .owl-prev{
                position: absolute;
                font-size: 80px !important;
                left: 0;
                color: #c94645 !important;
                font-weight: bold !important;
                top: 35%;
            }
            .process-steps .owl-next{
                position: absolute;
                font-size: 80px !important;
                right: 0;
                color: #c94645 !important;
                font-weight: bold !important;
                top: 35%;
            }
        
            .process-step-detail{
                /* display: none; */
            }
            .process-step-detail h4{
                position: relative;
                padding: 20px;
                margin-bottom: 40px;
            }
            .process-step-detail strong{
                color: #c94645
            }
            .process-step-detail .process-step-back-btn{
                position: absolute;
                right: 0;
                color: #c94645;
                cursor: pointer;
            }
            .process-step-detail .process-step-title-name{
                position: absolute;
                left: 0;
                padding-top: 10px;
            }
            #slide-step-1 .item img, 
            #slide-step-2 .item img, 
            #slide-step-3 .item img, 
            #slide-step-4 .item img, 
            #slide-step-5 .item img,
            #slide-step-6 .item img, 
            #slide-step-7 .item img, 
            #slide-step-8 .item img {
                width: 50%;
                margin: 0 auto
            }
            
            @media(max-width: 768px){
                .process-thumnail{
                    width: 50%; 
                }
                .process-steps .owl-nav{
                    display: none;
                }
                #slide-step-1 .item img, 
                #slide-step-2 .item img, 
                #slide-step-3 .item img, 
                #slide-step-4 .item img, 
                #slide-step-5 .item img,
                #slide-step-6 .item img, 
                #slide-step-7 .item img, 
                #slide-step-8 .item img {
                    width: 100%
                }
            }
        
        
        
            /*====Technology====*/
            #technology-content-cover{
                background: #33333f;
                margin-top: 20px;
            }
            #technology-info{
                padding: 30px 30px 0 30px;
                display: flex;
                justify-content: space-between;
            }
            #technology-info .tech-photo-info:last-child{
                float: right;
            }
            #technology-info .tech-photo-info{
                width: calc(50% - 15px);
            }
            @media(max-width: 768px){
                #technology-info .tech-photo-info{
                    width: 100%;
                }
            }
        
        
        
            /*====Company profile====*/
            .center-align{
                text-align: center;
            }
            #profile-slide{
                margin-bottom: 50px;
            }
            .download-btn{
                padding-top: 15px !important;
            }
            .download-btn a{
                background: #3d71af;
                color: white;
                padding: 10px 15px;
                border-radius: 25px;
                font-weight: bold;
                letter-spacing: 1px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .download-btn a:hover{
                text-decoration: none;
            }
        
            #profile-table tbody tr th{
                padding-top: 20px;
            }
            #profile-table tbody tr td{
                padding-top: 20px;
            }
        
            @media  only screen and (max-width: 768px) {
                #profile-table .thead-light th{
                    padding: 10px 0 10px 5px !important;
                }
            }
        
            /* Ipad display */
            @media  only screen and (min-width: 1024px) and (max-width: 1366px) {
                .profile-colum{
                    flex: 0 0 100%;
                    max-width: 100%;
                }
            }
        
        
        
        
            /*====Customer & Partners=====*/
            #customer-content{
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                margin-top: 20px;
            }
            #customer-content img{
                width: 150px;
                margin: 10px;
            }
        </style>

        <!--Service-->
        @if( Config::get('app.locale') == 'vi' )
            <style>
                .service-box .service-content{
                    padding-top: 20px !important;
                }
            </style>
        @endif

        <style>
            #service{
                min-height: 100vh;
            }
            .service-cover{
                height: 550px;
            }
            .service-box{
                height: 100%;
                padding: 0;
                position: relative;
                cursor: pointer;
            }
            .service-box img:first-child{
                
            }
            .service-box img{
                width: 100%;
                height: 100%;
            }
            
            .service-box .service-blackblur-cover{
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                z-index: 1;
                opacity: 1;
                transition: 0.5s;
            }
            .service-box:nth-child(even) .service-blackblur-cover{
                background: #33333f;
            }
            .service-box:nth-child(odd) .service-blackblur-cover{
                background: #3f3f4c;
            }
            .service-box:hover .service-blackblur-cover{
                opacity: .8;
            }
            .service-box .service-content{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 2;
                padding: 20px;
                padding-top: 50px;
            }
            
            .service-box .service-content img{
                width: 50px;
                height: auto;
            }
            .service-box .service-content h3{
                text-transform: uppercase;
                color: #fff;
                padding: 15px 0;
            }
            .service-box .service-content p{
                color: #fff;
                text-align: justify;
            }
            .service-show-content{
                background: #3f3f4c;
                padding: 25px;
            }
            .service-detail h3{
                position: relative;
                top: 5px;    
                font-size: 20px;
                width: 80%;
                padding-bottom: 5px;
            }
            .service-detail .back-service{
                position: absolute;
                right: 0;
                top: 15px;
                font-size: 25px;
                color: #3f3f4c;
                cursor: pointer;
            }
            .service-detail .service-detail-content{

            }
            .service-detail .service-detail-content p{
                color: white;
                font-size: 16px;
                text-align: justify;
            }
            .service-detail .service-detail-content img{
                width: 100%;
                height: auto;
            }
            .service-detail .service-detail-slide{
                height: 100px;
            }
            .service-detail .service-detail-slide img{
                height: 100%;
            }


            #service-design-slide, #service-management-slide, #service-construction-slide, #service-development-slide {
                padding: 15px;
                height: 100%;
            }
            .service-detail-slide h4{
                color: white
            }
            .service-detail-cover .owl-nav, .service-detail-cover .owl-dots{
                display: none
            }

            .service-detail-tab-heading{
                background: transparent;
            }
            .service-detail-tab-heading .service-detail-tab-heading-item{
                padding: 15px 0 15px 10px;
                cursor: pointer;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
            }
            .service-detail-tab-heading-item-active{
                background: #3f3f4c;
            }
            .service-detail-tab-heading-item-active h3{
                color: #fff
            }



            @media  only screen and (max-width: 768px) {
                .service-box{
                    height: 480px;
                }
                .service-box .service-bg{
                    display: none;
                }
                .service-cover{
                    height: 100%;
                }
            }

            @media  only screen and (min-width: 769px) {
            
            }

            /* Ipad display */
            @media  only screen and (min-width: 1024px) and (max-width: 1366px) {
                #service{
                    min-height: 80vh;
                }
                .service-cover{
                    height: 650px;
                }
            }
            
            /* custom service section from 769 to 1000px */
            @media  only screen and (min-width: 769px) and (max-width: 1000px) {
                #service{
                    height: 250vh;
                }
            }
            
            #service-content-detail-inside{
                position: relative;
                z-index: 2;
            }
            #service-blur-cover{
                position: fixed;
                background: transparent;
                top: 0;
                left: 0;
                height: 100vh;
                width: 100%;
                z-index: 1;
                display: none;
                cursor: pointer;
            }
        </style>

        <!--Project-->
        <style>

            

            #projects{
                min-height: 60vh;
                padding-top: 90px;
                margin-bottom: 90px;
            }
            #project-title{
                
            }
            #feture-project-title-left{
                font-weight: bold;
                text-transform: uppercase;
                letter-spacing: 1px;
                color: #3064a4;
                font-size: 15px;
                width: 250px;
                border-bottom: 2px solid #c94645;
                border-right: 2px solid #c94645;
                margin-bottom: 30px;
                margin: 0 auto;
                left: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
                padding: 10px;
            }
        
            #featured-see-all-link{
                
            }
            #see-all-link{
                margin: 0 auto;
                padding: 20px 0;
                right: 0;
                top: 0;
                width: 250px;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
                font-size: 15px;
            }
            .project-index-item-cover{
                position: relative;
                padding: 0;
                background: #cdcdcd;
            }
			
			
			
            .project-index-item{
                padding: 0;
                background: #cdcdcd;
            }
            .project-index-item:hover{
                text-decoration: none;
            }
        
            .project-index-item:hover p{
                color: #fff
            }
            
            .project-index-item img{
                width: 100%;
                height: 100%;
            }
            
            .project-index-info{
                position: relative;
                height: 40%;
            }
            .project-index-info .project-index-overview-intro{
                padding: 0;
                margin: 0;
                font-size: 0.8rem;
                padding-bottom: 10px;
                text-transform: uppercase;
                position: relative;
                top: 10px;
            }
            .project-index-info .project-index-name{
                padding: 0;
                margin: 0;
                text-transform: uppercase;
                font-weight: bold;
                color: black;
                font-size: 0.8rem;
                position: absolute;
                width: 100%;
                bottom: 50%;
            }
            .project-index-info .project-index-time{
                position: absolute;
                bottom: 25px;
                margin: 0;
                display: flex;
                justify-content: center;
                width: 100%;
                color: black;
                font-size: 0.8rem;
                font-weight: bold;
            }
            .project-index-info .index-time{
                display: block;
                font-size: 18px;
            }
        
            .project-index-item .project-index-status{
                position: absolute;
                bottom: 0;
                left: 0;
                padding: 2px 10px;
                border-radius: 0 10px 0 0;
                margin: 0;
            }
        
            .project-index-info .project-index-nation{
                width: 35px !important;
                position: absolute;
                height: auto;
                right: 15px;
                bottom: 0px;
                padding: 1px;
                background: #7d7c7c;
            }
        
            .thumb-cover{
                height: 65%;
                position: relative;
            }

            .thumb-cover:hover .main-thumbnail{
                display: none;
            }

            .project-thumb-hover{
                display: none !important ;
            }
            
            .thumb-cover:hover .project-thumb-hover{
                display: block !important ;
            }
            
            
            @media(max-width: 768px){
                .project-index-info .project-index-overview-intro{
                    top: 5px;
                    font-size: 0.8rem;
                }
                .project-index-info .project-index-name{
                    font-size: 0.9rem;
                }
                .project-index-info .project-index-time{
                    bottom: 20px;
                }
                .project-index-info .index-time{
                    font-size: 0.9rem;
                }
            }
        
        
            @media(max-width: 1025px){
                .project-index-item{
                    width: 33.3333% !important
                }
            }
        
            /* special display */
            @media(min-width: 1024px){
                #project-title{
                    height: 15vh;
                }
                #featured-see-all-link{
                    height: 5vh;
                    position: relative;
                    top: -10px;
                }
                #feture-project-title-left{
                    margin: 0;
                    position: absolute;
                }
                #see-all-link{
                    position: absolute;
                    padding: 0;
                    margin: 0;
                }
            }
            @media(min-width: 769px) and (max-width: 1024px){
                .project-index-item-cover{
                    height: 290px;
                }
                .project-index-item img{
                    height: auto; 
                }
            }
        
            @media(min-width: 1280px){
                .project-index-item-cover{
                    height: 35vh;
                }
            }
        
            /* iPad pro display */
            @media(min-width:1000px) and (max-width:1025px){
                #project-title {
                    height: 150px;
                }
                .project-index-item-cover{
                    height: 200px;
                }
                .project-index-info .project-index-name{
                    font-size: 0.9rem;
                }
                .project-index-info .project-index-time{
                    bottom: 15px;
                }
                .project-index-info .project-index-overview-intro{
                    top: 5px;
                }
            }
        </style>

        <!--Cert & CSR-->
        <style>
            #social{
                min-height: 100vh;
            }
        
            .social-heading-active{
                color: #c94645 !important;
                border: 1px solid #c94645 !important;
                background: white !important;
                border-bottom: none !important;
            }
            #social-heading{
                display: flex;
                flex-wrap: wrap;
                flex-direction: row;
                justify-content: center;
                border-bottom: 2px solid #ca4b4a;
            }
            #social-heading .social-header{
                width: 15%;
                text-align: center;
                padding: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
                margin: 0 15px;
                cursor: pointer;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                margin-bottom: -2px;
                background: transparent;
                border: 1px solid #8e8e8e;
                border-bottom: none;
                color: #a09e9e;
            }
            #social-heading .social-header:hover{
                color: #c94645 !important;
            }
            .social-content{
                display: none;
            }
            .social-active{
                display: block;
            }


            @media  only screen and (max-width: 768px) {
                #social-heading .social-header{
                    width: 40%;
                    height: 55px;
                    margin-bottom: 10px;
                    background: transparent;
                    color: #8e8e8e;
                    border-radius: 15px;
                    border: 1px solid #8e8e8e;
                }
                .social-heading-active{
                    color: #fff!important;
                    border: 1px solid #c94645 !important;
                    background: #c94645 !important;
                    border-bottom: none !important;
                }
            }

            /* Ipad display */
            @media  only screen and (min-width: 1024px) and (max-width: 1366px) {
                #social{
                    min-height: 40vh;
                }
            }
            
            #certificate-slide .owl-nav{
                display: none;
            }

            .cert-1{
                width: 100%;
                height: 100%;
            }
            .cert-2{
                width: 100%;
                height: 100%;
            }
            .cert-3{
                width: 100%;
                margin-bottom: 10px;
            }
            .cert-4{
                width: 100%;
            }
            .cert-5{
                width: 100%;
                margin-bottom: 10px;
            }
            .cert-6{
                width: 100%;
            }

            #certificate-content{
                margin-top: 20px;
            }

            .blur-active{
                filter: blur(8px);
                pointer-events: none;
                user-select: none;
            }

            .cert-row{
                justify-content: center;
            }


            .cert-item img:first-child{
                cursor: pointer;
            }

            .zoom-cert{
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
            }
            .zoom-cert img{
                height: 100%;
                z-index: 100;
            }


            @media(max-width: 768px){
                .cert-1{
                    padding-top: 20px;
                }
                .cert-2{
                    margin-bottom: 10px;
                }
                .cert-4{
                    margin-bottom: 10px;
                }
                .cert-item:nth-child(2), .cert-item:first-child{
                    margin-bottom: 10px;
                }
            }
                
            #letter-content{
                height: 70vh;
            }
            #letter-content img{
                margin: 0 auto;
                display: flex;
                height: 100%;
                width: auto;
                padding-top: 10px;
            }
            @media(max-width: 768px){
                #letter-content img{
                    width: 100%;
                }
            }
                
            #social-content{
                margin-top: 20px;
            }
            #social-slide{
                padding: 20px;
                background: #33333f;
            }
            #social-slide .social-item{
                text-align: center;
            }
            #social-slide .social-item img{
                width: 100%;
            }
            #social-slide .social-item h4{
                color: #fff;
                padding: 10px;
            }
            #social-slide .owl-nav{
                display: none;
            }
        </style>


        <!--Footer-->
        <style>
            .footer-title{
                text-transform: capitalize;
                color: #255ca0;
                font-size: 1em;
                padding-bottom: 5px;
                border-bottom: 1px solid red;
                padding-left: 0;
            }
            .margin-left-15{
                margin-left: 15px;
            }
            
            footer .g-theme-bg-blue-dark-v1{
                background-color: #3064a4 !important;
            }
            footer .g-theme-bg-blue-dark-v2{
                background-color: transparent!important;
            width: 100% !important;
            /* text-align: center; */
            /* margin: 0 auto; */
            display: flex;
            justify-content: center;
            }
            footer .g-theme-bg-blue-dark-v2 i{
                color: white;
                border-radius: 50%;
                border: 1px solid white;
                width: 40px;
                height: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .social-icon-list li{
                width: 80px;
                margin: 0 !important;

            }
            .social-icon-list li a:hover{
                background: transparent !important;
            }
            #footer-logo{
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 30px;
            }
            #footer-logo img{
                height: 70px;
            }
            .break-mobile{
                display: none;
            }
            @media(max-width: 768px){
                .break-mobile{
                    display: block;
                }

                #footer-form .form-group label{
                    padding: 0 !important;
                }
                #footer-form .form-group div{
                    padding: 0 !important;
                } 
            }
        </style>

    </head>
    
  <body>
	<div id="intro-cover"></div>
    <main>

        @include('frontend.layout.index-mobile-header')        

        @include('frontend.layout.header')

        @include('frontend.layout.home-slider')    
        
        @include('frontend.layout.why-us')

        @include('frontend.layout.service')

        @include('frontend.layout.project')

        @include('frontend.layout.csr')

        <footer id="contact-us" class="" style="padding-top: .71429rem;">
            <div id="contact" class="g-mb-20 g-mt-70">

                <div class="container-fluid row ">
                    <div class="col-md-7 col-sm-12">
                        
                        <h3 class="g-pa-30 "><span class="col-sm-12 footer-title">@lang('messages.contact_head_office')</span></h3>
                        <div class="g-pa-30 g-pt-0 ">
                            <span class="col-md-4 col-sm-12">
                                <i class="fa fa-2x fa-map-marker" style="color: #c94645;"></i> <span class="g-pa-10">@lang('messages.contact_address')</span>
                            </span><br class="break-mobile"/>
                            <strong class="cold-md-8 col-sm-12 g-font-size-14 g-color-black">
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
                            </strong>
                        </div>

                        @switch( Config::get('app.locale') )
                            @case('vi')
                                @if( $setting_info[0]->st_diachi_office_vi != '')
                                <div class="g-pa-30 g-pt-0 ">
                                    <span class="col-md-4 col-sm-12">
                                        <i class="fa fa-2x fa-building" style="color: #c94645;"></i> <span class="g-pa-10">Office</span>
                                    </span><br class="break-mobile"/>
                                    <strong class="cold-md-8 col-sm-12 g-font-size-14 g-color-black" style="">
                                        {{ $setting_info[0]->st_diachi_office_vi }}
                                    </strong>
                                </div>
                                @endif
                                @break

                            @case('en')
                                @if( $setting_info[0]->st_diachi_office_en != '')
                                <div class="g-pa-30 g-pt-0 ">
                                    <span class="col-md-4 col-sm-12">
                                        <i class="fa fa-2x fa-building" style="color: #c94645;"></i> <span class="g-pa-10">Office</span>
                                    </span><br class="break-mobile"/>
                                    <strong class="cold-md-8 col-sm-12 g-font-size-14 g-color-black" style="">
                                        {{ $setting_info[0]->st_diachi_office_en }}
                                    </strong>
                                </div>
                                @endif
                                @break

                            @case('zh')
                                @if( $setting_info[0]->st_diachi_office_zh != '')
                                <div class="g-pa-30 g-pt-0 ">
                                    <span class="col-md-4 col-sm-12">
                                        <i class="fa fa-2x fa-building" style="color: #c94645;"></i> <span class="g-pa-10">Office</span>
                                    </span><br class="break-mobile"/>
                                    <strong class="cold-md-8 col-sm-12 g-font-size-14 g-color-black" style="">
                                        {{ $setting_info[0]->st_diachi_office_zh }}
                                    </strong>
                                </div>
                                @endif
                                @break

                            @case('ja')
                                @if( $setting_info[0]->st_diachi_office_ja != '')
                                <div class="g-pa-30 g-pt-0 ">
                                    <span class="col-md-4 col-sm-12">
                                        <i class="fa fa-2x fa-building" style="color: #c94645;"></i> <span class="g-pa-10">Office</span>
                                    </span><br class="break-mobile"/>
                                    <strong class="cold-md-8 col-sm-12 g-font-size-14 g-color-black" style="">
                                        {{ $setting_info[0]->st_diachi_office_ja }}
                                    </strong>
                                </div>
                                @endif
                                @break

                            @case('kr')
                                @if( $setting_info[0]->st_diachi_office_kr != '')
                                <div class="g-pa-30 g-pt-0 ">
                                    <span class="col-md-4 col-sm-12">
                                        <i class="fa fa-2x fa-building" style="color: #c94645;"></i> <span class="g-pa-10">@lang('messages.contact_label_office')</span>
                                    </span><br class="break-mobile"/>
                                    <strong class="cold-md-8 col-sm-12 g-font-size-14 g-color-black" style="">
                                        {{ $setting_info[0]->st_diachi_office_kr }}
                                    </strong>
                                </div>
                                @endif
                                @break

                        @endswitch
                        
                        <div class="g-pa-30 g-pt-0 ">
                            <span class="col-md-4 col-sm-12">
                                <i class="fa fa-2x fa-phone" style="color: #c94645;"></i> <span class="g-pa-10">@lang('messages.contact_label_phone')</span>
                            </span><br class="break-mobile"/>
                            <strong class="cold-md-8 col-sm-12 g-font-size-14 g-color-black" @if( Config::get('app.locale') == 'kr' ) style="padding: 5px;" @endif>
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
                            </strong>
                        </div>

                        <div class="g-pa-30 g-pt-0 ">
                            <span class="col-md-4 col-sm-12">
                                <i class="fa fa-2x fa-envelope" style="color: #c94645;"></i> <span class="g-pa-10">@lang('messages.contact_email')</span>
                            </span><br class="break-mobile"/>
                            <strong class="cold-md-8 col-sm-12 g-font-size-14 g-color-black">
                                <a class="g-color-black g-color-black--hover" href="mailto:
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
                                    @endswitch">
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
                            </strong>
                        </div>

                        <div class="g-pa-30">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1959.6496583560074!2d106.69709459748384!3d10.788371846340993!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2cfa0b714bfec75a!2zQ8O0bmcgdHkgQ-G7lSBwaOG6p24gxJDhuqd1IHTGsCBQaMOhdCB0cmnhu4NuIE1pbmggR2xvYmFs!5e0!3m2!1svi!2s!4v1605838682750!5m2!1svi!2s"
                                width="100%"
                                height="300"
                                frameborder="0"
                                style="border: 0;"
                                allowfullscreen=""
                                aria-hidden="false"
                                tabindex="0"
                            ></iframe>
                        </div>

                        
                    </div>

                    <div class="col-md-5 col-sm-12">
                        <h3 class="g-pa-30 "><span class="col-sm-12 footer-title">@lang('messages.contact_title')</span></h3>
                        <div class=" g-pt-0 margin-left-15 ">
                            <form action="save-data" class="g-mb-30" accept-charset="UTF-8" method="POST">
                                <div class="form-group row g-mb-25">
                                    <label for="example-text-input" class="col-lg-2 col-sm-12 col-form-label"><strong>@lang('messages.contact_label_name'):</strong> </label>
                                    <div class="col-lg-10 col-sm-12">
                                        <input class="form-control rounded-0 form-control-md" placeholder="@lang('messages.contact_placeholder_name')" type="text" name="cust_ten" id="contact_name" />
                                    </div>
                                </div>
                                <div class="form-group row g-mb-25">
                                    <label for="example-text-input" class="col-lg-2 col-sm-12 col-form-label"><strong>@lang('messages.contact_label_phone'):</strong></label>
                                    <div class="col-lg-10 col-sm-12">
                                        <input class="form-control rounded-0 form-control-md" placeholder="@lang('messages.contact_placeholder_phone')" type="text" name="cust_phone" id="contact_phone" />
                                    </div>
                                </div>
                                <div class="form-group row g-mb-25">
                                    <label for="example-text-input" class="col-lg-2 col-sm-12 col-form-label"><strong>@lang('messages.contact_label_email'):</strong></label>
                                    <div class="col-lg-10 col-sm-12">
                                        <input class="form-control rounded-0 form-control-md" placeholder="@lang('messages.contact_placeholder_email')" type="text" name="cust_email" id="contact_email" />
                                    </div>
                                </div>
            
                                <div class="form-group row g-mb-25">
                                    <label for="example-text-input" class="col-lg-2 col-sm-12 col-form-label"><strong>@lang('messages.contact_label_message'):</strong></label>
                                    <div class="col-lg-10 col-sm-12">
                                        <textarea class="form-control rounded-0 form-control-md" placeholder="@lang('messages.contact_placeholder_message')" name="cust_noidung" id="contact_message" rows="7"></textarea>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input
                                        type="submit"
                                        style="border: 1px solid;"
                                        name="commit"
                                        value="@lang('messages.contact_submit_btn')"
                                        class="btn u-btn-primary btn-md text-uppercase g-line-height-1 g-font-weight-700 g-font-size-11 rounded-0 g-py-12 g-px-25 mb-0"
                                        data-disable-with="Submit"
                                    />
                                </div>
                                {{ csrf_field() }}
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>

        

            

            <div class="text-center g-color-gray-dark-v5 g-theme-bg-blue-dark-v1 g-py-40">
                <a id="footer-logo">
                    <img src="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" alt="">
                </a>

                <ul class="social-icon-list list-inline d-inline-block mb-0">
                   
                    <li class="list-inline-item g-mr-10">
                        <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-theme-bg-blue-dark-v2 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" href="https://www.facebook.com/minhglobaldevelopment">
                            <i class="fa fa-1x fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item g-mr-10">
                        <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-theme-bg-blue-dark-v2 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" href="{{ $setting_info[0]->st_youtube }}">
                            <i class="fa fa-1x fa-youtube"></i>
                        </a>
                    </li>
                    
                </ul>
				
				<p style="padding-top: 20px; margin: 0;">@Developed by <a href="https://tuananhdinh.vn/" target="_blank" style="color: #b9afaf;
    text-decoration: none;">TuanAnhDinh</a></p>
            </div>
		

        </footer>

        <div id="show-cover-news"></div>

        <!-- JS Plugins Init. -->
        <script>
            // initialization of google map
            function initMap() {
                $.HSCore.components.HSGMap.init('.js-g-map');
            }

            $(document).on('ready', function () {
                // initialization of carousel
                $.HSCore.components.HSCarousel.init('.js-carousel');

                // initialization of header
                $.HSCore.components.HSHeader.init($('#mobile-header'));
                $.HSCore.helpers.HSHamburgers.init('.hamburger');

                // initialization of tabs
                $.HSCore.components.HSTabs.init('[role="tablist"]');

                // initialization of go to section
                $.HSCore.components.HSGoTo.init('.js-go-to');

                $('#processes [role="tablist"] .nav-link').on('click', function () {
                setTimeout(function () {
                    $('#processesTabs .js-carousel').slick('setPosition');
                }, 200);
                });
            });

            $(window).on('load', function() {
                // initialization of HSScrollNav
                $.HSCore.components.HSScrollNav.init($('.js-scroll-nav'), {
                duration: 700
                });
            });

            $(window).on('resize', function () {
                setTimeout(function () {
                $.HSCore.components.HSTabs.init('[role="tablist"]');
                }, 200);
            });
        </script>
        <script>
            $(document).on('ready', function () {
                // initialization of counters
                var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');
            });
        </script>
        <script >
            $(document).on('ready', function () {
            // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox');
            });
        </script>


        <!-- Sweet alert -->
        <script src="{{ asset('public/admin/js/sweetalert2.all.min.js') }}"></script>
                
        <!--owl-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

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
                $(location).attr('href','change-language/vi');
            });
            $( ".mobile-lang-en" ).click(function(e) {
                e.preventDefault();
                $(location).attr('href','change-language/en');
            });
            $( ".mobile-lang-zh" ).click(function(e) {
                e.preventDefault();
                $(location).attr('href','change-language/zh');
            });
            $( ".mobile-lang-ja" ).click(function(e) {
                e.preventDefault();
                $(location).attr('href','change-language/ja');
            });
            $( ".mobile-lang-kr" ).click(function(e) {
                e.preventDefault();
                $(location).attr('href','change-language/kr');
            });
        </script>

        <!--Scroll main menu-->
        <script>
            $(document).on('ready', function () {
                $( ".scroll-menu a" ).click(function(e) {
                    e.preventDefault();
                    part = $(this).attr('href');

                    position = $(part).offset().top;
                    $('html, body').animate({scrollTop: position}, 500);

                });

                $( ".menu-item-mobile a" ).click(function(e) {
                    e.preventDefault();
                    part = $(this).attr('href');

                    position = $(part).offset().top;
                    $('html, body').animate({scrollTop: position}, 500);

                });
            });
        </script>

        <!--Main home slide-->
        <script>
			
			$('#header-slide').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                autoplay:true,
				autoplayTimeout:<?php echo $whyus_intro->main_slide_speed_load ?>,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            })
			
			
           
        </script>

        <!--Show/Hide news-->
        <script>
            $( "#news-btn" ).click(function() {
                $(this).hide();
                $( "#show-cover-news" ).show();
                $( "#news-carousel" ).fadeIn();
            });

            $( "#show-cover-news" ).click(function() {
                $(this).hide();
                $( "#news-btn" ).show();
                $( "#news-carousel" ).fadeOut(500);
            });
        </script>

        <!--News slide-->
        <script>

            $('#news-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                autoplay:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            })

        </script>

        <!--Why us slide-->
        <script>
            $('#slide-why-us').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                autoplay:true,
                autoplayTimeout:5000,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:1,
                        nav:false
                    },
                    1000:{
                        items:1,
                        nav:true,
                        loop:false
                    }
                }
            });
        </script>

        <!--Why us/ timeline counter-->
        <script>
            var whyusPosition = $("#why-us").offset();


            $('.timeline-counter').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {
                    duration: <?php echo $whyus_company_timeline->whyus_number_speed ?>,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        </script>

        <!--Why us/ Process slide-->
        <script>
            $('.process-steps').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                // autoplay:true,
                autoplayTimeout:5000,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:1,
                        nav:false
                    },
                    1000:{
                        items:1,
                        nav:true,
                        loop:false
                    }
                }
            });
        </script>

        <!--Why us/ Process - Show/Hide Process detail slide-->
        <script>
            $( "#process-step-1" ).click(function() {
                $("#process-thumb-cover").hide();
                $("#step-1-detail").removeClass('hide');
                // Show blur cover process
                $("#blur-cover-process").show();
            });
            $( "#process-step-2" ).click(function() {
                $("#process-thumb-cover").hide();
                $("#step-2-detail").removeClass('hide');
                // Show blur cover process
                $("#blur-cover-process").show();
            });
            $( "#process-step-3" ).click(function() {
                $("#process-thumb-cover").hide();
                $("#step-3-detail").removeClass('hide');
                // Show blur cover process
                $("#blur-cover-process").show();
            });
            $( "#process-step-4" ).click(function() {
                $("#process-thumb-cover").hide();
                $("#step-4-detail").removeClass('hide');
                // Show blur cover process
                $("#blur-cover-process").show();
            });
            $( "#process-step-5" ).click(function() {
                $("#process-thumb-cover").hide();
                $("#step-5-detail").removeClass('hide');
                // Show blur cover process
                $("#blur-cover-process").show();
            });
            $( "#process-step-6" ).click(function() {
                $("#process-thumb-cover").hide();
                $("#step-6-detail").removeClass('hide');
                // Show blur cover process
                $("#blur-cover-process").show();
            });
            $( "#process-step-7" ).click(function() {
                $("#process-thumb-cover").hide();
                $("#step-7-detail").removeClass('hide');
                // Show blur cover process
                $("#blur-cover-process").show();
            });
            $( "#process-step-8" ).click(function() {
                $("#process-thumb-cover").hide();
                $("#step-8-detail").removeClass('hide');
                // Show blur cover process
                $("#blur-cover-process").show();
            });

            // Hide process detail when click back arrow btn
            // $( ".process-step-back-btn" ).click(function() {
            //     $(".process-step-detail").addClass('hide');
            //     $("#blur-cover-process").hide();
            //     $("#process-thumb-cover").show(500);
            // });

            // Hide process detail when click why us heading
            $( ".why-us-header" ).click(function() {
                $(".process-step-detail").addClass('hide');
                $("#blur-cover-process").hide();
                $("#process-thumb-cover").show(500);
            });
            // Hide process detail when click blur cover process
            $( "#blur-cover-process" ).click(function() {
                $(this).hide();
                $(".process-step-detail").addClass('hide');
                $("#process-thumb-cover").show(500);
            });
        </script>

        <!--Why us/ Technology slide-->
        <script>
            $('#technology-content-slide').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                autoplay:true,
                autoplayTimeout:5000,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:5,
                        nav:true,
                        loop:false
                    }
                }
            });
        </script>

        <!--Why us/ Policy slide-->
        <script>
            $('#profile-slide').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                autoplay:true,
                autoplayTimeout:5000,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:1,
                        nav:false
                    },
                    1000:{
                        items:1,
                        nav:true,
                        loop:false
                    }
                }
            });
        </script>

        <!--Show/Hide Why us tab-->
        <script>
            $( ".why-us-header" ).first().addClass('why-us-heading-active');
            $( ".why-us-content" ).first().addClass('why-us-active');


            $( ".why-us-header" ).click(function() {
                $(this).addClass('why-us-heading-active').siblings().removeClass('why-us-heading-active');
            });

            $( "#timeline-header" ).click(function() {
                $( ".why-us-content" ).removeClass('why-us-active');
                $( "#timeline-content" ).addClass('why-us-active');
            });

            $( "#process-header" ).click(function() {
                $( ".why-us-content" ).removeClass('why-us-active');
                $( "#process-content" ).addClass('why-us-active');
            });

            $( "#tech-header" ).click(function() {
                $( ".why-us-content" ).removeClass('why-us-active');
                $( "#technology-content-cover" ).addClass('why-us-active');
            });

            $( "#profile-header" ).click(function() {
                $( ".why-us-content" ).removeClass('why-us-active');
                $( "#profile-content" ).addClass('why-us-active');
            });

            // Transfered from CSR
            $( "#certificate-header" ).click(function() {
                $( ".why-us-content" ).removeClass('why-us-active');
                $( "#certificate-content" ).addClass('why-us-active');
            });

            $( "#thanks-letter-header" ).click(function() {
                $( ".why-us-content" ).removeClass('why-us-active');
                $( "#letter-content" ).addClass('why-us-active');
            });
            // End Transfered from CSR

            $( "#cust-header" ).click(function() {
                $( ".why-us-content" ).removeClass('why-us-active');
                $( "#customer-content-cover" ).addClass('why-us-active');
            });
        </script>

        <!--Service detail tab slide-->
        <script>

            $('#service-design-slide').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                autoplay:true,
				autoplayTimeout:5000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:4
                    },
                    1000:{
                        items:4
                    }
                }
            });

            $('#service-management-slide').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                autoplay:true,
				autoplayTimeout:5000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:4
                    },
                    1000:{
                        items:4
                    }
                }
            });

            $('#service-construction-slide').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                autoplay:true,
				autoplayTimeout:5000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:4
                    },
                    1000:{
                        items:4
                    }
                }
            });

            // $('#service-development-slide').owlCarousel({
            //     loop:true,
            //     margin:10,
            //     nav:true,
            //     autoplay:true,
			// 	autoplayTimeout:5000,
            //     responsive:{
            //         0:{
            //             items:1
            //         },
            //         600:{
            //             items:3
            //         },
            //         1000:{
            //             items:3
            //         }
            //     }
            // });


            // ------------------------------ //

            // $('#service-design-slide').owlCarousel({
            //     loop:true,
            //     margin:10,
            //     responsiveClass:true,
            //     autoplay:true,
            //     autoplayTimeout:5000,
            //     responsive:{
            //         0:{
            //             items:1,
            //             nav:false
            //         },
            //         600:{
            //             items:3,
            //             nav:false
            //         },
            //         1000:{
            //             items:3,
            //             nav:true,
            //             loop:false
            //         }
            //     }
            // });

            // $('#service-management-slide').owlCarousel({
            //     loop:true,
            //     margin:10,
            //     responsiveClass:true,
            //     autoplay:true,
            //     autoplayTimeout:5000,
            //     responsive:{
            //         0:{
            //             items:1,
            //             nav:false
            //         },
            //         600:{
            //             items:3,
            //             nav:false
            //         },
            //         1000:{
            //             items:3,
            //             nav:true,
            //             loop:false
            //         }
            //     }
            // });

            // $('#service-construction-slide').owlCarousel({
            //     loop:true,
            //     margin:10,
            //     responsiveClass:true,
            //     autoplay:true,
            //     autoplayTimeout:5000,
            //     responsive:{
            //         0:{
            //             items:1,
            //             nav:false
            //         },
            //         600:{
            //             items:3,
            //             nav:false
            //         },
            //         1000:{
            //             items:3,
            //             nav:true,
            //             loop:false
            //         }
            //     }
            // });

            $('#service-development-slide').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                autoplay:true,
                autoplayTimeout:5000,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:4,
                        nav:false
                    },
                    1000:{
                        items:4,
                        nav:true,
                        loop:false
                    }
                }
            });
        </script>


        <!--Show/Hide serive-->
        <script>
            $( "#service-design-thumb" ).click(function() {
                chose = $(this).attr('rel');
                
                // Disable service thumb and show service tab content section
                $("#service-thumb").hide();
                $("#service-content-detail").removeClass('hide');

                // Visible heading chosen
                $('.service-detail-tab-heading-item').removeClass('service-detail-tab-heading-item-active');
                $('.service-design-tab-heading').addClass('service-detail-tab-heading-item-active');

                // Visible tab content chosen
                $('.service-show-content').addClass('hide');
                $('.design-tab-content').removeClass('hide');

                // Visible blur cover
                $('#service-blur-cover').show();
            });

            $( "#service-management-thumb" ).click(function() {
                chose = $(this).attr('rel');
                
                // Disable service thumb and show service tab content section
                $("#service-thumb").hide();
                $("#service-content-detail").removeClass('hide');

                // Visible heading chosen
                $('.service-detail-tab-heading-item').removeClass('service-detail-tab-heading-item-active');
                $('.service-management-tab-heading').addClass('service-detail-tab-heading-item-active');

                // Visible tab content chosen
                $('.service-show-content').addClass('hide');
                $('.management-tab-content').removeClass('hide');

                // Visible blur cover
                $('#service-blur-cover').show();
            });

            $( "#service-construction-thumb" ).click(function() {
                chose = $(this).attr('rel');
                
                // Disable service thumb and show service tab content section
                $("#service-thumb").hide();
                $("#service-content-detail").removeClass('hide');

                // Visible heading chosen
                $('.service-detail-tab-heading-item').removeClass('service-detail-tab-heading-item-active');
                $('.service-construction-tab-heading').addClass('service-detail-tab-heading-item-active');

                // Visible tab content chosen
                $('.service-show-content').addClass('hide');
                $('.construction-tab-content').removeClass('hide');

                // Visible blur cover
                $('#service-blur-cover').show();
            });

            $( "#service-development-thumb" ).click(function() {
                chose = $(this).attr('rel');
                
                // Disable service thumb and show service tab content section
                $("#service-thumb").hide();
                $("#service-content-detail").removeClass('hide');

                // Visible heading chosen
                $('.service-detail-tab-heading-item').removeClass('service-detail-tab-heading-item-active');
                $('.service-development-tab-heading').addClass('service-detail-tab-heading-item-active');

                // Visible tab content chosen
                $('.service-show-content').addClass('hide');
                $('.development-tab-content').removeClass('hide');

                // Visible blur cover
                $('#service-blur-cover').show();
            });



            $( ".back-service" ).click(function() {
                $(".service-detail-cover").addClass('hide');
                $("#service-thumb").show(500);
            });

            // Click service blur cover event
            $('#service-section-title').click(function() {
                // $(this).hide();
                $(".service-detail-cover").addClass('hide');
                $("#service-thumb").show(500);
            });

        </script>


        <!--Show/Hide serive detail tab content-->
        <script>
            $( ".service-detail-tab-heading-item" ).click(function() {
                chose = $(this).attr('rel');

                // Process tab heading
                $(this).addClass('service-detail-tab-heading-item-active').siblings().removeClass('service-detail-tab-heading-item-active');

                // Show/ Hide tab content chosen
                $('.service-show-content').addClass('hide');
                $('.'+chose).removeClass('hide');
            });

        </script>


        <!--Certificate slide-->
        <script>

            $('#certificate-slide').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                autoplay:true,
				autoplayTimeout:5000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            })

        </script>


        <!--Social activity slide-->
        <script>
            $('#social-slide').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                // autoplay:true,
                autoplayTimeout:5000,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:1,
                        nav:false
                    },
                    1000:{
                        items:2,
                        nav:true,
                        loop:false
                    }
                }
            });
        </script>


        <!--Show/Hide CRS-->
        <script>
            $( ".social-header" ).first().addClass('social-heading-active');
            $( ".social-content" ).first().addClass('social-active');

            $( ".social-header" ).click(function() {
                $(this).addClass('social-heading-active').siblings().removeClass('social-heading-active');
            });

            // Transfered to why us
            // $( "#certificate-header" ).click(function() {
            //     $( ".social-content" ).removeClass('social-active');
            //     $( "#certificate-content" ).addClass('social-active');
            //     $( "#social-title" ).text('CERT & CSR');
            // });

            // $( "#letter-header" ).click(function() {
            //     $( ".social-content" ).removeClass('social-active');
            //     $( "#letter-content" ).addClass('social-active');
            //     $( "#social-title" ).text('CERT & CSR');
            // });
            // End transfered to why us

            $( "#social-header" ).click(function() {
                $( ".social-content" ).removeClass('social-active');
                $( "#social-content" ).addClass('social-active');
                $( "#social-title" ).text('CERT & CSR');
            });
        </script>
        
        <!-- Show pop up when email register sucess -->
        <script>
            @if (Session::has('save_data_complete'))
            
                @if (Config::get('app.locale') == 'en')
                    $(document).ready(function(){
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: "Your info 're recived<br/>We 'll contact you very soon",
                            showConfirmButton: false,
                            timer: 3500
                        });
                    });

                @elseif(Config::get('app.locale') == 'zh')
                    $(document).ready(function(){
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: "收 到 您 的 信 息<br/>我 們 會 盡 快 與 您 聯 繫",
                            showConfirmButton: false,
                            timer: 3500
                        });
                    });

                @elseif(Config::get('app.locale') == 'ja')
                    $(document).ready(function(){
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: "あ な た の 情 報 が 受 信 さ れ ま す<br/>す ぐ に ご 連 絡 い た し ま す",
                            showConfirmButton: false,
                            timer: 3500
                        });
                    });

                @elseif(Config::get('app.locale') == 'kr')
                    $(document).ready(function(){
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: "귀하의 정보가 접수되었습니다<br/>곧 연락 드리겠습니다",
                            showConfirmButton: false,
                            timer: 3500
                        });
                    });
                @endif

            @endif
        </script>
			
		<!--Intro cover-->
		<script>
			$(document).ready(function(){
				$("#intro-cover").addClass('hide');
			});
		</script>

        </main>
	  <script type="text/javascript">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:"4de156516d641cdbf5cf52bda319255df3c2fe2a630753b42ca4c05624fa02d28a8149df61757f6101b6e86b2a206d77", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>
    </body>
</html>


         




         