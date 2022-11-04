<?php

namespace App\Http\Controllers\admin;

use DB;
use Carbon\Carbon;
use File;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\ProductCategoryModel;
use App\Http\Requests\AddProductCatRequest;
use App\Http\Requests\EditProductCatRequest;
use App\Http\Requests\ProductCatChildRequest;

use App\model\ProductLocationModel;
use App\model\ProductCategoryChildModel;
use App\model\CustomerModel;
use App\model\MajorModel;

class ProductCategoryController extends Controller
{

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

    public function deleteMajor($id){
        MajorModel::destroy($id);
        return back();
    }


    // ----------------------End Project Major--------------------



   
}
