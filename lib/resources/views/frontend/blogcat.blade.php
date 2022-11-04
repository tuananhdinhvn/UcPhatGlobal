@extends('frontend.master')



@section('script_head')
{{-- <script type='text/javascript' src='{{ asset('public/js/head.js') }}'></script> --}}
@endsection


@section('title')
    TuanAnhDinh - {{ $blogcat_item->blogcat_title }}
@endsection


@section('seo')
    <meta name="description" content="{{ $blogcat_item->blogcat_mota }}">
    <meta name="keywords" content="{{ $setting_info[0]->st_keyword }} " />
    <link rel="canonical" href="{{ asset($blogcat_item->blogcat_slug.".".$blogcat_item->blogcat_id) }}" />
    <meta name="robots" content="index,follow">

    <meta property="og:image" content="{{ asset('public/upload/blog/'.$blogcat_item->blogcat_thumb) }}">
    <meta property="og:image:alt" content="{{ $blogcat_item->blogcat_title }} ">

    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $blogcat_item->blogcat_title }} ">
    <meta property="og:description" content="{{ $blogcat_item->blogcat_mota }}" />
    <meta property="og:url" content="{{ asset($blogcat_item->blogcat_slug.".".$blogcat_item->blogcat_id) }}">
    <meta property="og:site_name" content="{{ $blogcat_item->blogcat_title }} ">

    
    <meta name="twitter:title" content="{{ $blogcat_item->blogcat_title }} ">
    <meta name="twitter:description" content=" {{ $blogcat_item->blogcat_mota }}">
    <meta name="twitter:image" content=" {{ asset('public/upload/blog/'.$blogcat_item->blogcat_thumb) }}">
    <meta name="twitter:card" content="summary" />
    {{-- <meta property="og:image" content="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" />
    <meta property="og:image" content="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" /> --}}

@endsection


@section('main')

<style>

#page-marietv .entry-banner {
    background: url({{ $thumb_mobile }}) center center no-repeat;
    background-size: cover;
}


@media only screen and (max-width:768px) {
    #webzone-topbanner{
        display: none;
    }
    #page-marietv header{
        height: 100vh !important;
    }
}

</style>
    <div id="content" class="site-content">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <article id="page-marietv">
                    <header class="entry-banner" >
                        
                        <div class="entry-banner-content">
                            <h2 class="hidden" style="display: none">TuanAnhDinh - {{ $blogcat_item->blogcat_title }}</h2>

                            <h1 class="entry-title fade-in-elements">
                                <span class="the-place">{{ $blogcat_item->blogcat_intro_line1 }}</span> 
								<span class="to-be">{{ $blogcat_item->blogcat_intro_line2 }}</span> 
								<span class="to-create">{{ $blogcat_item->blogcat_intro_line3 }}
                                {{-- <span class="create">!</span></span> 
                                <span class="a-business">A Business</span> 
                                <span class="and-life-you">& Life
                                You</span> <span class="love">Love.</span>  --}}
                            </h1>

                            {{-- <svg version="1.1" id="fill-love" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="261.359px" height="153.359px" viewBox="0 0 261.359 153.359" enable-background="new 0 0 261.359 153.359" xml:space="preserve">
                                <g>
                                    <defs>
                                        <path id="fill-ve" d="M97.953,119.684c1.344,3.004,5.771,2.607,8.538,2.45c4.031-0.236,8.062-1.345,11.778-2.926 c10.04-4.109,18.104-12.016,28.38-15.415c-1.026,0.079-2.056,0.158-3.084,0.158c-0.156,14.15-0.235,28.38-0.395,42.53 c0,0.869,3.953-0.476,4.348-0.87c4.585-4.822,6.957-10.83,9.486-16.917c3.004-7.431,6.087-14.861,9.091-22.292 c-1.502,0.315-3.004,0.711-4.506,1.027c-0.474,6.641,3.636,12.647,9.564,15.493c5.454,2.688,11.857,2.057,17.392-0.078 c6.166-2.371,11.463-7.035,14.388-12.966c2.608-5.217,2.135-13.99-5.612-13.2c-6.165,0.554-9.882,5.929-12.41,10.987 c-3.241,6.562-4.507,14.15-3.479,21.423c1.028,7.035,3.479,14.31,10.909,16.363c5.375,1.423,11.146,0.633,16.363-1.344 c14.704-5.375,24.979-18.972,35.258-30.039c0.79-0.87-3.4-0.316-4.111,0.474c-6.719,7.194-13.043,14.704-20.633,21.028 c-4.031,3.399-8.537,6.798-13.676,8.221c-5.771,1.66-13.201,0.396-16.205-5.217c-4.901-9.17-4.822-20.712-0.711-30.119 c0.948-2.134,2.134-4.188,3.478-6.166c1.028-1.423,2.057-3.318,3.874-3.397c1.738-0.079,3.004,1.66,3.638,3.162 c2.055,5.138-2.136,11.304-5.534,14.86c-5.534,5.771-13.438,7.984-20.476,3.479c-4.9-3.162-7.904-8.38-7.431-14.15 c0.079-0.633-4.189,0.237-4.506,1.027c-2.846,6.957-5.691,13.913-8.459,20.87c-2.529,6.245-4.822,12.885-9.646,17.864 c1.424-0.315,2.927-0.554,4.35-0.868c0.156-14.15,0.236-28.381,0.396-42.53c0-0.711-2.926,0.158-3.084,0.158 c-6.48,2.135-12.094,5.771-17.786,9.406c-3.319,2.136-6.719,4.27-10.354,5.93c-3.162,1.423-12.253,4.743-14.389,0.236 C102.063,117.471,97.637,119.052,97.953,119.684L97.953,119.684z" />
                                    </defs>
                                    <clipPath id="clip-ve">
                                        <use xlink:href="#fill-ve" overflow="visible" />
                                    </clipPath>
                                </g>
                                <g>
                                    <defs>
                                        <path id="fill-o" d="M98.032,119.763c-3.32,4.506-6.009,9.406-7.669,14.781c-1.105,3.559-4.109,11.306-1.58,14.546 c1.817,2.371,5.454,1.818,7.904,1.187c4.27-1.106,7.747-3.715,10.83-6.877c5.929-6.087,14.387-19.526,9.091-28.144 c-2.213-3.637-6.245-4.348-10.119-3.24c-3.478,0.947-8.379,3.716-8.537,7.668c0,0.475,4.506,0,4.585-1.266 c0.157-2.767,3.558-5.771,6.402-4.821c1.66,0.554,2.925,2.372,3.637,3.795c1.58,3.397,0.869,7.352-0.079,10.83 c-1.818,6.401-5.455,12.332-10.356,16.838c-2.451,2.292-8.142,6.401-9.486,1.026c-0.711-3.004,0.791-7.352,1.581-10.196 c1.66-6.245,4.507-11.858,8.379-16.996C102.775,118.656,98.901,118.736,98.032,119.763L98.032,119.763z" />
                                    </defs>
                                    <clipPath id="clip-o">
                                        <use xlink:href="#fill-o" overflow="visible" />
                                    </clipPath>
                                </g>
                                <g>
                                    <defs>
                                        <path id="fill-l" d="M19.613,153.201c14.941-4.031,26.72-14.939,38.262-24.664c13.202-11.225,26.008-22.925,38.34-35.178 c9.644-9.565,19.524-19.209,27.826-29.96c7.431-9.565,14.149-19.765,20.158-30.277c3.795-6.64,9.327-15.178,9.485-23.083 c0.079-5.85-2.451-10.275-8.617-9.96c-6.008,0.316-12.016,3.399-16.996,6.64c-11.066,7.194-19.842,17.63-27.431,28.223 c-7.747,10.83-14.466,22.451-19.921,34.625c-7.668,16.996-13.281,35.257-13.36,54.071c-0.079,7.746-0.079,17.073,6.72,22.134 c4.821,3.558,11.066,4.348,16.759,2.607c2.688-0.79,2.134-2.925-0.554-2.134c-5.93,1.818-12.728-1.186-15.811-6.562 c-3.557-6.245-2.767-15.812-2.372-22.688c0.949-14.546,5.06-28.696,10.593-42.135c9.328-22.529,22.847-45.771,41.502-61.818 c4.27-3.715,8.935-7.035,14.229-9.17c2.53-1.026,6.403-2.529,8.696-0.237c0.946,0.949,1.264,2.688,1.58,3.874 c0.396,1.897,0.554,3.638,0.157,5.533c-1.502,8.144-6.481,16.048-10.672,23.083c-5.297,8.935-11.066,17.55-17.312,25.771 c-7.273,9.563-15.731,18.103-24.19,26.64c-11.7,11.779-23.874,23.162-36.364,34.071c-6.323,5.534-12.727,10.988-19.288,16.127 c-6.641,5.217-13.677,10.118-21.977,12.332C16.292,151.858,16.846,153.913,19.613,153.201L19.613,153.201z" />
                                    </defs>
                                    <clipPath id="clip-l">
                                        <use xlink:href="#fill-l" overflow="visible" />
                                    </clipPath>
                                </g>
                                <g>
                                    <defs>
                                        <circle id="fill-dot" cx="238.803" cy="142.553" r="2.292" />
                                    </defs>
                                    <clipPath id="clip-dot">
                                        <use xlink:href="#fill-dot" overflow="visible" />
                                    </clipPath>
                                </g>
                            </svg> --}}

                            

                        </div>

                        <div id="webzone-topbanner" class="video-brightness">
                            <img src="{{ asset('public/upload/blog/'.$blogcat_item->blogcat_thumb) }}" alt="">
                        </div>

                        {{-- <div class="overlay"></div> --}}

                        
                    </header>
                    <!-- .entry-banner -->

                    <div id="first" class="entry-content">

                        <!--Intro webzone-->
                        <div class="entry-section latest-episode">
                            <div id="blogcat_below_des" class="column">
                                {!! $blogcat_item->blogcat_below_des !!}

                            </div>
                            <div class="column">
                                <img src="{{ asset('public/upload/blog/'.$blogcat_item->blogcat_below_photo) }}" alt="">
                            </div>
                        </div>

                        

                        <!--Category list-->
                        {{-- <div class="entry-section collections" id="collections">
                            <div class="header">
                                <h2>Collections</h2>
                                <p>Browse our collections of MarieTV episodes.</p>
                            </div>
                            <div class="collection-list">
                                <div class="category" data-src="https://www.marieforleo.com/wp-content/uploads/2016/01/1_strengthenyourmind.jpg">
                                    <a href="https://www.marieforleo.com/category/strengthen-your-mind-and-soul/" target="_blank">
                                        <div class="title">
                                            <h4>Strengthen Your Mind &amp; Soul</h4>
                                            <p>Watch Now<i class="icon-angle-right"></i></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="category" data-src="https://www.marieforleo.com/wp-content/uploads/2016/03/2_buildameaningful-1.jpg">
                                    <a href="https://www.marieforleo.com/category/build-a-meaningful-business/" target="_blank">
                                        <div class="title">
                                            <h4>Build A Meaningful Business</h4>
                                            <p>Watch Now<i class="icon-angle-right"></i></p>
                                        </div>
                                    </a>
                                </div>
                                
                            </div>
                        </div> --}}

                        <!-- to link to this section from other pages -->
                        {{-- <a name="oracle"></a>

                        <div class="entry-section marietv-oracle">
                            <h3>The Marie TV Oracle</h3>

                            <div class="oracle">
                                <div class="spinner"></div>
                                <div class="magic-ball"></div>
                            </div>

                            <div class="oracle-actions-wrap">
                                <ul class="oracle-actions">
                                    <li><a class="pick-it button button-outline-white" href="#">Pick it for me</a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}


                        <!--Post form-->
                        {{-- <div class="c-podcast">
                            <div class="c-podcast__container">
                                <h3 class="c-podcast__heading">The Marie Forleo Podcast</h3>
                                <div class="c-podcast__content">
                                    <p>In this show, Marie and her guests share actionable strategies for greater happiness, success, motivation, creativity, productivity, love, health, contribution and fulfillment — often with a lot of laughs. From business, marketing and career advice, to tackling failure, disappointment and fear, to philanthropy and doing our part to make the world a more loving, just and equitable place — we cover it all. Get inspired, grow stronger, more confident and create a business and life you genuinely love.</p>
                                </div>

                                <a href="https://itunes.apple.com/us/podcast/the-marie-forleo-podcast/id1199977889?mt=2" class="c-podcast__cta arrow-link" target="_blank">Listen To The Podcast Now</a>

                            </div>

                            <img class="c-podcast__image" src="https://www.marieforleo.com/wp-content/uploads/2015/12/podcast-bg.jpg" />

                            <img class="c-podcast__image mobile" src="https://www.marieforleo.com/wp-content/uploads/2015/12/podcast-bg-mobile.jpg" />
                        </div> --}}









                        @foreach ($blogcat_list_item as $item)
                            <div class="entry-section success-stories">
                                <div class="wrap">
                                    <div class="column">
                                        <a class="" href="{{ asset($blogcat_item->blogcat_slug.'/'.$item->blog_slug.'.'.$item->blog_id) }}">
                                            <img src="{{ asset('public/upload/blog/'.$item->blog_thumb) }}" alt="{{ $item->blog_ten }}" />
                                        </a>
                                    </div>
                                    <div class="column">
                                        <div class="content">
                                            <a class="" href="{{ asset($blogcat_item->blogcat_slug.'/'.$item->blog_slug.'.'.$item->blog_id) }}">
                                                <h3>{{ $item->blog_ten }}</h3>
                                            </a>
                                            <p>{{ $item->blog_mota }}</p>
                                            <a class="" href="{{ asset($blogcat_item->blogcat_slug.'/'.$item->blog_slug.'.'.$item->blog_id) }}">Chi tiết <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                        
                        
                           
                    </div>
                    {{-- {{ $webzone_list->links() }} --}}
                    
                </article>

            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->

        <div class="modal modal-watch-marie-tv">
            <!-- id of input should match data-target on .modal-trigger -->
            <input class="modal-state fs_video_modal" id="modal-watch-marie-tv" type="checkbox" />
            <div class="modal-fade-screen">
                <div class="modal-inner">
                    <div class="video-wrapper">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/tDTX5UVoDxQ" frameborder="0" allowfullscreen data-rocket-lazyload="fitvidscompatible" data-lazy-src="https://www.youtube.com/embed/tDTX5UVoDxQ"></iframe>
                        <noscript>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/tDTX5UVoDxQ" frameborder="0" allowfullscreen></iframe>
                        </noscript>
                    </div>
                </div>
                <!--modal-inner -->
            </div>
            <!--modal-fade-screen -->
            <div class="modal-close" for="modal-watch-marie-tv" data-youtube-id="tDTX5UVoDxQ">close <span></span>
            </div>
        </div>
        <!-- .modal -->

        {{-- <script>
            document.getElementById('bgvid-front-page').play();
        </script> --}}

    </div>
    <!-- #content -->

@endsection




        
        
        