<?php

namespace App\Http\Controllers\admin;

use File;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\LayoutHomepageModel;
use App\model\LayoutServiceModel;
use App\model\ImageModel;
use App\model\ProductModel;
use App\model\WhyusProcessModel;
use App\model\EventModel;


use App\Http\Requests\LayoutHomepageRequest;

class ServiceController extends Controller
{

    public function showService(){
        $data['service_item']      = LayoutServiceModel::find(1);
        
        $data['service_design_slide']           = ImageModel::where('img_type', 'service-design-slide')->get();
        $data['service_manage_slide']           = ImageModel::where('img_type', 'service-manage-slide')->get();
        $data['service_construction_slide']     = ImageModel::where('img_type', 'service-construction-slide')->get();
        $data['service_develop_slide']          = ImageModel::where('img_type', 'service-development-slide')->get();


        $data['achievement_list']   = ImageModel::where('img_type', 'achievement')->get();
        $data['technology_list']    = ImageModel::where('img_type', 'technology')->get();        

        //Technology
        $data['tech_item']          = LayoutHomepageModel::find(1);

        // Certificate
        $data['certificate_list']   = ImageModel::where('img_type', 'certificate')->get();

        // Customer & Partner
        $data['customer_list']      = ImageModel::where('img_type', 'customer-partner')->get();

        return view('admin.display.service', $data);
    }

    public function postshowService(Request $request){
        $layout                     = LayoutServiceModel::find(1);

        $layout->service_des1_vi    = $request->service_des1_vi;
        $layout->service_des1_en    = $request->service_des1_en;
        $layout->service_des1_zh    = $request->service_des1_zh;
        $layout->service_des1_ja    = $request->service_des1_ja;
        $layout->service_des1_kr    = $request->service_des1_kr;


        if ($request->hasFile('service_img_info_1')) {
            File::delete('public/upload/service/'.$layout->service_img_info_1);

            $file                           = $request->file('service_img_info_1');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->service_img_info_1     = $image_save_name;
            $file->move('public/upload/service/', $image_save_name);
        }


        $layout->service_des2_vi    = $request->service_des2_vi;
        $layout->service_des2_en    = $request->service_des2_en;
        $layout->service_des2_zh    = $request->service_des2_zh;
        $layout->service_des2_ja    = $request->service_des2_ja;
        $layout->service_des2_kr    = $request->service_des2_kr;

        if ($request->hasFile('service_img_info_2')) {
            File::delete('public/upload/service/'.$layout->service_img_info_2);

            $file                           = $request->file('service_img_info_2');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->service_img_info_2     = $image_save_name;
            $file->move('public/upload/service/', $image_save_name);
        }


        $layout->service_des3_vi    = $request->service_des3_vi;
        $layout->service_des3_en    = $request->service_des3_en;
        $layout->service_des3_zh    = $request->service_des3_zh;
        $layout->service_des3_ja    = $request->service_des3_ja;
        $layout->service_des3_kr    = $request->service_des3_kr;


        if ($request->hasFile('service_img_info_3')) {
            File::delete('public/upload/service/'.$layout->service_img_info_3);

            $file                           = $request->file('service_img_info_3');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->service_img_info_3     = $image_save_name;
            $file->move('public/upload/service/', $image_save_name);
        }


        $layout->service_des4_vi    = $request->service_des4_vi;
        $layout->service_des4_en    = $request->service_des4_en;
        $layout->service_des4_zh    = $request->service_des4_zh;
        $layout->service_des4_ja    = $request->service_des4_ja;
        $layout->service_des4_kr    = $request->service_des4_kr;


        if ($request->hasFile('service_img_info_4')) {
            File::delete('public/upload/service/'.$layout->service_img_info_4);

            $file                           = $request->file('service_img_info_4');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->service_img_info_4     = $image_save_name;
            $file->move('public/upload/service/', $image_save_name);
        }



        $layout->created_at         = Carbon::now();
        $layout->updated_at         = Carbon::now();
        $layout->save();

        return back();
    }


    public function deletServiceSlide($id){
        $img  = ImageModel::find($id);

        File::delete('public/upload/service/'.$img->img_src);
        ImageModel::destroy($id);

        return back();
    }


}
