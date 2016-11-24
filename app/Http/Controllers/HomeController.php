<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('home');
        $test=Role::find(1);
        $test->name='super_admin';
        $test->display_name='超级管理员';
        $result=$test->save();
        if ($result) {
            echo "saved success";
        }else{
            echo "saved fail";
        }
    }
}
