@extends('frontend.master')

@section('title', 'Tin tức & Hoạt động')

@section('seo')

    <meta name="description" content="{{ $setting_info[0]->st_mota }}">
    <meta name="keywords" content="{{ $setting_info[0]->st_keyword }} " />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Tin tức & Hoạt động" />
    <meta property="og:image" content="{{ asset('public/upload/template/'. $getindex->homepage_logo_plus) }}" />
    <meta property="og:image" content="{{ asset('public/upload/template/'. $getindex->homepage_logo_plus) }}" />
    <meta property="og:image:alt" content="Tin tức & Hoạt động " />
    <meta property="og:description" content="{{ $setting_info[0]->st_mota }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="Tin tức & Hoạt động" />

    <meta name="twitter:site" content="@https://" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{ $setting_info[0]->st_title }}" />
    <meta name="twitter:description" content="{{ $setting_info[0]->st_mota }}" />

    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <meta name="theme-color" content="#39b54a" />

    <style>
        .blog-title{
            color: color: #074f28
        }
    </style>

@endsection


@section('main')

    <section id="breadcrumb-wrapper" class="breadcrumb-w-img">
        <div class="breadcrumb-overlay"></div>
        <div class="breadcrumb-content">
            <div class="wrapper">
                <div class="inner text-center">
                    <div class="breadcrumb-big">
                        <h2>
                            @lang('messages.news_title')
                        </h2>
                    </div>
                    <div class="breadcrumb-small">
                        <a href="{{ route('index') }}">@lang('messages.home')</a>

                        <span aria-hidden="true">/</span>
                        <span>@lang('messages.news_title')</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="PageContainer" class="is-moved-by-drawer">
        <main class="main-content" role="main">
            <section id="blog-wrapper" class="in-blog">
                <div class="wrapper">
                    <div class="inner">

                        <div class="grid">
                            <div class="grid__item large--nine-twelfths medium--one-whole small--one-whole float-right">
                                <div class="blog-content">
                                    <!--- Loop all blogs --->

                                    @foreach ($blog_cat as $key=>$item_cat)
                                        <div class="blog-single-item">
                                            <div class="section-title clearfix">
                                                <div class="title">
                                                    <h2 style="font-size: 25px">{{ Config::get('app.locale') == 'vi' ? $item_cat->blogcat_ten : $item_cat->blogcat_ten_en }}</h2>
                                                </div>
                                                <div class="line"></div>
                                            </div>
                                            <div class="blog-single-slider grid">
                                                <div id="owl-blog-single-slider{{ $key+1 }}" class="owl-carousel owl-theme">


                                                    @foreach ($blog_list as $item)
                                                        @if($item_cat->blogcat_id == $item->blog_blogcatid)
                                                            <div class="item grid__item">
                                                                <div class="ha-item">
                                                                    <div class="ha-img">
                                                                        <a href="{{ asset('blog/'.$item->blog_slug.'.'.$item->blog_blogcatid.'.'.$item->blog_id) }}" style="font-size: 15px; ">
                                                                            <img src="{{ asset('public/upload/blog/'.$item->blog_thumb) }}" alt="{{ $item->blog_ten }}" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="ha-title">
                                                                        <a href="{{ asset('blog/'.$item->blog_slug.'.'.$item->blog_blogcatid.'.'.$item->blog_id) }}" class="blog-title">{{ Config::get('app.locale') == 'vi' ? $item->blog_ten : $item->blog_ten_en }}</a>
                                                                        {{-- <a href="#">{{ Config::get('app.locale') == 'vi' ? $item->blog_ten : $item->blog_ten_en }}</a> --}}
                                                                    </div>
                                                                    {{-- <div class="ha-desc">
                                                                        {{ $item->blog_mota }}
                                                                    </div> --}}
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach







                                    {{-- <div class="blog-single-item">
                                        <div class="section-title clearfix">
                                            <div class="title">
                                                <h2>Hoạt động & sự kiện</h2>
                                            </div>
                                            <div class="line"></div>
                                        </div>
                                        <div class="blog-single-slider grid">
                                            <div id="owl-blog-single-slider2" class="owl-carousel owl-theme">

                                                
                                                <div class="item grid__item">
                                                    <div class="ha-item">
                                                        <div class="ha-img">
                                                            <a href="{{ route('post') }}">
                                                                <img
                                                                    src="//file.hstatic.net/1000248829/article/ha-img3_f5d02953bb8846d18fda14c6fad72459_large.png"
                                                                    alt="Những kĩ năng mềm cần thiết mà bất kì sinh viên nào cũng cần phải có"
                                                                />
                                                            </a>
                                                        </div>
                                                        <div class="ha-title">
                                                            <a href="{{ route('post') }}">
                                                                Những kĩ năng mềm cần thiết mà bất kì sinh viên nào cũng cần phải có
                                                            </a>
                                                        </div>
                                                        <div class="ha-comment-date">
                                                            <div class="article-date"><i class="fa fa-calendar" aria-hidden="true"></i> 09/12/17</div>
                                                        </div>
                                                        <div class="ha-desc">
                                                            Kĩ năng mềm là một trong những yếu tố quan trọng giúp sinh viên sau khi tốt nghiệp có thể tìm được một việc làm tốt và thăng tiến nhanh t...
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                        </div>
                                    </div> --}}

                                    

                                    <!--- End loop all blogs --->
                                </div>
                            </div>


                            @include('frontend.layout.sidebar-detail')

                            
                        </div>
                    </div>
                </div>
            </section>

            @include('frontend.layout.home-contact')
        
        
        </main>
    </div>


@endsection