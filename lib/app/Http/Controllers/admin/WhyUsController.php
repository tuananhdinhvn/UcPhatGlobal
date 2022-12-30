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

class WhyUsController extends Controller
{

    public function showWhyus(){
        $data['timeline_img']       = LayoutHomepageModel::find(1);
        $data['achievement_list']   = ImageModel::where('img_type', 'achievement')->get();
        $data['technology_list']    = ImageModel::where('img_type', 'technology')->get();        

        //Technology
        $data['tech_item']          = LayoutHomepageModel::find(1);

        // Certificate
        $data['certificate_list']   = ImageModel::where('img_type', 'certificate')->get();

        // Customer & Partner
        $data['customer_list']      = ImageModel::where('img_type', 'customer-partner')->orderBy('img_number', 'asc')->get();

        return view('admin.display.why_us', $data);
    }

    public function postWhyUs(Request $request){

        $layout                     = LayoutHomepageModel::find(1);

        //Achievement
        if ($request->hasFile('whyus_timeline_pc')) {
            File::delete('public/upload/template/'.$layout->whyus_timeline_pc);

            $file                           = $request->file('whyus_timeline_pc');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->whyus_timeline_pc      = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        //Technology
        if ($request->hasFile('whyus_tech_img_left')) {
            File::delete('public/upload/template/'.$layout->whyus_tech_img_left);

            $file                           = $request->file('whyus_tech_img_left');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->whyus_tech_img_left    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        if ($request->hasFile('whyus_tech_img_right')) {
            File::delete('public/upload/template/'.$layout->whyus_tech_img_right);

            $file                           = $request->file('whyus_tech_img_right');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->whyus_tech_img_right   = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        
        $layout->updated_at         = Carbon::now();
        $layout->save();       



        return back();
        
    }

    // Achievement
    public function getaddAchievement(){
        return view('admin.add.add_achievement');
    }

    public function postaddAchievement(Request $request){

        $achievement                        = new ImageModel;

        $achievement->img_number            = $request->img_number;

        $achievement->img_description_vi    = $request->img_description_vi;
        $achievement->img_description_en    = $request->img_description_en;
        $achievement->img_description_zh    = $request->img_description_zh;
        $achievement->img_description_ja    = $request->img_description_ja;
        $achievement->img_description_kr    = $request->img_description_kr;
      
        if ($request->hasFile('img_src')) {
            $file                   = $request->file('img_src');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $achievement->img_src   = $image_save_name;
            $file->move('public/upload/info/', $image_save_name);
        }

        $achievement->img_type      = 'achievement';

        $achievement->created_at    = Carbon::now();
        $achievement->updated_at    = Carbon::now();
        $achievement->save();     

        return redirect()->intended('admin/whyus');
    }


    public function geteditAchievement(Request $request, $id){
        $data['achievement_item']       = ImageModel::find($id);

        return view('admin.edit.edit_achievement', $data);
    }


    public function posteditAchievement(Request $request, $id){
        $achievement                        = ImageModel::find($id);

        $achievement->img_number            = $request->img_number;

        $achievement->img_description_vi    = $request->img_description_vi;
        $achievement->img_description_en    = $request->img_description_en;
        $achievement->img_description_zh    = $request->img_description_zh;
        $achievement->img_description_ja    = $request->img_description_ja;
        $achievement->img_description_kr    = $request->img_description_kr;
      
        if ($request->hasFile('img_src')) {
            File::delete('public/upload/info/'.$achievement->img_src);

            $file                   = $request->file('img_src');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $achievement->img_src   = $image_save_name;
            $file->move('public/upload/info/', $image_save_name);
        }

        $achievement->updated_at    = Carbon::now();
        $achievement->save();     

        return redirect()->intended('admin/whyus');
    }


    public function deleteAchievement($id){
        $achievement            = ImageModel::find($id);

        File::delete('public/upload/info/'.$achievement->img_src);
        ImageModel::destroy($id);

        return back();
    }
    //End achievement


    //Technology
    public function getaddTechnology(){
        return view('admin.add.add_technology');
    }

    public function postaddTechnology(Request $request){

        $tech                        = new ImageModel;

        $tech->img_description_vi    = $request->img_description_vi;
        $tech->img_description_en    = $request->img_description_en;
        $tech->img_description_zh    = $request->img_description_zh;
        $tech->img_description_ja    = $request->img_description_ja;
        $tech->img_description_kr    = $request->img_description_kr;
      
        if ($request->hasFile('img_src')) {
            $file                   = $request->file('img_src');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $tech->img_src   = $image_save_name;
            $file->move('public/upload/info/', $image_save_name);
        }

        $tech->img_type      = 'technology';

        $tech->created_at    = Carbon::now();
        $tech->updated_at    = Carbon::now();
        $tech->save();     

        return redirect()->intended('admin/whyus');
    }

    public function geteditTechnology(Request $request, $id){
        $data['technology_item']       = ImageModel::find($id);

        return view('admin.edit.edit_technology', $data);
    }


    public function posteditTechnology(Request $request, $id){
        $tech                        = ImageModel::find($id);

        $tech->img_description_vi    = $request->img_description_vi;
        $tech->img_description_en    = $request->img_description_en;
        $tech->img_description_zh    = $request->img_description_zh;
        $tech->img_description_ja    = $request->img_description_ja;
        $tech->img_description_kr    = $request->img_description_kr;
      
        if ($request->hasFile('img_src')) {
            File::delete('public/upload/info/'.$tech->img_src);

            $file                   = $request->file('img_src');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $tech->img_src   = $image_save_name;
            $file->move('public/upload/info/', $image_save_name);
        }

        $tech->updated_at    = Carbon::now();
        $tech->save();     

        return redirect()->intended('admin/whyus');
    }

    public function deleteTechnology($id){
        $achievement            = ImageModel::find($id);

        File::delete('public/upload/info/'.$achievement->img_src);
        ImageModel::destroy($id);

        return back();
    }
    //End technology

    //Certificate
    public function deleteCertificate($id){
        $certi_item             = ImageModel::find($id);

        File::delete('public/upload/info/'.$certi_item->img_src);
        ImageModel::destroy($id);

        return back();
    }
    // End certificate


    //Customer
    public function getaddCustomer(){
        return view('admin.add.add_customer');
    }

    public function postaddCustomer(Request $request){

        $tech                        = new ImageModel;
      
        if ($request->hasFile('img_src')) {
            $file                   = $request->file('img_src');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $tech->img_src   = $image_save_name;
            $file->move('public/upload/info/', $image_save_name);
        }

        $tech->img_number       = $request->img_number;

        $tech->img_type         = 'customer-partner';

        $tech->created_at       = Carbon::now();
        $tech->updated_at       = Carbon::now();
        $tech->save();     

        return redirect()->intended('admin/whyus');
    }


    public function geteditCustomer(Request $request, $id){
        $data['cust_item']          = ImageModel::find($id);

        return view('admin.edit.edit_customer', $data);
    }

    public function posteditCustomer(Request $request, $id){

        $cust                        = ImageModel::find($id);
      
        if ($request->hasFile('img_src')) {
            File::delete('public/upload/info/'.$cust->img_src);

            $file                   = $request->file('img_src');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $cust->img_src   = $image_save_name;
            $file->move('public/upload/info/', $image_save_name);
        }

        $cust->img_number       = $request->img_number;
        
        $cust->updated_at       = Carbon::now();
        $cust->save();     

        return redirect()->intended('admin/whyus');
    }



    public function deleteCustomer(Request $request, $id){
        $customer            = ImageModel::find($id);

        File::delete('public/upload/info/'.$customer->img_src);
        ImageModel::destroy($id);

        return back();
    }

    //End customer

}
