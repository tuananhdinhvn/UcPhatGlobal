<header id="header-pc">
    <nav>
        <ul class="flex-main-menu">
            <li class="pc-menu-item scroll-menu"><a href="#why-us">@lang('messages.menu_why_us')</a></li>
            <li class="pc-menu-item scroll-menu"><a href="#service">@lang('messages.menu_services')</a></li>
            <li class="pc-menu-item scroll-menu"><a href="#projects">@lang('messages.menu_projects')</a></li>
            <li class="pc-menu-item scroll-menu">
                <a  href="#head-home">
                    <img src="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}"/>
                </a>
            </li>
            <li class="pc-menu-item scroll-menu"><a href="#social">@lang('messages.menu_social')</a></li>
            <li class="pc-menu-item scroll-menu"><a href="#contact-us">@lang('messages.menu_contact_us')</a></li>
            <li class="pc-menu-item lang-menu-item">
                languages
                <div class="pc-lang-list">
                    <ul>
                        <li style="width: 100%; height: 20px; background: transparent"></li>
                        <a href="{!! route('user.change-language', ['vi']) !!}" ><li>Tiếng Việt</li></a>
                        <a href="{!! route('user.change-language', ['en']) !!}" ><li>English</li></a>
                        <a href="{!! route('user.change-language', ['zh']) !!}"><li>中 文</li></a>
                        <a href="{!! route('user.change-language', ['ja']) !!}"><li>日 本 語</li></a>
						<a href="{!! route('user.change-language', ['kr']) !!}"><li>한국어</li></a>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</header>