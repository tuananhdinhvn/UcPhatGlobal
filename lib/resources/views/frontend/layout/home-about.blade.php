<section id="home-about-us">
    <div class="wrapper">
        <div class="inner">
            <div class="grid">
                <div class="grid__item large--three-quarters medium--one-whole small--one-whole">
                    <h2 class="section-title">
                        @lang('messages.index_our_numbers')
                    </h2>
                    <div class="section-title-underline"></div>
                    <div class="grid">


                        @foreach ($about_show_index as $item)
                            <div class="grid__item large--two-quarters medium--one-third small--one-whole">
                                <div class="hau-img">
                                    <img src="{{ asset('public/upload/blog/'.$item->blog_thumb) }}" alt="{{ $item->blog_ten }}" />
                                </div>
                                <div class="hau-title">
                                    {{ Config::get('app.locale') == 'vi' ? $item->blog_ten : $item->blog_ten_en }}
                                </div>
                                {{-- <div class="hau-text">
                                    {{ $item->blog_mota }}
                                </div> --}}
                                <div class="hau-viewmore">
                                    <a href="about/{{ $item->blog_slug }}.{{ $item->blog_id }}">@lang('messages.see_more') <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>


                <!--Numbers-->
                <div class="grid__item large--one-quarter medium--one-whole small--one-whole">
                    <div class="hau-statistic text-center">
                        <div class="grid">

                            <div class="grid__item large--one-whole medium--one-half small--one-whole">
                                <div class="hau-statistic-number"><span data-count="100">0</span>%</div>
                                <div class="hau-statistic-text">
                                    @lang('messages.index_number_happy')
                                </div>
                            </div>

                            <div class="grid__item large--one-whole medium--one-half small--one-whole">
                                <div class="hau-statistic-number"><span data-count="99">0</span>%</div>
                                <div class="hau-statistic-text">
                                    @lang('messages.index_number_rate')
                                </div>
                            </div>

                            <div class="grid__item large--one-whole medium--one-half small--one-whole">
                                <div class="hau-statistic-number"><span data-count="500">0</span>+</div>
                                <div class="hau-statistic-text">
                                    @lang('messages.index_number_partner')
                                </div>
                            </div>

                            <div class="grid__item large--one-whole medium--one-half small--one-whole">
                                <div class="hau-statistic-number"><span data-count="15">0</span></div>
                                <div class="hau-statistic-text">
                                    @lang('messages.index_number_experience')
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






