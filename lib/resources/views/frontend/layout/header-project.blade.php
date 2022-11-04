<style>
    #project-header{
        height: 10vh;
        background: #0000008a;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        margin-bottom: 10vh;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 100;
    }
    #logo-project-page{
        width: 150px;
    }
    .menu-lang{
        position: absolute;
        top: 2.5vh;
        color: #fff;
        text-transform: uppercase;
        right: 10%;
        font-weight: bold;
        padding: 10px;
        text-align: right;
        cursor: pointer;
    }
    .menu-lang .lang-title{
        list-style: none;
        padding: 0 10px 10px;
    }
    .menu-lang ul{
        
    }
    .menu-lang ul .lang-item{
        list-style: none;
        padding: 15px 21px;
        background: #000;
        color: #fff;
        width: 100%;
        display: none;
        transition: 0.1s;
    }
    .menu-lang ul .lang-item:hover{
        color: #000;
        background: #fff;
    }
    .menu-lang:hover .lang-item{
        display: block;
    }
    .search-icon{
        color: #fff;
        position: absolute;
        top: 3.5vh;
        padding: 7px;
        right: 23%;
        cursor: pointer;
    }
    .project-search-keyword{
        position: absolute;
        right: 26%;
        top: 2.5vh;
        padding: 5px 10px;
        height: 45px;
        display: none;
        outline: none;
        border-radius: 5px;
        border: none;
    }
    @media(max-width: 768px){
        .menu-lang{
            display: none;
        }
        .search-icon{
            display: none;
        }
        #project-header{
            display: none;
        }
    }
</style>

@include('frontend.layout.mobile-header')

<header id="project-header">
    <div id="logo-project-page">
        <a href="{{ asset('/')}}">
            <img src="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" alt="">
        </a>
    </div>
    
    <form action="search" method="get">
        <span> 
            <input class="project-search-keyword hide" type="search" name="keyword" placeholder="PROJECT NAME"> 
            <i class="fa fa-lg fa-search search-icon"></i>
        </span>
        {{ csrf_field() }}
    </form>

    <div class="menu-lang">
        <ul>
            <li class="lang-title">Languages</li>
            <a href="{!! route('user.change-language', ['vi']) !!}">
                <li class="lang-item">Tiếng Việt</li>
            </a>
            <a href="{!! route('user.change-language', ['en']) !!}">
                <li class="lang-item">ENGLISH</li>
            </a>
            <a href="{!! route('user.change-language', ['zh']) !!}">
                <li class="lang-item">中 文</li>
            </a>
            <a href="{!! route('user.change-language', ['ja']) !!}">
                <li class="lang-item">日 本 語</li>
            </a>
			<a href="{!! route('user.change-language', ['kr']) !!}">
                <li class="lang-item">한국어</li>
            </a>
        </ul>
    </div>
</header>