
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>
  
    <!-- Basic -->
	<title>Uc Phat Group</title>
    
    <!-- Define Charset -->
	<meta charset="utf-8">
    
    <!-- Responsive MetaTag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Page Description and Author -->
    <meta name="description" content="Uc Phat Group">
    <meta name="author" content="tuananhdinh.vn">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="public/upload/info/favicon.png">

    
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

</head>
<body>

    {{-- @include('frontend.block.page_loader') --}}
    
    @include('frontend.block.welcome_home')
    
    @include('frontend.block.header')

    @include('frontend.block.about')

    {{-- @include('frontend.block.client') --}}

    {{-- @include('frontend.block.video') --}}

    @include('frontend.block.service')
    

    @include('frontend.block.project')
  
    

    @include('frontend.block.contact')
    
    @include('frontend.block.footer')
    
    {{-- @include('frontend.block.right_side') --}}

    @include('frontend.block.script')




</body>
</html>