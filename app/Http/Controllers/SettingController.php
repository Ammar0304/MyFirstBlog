<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Session;
class SettingController extends Controller
{
	public function index(){
		
        $settings = Setting::first();
		return view('blog/admin/setting/setting')->with('settings', $settings);
	}
    public function update(Request $request){
        
        $this->validate($request,[
         'name' => 'required',
         'contact_number' => 'required',
         'contact_email' => 'required',
         'address' => 'required'

        ]);

    	$setting = Setting::first();

    	$setting->name = request()->name;
    	$setting->contact_number = request()->contact_number;
    	$setting->contact_email = request()->contact_email;
    	$setting->address = request()->address;

    	$setting->save();

    	Session::flash('app_info','Site Info Updated Successfully');

    	return redirect()->back();


    }
}
