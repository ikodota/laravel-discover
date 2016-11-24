<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User',1)->create([
            'name' => 'ikodota',
            'email' => '28341847@qq.com',
            'password' => bcrypt('123456')
        ]);
    }
}
