@extends('admin.master') 
@section('title', 'Quản trị why us') 


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

@section('main')

<style>
    .main-section{
        margin: 0 auto;
        padding: 0 20px 0 0;
        width: 100%
    }

    .cust-table, .number-table{
        width: 50%
    }


    @media only screen and (max-width: 768px) {
        .cust-table, .number-table{
            width: 100%
        }
        .pull-right-sm{
            float: right;
        }
    }
</style>


<section id="main-content">


    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">

    <section class="wrapper">
        
       

        <div class="row content-panel">
            <h2 class="centered">Quản trị why us</h2>
            <div class="col-md-12 mt mb">
                <div class="accordion" id="accordion2">

                <form method="post" enctype='multipart/form-data'>

                    <!--Achievement-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseOne">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Achievement
                            </a>
                        </div>

                        <div id="collapseOne" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div class="number-table">

                                    <h3>
                                        <span class="pull-right">
                                            <a  href="{{ route('admin.whyus.add_achievement') }}"
                                                class="btn btn-default btn-xs"
                                                style=" color: #fff;
                                                        background-color: #337ab7;
                                                        border-color: #2e6da4;
                                                        padding: 6px 12px;">
                                                Thêm Achievement
                                            </a>
                                        </span>
                                    </h3>
                                    
                                    <div class="col-md-offset-1">
                                
                                        <table class="table table-striped table-advance table-hover">
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-camera"></i> Icon</th>
                                                    <th class="pull-right"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                @foreach ($achievement_list as $achievement_item)
                                                    <tr>
                                                        <td>
                                                            <div style="text-align: center">
                                                                <img src="{{ asset('public/upload/info/'.$achievement_item->img_src) }}" width="100px" style="margin-bottom: 10px"/>
                                                                <br/>
                                                                <p><strong>{{ $achievement_item->img_number }}</strong></p>
                                                                <p>{{ $achievement_item->img_description_en }}</p>
                                                            </div>
                                                            
                                                        </td>
                                            
                                                        <td class="pull-right">
                                                            <a  href="{{ route('admin.whyus.edit_achievement', ['id' => $achievement_item->img_id]) }}"
                                                                class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>


                                                            <a  rel="{{ $achievement_item->img_id }}"
                                                                proname="{{ $achievement_item->img_description_en }}"
                                                                href="javascript:"
                                                                title="Xóa hình ảnh"
                                                                class="deleteAchievement btn btn-danger btn-xs">
                                                                <i class="fa fa-trash-o "></i>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                

                                            </tbody>


                                        </table>
                                        
                                        
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Technology & Equipment-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseThree">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Technology
                            </a>
                        </div>

                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">


                                {{-- <div class="form-group last">
                                    <label class="control-label col-md-2">Show technology tab</label>
                                    <div class="col-md-10">
                                        <input type="checkbox" name="whyus_tech_show" checked="checked" />
                                    </div>
                                </div><br/><br/> --}}


                                <div class="form-group row">
                                    <label class="control-label col-md-2">Hình 1:</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 185px; height: auto;">
                                                <img id="bannertop_img_1_output" src="{{ asset('public/upload/template/'.$tech_item->whyus_tech_img_left) }}" alt="" style="width:100%; height:100%"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="bannertop_img_1_input" type="file" name="whyus_tech_img_left" class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-info">NOTE!</span>
                                        <span>
                                        Kích thước hình ảnh tối ưu 420px X 300px
                                        </span>
                                    </div>
                                </div><br/><br/>


                                <div class="form-group row">
                                    <label class="control-label col-md-2">Hình 2:</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 185px; height: auto;">
                                                <img id="bannertop_img_2_output" src="{{ asset('public/upload/template/'.$tech_item->whyus_tech_img_right) }}" alt="" style="width:100%; height:100%"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="bannertop_img_2_input" type="file" name="whyus_tech_img_right" class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-info">NOTE!</span>
                                        <span>
                                        Kích thước hình ảnh tối ưu 420px X 300px
                                        </span>
                                    </div>
                                </div><br/><br/>







                                <div class="number-table">
                                    <h3>
                                        <span class="pull-right">
                                            <a  href="{{ route('admin.whyus.add_technology') }}"
                                                class="btn btn-default btn-xs"
                                                style=" color: #fff;
                                                        background-color: #337ab7;
                                                        border-color: #2e6da4;
                                                        padding: 6px 12px;">
                                                Thêm slide
                                            </a>
                                        </span>
                                    </h3>
                                    
                                    <div class="col-md-offset-1">
                                
                                        <table class="table table-striped table-advance table-hover">
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-camera"></i> Hình ảnh</th>
                                        
                                                    <th class="text-center" style="text-align: center"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                @foreach ($technology_list as $technology_item)
                                                    <tr>
                                                        <td>
                                                            <div style="text-align: center">
                                                                <img src="{{ asset('public/upload/info/'.$technology_item->img_src) }}" width="150px" style="margin-bottom: 10px"/>
                                                                <br/>
                                                                <p>{{ $technology_item->img_description_en }}</p>
                                                            </div>
                                                        </td>

                                                        <td style="text-align: center">
                                                            <a class="" href="{{ route('admin.whyus.edit_technology', ['id' => $technology_item->img_id]) }}">
                                                                <span class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></span>
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="text-center">
                                                            

                                                            <a  rel="{{ $technology_item->img_id }}"
                                                                proname="{{ $technology_item->img_description_en }}"
                                                                href="javascript:"
                                                                title="Xóa hình ảnh"
                                                                class="delete-tech-slide btn btn-danger btn-xs">
                                                                <i class="fa fa-trash-o "></i>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                

                                            </tbody>


                                        </table>
                                        
                                        
                                    </div>
                                </div>


                              
        
                            </div>
                        </div>
                    </div>

                    <!--Certificate Tab content-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFive">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Certificate
                            </a>
                        </div>

                        <div id="collapseFive" class="accordion-body collapse ">
                            <div class="accordion-inner">

                                <div class="form-group last">
                                    <label class="control-label col-md-2">Show certificate tab</label>
                                    <div class="col-md-10">
                                        <input type="checkbox" name="csr_certificate_show" checked="checked"/>
                                    </div>
                                </div><br/><br/>
                               
                                <div class="number-table">
                                    <h3>
                                        <span class="pull-right">
                                            <a  href="{{ asset('admin/template/csr/add') }}"
                                                title="Chỉnh sửa hình ảnh"
                                                class="btn btn-default btn-xs"
                                                style=" color: #fff;
                                                        background-color: #337ab7;
                                                        border-color: #2e6da4;
                                                        padding: 6px 12px;">
                                                Thêm slide
                                            </a>
                                        </span>
                                    </h3>
                                    
                                    <div class="col-md-offset-1">
                                
                                        <table class="table table-striped table-advance table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center"><i class="fa fa-camera"></i> Slide</th>
                                        
                                                    <th class="pull-right"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                @foreach ($certificate_list as $certi_item)
                                                    <tr>
                                                        <td>
                                                            <div style="text-align: center">
                                                                <p>
                                                                    <a class="get-edit-csr-btn" rel="id" href="{{ route('admin.template.csr.edit', ['id' => $certi_item->img_id]) }}">
                                                                        <img style="height: 100px; width: auto;" src="{{ asset('public/upload/info/'.$certi_item->img_src)}}" alt="">
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </td>
                                            
                                                        <td class="pull-right">
                                                            <a class="get-edit-csr-btn" rel="id" href="{{ route('admin.template.csr.edit', ['id' => $certi_item->img_id]) }}">
                                                                <i class="fa fa-pencil btn btn-primary btn-xs" style="height: 22px; vertical-align: middle; padding-top: 4px;"></i>
                                                            </a>

                                                            <a  rel="{{ $certi_item->img_id }}"
                                                                proname="Certificate"
                                                                href="javascript:"
                                                                title="Xóa hình ảnh"
                                                                class="delete-cert-item btn btn-danger btn-xs">
                                                                <i class="fa fa-trash-o "></i>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                
                                               
                                                    

                                            </tbody>


                                        </table>
                                        
                                        
                                    </div>
                                </div>

                                

                            </div>
                        </div>
                    </div>

                    <!--Customer-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseSeven">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Customer & Partner
                            </a>
                        </div>

                        <div id="collapseSeven" class="accordion-body collapse">
                            <div class="accordion-inner ">

                                <div class="form-group last">
                                    <label class="control-label col-md-2">Show customer tab</label>
                                    <div class="col-md-10">
                                        <input type="checkbox" name="whyus_cust_show" checked="checked"/>
                                    </div>
                                </div><br/><br/>

                                <h3>
                                    <span class="col-md-offset-5 pull-right-sm">
                                        <a  href="{{ route('admin.whyus.add_customer') }}"
                                            title="Chỉnh sửa hình ảnh"
                                            class="btn btn-default btn-xs"
                                            style=" color: #fff;
                                                    background-color: #337ab7;
                                                    border-color: #2e6da4;
                                                    padding: 6px 12px;">
                                            Thêm logo khách hàng
                                        </a>
                                    </span>
                                </h3>
                                
                                <div class=" ">

                                    <table class="table table-striped table-advance table-hover cust-table" style="" >
                                        <thead>
                                            <tr>
                                                <th><i class="fa fa-camera"></i> Logo</th>
                                    
                                                <th class="text-center"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                            @foreach ($customer_list as $partner_item)
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <a href="">
                                                                <img src="{{ asset('public/upload/info/'.$partner_item->img_src) }}" width="150px" style="margin-bottom: 10px"/>
                                                            </a>
                                                            <br/>
                                                        </div>
                                                    </td>
                                        
                                                    <td class="text-center">
                                                        {{-- <a href="{{ asset('admin/template/whyus/editcust/'.$item->img_id.'?type=customer-partner') }}" >
                                                            <span class="btn btn-primary btn-xs" title="Chỉnh sửa"><i class="fa fa-pencil"></i></span>
                                                        </a> --}}

                                                        <a  rel="{{ $partner_item->img_id }}"
                                                            proname="Customer"
                                                            href="javascript:"
                                                            title="Xóa hình ảnh"
                                                            class="deletePartner btn btn-danger btn-xs">
                                                            <i class="fa fa-trash-o "></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            

                                        </tbody>
                                    </table>

                                </div>



                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row pull-right" style="padding-right:50px">
                            <input style="width:100px;" type="submit" class="btn btn-primary fileinput-upload fileinput-upload-button" value="Cập nhật">
                            
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




@section('script')
    <script src="js/fileinput.min.js"></script>
    <script src="js/theme.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>



<script>
    $(document).ready(function(){

        // Get edit Technology 
        $( ".get-edit-technology-btn" ).click(function(e) {
            e.preventDefault();

            img_id          = $(this).attr('rel').val();
            var currentlink = window.location.pathname;
            $(location).attr('href', currentlink + '/technology/edit/' + img_id);
        });

        
     
        


        // Sweet alert delete technology 
        $('.delete-tech-slide').click(function(){
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
                    document.location.href = currentlink + "/technology/delete/" + id ;
                    Swal.fire(
                    'Deleted!',
                    'Hình ảnh đã xóa.',
                    'success'
                    )
                }
            })

        });


        // Sweet alert delete certificate 
        $('.delete-cert-item').click(function(){
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
                    document.location.href = currentlink + "/certificate/delete/" + id ;
                    Swal.fire(
                    'Deleted!',
                    'Hình ảnh đã xóa.',
                    'success'
                    )
                }
            })

        });

        // Sweet alert delete Customer & Partner 
        $('.deletePartner').click(function(){
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
                    document.location.href = currentlink + "/customer/delete/" + id ;
                    Swal.fire(
                    'Deleted!',
                    'Hình ảnh đã xóa.',
                    'success'
                    )
                }
            })

        });




        // Sweet alert delete slide image 
        $('.deleteAchievement').click(function(){
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
                    document.location.href = currentlink + "/achievement/delete/" + id ;
                    Swal.fire(
                    'Deleted!',
                    'Hình ảnh đã xóa.',
                    'success'
                    )
                }
            })

        });



        


        // Sweet alert delete company profile 
        $('.deleteProfile').click(function(){
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
                    document.location.href = currentlink + "/profile/delete/" + id ;
                    Swal.fire(
                    'Deleted!',
                    'Profile đã xóa.',
                    'success'
                    )
                }
            })

        });
    });
</script>


@endsection