<?php

namespace App\Http\Controllers\admin;

use DB;
use File;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\TimelineModel;

class TimelineController extends Controller
{
    public function showTimeline(){
        // $data['timeline_list']     = TimelineModel::all();

        return view('admin.display.timeline');
    }


    public function addTimeline(){

        return view('admin.add.add_timeline');
    }


    public function postaddTimeline(Request $request){

        $timeline_item       = new TimelineModel;

        $timeline_item->timeline_date       = $request->timeline_date;

        if ($request->hasFile('timeline_img')) {
            $file_timeline_img             = $request->file('timeline_img');
            $timeline_img_image_name       = $file_timeline_img->getClientOriginalName();
            $timeline_img_image_save_name  = time().$timeline_img_image_name;
            $timeline_item->timeline_img    = $timeline_img_image_save_name;
            $file_timeline_img->move('public/upload/timeline/', $timeline_img_image_save_name);
        }

        $timeline_item->timeline_title_vi   = $request->timeline_title_vi;
        $timeline_item->timeline_title_en   = $request->timeline_title_en;
        $timeline_item->timeline_title_zh   = $request->timeline_title_zh;
        $timeline_item->timeline_title_ja   = $request->timeline_title_ja;
        $timeline_item->timeline_title_kr   = $request->timeline_title_kr;

        $timeline_item->timeline_description_vi   = $request->timeline_description_vi;
        $timeline_item->timeline_description_en   = $request->timeline_description_en;
        $timeline_item->timeline_description_zh   = $request->timeline_description_zh;
        $timeline_item->timeline_description_ja   = $request->timeline_description_ja;
        $timeline_item->timeline_description_kr   = $request->timeline_description_kr;

        $timeline_item->timeline_show             = true;

        $timeline_item->created_at            = Carbon::now();
        $timeline_item->updated_at            = Carbon::now();
        $timeline_item->save();


        

        return redirect()->intended('admin/timeline');
    }


}
