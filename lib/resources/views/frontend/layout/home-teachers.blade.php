<section id="home-staffs">
    <div class="wrapper">
        <div class="inner">
            <h2 class="section-title">
                @lang('messages.index_our_team')
            </h2>
            <div class="section-title-underline"></div>
            
            <div class="grid">
                <div id="owl-home-staffs-slider" class="owl-carousel owl-theme">

                    @foreach ($team_list as $item)
                    <div class="item grid__item">
                        <div class="hs-item text-center">
                            <div class="hs-img">
                                <a href="{{ route('contact') }}"> <img src="{{ asset('public/upload/template/'.$item->cust_photo) }}" alt="{{ $item->cust_ten }}" style=""/> </a>
                            </div>
                            <div class="hs-title">
                                <a href="{{ route('contact') }}">{{ $item->cust_ten }}</a>
                            </div>
                            <div class="hs-desc">
                                {{ $item->cust_diachi }}
                            </div>
							<div class="hs-desc">
                                <strong> {{ $item->cust_ghichu }} </strong> năm kinh nghiệm
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>
