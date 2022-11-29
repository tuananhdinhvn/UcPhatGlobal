<?php

namespace App\Http\Controllers\admin;

use DB;
use File;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\EventModel;

class EventController extends Controller
{
    public function showTimeline(){
        $data['timeline_list']         = EventModel::orderBy('event_date', 'ASC')->get();

        return view('admin.display.timeline', $data);
    }


    public function addTimeline(){
        return view('admin.add.add_timeline');
    }


    public function postaddTimeline(Request $request){

        $timeline_item       = new EventModel;

        $timeline_item->event_date          = $request->event_date;

        if ($request->hasFile('event_img')) {
            $file_timeline_img              = $request->file('event_img');
            $timeline_img_image_name        = $file_timeline_img->getClientOriginalName();
            $timeline_img_image_save_name   = time().$timeline_img_image_name;
            $timeline_item->event_img    = $timeline_img_image_save_name;
            $file_timeline_img->move('public/upload/timeline/', $timeline_img_image_save_name);
        }

        $timeline_item->event_title_vi   = $request->event_title_vi;
        $timeline_item->event_title_en   = $request->event_title_en;
        $timeline_item->event_title_zh   = $request->event_title_zh;
        $timeline_item->event_title_ja   = $request->event_title_ja;
        $timeline_item->event_title_kr   = $request->event_title_kr;

        $timeline_item->event_description_vi    = $request->event_description_vi;
        $timeline_item->event_description_en    = $request->event_description_en;
        $timeline_item->event_description_zh    = $request->event_description_zh;
        $timeline_item->event_description_ja    = $request->event_description_ja;
        $timeline_item->event_description_kr    = $request->event_description_kr;

        $timeline_item->event_show              = true;

        $timeline_item->created_at              = Carbon::now();
        $timeline_item->updated_at              = Carbon::now();
        $timeline_item->save();


        return redirect()->intended('admin/timeline');
    }

    public function editTimeline($id){
        $data['timeline_item']      = EventModel::find($id);

        return view('admin.edit.edit_timeline', $data);
    }



    public function posteditTimeline(Request $request, $id){
        $timeline_item      = EventModel::find($id);
       
        $timeline_item->event_date          = $request->event_date;

        if ($request->hasFile('event_img')) {
            File::delete('public/upload/timeline/'.$timeline_item->event_img);

            $file                       = $request->file('event_img');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $timeline_item->event_img   = $image_save_name;
            $file->move('public/upload/timeline/', $image_save_name);
        }


        $timeline_item->event_title_vi   = $request->event_title_vi;
        $timeline_item->event_title_en   = $request->event_title_en;
        $timeline_item->event_title_zh   = $request->event_title_zh;
        $timeline_item->event_title_ja   = $request->event_title_ja;
        $timeline_item->event_title_kr   = $request->event_title_kr;

        $timeline_item->event_description_vi    = $request->event_description_vi;
        $timeline_item->event_description_en    = $request->event_description_en;
        $timeline_item->event_description_zh    = $request->event_description_zh;
        $timeline_item->event_description_ja    = $request->event_description_ja;
        $timeline_item->event_description_kr    = $request->event_description_kr;

        $timeline_item->updated_at              = Carbon::now();
        $timeline_item->save();

        return redirect()->intended('admin/timeline');
    }


    public function checkshowTimeline($id){
        $timeline_item              = EventModel::find($id);
        
        $timeline_item->event_show  = $timeline_item->event_show ? false : true;
        $timeline_item->save();

        return back();

    }



    public function deleteTimeline(Request $request, $id){
        $timeline_item      = EventModel::find($id);

        File::delete('public/upload/timeline/'.$timeline_item->event_img);
        EventModel::destroy($id);

        return redirect()->intended('admin/timeline');
       
    }

}
