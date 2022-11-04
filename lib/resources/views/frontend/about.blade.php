@extends('frontend.master')

@section('title')
    {{ $about_page->blog_ten }} | ISET education
@endsection


@section('seo')
    <meta name="description" content="{{ $about_page->blog_mota}}">
    <meta name="keywords" content="{{ $about_page->blog_keyword }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $about_page->blog_ten }}" />
    <meta property="og:image" content="{{ asset('public/upload/blog/'. $about_page->blog_thumb) }}" />
    <meta property="og:image" content="{{ asset('public/upload/blog/'. $about_page->blog_thumb) }}" />
    <meta property="og:image:alt" content="{{ $about_page->blog_ten }} " />
    <meta property="og:description" content="{{ $about_page->blog_mota}}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="{{ $about_page->blog_ten }} " />

    <meta name="twitter:site" content="@https://" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{ $about_page->blog_ten }}" />
    <meta name="twitter:description" content="{{ $about_page->blog_mota}}" />

    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <meta name="theme-color" content="#39b54a" />
@endsection


@section('main')

    <section id="breadcrumb-wrapper" class="breadcrumb-w-img">
        <div class="breadcrumb-overlay"></div>
        <div class="breadcrumb-content">
            <div class="wrapper">
                <div class="inner text-center">
                    <div class="breadcrumb-big">
                        <h2>
                            {{ Config::get('app.locale') == 'vi' ? $about_page->blog_ten : $about_page->blog_ten_en }}
                        </h2>
                    </div>
                    <div class="breadcrumb-small">
                        <a href="{{ asset('/') }}" title="Quay trở về trang chủ">@lang('messages.home')</a>

                        <span aria-hidden="true">/</span>
                        <span>{{ Config::get('app.locale') == 'vi' ? $about_page->blog_ten : $about_page->blog_ten_en }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="PageContainer" class="is-moved-by-drawer">
        <main class="main-content" role="main">
            <section id="page-wrapper">
                <div class="wrapper">
                    <div class="inner">
                        <div class="grid">
                            <div class="grid__item large--one-whole">
                                {{-- <h1>{{ Config::get('app.locale') == 'vi' ? $about_page->blog_ten : $about_page->blog_ten_en }}</h1> --}}
                                <div class="rte" style="line-height: 25px">
                                    {!! Config::get('app.locale') == 'vi' ? $about_page->blog_noidung : $about_page->blog_noidung_en !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            @include('frontend.layout.home-contact')

        </main>
    </div>

@endsection

