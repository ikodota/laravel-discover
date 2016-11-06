<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('用户名');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('mobile', 11)->nullable();
            $table->boolean('status')->nullable();
            $table->integer('level')->nullable();
            $table->string('realname', 20)->nullable();
            $table->string('nickname', 20)->nullable();
            $table->decimal('credit1', 10,2)->nullable()->default("0.00");
            $table->decimal('credit2', 10,2)->nullable()->default("0.00");
            $table->string('birthyear', 10)->nullable();
            $table->string('birthmonth', 10)->nullable();
            $table->string('birthday', 10)->nullable();
            $table->boolean('gender')->nullable();
            $table->string('avatar', 255)->nullable();
            $table->string('province', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('area', 50)->nullable();
            $table->integer('inviter')->nullable();
            $table->string('carrier_mobile', 11)->nullable();
            $table->string('openid_qq', 32)->nullable();
            $table->string('openid_wx', 50)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        /**
         * Table: user_address
         */
        Schema::create('user_address', function($table) {
            $table->increments('id');
            $table->string('openid', 50)->nullable();
            $table->string('realname', 20)->nullable();
            $table->string('mobile', 11)->nullable();
            $table->string('province', 30)->nullable();
            $table->string('city', 30)->nullable();
            $table->string('area', 30)->nullable();
            $table->string('address', 300)->nullable();
            $table->boolean('isdefault')->nullable();
            $table->string('zipcode', 255)->nullable();
            $table->boolean('deleted')->nullable();
        });


        /**
         * Table: user_cart
         */
        Schema::create('user_cart', function($table) {
            $table->increments('id');
            $table->string('openid', 100)->nullable();
            $table->integer('goodsid')->nullable();
            $table->integer('total')->nullable();
            $table->decimal('marketprice', 10,2)->nullable()->default("0.00");
            $table->boolean('deleted')->nullable();
            $table->integer('optionid')->nullable();
            $table->integer('createtime')->nullable();
            $table->integer('diyformdataid')->nullable();
            $table->text('diyformdata')->nullable();
            $table->text('diyformfields')->nullable();
            $table->integer('diyformid')->nullable();
            $table->boolean('selected')->nullable()->default("1");
            $table->boolean('selectedadd')->nullable()->default("1");
            $table->integer('merchid')->nullable();
        });


        /**
         * Table: user_favorite
         */
        Schema::create('user_favorite', function($table) {
            $table->increments('id');
            $table->integer('goodsid')->nullable();
            $table->string('openid', 50)->nullable();
            $table->boolean('deleted')->nullable();
            $table->integer('merchid')->nullable();
            $table->integer('type')->nullable();
            $table->timestamps();
        });


        /**
         * Table: user_group
         */
        Schema::create('user_group', function($table) {
            $table->increments('id');
            $table->integer('uniacid')->nullable();
            $table->string('groupname', 255)->nullable();
        });


        /**
         * Table: user_history
         */
        Schema::create('user_history', function($table) {
            $table->increments('id');
            $table->integer('goodsid')->nullable();
            $table->string('openid', 50)->nullable();
            $table->boolean('deleted')->nullable();
            $table->integer('times')->nullable();
            $table->integer('merchid')->nullable();
            $table->timestamps();
        });


        /**
         * Table: user_level
         */
        Schema::create('user_level', function($table) {
            $table->increments('id');
            $table->integer('level')->nullable();
            $table->string('levelname', 50)->nullable();
            $table->decimal('ordermoney', 10,2)->nullable()->default("0.00");
            $table->integer('ordercount')->nullable();
            $table->decimal('discount', 10,2)->nullable()->default("0.00");
            $table->boolean('enabled')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('user_address');
        Schema::dropIfExists('user_cart');
        Schema::dropIfExists('user_favorite');
        Schema::dropIfExists('user_group');
        Schema::dropIfExists('user_history');
        Schema::dropIfExists('user_level');

    }
}
