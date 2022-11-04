<style>
    #company-name{
        font-weight: bold !important; 
        font-size: 70px !important;
    }

    .login-guest-pc {
        position: absolute;
        top: 100px;
        z-index: 100;
        right: 30px;
    }
    .login-guest-mobile{
        display: none;
    }
    
    @media only screen and (max-width: 767px) {
        .login-guest-pc {
            display: none;
        }
        .login-guest-mobile{
            display: block
        }
    }
</style>

<section id="home" class="u-bg-overlay g-pos-rel g-theme-bg-blue-dark-v1-opacity-0_8--after">

    



    <div class="js-carousel" data-autoplay="true" data-infinite="true" data-fade="true" data-speed="5000">
        @foreach ($slide_list as $item)
            <div class="js-slide g-bg-img-hero g-height-100vh" style="background-image: url({{ asset('public/upload/image/'.$item->img_src) }});"></div>
        @endforeach
    </div>



    @if (Auth::check() && Auth::user()->phanquyen == 3)
        <a class="btn btn-md u-btn-primary g-mr-10 g-mb-15 btn-project login-guest-pc" href="{{ asset('guest') }}">@lang('messages.slide_btn_project')</a>
    @elseif(!Auth::check())
        <a class="btn btn-md u-btn-primary g-mr-10 g-mb-15 btn-project login-guest-pc" href="{{ asset('login') }}">@lang('messages.slide_btn_login')</a>
    @endif

    <div class="u-bg-overlay__inner g-absolute-centered w-100">
        <div class="container-fluid text-center g-max-width-750" style="margin: 0 auto">
            <div class="text-uppercase">
                <h3 class="h3 g-letter-spacing-1 g-font-size-36 g-font-weight-400 g-color-white g-mb-25" 
                    id="company-name" >
                        Minh Global
                </h3>
                <p class="u-heading-v2__title g-line-height-1 g-letter-spacing-1 g-font-size-36 g-color-white mb-0">@lang('messages.slide_title')</p>
            </div>



           


            <div class="margin-home-top login-guest-mobile">
                @if (Auth::check() && Auth::user()->phanquyen == 3)
                <a class="btn btn-md u-btn-primary g-mr-10 g-mb-15 btn-project" href="{{ asset('guest') }}">@lang('messages.slide_btn_project')</a>
                @elseif(!Auth::check())
                <a class="btn btn-md u-btn-primary g-mr-10 g-mb-15 btn-project" href="{{ asset('login') }}">@lang('messages.slide_btn_login')</a>
                @endif
                
                
               
            </div>



            {{-- <div class="margin-home-top">
                <a class="btn btn-md u-btn-primary g-mr-10 g-mb-15 btn-project" href="{{ asset('project') }}">@lang('messages.slide_btn_project')</a>
                
                @foreach ($office_album_list as $key => $item)
                    @if($key == 0)
                        <a  class="btn btn-md u-btn-indigo g-mr-10 g-mb-15 btn-office"
                            class="js-fancybox btn btn-md u-btn-indigo g-mr-10 g-mb-15 btn-office"
                            href="javascript:;"
                            data-fancybox="office-photo"
                            data-src="{{ asset('public/upload/image/'.$item->img_src) }}"
                            data-caption="Our office"
                            data-speed="500"
                            data-slideshow-speed="1000"
                        >
                            @lang('messages.slide_btn_office')
                        </a>
                    @endif
                @endforeach
                
                
                @foreach ($office_album_list as $key => $item)
                    @if($key != 0)
                        <img
                            class="js-fancybox g-hidden-xs-up"
                            data-fancybox="office-photo"
                            data-src="{{ asset('public/upload/image/'.$item->img_src) }}"
                            data-caption="Our office"
                            data-speed="500"
                            data-slideshow-speed="1000"
                        />
                    @endif
                @endforeach

                <!-- <a href="#" class="btn btn-md u-btn-indigo g-mr-10 g-mb-15">Our Office</a> -->
            </div> --}}
        </div>
    </div>



    
</section>