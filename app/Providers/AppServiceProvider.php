<?php

namespace app\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            //$event->menu->add('MAIN NAVIGATION');
            $event->menu->add([
                'text'=> trans('adminmenu.dashboard'),
                'url' => 'admin/dashboard',
                'icon'=> 'dashboard',
            ]);
            $event->menu->add(trans('adminmenu.system'));
            $event->menu->add([
                'text'=>'setting',
                'icon'=>'cogs',
                'submenu' =>[
                    [
                        'text' => trans('adminmenu.site_setting.menu_name'),
                        'url' => 'admin/setting/site',
                    ],[
                        'text' => trans('adminmenu.attachment_setting.menu_name'),
                        'url' => 'admin/setting/attachment',
                    ],[
                        'text' => trans('adminmenu.payment_setting.menu_name'),
                        'url' => 'admin/setting/payment',
                    ],[
                        'text' => trans('adminmenu.notice_setting.menu_name'),
                        'url' => 'admin/setting/notice',
                    ],[
                        'text' => trans('adminmenu.other_setting.menu_name'),
                        'url' => 'admin/setting/other',
                    ],
                ]
            ]);
            $event->menu->add(trans('adminmenu.member'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
