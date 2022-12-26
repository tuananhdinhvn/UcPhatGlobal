<style>
    .project-section-zone{
        display: flex;
        flex-flow: column;
    }
    .project-zone-title{
        width: 100%;
        height: 10vh;
    }
    .project-zone-title h2{
        vertical-align: middle;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 800;
        font-family: 'Alexandria', sans-serif;
        font-size: 1.6rem;
        padding-top: 20px;
        color: #244d86;
    }
    .project-zone-description{
        height: 10vh;
        width: 100%;
        padding: 0 15%;
    }
    .feature-line{
        height: 10vh;
        display: grid;
        grid-template-columns: 1fr 1fr;
        width: 100%;
        padding-top: 20px;
    }
    .feature-line span{
    }
    .feature-line .feature{
        
    }
    .feature-line .see-all{
        
    }
    .feature-line .see-all a{
        text-decoration: none;
        color: #244d86;
    }
    .project-zone-feature{
        height: 60vh;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        width: 100%;
    }
    .project-zone-feature .project-feature-item{
        position: relative;
        height: 30vh;
    }
    .project-zone-feature .project-feature-item a{
        color: #000
    }
    .project-zone-feature .project-feature-item img{
        object-fit: fill;
        width: 100%;
        height: 100%;
        position: relative;
    }
    .project-feature-item .project-feature-blur{
        position: absolute;
        width: 100%;
        height: 100%;
        background: #ffffff73;
        top: 0;
        left: 0;
        animation-duration: 1s;
        opacity: 0;
    }
    .project-feature-item .project-feature-name{
        position: absolute;
        width: 100%;
        top: 30%;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 2px;
        font-size: 1.2rem;
        font-family: 'Alexandria', sans-serif;
        padding: 0 20px;
        transition: 0.25s all ease-in-out;
        opacity: 0;
    }
    .project-feature-item a:hover .project-feature-blur{
        opacity: 1;
    }
    .project-feature-item a:hover .project-feature-name{
        opacity: 1;
    }
</style>

<div class="swiper-slide project-section-zone">
    <div class="project-zone-title">
        <h2>@lang('messages.project_title')</h2>
    </div>
    <div class="project-zone-description">
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
    </div>
    <div class="feature-line">
        <div class="feature">
            <span>//</span> Feature projects
        </div>
        <div class="see-all">
            <span> >> </span><a href="{{ asset('project') }}"> @lang('messages.project_see_all')</a>
        </div>
    </div>
    <div class="project-zone-feature">
        @foreach ($project_list as $item)
            <div class="project-feature-item">
                <a href="{{ asset('project/'.$item->pro_id) }}">
                    <img src="{{ asset('public/upload/product/'.$item->pro_thumb) }}" alt="">
                    <div class="project-feature-blur"></div>
                    <h2 class="project-feature-name">
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
</div>