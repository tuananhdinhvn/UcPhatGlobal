
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

    @include('frontend.section.index_header')
 
    <!-- Swiper -->
    <div id="base-swiper" class="swiper mySwiper">
        
        <div id="base-swiper-inside" class="swiper-wrapper">
            
            @include('frontend.section.video')

            @include('frontend.section.whyus')

            @include('frontend.section.service')
            
            @include('frontend.section.project')

            @include('frontend.section.contact')

        </div>

        <div id="main-swiper-dot" class="swiper-pagination" style="opacity: 0;"></div>

    </div>

    @include('frontend.section.script')

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

            @elseif(Config::get('app.locale') == 'vi')
                $(document).ready(function(){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: "Hệ thống đã tiếp nhận thông tin<br/>Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất",
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
