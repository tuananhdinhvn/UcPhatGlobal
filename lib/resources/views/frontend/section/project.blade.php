<div class="swiper-slide project-section">
    <div class="project-title">
        <h2>@lang('messages.project_title')</h2>
        <p>
            @switch( Config::get('app.locale') )
                @case('vi')
                    {{ $project_index->project_intro_vi }}
                    @break
                @case('en')
                    {{ $project_index->project_intro_en }}
                    @break
                @case('zh')
                    {{ $project_index->project_intro_zh }}
                    @break
                @case('ja')
                    {{ $project_index->project_intro_ja }}
                    @break
                @case('kr')
                    {{ $project_index->project_intro_kr }}
                    @break
            @endswitch 
        </p>
        
        <div class="project-featured-line">
            <div class="feature-line">
                <span>//</span> Featured projects
            </div>
            <div class="all-line">
                <a href="{{ asset('project') }}" style="">
                    <span> >>> </span> @lang('messages.project_see_all')
                </a>
            </div>
        </div>
        
    </div>

    <style>
        .project-feature-img{
            width: 100% !important;
            height: 100% !important;
            object-fit: fill !important;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }
        .href-project-feature{
            text-decoration: none !important;
            color: #000 !important;
        }
    </style>
    <div class="project-list">
        @foreach ($project_list as $item)
            <div class="project-item" style="">
                <a class="href-project-feature" href="{{ asset('project/'.$item->pro_id) }}">
                    <img class="project-feature-img" src="{{ asset('public/upload/product/'.$item->pro_thumb) }}" alt="">
                    <div class="project-item-hover">
                        <h2>
                            @switch( Config::get('app.locale') )
                                @case('vi')
                                    {{ $item->pro_ten_vi }}
                                    @break
                                @case('en')
                                    {{ $item->pro_ten_en }}
                                    @break
                                @case('zh')
                                    {{ $item->pro_ten_zh }}
                                    @break
                                @case('ja')
                                    {{ $item->pro_ten_ja }}
                                    @break
                                @case('kr')
                                    {{ $item->pro_ten_kr }}
                                    @break
                            @endswitch 
                        </h2>
                    </div>
                </a>
            </div>
        @endforeach
        
        
        
    </div>
</div>