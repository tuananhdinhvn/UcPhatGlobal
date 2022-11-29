@extends('admin.master') 
@section('title', 'Thêm timeline') 

@section('css')
<link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />


<!--Css bootstrap fileinput-->
<link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/all.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/font-awesome.min.css" >

@endsection

@section('script')
    <script src="js/fileinput.min.js"></script>
    <script src="js/theme.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>


    
@endsection


@section('main')

<style>
    .main-section{
        margin: 0 auto;
        padding: 0 20px 0 0;
        width: 100%
    }
</style>


<section id="main-content">


    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">

    <section class="wrapper">
        
       
        <div class="row content-panel">
            <h2 class="centered">Thêm timeline</h2>
            <div class="col-md-12 mt mb">
                <div class="accordion" id="accordion2">

                <form method="post" enctype='multipart/form-data'>

                    <!------------------Thông tin chung----------------------->
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseOne">
                            Thông tin chung
                        </a>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Mốc thời gian: </label>
                        <div class="col-sm-4">
                            <input type="date" required name="event_date" class="form-control">
                        </div>
                    </div>


                    <!--Hình đại diện-->
                    <div class="form-group last">
                        <label class="control-label col-md-2">Hình đại diện:</label>
                        <div class="col-md-10">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="{{ asset('public/noimage.jpg') }}" class="image_output" style="width:100%; height:100%" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-theme02 btn-file">
                                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                        <input type="file" name="event_img" class="default image_input" />
                                    </span>
                                    <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                </div>
                            </div>
                            <span class="label label-warning" style="font-weight: 200">NOTE !</span>
                            <span>
                            Kích thước hình ảnh tối ưu 1600px X 900px
                            </span>
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Title<br>(Tiếng Việt): </label>
                        <div class="col-sm-10">
                            <input type="text" required name="event_title_vi" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Title<br>(Tiếng Anh): </label>
                        <div class="col-sm-10">
                            <input type="text" required name="event_title_en" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Title<br>(Tiếng Trung): </label>
                        <div class="col-sm-10">
                            <input type="text" required name="event_title_zh" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Title<br>(Tiếng Nhật): </label>
                        <div class="col-sm-10">
                            <input type="text" required name="event_title_ja" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Title<br>(Tiếng Hàn): </label>
                        <div class="col-sm-10">
                            <input type="text" required name="event_title_kr" class="form-control">
                        </div>
                    </div>

                    <hr/>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Mô tả<br>(Tiếng Việt): </label>
                        <div class="col-sm-10">
                            <textarea name="event_description_vi" id="" style="width:100%;" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Mô tả<br>(Tiếng Anh): </label>
                        <div class="col-sm-10">
                            <textarea name="event_description_en" id="" style="width:100%;" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Mô tả<br>(Tiếng Trung): </label>
                        <div class="col-sm-10">
                            <textarea name="event_description_zh" id="" style="width:100%;" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Mô tả<br>(Tiếng Nhật): </label>
                        <div class="col-sm-10">
                            <textarea name="event_description_ja" id="" style="width:100%;" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Mô tả<br>(Tiếng Hàn): </label>
                        <div class="col-sm-10">
                            <textarea name="event_description_kr" id="" style="width:100%;" rows="10"></textarea>
                        </div>
                    </div>

                  
                    <hr/>

                    {{-- <div class="form-group last">
                        <label class="control-label col-md-2">Show</label>
                        <div class="col-md-10">
                            <input type="checkbox" name="timeline_show"/>
                        </div>
                    </div><br/><br/> --}}
                
                    

                    <div class="form-group">
                        <div class="row pull-right" style="padding-right:50px">
                            <input style="width:100px;" type="submit" class="btn btn-primary fileinput-upload fileinput-upload-button" value="Thêm">
                            <a href="{{ asset('admin/timeline') }}"><input style="width:100px;" type="button" class="btn btn-danger" value="Hủy"></a>
                        </div>
                    </div>
                    {{ csrf_field() }}

                </form>

                </div>
                <!-- end accordion -->
            </div>
            <!-- col-md-10 -->
        </div>



    </section>
    <!-- /wrapper -->

</form>
</section>

@endsection

