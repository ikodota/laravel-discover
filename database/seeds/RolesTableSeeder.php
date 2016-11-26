<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Role',1)->create([
            'name'          => 'admin',
            'display_name'  => '超级管理员',
            'description'   => '拥有全部权限'
        ]);

    }
}
