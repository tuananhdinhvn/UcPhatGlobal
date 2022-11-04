<style>
    .grab {cursor: -webkit-grab; cursor: grab;}
    .grabbing {cursor: -webkit-grabbing; cursor: grabbing !important;}


    @media only screen and (max-width: 768px) {
        .social-img {
            width: 100% !important
        }

        .social-slide-item{
            min-height: 910px !important;
        }
    }

    .social-slide-item{
        min-height: 470px
    }
    .social-img {
        width: 90%
    }

    .cover-social-item{
        padding-top: 20px;
        padding-left: 20px;
        background: #7c7c7c;
        color: aliceblue !important
    }

    .cover-social-item:hover{
        cursor: grab;
        /* background: #7c7c7c;
        color: aliceblue !important */
    }
    .cover-social-item h1, 
    .cover-social-item h2, 
    .cover-social-item h3, 
    .cover-social-item h4,
    .cover-social-item h5, 
    .cover-social-item h6{
        color: aliceblue !important
    }
</style>

<section id="social" class="g-pb-100--md g-pt-100--md">
    <div class="container-fluid">


        <div class="container text-center g-max-width-850 g-mb-70">
            <div class="text-uppercase g-brd-primary">
                <h3 class="h3 g-letter-spacing-5 g-font-size-24 g-font-weight-400 g-color-primary g-mb-25">@lang('messages.menu_social')</h3>
                <p class="col-lg-12 text-center" style="margin: auto; color: #7c7c7c">
                    
                    @switch( Config::get('app.locale') )
                        @case('vi')
                            {!! $social_index->social_intro_vi !!}
                            @break
                        @case('en')
                            {!! $social_index->social_intro_en !!}
                            @break
                        @case('zh')
                            {!! $social_index->social_intro_zh !!}
                            @break
                        @case('ja')
                            {!! $social_index->social_intro_ja !!}
                            @break
                    @endswitch

                </p>
            </div>
        </div>


        <!---->
        
        <div class="col-lg-12 g-py-30 g-py-55--lg" style="padding-right: 0; padding-left: 0">
            <div    class="js-carousel g-pb-40"
                    data-autoplay="true" data-infinite="true" data-speed="10000"
                    data-pagi-classes="u-carousel-indicators-v1 u-carousel-indicators-dark g-absolute-centered--x g-bottom-0 text-center">

                @foreach ($social_item_list as $item)
                    <div class="js-slide cover-social-item g-transition-0_2 social-slide-item" style="">
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-12 g-mb-25">
                                <img class="mx-auto social-img" alt="Image Description" src="{{ asset('public/upload/image/'.$item->img_src) }}" />
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="">
                                    <p class="g-font-size-default g-mb-25">
                                        @switch( Config::get('app.locale') )
                                            @case('vi')
                                                {!! $item->img_description_vi !!}
                                                @break
                                            @case('en')
                                                {!! $item->img_description_en !!}
                                                @break
                                            @case('zh')
                                                {!! $item->img_description_zh !!}
                                                @break
                                            @case('ja')
                                                {!! $item->img_description_ja !!}
                                                @break
                                        @endswitch    
                                    </p>
                                    
                                </div>
                            </div>
        
                            
                        </div>
                    </div>
                @endforeach


            </div>
        </div>



    </div>
</section>

<script>
    $(document).ready(function(){
        $( ".cover-social-item" ).mouseup(function() {
            $( this ).removeClass( "grabbing" ).addClass("grab");
        });
        $( ".cover-social-item" ).mousedown(function() {
            $( this ).removeClass( "grab" ).addClass("grabbing");
        });
    });
</script>