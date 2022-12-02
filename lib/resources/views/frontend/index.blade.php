
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
    
    <!-- Plugins CSS Styles -->
    <link rel="stylesheet" href="https://zoomarts.works/html/relway/css/plugins.css" type="text/css" media="screen" />
  
    <!-- Relway CSS Styles -->
    <link rel="stylesheet" type="text/css" href="css/upg/style.css" media="screen" />
  
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" type="text/css" href="https://zoomarts.works/html/relway/css/responsive.css" media="screen" />
    
    <!-- Css3 Animations Styles -->
    <link rel="stylesheet" type="text/css" href="https://zoomarts.works/html/relway/css/animate.css" media="screen" />
  
    <!-- Icons Font CSS Styles -->
    <link rel="stylesheet" type="text/css" href="https://zoomarts.works/html/relway/css/icons.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="https://zoomarts.works/html/relway/css/font-awesome.min.css" media="screen" />
    
    <!-- Color CSS Styles -->
    <link rel="stylesheet" type="text/css" href="css/chrome-orange.css" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="https://zoomarts.works/html/relway/css/colors/yellow.css" title="yellow" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="https://zoomarts.works/html/relway/css/colors/orange.css" title="orange" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="https://zoomarts.works/html/relway/css/colors/red.css" title="red" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="https://zoomarts.works/html/relway/css/colors/pink.css" title="pink" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="https://zoomarts.works/html/relway/css/colors/turquoise.css" title="turquoise" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="https://zoomarts.works/html/relway/css/colors/blue.css" title="blue" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="https://zoomarts.works/html/relway/css/colors/green.css" title="green" media="screen" />

    <!-- Custom CSS Styles -->
    <link rel="stylesheet" type="text/css" href="https://zoomarts.works/html/relway/css/custom.css" media="screen" />
     
    <link rel="stylesheet" type="text/css" href="css/mine.css" media="screen" />
	<!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    {{-- About timeline --}}
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
        <link rel="stylesheet" href="css/timeline.css" />
    {{-- End about timeline --}}


    {{-- Single screen about Swiper's CSS--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" /> 
    <style>
      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>
    {{-- End single screen about --}}
    
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

    {{-- @include('frontend.block.page_loader') --}}
    
    @include('frontend.block.welcome_home')
    
    @include('frontend.block.header')

    <div class="section">
        @include('frontend.block.about')
    </div>
    

    {{-- @include('frontend.block.client') --}}

    {{-- @include('frontend.block.video') --}}

    <div class="section">
        @include('frontend.block.service')
    </div>
    
    
    <div class="section">
        @include('frontend.block.project')
    </div>
    
  
    
    <div class="section">
        @include('frontend.block.contact')
    </div>
    
    
    @include('frontend.block.footer')
    
    {{-- @include('frontend.block.right_side') --}}

    @include('frontend.block.script')

    <!-- Sweet alert -->
    <script src="{{ asset('public/admin/js/sweetalert2.all.min.js') }}"></script>
            
    <!--owl-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

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



</body>
</html>