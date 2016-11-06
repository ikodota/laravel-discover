<?php

namespace app\Http\Controllers\Admin\Setting;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;
use JeroenNoten\LaravelAdminLte;
use Illuminate\Support\Facades\Config;
use app\Settings as Settings;

class WebsiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    public function index()
    {
        //dd('test');
        $settings = Settings::where('type', 'website')
            ->get();
        $arr=[];
        foreach ($settings as $setting){
            $arr[$setting->key] = $setting->value;
        }
        return view('admin.setting.website')->with($arr);
    }
    public function save(Request $request)
    {
        //neet save in database;
        $inputs = $request->except('_token');
        //$setting = new Settings();
        foreach ($inputs as $key => $value)
        {
            $setting = Settings::firstOrNew([
                'key' => $key,
            ]);
            $setting->value = $value;
            $setting->type = 'website';
            $setting->save();
        }
        if(!isset($inputs['website_status'])){
            $setting = Settings::firstOrNew([
                'key' => 'website_status',
            ]);
            $setting->value = 'off';
            $setting->type = 'website';
            $setting->save();
        }
        if(!isset($inputs['verify_code_reg'])){
            $setting = Settings::firstOrNew([
                'key' => 'verify_code_reg',
            ]);
            $setting->value = 'off';
            $setting->type = 'website';
            $setting->save();
        }
        if(!isset($inputs['verify_code_login'])){
            $setting = Settings::firstOrNew([
                'key' => 'verify_code_login',
            ]);
            $setting->value = 'off';
            $setting->type = 'website';
            $setting->save();
        }
        $request->session()->flash('flash_message', 'Save successful!');
        return redirect()->back();
    }
}
