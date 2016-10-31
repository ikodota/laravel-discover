<?php

namespace App\Http\Controllers\Admin\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JeroenNoten\LaravelAdminLte;
use Illuminate\Support\Facades\Config;

class SiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    public function index()
    {
        //dd('test');
        return view('admin.setting.site');
    }
    public function save()
    {
        //neet save in database;
        Config::set('setting.site','test');
        dd('test');
    }
}
