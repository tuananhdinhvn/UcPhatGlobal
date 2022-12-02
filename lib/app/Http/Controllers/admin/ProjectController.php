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
use App\model\NationModel;

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

        $product       = new ProductModel;

        $product->pro_ten_vi        = $request->pro_ten_vi;
        $product->pro_ten_en        = $request->pro_ten_en;
        $product->pro_ten_zh        = $request->pro_ten_zh;
        $product->pro_ten_ja        = $request->pro_ten_ja;
        $product->pro_ten_kr        = $request->pro_ten_kr;

        $product->pro_mgd_team      = isset($request->pro_mgd_team) ? true : false;

        $product->pro_owner_en      = $request->pro_owner_en;

        $product->pro_nation            = ($request->pro_nation != 'null') ? $request->pro_nation : $first_nation->nation_id;
        $product->pro_major_id          = ($request->pro_major_id != 'null') ? $request->pro_major_id : $first_major->major_id;
        $product->pro_building_grade    = ($request->pro_building_grade != 'null') ? $request->pro_building_grade : 'grade-1';

        $product->pro_time_work         = $request->pro_time_work;
        $product->pro_area              = $request->pro_area;
        $product->pro_land_area         = $request->pro_land_area;
        $product->pro_location_id       = ($request->pro_location_id != 'null') ? $request->pro_location_id : $first_location->locate_id;
        $product->pro_induspark         = $request->pro_induspark;
        $product->pro_contractor        = $request->pro_contractor;
        $product->pro_scope_work        = $request->pro_scope_work;
        $product->pro_status            = isset($request->pro_status) ? $request->pro_status : 'ongoing' ;


        //Project photo
        if ($request->hasFile('pro_thumb')) {

            $file                   = $request->file('pro_thumb');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $product->pro_thumb     = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_thumb_hover')) {

            $file                   = $request->file('pro_thumb_hover');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $product->pro_thumb_hover     = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_background')) {

            $file                   = $request->file('pro_background');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $product->pro_background     = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        

        // Catalouge img
        if ($request->hasFile('pro_catalouge_1')) {

            $file                       = $request->file('pro_catalouge_1');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_1   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_2')) {

            $file                       = $request->file('pro_catalouge_2');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_2   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_3')) {

            $file                       = $request->file('pro_catalouge_3');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_3   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_4')) {

            $file                       = $request->file('pro_catalouge_4');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_4   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_5')) {

            $file                       = $request->file('pro_catalouge_5');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_5   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_6')) {

            $file                       = $request->file('pro_catalouge_6');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_6   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_7')) {

            $file                       = $request->file('pro_catalouge_7');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_7   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_8')) {

            $file                       = $request->file('pro_catalouge_8');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_8   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        $product->pro_type              = $request->type;

        $product->created_at            = Carbon::now();
        $product->updated_at            = Carbon::now();
        $product->save();

        return redirect()->intended('admin/project');
    }


    public function getProjectDetail($id){
        $data['project_detail']     = ProductModel::find($id);
        $data['nation_list']        = NationModel::orderBy('nation_name_en', 'asc')->get();
        $data['alt_photos']         = ProductPhotoModel::where('product_id', $id)->where('photo_type', null)->get();
        $data['alt_photos_private'] = ProductPhotoModel::where('product_id', $id)->where('photo_type', 'private')->get();
        $data['major_list']         = MajorModel::all();
        $data['location_list']      = ProductLocationModel::orderBy('locate_name_vi', 'asc')->get();

        return view('admin/edit/editproject', $data);
    }


    public function postProjectDetail(Request $request, $id){
        $first_location = ProductLocationModel::first();
        $first_nation   = NationModel::first();
        $first_major    = MajorModel::first();

        if( isset($request->pro_nation) ){
            $pro_nation_old         = ProductModel::find($id)->pro_nation;
            $nation_uncheck_item    = NationModel::find($pro_nation_old);
            $nation_uncheck_item->nation_check = null;
            $nation_uncheck_item->save();

            $nation_item = NationModel::find($request->pro_nation);
            $nation_item->nation_check = 'checked';
            $nation_item->save();
        }

        $product                    = ProductModel::find($id);
       
        $product->pro_ten_vi        = $request->pro_ten_vi;
        $product->pro_ten_en        = $request->pro_ten_en;
        $product->pro_ten_zh        = $request->pro_ten_zh;
        $product->pro_ten_ja        = $request->pro_ten_ja;
        $product->pro_ten_kr        = $request->pro_ten_kr;

        $product->pro_mgd_team      = isset($request->pro_mgd_team) ? true : false;

        $product->pro_owner_en      = $request->pro_owner_en;

        $product->pro_nation            = ($request->pro_nation != 'null') ? $request->pro_nation : $first_nation->nation_id;
        $product->pro_major_id          = ($request->pro_major_id != 'null') ? $request->pro_major_id : $first_major->major_id;
        $product->pro_building_grade    = ($request->pro_building_grade != 'null') ? $request->pro_building_grade : 'grade-1';

        $product->pro_time_work         = $request->pro_time_work;
        $product->pro_area              = $request->pro_area;
        $product->pro_land_area         = $request->pro_land_area;
        $product->pro_location_id       = ($request->pro_location_id != 'null') ? $request->pro_location_id : $first_location->locate_id;
        $product->pro_induspark         = $request->pro_induspark;
        $product->pro_contractor        = $request->pro_contractor;
        $product->pro_scope_work        = $request->pro_scope_work;
        $product->pro_status            = isset($request->pro_status) ? $request->pro_status : 'ongoing' ;


        //Project photo
        if ($request->hasFile('pro_thumb')) {
            File::delete('public/upload/product/'.$product->pro_thumb);

            $file                   = $request->file('pro_thumb');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $product->pro_thumb     = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_thumb_hover')) {
            File::delete('public/upload/product/'.$product->pro_thumb_hover);

            $file                   = $request->file('pro_thumb_hover');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $product->pro_thumb_hover     = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_background')) {
            File::delete('public/upload/product/'.$product->pro_background);

            $file                   = $request->file('pro_background');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $product->pro_background     = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        

        // Catalouge img
        if ($request->hasFile('pro_catalouge_1')) {
            File::delete('public/upload/product/'.$product->pro_catalouge_1);

            $file                       = $request->file('pro_catalouge_1');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_1   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_2')) {
            File::delete('public/upload/product/'.$product->pro_catalouge_2);

            $file                       = $request->file('pro_catalouge_2');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_2   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_3')) {
            File::delete('public/upload/product/'.$product->pro_catalouge_3);

            $file                       = $request->file('pro_catalouge_3');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_3   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_4')) {
            File::delete('public/upload/product/'.$product->pro_catalouge_4);

            $file                       = $request->file('pro_catalouge_4');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_4   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_5')) {
            File::delete('public/upload/product/'.$product->pro_catalouge_5);

            $file                       = $request->file('pro_catalouge_5');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_5   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_6')) {
            File::delete('public/upload/product/'.$product->pro_catalouge_6);

            $file                       = $request->file('pro_catalouge_6');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_6   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_7')) {
            File::delete('public/upload/product/'.$product->pro_catalouge_7);

            $file                       = $request->file('pro_catalouge_7');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_7   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_8')) {
            File::delete('public/upload/product/'.$product->pro_catalouge_8);

            $file                       = $request->file('pro_catalouge_8');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_8   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        $product->updated_at            = Carbon::now();
        $product->save();

        return redirect()->intended('admin/project');
    }


    public function checkshowProgress($id){
        $product                                = ProductModel::find($id);
        $product->pro_progress_video_private    = $product->pro_progress_video_private ? 0 : 1;
        $product->save();
        
        return back();
    }

    public function checkshowProject($id){
        $product = ProductModel::find($id);
        $product->pro_hienthi = $product->pro_hienthi ? 0 : 1;
        $product->save();
        
        return back();
    }

    public function deleteProject(Request $request, $id){
        $nation_delete_item         = ProductModel::find($id)->pro_nation;
        $count_nation               = ProductModel::where('pro_nation', $nation_delete_item)->count();

        if( $count_nation == 1 ){

            $nation_uncheck_item    = NationModel::find($nation_delete_item);
            $nation_uncheck_item->nation_check = null;
            $nation_uncheck_item->save();

        }


        // Delete product alt photos
        $product_alt_photo  = ProductPhotoModel::where('product_id', $id)->get();
        foreach($product_alt_photo as $photo_item){
            File::delete('public/upload/productphoto/'.$photo_item->photo_url);
            ProductPhotoModel::destroy($photo_item->photo_id);
        }

        $product            = ProductModel::find($id);
        // Not use order manage so delete it
        File::delete('public/upload/product/'.$product->pro_thumb);
        ProductModel::destroy($id);

        // // Keep product thumb for order detail
        // File::delete('public/upload/product/'.$product->pro_thumb);
        
        return back();
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
