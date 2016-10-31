<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin','namespace' => 'Admin'],function ($router)
{

    $router->get('login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    $router->post('login', 'Auth\LoginController@login');
    $router->post('logout', 'Auth\LoginController@logout');

    $router->get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm');
    $router->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    $router->get('password/reset', 'Auth\ResetPasswordController@showResetForm')->name('admin.reset');
    $router->post('password/reset', 'Auth\ResetPasswordController@reset');



    $router->get('dashboard', 'DashboardController@index');
    $router->get('setting/site', 'Setting\SiteController@index');
    $router->POST('setting/site', 'Setting\SiteController@save');
});



Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
