<style>
    #mobile-header{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 70px;
        z-index: 102;
        background: #000000ad;
        display: none;
        justify-content: center;
        align-items: center;
    }
    #logo-mobile{

    }
    #toggle-mobile-btn, 
    #close-toggle-mobile-btn{
        position: absolute;
        right: 20px;
        font-size: 25px;
        color: #ffffffa8;
        transition: 0.5s;
    }
    .mobile-menu-list{
        position: absolute;
        right: -100wh;
        width: 100%;
        background: #000000ad;
        top: 70px;
        text-align: right;
        padding-right: 20px;
        text-transform: uppercase;
        color: #fff;
        font-weight: bold;
        transition: 0.5s;
        opacity: 0;
        display: none;
    }
    .show-mobile-menu-list{
        top: 70px;
        opacity: 1;
        right: 0;
        display: block;
    }
    .mobile-menu-list .mobile-menu-item{
        list-style: none;
        padding: 15px 0;
    }
    .mobile-menu-list .mobile-menu-item a{
        color: #fff;
    }
    .mobile-menu-list .mobile-menu-item .seemore-btn{
        position: relative;
        top: -5px;
        padding-right: 10px;
        font-size: 22px;
        transition: 0.5s
    }
    .lang-mobile-cover{
        transition: 0.5s;
    }
    .lang-mobile-cover .lang-mobile-item{
        padding-right: 20px;
        padding-top: 20px;
        list-style: none;
    }
    .lang-mobile-cover .lang-mobile-item a{

    }
    .rotate-animation{
        -webkit-transform: scaleY(-1);
        transform: scaleY(-1);
        top: 5px !important;
    }

    @media(max-width: 768px){
        #mobile-header{
            display: flex;
        }
    }
</style>

<header id="mobile-header" class="">
    <a href="#head-home" class="scroll-menu menu-item-hide">
        <img id="logo-mobile" src="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}"/>
    </a>
    <span id="toggle-mobile-btn">
        <i class="fa fa-lg fa-bars"></i>
    </span>
    <span id="close-toggle-mobile-btn" class="hide">
        <i class="fa fa-lg fa-times"></i>
    </span>

    <div class="mobile-menu-list">
        <ul>
            <li class="mobile-menu-item menu-item-hide scroll-menu"><a href="#why-us">@lang('messages.menu_why_us')</a></li>
            <li class="mobile-menu-item menu-item-hide scroll-menu"><a href="#service">@lang('messages.menu_services')</a></li>
            <li class="mobile-menu-item menu-item-hide scroll-menu"><a href="#projects">@lang('messages.menu_projects')</a></li>
            <li class="mobile-menu-item menu-item-hide scroll-menu"><a href="#social">@lang('messages.menu_social')</a></li>
            <li class="mobile-menu-item menu-item-hide scroll-menu"><a href="#contact-us">@lang('messages.menu_contact_us')</a></li>
            <li class="mobile-menu-item scroll-menu"><i id="roll-down-lang-mobile" class="fa fa-lg fa-sort-down seemore-btn"></i>  
                <span class="lang-mobile-title">Languages</span> 
                <ul class="lang-mobile-cover hide">
                    <li class="lang-mobile-item mobile-lang-vi"><a href="{!! route('user.change-language', ['vi']) !!}">Tiếng Việt</a></li>
                    <li class="lang-mobile-item mobile-lang-en"><a href="{!! route('user.change-language', ['en']) !!}">English</a></li>
                    <li class="lang-mobile-item mobile-lang-zh"><a href="{!! route('user.change-language', ['zh']) !!}">中 文</a></li>
                    <li class="lang-mobile-item mobile-lang-ja"><a href="{!! route('user.change-language', ['ja']) !!}">日 本 語</a></li>
                    <li class="lang-mobile-item mobile-lang-kr"><a href="{!! route('user.change-language', ['kr']) !!}">한국어</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>