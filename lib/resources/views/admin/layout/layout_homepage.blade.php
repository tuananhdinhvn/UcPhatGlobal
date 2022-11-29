@extends('admin.master') 
@section('title', 'Quản trị hình ảnh') 
@section('main')


<link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />

<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- /row -->
        <div class="row content-panel">
            <h2 class="centered">Quản trị hình ảnh</h2>
            <div class="col-md-10 col-md-offset-1 mt mb">
                <div class="accordion" id="accordion2">

                <form method="post" enctype='multipart/form-data'>

                    <!--Logo đầu trang Favicon-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseOne">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Logo - Favicon
                            </a>
                        </div>

                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <div class="form-group last">
                                        
                                    <div class="col-md-12 col-md-offset-1">
                                        <div class="col-md-6">
                                            <label><strong>LOGO</strong></label>
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px; background: #cecece;">
                                                    <img id="homepage_logo_output" src="{{ asset('public/upload/template/'.$homepage_list->homepage_logo) }}" alt="" />
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                <div>
                                                    <span class="btn btn-theme02 btn-file">
                                                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                        <input id="homepage_logo_input" type="file" name="homepage_logo"class="default " />
                                                    </span>
                                                    <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label><strong>FAVICON</strong></label>
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px; background: #cecece;">
                                                    <img id="homepage_favicon_output" src="{{ asset('public/upload/template/'.$homepage_list->homepage_logo_plus) }}" alt="" style="">
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                <div>
                                                    <span class="btn btn-theme02 btn-file">
                                                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                        <input id="homepage_favicon_input" type="file" name="homepage_logo_plus"class="default" />
                                                    </span>
                                                    <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    


                    <input class="pull-right btn btn-primary mt" type="submit" value="Cập nhật">

                    {{ csrf_field() }}

                </form>

                </div>
                <!-- end accordion -->
            </div>
            <!-- col-md-10 -->
        </div>

        

    </section>

</section>

@endsection





@section('script')

<script>
    $(document).ready(function(){
        // Quick view add slide image
        $('.quickshow-33').click(function() {
            $(".annount-order-33").modal({fadeDuration: 100,fadeDelay: 0.1});
        });

        // Quick view edit slide image
        <?php foreach($img_slide_list as $item){ ?>
            $('.quickshow-<?php echo $item->img_id ?>').click(function() {
                $(".annount-order-<?php echo $item->img_id ?>").modal({fadeDuration: 100,fadeDelay: 0.1});
            });
        <?php } ?>


        // Quick view edit album image
        <?php foreach($img_album_list as $item){ ?>
            $('.quickshow-<?php echo $item->img_id ?>').click(function() {
                $(".annount-order-<?php echo $item->img_id ?>").modal({fadeDuration: 100,fadeDelay: 0.1});
            });
        <?php } ?>

        // Quick view edit partner logo
        <?php foreach($img_partner_list as $item){ ?>
            $('.quickshow-<?php echo $item->img_id ?>').click(function() {
                $(".annount-order-<?php echo $item->img_id ?>").modal({fadeDuration: 100,fadeDelay: 0.1});
            });
        <?php } ?>
      
        
    }); 
</script>


<!---->
<script>
    $(document).ready(function(){

        // Sweet alert delete slide image 
        $('.deleteSlide').click(function(){
            var id          = $(this).attr('rel');
            var name        = $(this).attr('proname');
            var currentlink = window.location.pathname;
            const hreflink  = $(this).attr('href');

            Swal.fire({
                title: 'Bạn có chắc chắn muốn xóa',
                text: name,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Xóa',
                cancelButtonText: 'Hủy'
            }).then((result) => {
                if (result.value) {
                    document.location.href = currentlink + "/delete/" + id;
                    Swal.fire(
                    'Deleted!',
                    'Slide đã xóa.',
                    'success'
                    )
                }
            })

        });
    });
</script>


@endsection