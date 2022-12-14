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

        <link rel="stylesheet" href="{{ asset('css/upg/responsive.css') }}">

    
    </head>

  <body>

    @include('frontend.section.index_header')
    
    @include('frontend.mobile_section.index_header_mobile')
 
    @include('frontend.section.pc_index')

    @include('frontend.mobile_section.mobile_index')

    <!-- Swiper -->
    

    @include('frontend.section.script')

    @include('frontend.mobile_section.script_mobile')

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
                        title: "H??? th???ng ???? ti???p nh???n th??ng tin<br/>Ch??ng t??i s??? li??n h??? v???i b???n trong th???i gian s???m nh???t",
                        showConfirmButton: false,
                        timer: 3500
                    });
                });
            @elseif(Config::get('app.locale') == 'zh')
                $(document).ready(function(){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: "??? ??? ??? ??? ??? ???<br/>??? ??? ??? ??? ??? ??? ??? ??? ???",
                        showConfirmButton: false,
                        timer: 3500
                    });
                });
            @elseif(Config::get('app.locale') == 'ja')
                $(document).ready(function(){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: "??? ??? ??? ??? ??? ??? ??? ??? ??? ??? ??? ??? ???<br/>??? ??? ??? ??? ??? ??? ??? ??? ??? ??? ???",
                        showConfirmButton: false,
                        timer: 3500
                    });
                });
            @elseif(Config::get('app.locale') == 'kr')
                $(document).ready(function(){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: "????????? ????????? ?????????????????????<br/>??? ?????? ??????????????????",
                        showConfirmButton: false,
                        timer: 3500
                    });
                });
            @endif
        @endif
    </script>

  </body>
</html>