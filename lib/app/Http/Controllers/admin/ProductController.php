<?php
namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Storage;

use DB;
use File;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\ProductCategoryModel;
use App\model\ProductModel;
use App\model\ProdutPhotoModel;
use App\model\ProductCategoryChildModel;
use App\model\CustomerModel;
use App\model\NationModel;
use App\model\MajorModel;
use App\model\ProductLocationModel;

use App\Http\Requests\AddProductRequest;
use App\Http\Requests\EditProductRequest;

class ProductController extends Controller
{
    
    public function getProduct(Request $request){
        $data['procat_list']        = ProductCategoryModel::all();
        $data['procatchild_list']   = ProductCategoryChildModel::all();
        $data['product_photo']      = ProdutPhotoModel::all();

        if(isset($request->filter_procat) && isset($request->filter_procat_child)) {

            //Filter product
            if($request->filter_procat_child == 'none'){
                $data['product_list']   = DB::table('tb_product')
                                                ->join('tb_productcat', 'tb_product.pro_procatid', '=', 'tb_productcat.procat_id')
                                                ->where('pro_procatid', '=', $request->filter_procat)
                                                ->orderBy('pro_id', 'desc')
                                                ->paginate(10);
            } elseif($request->filter_procat_child != 'none'){
                $data['product_list']   = DB::table('tb_product')
                                                ->join('tb_productcat', 'tb_product.pro_procatid', '=', 'tb_productcat.procat_id')
                                                ->where('pro_procat_child', '=', $request->filter_procat_child)
                                                ->orderBy('pro_id', 'desc')
                                                ->paginate(10);
            }
            
        } else {
            //Normal show
            $data['product_list']   = DB::table('tb_product')
                                        ->join('tb_productcat', 'tb_product.pro_procatid', '=', 'tb_productcat.procat_id')
                                        ->orderBy('pro_id', 'desc')
                                        ->paginate(10);
        }

        return view('admin/product', $data);
    }

    


    





    // -------------------Start Project Minh Global------------------

    //Get project list
    public function getProject(Request $request){
        $pro_type                   = $request->type;

        $data['project_list']       = ProductModel::where('pro_type', 'project')->orderBy('pro_time_work', 'desc')->get();
        $data['project_photo']      = ProdutPhotoModel::all();

        return view('admin/display/project', $data);
    }

    //Get view Add project
    public function addProject(Request $request){
        $data['pro_type']           = $request->type;
        $data['nation_list']        = NationModel::orderBy('nation_name_en', 'asc')->get();
        $data['major_list']         = MajorModel::all();
        $data['location_list']      = ProductLocationModel::orderBy('locate_name_vi', 'asc')->get();
        
        return view('admin/add/addproject', $data);
    }

    //Post Upload new project
    public function postaddProject(Request $request){

        $project_item       = new ProductModel;

        $product_type       = $request->type;

        if ($request->hasFile('pro_thumb')) {
            $file_pro_thumb             = $request->file('pro_thumb');
            $pro_thumb_image_name       = $file_pro_thumb->getClientOriginalName();
            $pro_thumb_image_save_name  = time().$pro_thumb_image_name;
            $project_item->pro_thumb    = $pro_thumb_image_save_name;
            $file_pro_thumb->move('public/upload/product/', $pro_thumb_image_save_name);
        }


        $product->pro_title             = isset($request->pro_title) ? $request->pro_title : $request->pro_ten_en;
        $product->pro_mota              = $request->pro_mota;
        $product->pro_keyword           = $request->pro_keyword;

        $product->updated_at            = Carbon::now();
        $product->save();


        if($request->hasFile('file')){
            foreach($request->file as $file){
                $alt_name       = $file->getClientOriginalName();
                $alt_save_name  = time().$alt_name;
                $file->move('public/upload/productphoto/', $alt_save_name);

                $alt_item               = new ProdutPhotoModel;
                $alt_item->photo_url    = $alt_save_name;
                $alt_item->product_id   = $id;
                $alt_item->created_at   = Carbon::now();
                $alt_item->updated_at   = Carbon::now();
                $alt_item->save();
            }
        }

        if($request->hasFile('file_private')){
            foreach($request->file_private as $file){
                $alt_name       = $file->getClientOriginalName();
                $alt_save_name  = time().$alt_name;
                $file->move('public/upload/productphoto/', $alt_save_name);

                $alt_item               = new ProdutPhotoModel;
                $alt_item->photo_url    = $alt_save_name;
                $alt_item->photo_type    = "private";
                $alt_item->product_id   = $id;
                $alt_item->created_at   = Carbon::now();
                $alt_item->updated_at   = Carbon::now();
                $alt_item->save();
            }
        }

        return redirect()->intended('admin/project');
    }


    // -------------------End Project------------------




    // ----------------Start achievement---------------


    //Get view add achievement
    public function addAchievement(Request $request){
        $data['procat_list']        = ProductCategoryModel::all();
        $data['procatchild_list']   = ProductCategoryChildModel::all();

        $product_id                 = ProductModel::select('pro_id')->orderBy('created_at', 'desc')->first();
        $data['photo_pro_id']       = $product_id;
        return view('admin/addproduct', $data);
    }


    //Upload new achievement
    public function postaddAchievement(Request $request){

        $product_type           = $request->type;

        if ($request->hasFile('pro_thumb')) {
            $file               = $request->file('pro_thumb');
            $image_name         = $file->getClientOriginalName();
            $image_save_name    = time().$image_name;
            $file->move('public/upload/product/', $image_save_name);
        }      
      

        $productId = ProductModel::insertGetId([
            'pro_ten'           => $request->pro_ten,
            'pro_ten_en'        => $request->pro_ten_en,
            'pro_level'         => ($request->pro_level!='none') ? $request->pro_level : '',

            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ]);
    

        if($request->hasFile('file')){

            foreach($request->file as $file){
                $alt_name       = $file->getClientOriginalName();
                $alt_save_name  = time().$alt_name;
                $file->move('public/upload/productphoto/', $alt_save_name);

                $alt_item               = new ProdutPhotoModel;
                $alt_item->photo_url    = $alt_save_name;
                $alt_item->product_id   = $productId;
                $alt_item->created_at   = Carbon::now();
                $alt_item->updated_at   = Carbon::now();
                $alt_item->save();
            }

        }



        return redirect()->intended('admin/template/achievement');

    }

    // -------------------End achievement------------------



    //Pic product category in add and edit page
    public function ajaxProcatChild($idprocat){
        $procat_child       = ProductCategoryChildModel::where('procat2_procat_id', $idprocat)->get();
        $count_procat_child = ProductCategoryChildModel::where('procat2_procat_id', $idprocat)->count();

        if($count_procat_child != 0){
            foreach($procat_child as $key => $item){
                if($key==0){
                    echo "<option>Chọn danh mục con</option>";
                }
                echo "<option value='".$item->procat2_id."'>".$item->procat2_ten."</option>";
            }
        } else {
            echo "<option value='none'>Chọn danh mục con</option>";
        }

    }

    

    //Pic product category in add and edit page
    public function ajaxeditProcatChild($id, $idprocat){
        $procat_child       = ProductCategoryChildModel::where('procat2_procat_id', $idprocat)->get();
        $count_procat_child = ProductCategoryChildModel::where('procat2_procat_id', $idprocat)->count();

        if($count_procat_child != 0){
            foreach($procat_child as $key => $item){
                if($key==0){
                    echo "<option>Chọn danh mục con</option>";
                }
                echo "<option value='".$item->procat2_id."'>".$item->procat2_ten."</option>";
            }
        } else {
            echo "<option value='none'>Chọn danh mục con</option>";
        }

    }


    //Get view edit product
    public function getProductDetail($id){
        $data['editpro']            = ProductModel::find($id);
        $data['procat_list']        = ProductCategoryModel::all();
        $data['procat_child_list']  = ProductCategoryChildModel::all();
        $data['alt_photos']         = ProdutPhotoModel::where('product_id', $id)->get();

        return view('admin/editproduct', $data);
    }

    //Edit product
    public function postProductDetail(EditProductRequest $request, $id){
        $product = ProductModel::find($id);
       
        $product->pro_ten           = $request->pro_ten;
        $product->pro_ten_en        = $request->pro_ten_en;
        if ($request->hasFile('pro_thumb')) {
            File::delete('public/upload/product/'.$product->pro_thumb);

            $file                   = $request->file('pro_thumb');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $product->pro_thumb     = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }


        $product->pro_title             = isset($request->pro_title) ? $request->pro_title : $request->pro_ten;
        $product->pro_mota              = $request->pro_mota;
        $product->pro_keyword           = $request->pro_keyword;

        $product->pro_editor            = $request->pro_editor;
        $product->updated_at            = Carbon::now();
        $product->save();


        if($request->hasFile('file')){
            foreach($request->file as $file){
                $alt_name       = $file->getClientOriginalName();
                $alt_save_name  = time().$alt_name;
                $file->move('public/upload/productphoto/', $alt_save_name);

                $alt_item               = new ProdutPhotoModel;
                $alt_item->photo_url    = $alt_save_name;
                $alt_item->product_id   = $id;
                $alt_item->created_at   = Carbon::now();
                $alt_item->updated_at   = Carbon::now();
                $alt_item->save();
            }
        }

        return redirect()->intended('admin/template/achievement');
    }
    

    //Delete product action
    public function deleteProduct(Request $request, $id){
        $nation_delete_item         = ProductModel::find($id)->pro_nation;
        $count_nation               = ProductModel::where('pro_nation', $nation_delete_item)->count();

        if( $count_nation == 1 ){

            $nation_uncheck_item    = NationModel::find($nation_delete_item);
            $nation_uncheck_item->nation_check = null;
            $nation_uncheck_item->save();

        }


        // Delete product alt photos
        $product_alt_photo  = ProdutPhotoModel::where('product_id', $id)->get();
        foreach($product_alt_photo as $photo_item){
            File::delete('public/upload/productphoto/'.$photo_item->photo_url);
            ProdutPhotoModel::destroy($photo_item->photo_id);
        }

        $product            = ProductModel::find($id);
        // Not use order manage so delete it
        File::delete('public/upload/product/'.$product->pro_thumb);
        ProductModel::destroy($id);

        
        return back();
    }
	
    
    //Check show or hide product action
    public function checkshowProduct($id){
        $product = ProductModel::find($id);
        $product->pro_hienthi = $product->pro_hienthi ? 0 : 1;
        $product->save();
        
        return back();
    }

    

    public function checkshowProgress($id){
        $product                                = ProductModel::find($id);
        $product->pro_progress_video_private    = $product->pro_progress_video_private ? 0 : 1;
        $product->save();
        
        return back();
    }
}
