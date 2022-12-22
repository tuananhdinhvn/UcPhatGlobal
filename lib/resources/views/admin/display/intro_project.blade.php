@extends('admin.master') 
@section('title', 'Intro Project') 
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
            <h2 class="centered">Intro Project</h2>



            <div class="col-md-12 mt mb">
                <div class="accordion" id="accordion2">

                <form method="post" enctype='multipart/form-data'>

                    <!--Intro-->
                    <div class="form-group " style="padding-bottom: 20px">
                        <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Việt):</label>
                        <div class="col-lg-10 col-sm-9">
                                <input type="text" name="project_intro_vi" class="form-control" value="{{ $project_intro->project_intro_vi }}">
                        </div>
                    </div><br/>
                    <div class="form-group " style="padding-bottom: 20px">
                        <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Anh):</label>
                        <div class="col-lg-10 col-sm-9">
                                <input type="text" name="project_intro_en" class="form-control" value="{{ $project_intro->project_intro_en }}">
                        </div>
                    </div><br/>
                    <div class="form-group " style="padding-bottom: 20px">
                        <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Trung):</label>
                        <div class="col-lg-10 col-sm-9">
                                <input type="text" name="project_intro_zh" class="form-control" value="{{ $project_intro->project_intro_zh }}">
                        </div>
                    </div><br/>
                    <div class="form-group " style="padding-bottom: 20px">
                        <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Nhật):</label>
                        <div class="col-lg-10 col-sm-9">
                                <input type="text" name="project_intro_ja" class="form-control" value="{{ $project_intro->project_intro_ja }}">
                        </div>
                    </div><br/>
                    <div class="form-group " style="padding-bottom: 20px">
                        <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Hàn):</label>
                        <div class="col-lg-10 col-sm-9">
                                <input type="text" name="project_intro_kr" class="form-control" value="{{ $project_intro->project_intro_kr }}">
                        </div>
                    </div><br/>

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