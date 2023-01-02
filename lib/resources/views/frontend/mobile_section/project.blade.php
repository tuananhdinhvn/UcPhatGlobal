<section id="project-mobile">
    <div class="section-title">@lang('messages.project_title')</div>    

    <div class="project-intro-mobile">
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
    </div>

    <div class="project-highlight-mobile">
        <div class="project-feature">
            <span class="red-highlight">// </span> Featured projects
        </div>
        <div class="project-seeall">
            <a href="{{ asset('project') }}" style="color: #244d86;">
                <span class="red-highlight">>> </span> @lang('messages.project_see_all')
            </a>
        </div>
    </div>

    <div class="project-list-mobile">
        @foreach ($project_list as $item)
        <div class="project-index-item-mobile">
            <a href="{{ asset('project/'.$item->pro_id) }}">
                <img src="{{ asset('public/upload/product/'.$item->pro_thumb) }}" alt="">
                <h2 class="project-index-mobile-name">
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
            </a>
        </div>
        @endforeach
    </div>


</section>