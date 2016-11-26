<?php

use Illuminate\Database\Seeder;

class MenuClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_class')->insert(array(

            array(
                'id' => 1,
                'name' => 'admin',
                'display_name' => '后台菜单',
            ),
            array(
                'id' => 2,
                'name' => 'web',
                'display_name' => '前台主菜单',
            ),
            array(
                'id' => 3,
                'name' => 'merchant',
                'display_name' => '商户平台菜单',
            )
        ));
    }
}
