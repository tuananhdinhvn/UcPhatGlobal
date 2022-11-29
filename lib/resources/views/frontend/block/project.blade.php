<!-- Start Portfolio -->
<div id="our-projects"></div>
<h2 id="projects" class="section-title" style="">@lang('messages.project_title')</h2>
<div id="portfolio" class="section portfolio-section fullwidth-portfolio light-section" style="">
    

    
    <!-- Portfolio filters -->
    <div id="portfolio-filters" class="portfolio-filters">
    	<a class="project-filter-header" data-filter="*">@lang('messages.project_featured')</a>
        <a class="project-filter-header" data-filter="identity">Food</a>
        <a class="project-filter-header" data-filter="web-design">Pharmacy</a>
        <a class="project-filter-header" data-filter="logo">Logistics</a>
        <a class="project-filter-header" data-filter="motion">Furniture</a>
        <a class="get-all-project" target="_blank"> @lang('messages.project_see_all') >> </a>
    </div>
    
    
    <!-- For Project Expander -->
    <div id="project-show"></div>
    <section class="project-window">
    	<div class="project-content"></div><!-- AJAX Dinamic Content -->
    </section>

    <div id="project-show-list" class="project-grid">

        @foreach ($project_list as $item)
        <div class="project-grid-item" data-result="identity">
            <div class="project-grid-cover"></div>
            <img src="{{ asset('public/upload/product/'.$item->pro_thumb) }}" alt="">
            <div class="project-grid-info">
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
        </div>
        @endforeach
    </div>
    
    <!-- Portfolio Grid -->
    {{-- <div id="portfolio-grid" class="portfolio-grid">
        
        <!-- For Project Expander -->
        <div class="start-nav"></div>
        
        <!-- Project 1 -->
    	<div id="projects/portfolio-1.html" class="portolio-item project-expander web-design logo motion" style="width: 25%">
        	<div class="portfolio-img"><img src="public/upload/1.jpg" alt="" /></div>
            <div class="portfolio-overlay"></div>
            <div class="portfolio-details">
            	<h4>The Work</h4>
                <span>By UPG</span>
            </div>
        </div>
        
        <!-- Project 2 -->
        <div id="projects/portfolio-2.html" class="portolio-item project-expander identity logo" style="width: 25%">
        	<div class="portfolio-img"><img src="public/upload/2.jpg" alt="" /></div>
            <div class="portfolio-overlay"></div>
            <div class="portfolio-details">
            	<h4>The Work</h4>
                <span>By UPG</span>
            </div>
        </div>
        
        <!-- Project 3 -->
        <div id="projects/portfolio-3.html" class="portolio-item project-expander web-design motion graphic" style="width: 25%">
        	<div class="portfolio-img"><img src="public/upload/3.jpg" alt="" /></div>
            <div class="portfolio-overlay"></div>
            <div class="portfolio-details">
            	<h4>The Work</h4>
                <span>By UPG</span>
            </div>
        </div>
        
        <!-- Project 4 -->
        <div id="projects/portfolio-4.html" class="portolio-item project-expander identity motion">
        	<div class="portfolio-img"><img src="public/upload/4.jpg" alt="" /></div>
            <div class="portfolio-overlay"></div>
            <div class="portfolio-details">
            	<h4>The Work</h4>
                <span>By UPG</span>
            </div>
        </div>
        
        <!-- Project 5 -->
        <div id="projects/portfolio-5.html" class="portolio-item project-expander graphic motion">
        	<div class="portfolio-img"><img src="public/upload/5.jpg" alt="" /></div>
            <div class="portfolio-overlay"></div>
            <div class="portfolio-details">
            	<h4>The Work</h4>
                <span>By UPG</span>
            </div>
        </div>
        
        <!-- Project 6 -->
        <div id="projects/portfolio-1.html" class="portolio-item project-expander identity motion">
        	<div class="portfolio-img"><img src="public/upload/6.jpg" alt="" /></div>
            <div class="portfolio-overlay"></div>
            <div class="portfolio-details">
            	<h4>The Work</h4>
                <span>By UPG</span>
            </div>
        </div>
        
        <!-- Project 7 -->
        <div id="projects/portfolio-4.html" class="portolio-item project-expander logo graphic">
        	<div class="portfolio-img"><img src="public/upload/7.jpg" alt="" /></div>
            <div class="portfolio-overlay"></div>
            <div class="portfolio-details">
            	<h4>The Work</h4>
                <span>By UPG</span>
            </div>
        </div>
        
        <!-- Project 8 -->
        <div id="projects/portfolio-4.html" class="portolio-item project-expander web-design">
        	<div class="portfolio-img"><img src="public/upload/8.jpg" alt="" /></div>
            <div class="portfolio-overlay"></div>
            <div class="portfolio-details">
            	<h4>The Work</h4>
                <span>By UPG</span>
            </div>
        </div>
      
 
        
        <!-- For Project Expander -->
        <div class="final-nav"></div>
        
    </div> --}}

</div>
<!-- End Portfolio -->