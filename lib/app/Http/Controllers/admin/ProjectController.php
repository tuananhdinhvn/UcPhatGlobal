<?php

namespace App\Http\Controllers\admin;

use DB;
use Carbon\Carbon;
use File;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\ProductCategoryModel;

use App\model\ProductLocationModel;
use App\model\CustomerModel;

use App\model\ProductModel;
use App\model\ProductPhotoModel;
use App\model\MajorModel;

class ProjectController extends Controller
{

    // ----------------------Project List-----------------------
    public function getProject(Request $request){
        $pro_type                   = $request->type;

        $data['project_list']       = ProductModel::where('pro_type', 'project')->orderBy('pro_time_work', 'desc')->get();
        $data['project_photo']      = ProductPhotoModel::all();

        return view('admin/display/project', $data);
    }


    public function addProject(Request $request){
        $data['pro_type']           = $request->type;
        $data['nation_list']        = NationModel::orderBy('nation_name_en', 'asc')->get();
        $data['major_list']         = MajorModel::all();
        $data['location_list']      = ProductLocationModel::orderBy('locate_name_vi', 'asc')->get();
        
        return view('admin/add/addproject', $data);
    }


    public function postaddProject(Request $request){

        $project_item       = new ProductModel;


        if ($request->hasFile('pro_thumb')) {
            $file_pro_thumb             = $request->file('pro_thumb');
            $pro_thumb_image_name       = $file_pro_thumb->getClientOriginalName();
            $pro_thumb_image_save_name  = time().$pro_thumb_image_name;
            $project_item->pro_thumb    = $pro_thumb_image_save_name;
            $file_pro_thumb->move('public/upload/product/', $pro_thumb_image_save_name);
        }


        $product->pro_ten_vi             = isset($request->pro_ten_vi) ? $request->pro_ten_vi : null;
        $product->pro_mota              = $request->pro_mota;
        $product->pro_keyword           = $request->pro_keyword;

        $product->updated_at            = Carbon::now();
        $product->save();


       

        

        return redirect()->intended('admin/project');
    }


    // ----------------------End Project List-------------------







    // ----------------------Project location-----------------------
    public function getProjectLocation(){
        $data['location_list'] = ProductLocationModel::all();

        return view('admin/display/location', $data);
    }

    public function addProjectLocation(){
        
        return view('admin/add/addLocation');
    }

    public function postaddProjectLocation(Request $request){
        $location                   = new ProductLocationModel;
        
		$location->locate_name_vi   = $request->locate_name_vi;
        $location->locate_name_en   = $request->locate_name_en;
        $location->locate_name_zh   = $request->locate_name_zh;
        $location->locate_name_ja   = $request->locate_name_ja;
        $location->locate_name_kr   = $request->locate_name_kr;
      
        $location->created_at       = Carbon::now();
        $location->updated_at       = Carbon::now();
        $location->save();

        return redirect()->intended('admin/project/location');
    }


    public function editProjectLocation($id){
        $data['edit_location']    = ProductLocationModel::find($id);

        return view('admin/edit/editLocation', $data);
    }


    public function posteditProjectLocation(Request $request, $id){
        $location                   = ProductLocationModel::find($id);
        
        $location->locate_name_vi   = $request->locate_name_vi;
        $location->locate_name_en   = $request->locate_name_en;
        $location->locate_name_zh   = $request->locate_name_zh;
        $location->locate_name_ja   = $request->locate_name_ja;
        $location->locate_name_kr   = $request->locate_name_kr;
      
        $location->updated_at       = Carbon::now();
        $location->save();
        return redirect()->intended('admin/project/location');
    }

    public function deleteLocation($id){
        ProductLocationModel::destroy($id);
        return back();
    }


    // ----------------------End Project location--------------------




    // ----------------------Project Major-----------------------
    public function getProjectMajor(){
        $data['major_list']     = MajorModel::all();
        
        return view('admin/display/major', $data);
    }

   
    public function addProjectMajor(){
        return view('admin/add/addMajor');
    }

    public function postaddProjectMajor(Request $request){
        $major                      = new MajorModel;
        
		$major->major_name_vi       = $request->major_name_vi;
        $major->major_name_en       = $request->major_name_en;
        $major->major_name_zh       = $request->major_name_zh;
        $major->major_name_ja       = $request->major_name_ja;
        $major->major_name_kr       = $request->major_name_kr;
      
        $major->created_at          = Carbon::now();
        $major->updated_at          = Carbon::now();
        $major->save();

        return redirect()->intended('admin/project/major');
    }


    public function editProjectMajor($id){
        $data['edit_major']         = MajorModel::find($id);

        return view('admin/edit/editMajor', $data);
    }

    public function posteditProjectMajor(Request $request, $id){
        $major                      = MajorModel::find($id);
        
        $major->major_name_vi       = $request->major_name_vi;
        $major->major_name_en       = $request->major_name_en;
        $major->major_name_zh       = $request->major_name_zh;
        $major->major_name_ja       = $request->major_name_ja;
        $major->major_name_kr       = $request->major_name_kr;
      
        $major->updated_at          = Carbon::now();
        $major->save();
        return redirect()->intended('admin/project/major');
    }

    public function checkshowProjectMajor($id){
        $major_item                 = MajorModel::find($id);
        
        $major_item->major_show     = $major_item->major_show ? false : true;
        $major_item->save();

        return back();

    }

    public function deleteMajor($id){
        MajorModel::destroy($id);
        return back();
    }

    // ----------------------End Project Major--------------------



   
}
