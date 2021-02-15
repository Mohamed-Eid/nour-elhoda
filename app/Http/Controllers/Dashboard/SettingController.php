<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function contact(){
        return view('dashboard.settings.contact');
    }

    public function update(Request $request){
        // dd($request->all());
        foreach ($request->except(['_token','_method']) as $key => $value) {
            //dd($key);
            $setting = Setting::find($key);
            if(isset($value['image'])){
                delete_image('settings',$setting->image);
                $value['image'] = upload_image_without_resize('settings',$value['image']);
            }
            $setting->update($value);
        }

        session()->flash('success', 'تم الحفظ بنجاح');
        return redirect()->back();
    }
}
