<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Admin',1)->create([
            'name' => 'admin',
            'email' => '28341847@qq.com',
            'password' => bcrypt('123456')
        ]);
    }
}
