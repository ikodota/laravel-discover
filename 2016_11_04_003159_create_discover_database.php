<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatediscoverDatabase extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
         public function up()
         {
            
	    /**
	     * Table: l5_admin_password_resets
	     */
	    Schema::create('l5_admin_password_resets', function($table) {
                $table->string('email', 255);
                $table->string('token', 255);
                $table->timestamp('created_at')->nullable();
                $table->index('admin_password_resets_email_index');
                $table->index('admin_password_resets_token_index');
            });


	    /**
	     * Table: l5_admins
	     */
	    Schema::create('l5_admins', function($table) {
                $table->increments('id')->unsigned();
                $table->string('name', 255);
                $table->string('email', 255);
                $table->string('password', 255);
                $table->string('remember_token', 100)->nullable();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
                $table->index('admins_email_unique');
            });


	    /**
	     * Table: l5_adv
	     */
	    Schema::create('l5_adv', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('advname', 50)->nullable();
                $table->string('link', 255)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->integer('displayorder')->nullable();
                $table->integer('enabled')->nullable();
                $table->integer('shopid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_enabled');
                $table->index('idx_displayorder');
            });


	    /**
	     * Table: l5_article
	     */
	    Schema::create('l5_article', function($table) {
                $table->increments('id');
                $table->string('article_title', 255);
                $table->text('resp_desc');
                $table->text('resp_img');
                $table->longText('article_content')->nullable();
                $table->integer('article_category');
                $table->string('article_date_v', 20);
                $table->string('article_date', 20);
                $table->string('article_mp', 50);
                $table->string('article_author', 20);
                $table->integer('article_readnum_v');
                $table->integer('article_readnum');
                $table->integer('article_likenum_v');
                $table->integer('article_likenum');
                $table->string('article_linkurl', 300);
                $table->integer('article_rule_daynum');
                $table->integer('article_rule_allnum');
                $table->integer('article_rule_credit');
                $table->decimal('article_rule_money', 10,2)->default("0.00");
                $table->integer('page_set_option_nocopy');
                $table->integer('page_set_option_noshare_tl');
                $table->integer('page_set_option_noshare_msg');
                $table->string('article_keyword', 255);
                $table->integer('article_report');
                $table->integer('product_advs_type');
                $table->string('product_advs_title', 255);
                $table->string('product_advs_more', 255);
                $table->string('product_advs_link', 255);
                $table->text('product_advs');
                $table->integer('article_state');
                $table->string('network_attachment', 255)->nullable();
                $table->integer('uniacid');
                $table->integer('article_rule_credittotal')->nullable();
                $table->decimal('article_rule_moneytotal', 10,2)->nullable()->default("0.00");
                $table->integer('article_rule_credit2');
                $table->decimal('article_rule_money2', 10,2)->default("0.00");
                $table->integer('article_rule_creditm');
                $table->decimal('article_rule_moneym', 10,2)->default("0.00");
                $table->integer('article_rule_creditm2');
                $table->decimal('article_rule_moneym2', 10,2)->default("0.00");
                $table->integer('article_readtime')->nullable();
                $table->string('article_areas', 255)->nullable();
                $table->integer('article_endtime')->nullable();
                $table->boolean('article_hasendtime')->nullable();
                $table->integer('displayorder')->nullable();
                $table->string('article_keyword2', 255);
                $table->integer('article_advance')->nullable();
                $table->boolean('article_virtualadd')->nullable();
                $table->boolean('article_visit')->nullable();
                $table->text('article_visit_level')->nullable();
                $table->string('article_visit_tip', 500)->nullable();
                $table->index('idx_article_title');
                $table->index('idx_article_content');
                $table->index('idx_article_keyword');
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_article_category
	     */
	    Schema::create('l5_article_category', function($table) {
                $table->increments('id');
                $table->string('category_name', 255);
                $table->integer('uniacid');
                $table->integer('displayorder');
                $table->boolean('isshow');
                $table->index('idx_uniacid');
                $table->index('idx_category_name');
            });


	    /**
	     * Table: l5_article_log
	     */
	    Schema::create('l5_article_log', function($table) {
                $table->increments('id');
                $table->integer('aid');
                $table->integer('read');
                $table->integer('like');
                $table->string('openid', 255);
                $table->integer('uniacid');
                $table->index('idx_aid');
                $table->index('idx_openid');
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_article_report
	     */
	    Schema::create('l5_article_report', function($table) {
                $table->increments('id');
                $table->integer('mid');
                $table->string('openid', 255);
                $table->integer('aid')->nullable();
                $table->string('cate', 255);
                $table->string('cons', 255);
                $table->integer('uniacid');
            });


	    /**
	     * Table: l5_article_share
	     */
	    Schema::create('l5_article_share', function($table) {
                $table->increments('id');
                $table->integer('aid');
                $table->integer('share_user');
                $table->integer('click_user');
                $table->string('click_date', 20);
                $table->integer('add_credit');
                $table->decimal('add_money', 10,2)->default("0.00");
                $table->integer('uniacid');
                $table->index('idx_aid');
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_article_sys
	     */
	    Schema::create('l5_article_sys', function($table) {
                $table->increments('uniacid');
                $table->string('article_message', 255);
                $table->string('article_title', 255);
                $table->string('article_image', 300);
                $table->integer('article_shownum');
                $table->string('article_keyword', 255);
                $table->integer('article_temp');
                $table->string('article_source', 255);
                $table->index('idx_article_message');
                $table->index('idx_article_keyword');
                $table->index('idx_article_title');
            });


	    /**
	     * Table: l5_banner
	     */
	    Schema::create('l5_banner', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('bannername', 50)->nullable();
                $table->string('link', 255)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->integer('displayorder')->nullable();
                $table->integer('enabled')->nullable();
                $table->integer('shopid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_enabled');
                $table->index('idx_displayorder');
            });


	    /**
	     * Table: l5_carrier
	     */
	    Schema::create('l5_carrier', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('realname', 50)->nullable();
                $table->string('mobile', 50)->nullable();
                $table->string('address', 255)->nullable();
                $table->boolean('deleted')->nullable();
                $table->integer('createtime')->nullable();
                $table->integer('displayorder')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_deleted');
                $table->index('idx_createtime');
            });


	    /**
	     * Table: l5_category
	     */
	    Schema::create('l5_category', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('name', 50)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->integer('parentid')->nullable();
                $table->integer('isrecommand')->nullable();
                $table->string('description', 500)->nullable();
                $table->boolean('displayorder')->nullable()->unsigned();
                $table->boolean('enabled')->nullable()->default("1");
                $table->boolean('ishome')->nullable();
                $table->string('advimg', 255)->nullable();
                $table->string('advurl', 500)->nullable();
                $table->boolean('level')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_displayorder');
                $table->index('idx_enabled');
                $table->index('idx_parentid');
                $table->index('idx_isrecommand');
                $table->index('idx_ishome');
            });


	    /**
	     * Table: l5_commission_apply
	     */
	    Schema::create('l5_commission_apply', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('applyno', 255)->nullable();
                $table->integer('mid')->nullable();
                $table->boolean('type')->nullable();
                $table->longText('orderids')->nullable();
                $table->decimal('commission', 10,2)->nullable()->default("0.00");
                $table->decimal('commission_pay', 10,2)->nullable()->default("0.00");
                $table->text('content')->nullable();
                $table->boolean('status')->nullable();
                $table->integer('applytime')->nullable();
                $table->integer('checktime')->nullable();
                $table->integer('paytime')->nullable();
                $table->integer('invalidtime')->nullable();
                $table->integer('refusetime')->nullable();
                $table->decimal('realmoney', 10,2)->nullable()->default("0.00");
                $table->decimal('charge', 10,2)->nullable()->default("0.00");
                $table->decimal('deductionmoney', 10,2)->nullable()->default("0.00");
                $table->decimal('beginmoney', 10,2)->nullable()->default("0.00");
                $table->decimal('endmoney', 10,2)->nullable()->default("0.00");
                $table->string('alipay', 50);
                $table->string('bankname', 50);
                $table->string('bankcard', 50);
                $table->string('realname', 50);
                $table->index('idx_uniacid');
                $table->index('idx_mid');
                $table->index('idx_checktime');
                $table->index('idx_paytime');
                $table->index('idx_applytime');
                $table->index('idx_status');
                $table->index('idx_invalidtime');
            });


	    /**
	     * Table: l5_commission_bank
	     */
	    Schema::create('l5_commission_bank', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->string('bankname', 255);
                $table->string('content', 255);
                $table->boolean('status');
                $table->integer('displayorder');
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_commission_clickcount
	     */
	    Schema::create('l5_commission_clickcount', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->string('from_openid', 255)->nullable();
                $table->integer('clicktime')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_openid');
                $table->index('idx_from_openid');
            });


	    /**
	     * Table: l5_commission_level
	     */
	    Schema::create('l5_commission_level', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->string('levelname', 50)->nullable();
                $table->decimal('commission1', 10,2)->nullable()->default("0.00");
                $table->decimal('commission2', 10,2)->nullable()->default("0.00");
                $table->decimal('commission3', 10,2)->nullable()->default("0.00");
                $table->decimal('commissionmoney', 10,2)->nullable()->default("0.00");
                $table->decimal('ordermoney', 10,2)->nullable()->default("0.00");
                $table->string('downcount', 255)->nullable();
                $table->integer('ordercount')->nullable();
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_commission_log
	     */
	    Schema::create('l5_commission_log', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('applyid')->nullable();
                $table->integer('mid')->nullable();
                $table->decimal('commission', 10,2)->nullable()->default("0.00");
                $table->integer('createtime')->nullable();
                $table->decimal('commission_pay', 10,2)->nullable()->default("0.00");
                $table->decimal('realmoney', 10,2)->nullable()->default("0.00");
                $table->decimal('charge', 10,2)->nullable()->default("0.00");
                $table->decimal('deductionmoney', 10,2)->nullable()->default("0.00");
                $table->boolean('type');
                $table->index('idx_uniacid');
                $table->index('idx_applyid');
                $table->index('idx_mid');
                $table->index('idx_createtime');
            });


	    /**
	     * Table: l5_commission_rank
	     */
	    Schema::create('l5_commission_rank', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->boolean('type');
                $table->integer('num');
                $table->boolean('status');
                $table->string('title', 255);
                $table->text('content')->nullable();
            });


	    /**
	     * Table: l5_commission_repurchase
	     */
	    Schema::create('l5_commission_repurchase', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('openid', 50)->nullable();
                $table->integer('year')->nullable();
                $table->boolean('month')->nullable();
                $table->decimal('repurchase', 10,2)->nullable()->default("0.00");
                $table->integer('applyid')->nullable();
                $table->index('applyid');
                $table->index('openid');
                $table->index('uniacid');
            });


	    /**
	     * Table: l5_commission_shop
	     */
	    Schema::create('l5_commission_shop', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('mid')->nullable();
                $table->string('name', 255)->nullable();
                $table->string('logo', 255)->nullable();
                $table->string('img', 255)->nullable();
                $table->string('desc', 255)->nullable();
                $table->boolean('selectgoods')->nullable();
                $table->boolean('selectcategory')->nullable();
                $table->text('goodsids')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_mid');
            });


	    /**
	     * Table: l5_coupon
	     */
	    Schema::create('l5_coupon', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('catid')->nullable();
                $table->string('couponname', 255)->nullable();
                $table->boolean('gettype')->nullable();
                $table->integer('getmax')->nullable();
                $table->boolean('usetype')->nullable();
                $table->boolean('returntype')->nullable();
                $table->string('bgcolor', 255)->nullable();
                $table->decimal('enough', 10,2)->nullable()->default("0.00");
                $table->boolean('timelimit')->nullable();
                $table->boolean('coupontype')->nullable();
                $table->integer('timedays')->nullable();
                $table->integer('timestart')->nullable();
                $table->integer('timeend')->nullable();
                $table->decimal('discount', 10,2)->nullable()->default("0.00");
                $table->decimal('deduct', 10,2)->nullable()->default("0.00");
                $table->boolean('backtype')->nullable();
                $table->string('backmoney', 50)->nullable();
                $table->string('backcredit', 50)->nullable();
                $table->string('backredpack', 50)->nullable();
                $table->boolean('backwhen')->nullable();
                $table->string('thumb', 255)->nullable();
                $table->text('desc')->nullable();
                $table->integer('createtime')->nullable();
                $table->integer('total')->nullable();
                $table->boolean('status')->nullable();
                $table->decimal('money', 10,2)->nullable()->default("0.00");
                $table->text('respdesc')->nullable();
                $table->string('respthumb', 255)->nullable();
                $table->string('resptitle', 255)->nullable();
                $table->string('respurl', 255)->nullable();
                $table->integer('credit')->nullable();
                $table->boolean('usecredit2')->nullable();
                $table->string('remark', 1000)->nullable();
                $table->boolean('descnoset')->nullable();
                $table->string('pwdkey', 255)->nullable();
                $table->text('pwdsuc')->nullable();
                $table->text('pwdfail')->nullable();
                $table->string('pwdurl', 255)->nullable();
                $table->text('pwdask')->nullable();
                $table->boolean('pwdstatus')->nullable();
                $table->integer('pwdtimes')->nullable();
                $table->text('pwdfull')->nullable();
                $table->text('pwdwords')->nullable();
                $table->boolean('pwdopen')->nullable();
                $table->text('pwdown')->nullable();
                $table->string('pwdexit', 255)->nullable();
                $table->text('pwdexitstr')->nullable();
                $table->integer('displayorder')->nullable();
                $table->string('pwdkey2', 255)->nullable();
                $table->integer('merchid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_coupontype');
                $table->index('idx_timestart');
                $table->index('idx_timeend');
                $table->index('idx_timelimit');
                $table->index('idx_status');
                $table->index('idx_givetype');
                $table->index('idx_catid');
            });


	    /**
	     * Table: l5_coupon_category
	     */
	    Schema::create('l5_coupon_category', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('name', 255)->nullable();
                $table->integer('displayorder')->nullable();
                $table->integer('status')->nullable();
                $table->integer('merchid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_displayorder');
                $table->index('idx_status');
            });


	    /**
	     * Table: l5_coupon_data
	     */
	    Schema::create('l5_coupon_data', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->integer('couponid')->nullable();
                $table->boolean('gettype')->nullable();
                $table->integer('used')->nullable();
                $table->integer('usetime')->nullable();
                $table->integer('gettime')->nullable();
                $table->integer('senduid')->nullable();
                $table->string('ordersn', 255)->nullable();
                $table->boolean('back')->nullable();
                $table->integer('backtime')->nullable();
                $table->integer('merchid')->nullable();
                $table->index('idx_couponid');
                $table->index('idx_gettype');
            });


	    /**
	     * Table: l5_coupon_guess
	     */
	    Schema::create('l5_coupon_guess', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('couponid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->integer('times')->nullable();
                $table->string('pwdkey', 255)->nullable();
                $table->boolean('ok')->nullable();
                $table->integer('merchid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_couponid');
            });


	    /**
	     * Table: l5_coupon_log
	     */
	    Schema::create('l5_coupon_log', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('logno', 255)->nullable();
                $table->string('openid', 255)->nullable();
                $table->integer('couponid')->nullable();
                $table->integer('status')->nullable();
                $table->boolean('paystatus')->nullable();
                $table->boolean('creditstatus')->nullable();
                $table->integer('createtime')->nullable();
                $table->boolean('paytype')->nullable();
                $table->boolean('getfrom')->nullable();
                $table->integer('merchid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_couponid');
                $table->index('idx_status');
                $table->index('idx_paystatus');
                $table->index('idx_createtime');
                $table->index('idx_getfrom');
            });


	    /**
	     * Table: l5_creditshop_adv
	     */
	    Schema::create('l5_creditshop_adv', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('advname', 50)->nullable();
                $table->string('link', 255)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->integer('displayorder')->nullable();
                $table->integer('enabled')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_enabled');
                $table->index('idx_displayorder');
            });


	    /**
	     * Table: l5_creditshop_category
	     */
	    Schema::create('l5_creditshop_category', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('name', 50)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->boolean('displayorder')->nullable()->unsigned();
                $table->boolean('enabled')->nullable()->default("1");
                $table->string('advimg', 255)->nullable();
                $table->string('advurl', 500)->nullable();
                $table->boolean('isrecommand')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_displayorder');
                $table->index('idx_enabled');
            });


	    /**
	     * Table: l5_creditshop_goods
	     */
	    Schema::create('l5_creditshop_goods', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('displayorder')->nullable();
                $table->string('title', 255)->nullable();
                $table->integer('cate')->nullable();
                $table->string('thumb', 255)->nullable();
                $table->decimal('price', 10,2)->nullable()->default("0.00");
                $table->boolean('type')->nullable();
                $table->integer('credit')->nullable();
                $table->decimal('money', 10,2)->nullable()->default("0.00");
                $table->integer('total')->nullable();
                $table->integer('totalday')->nullable();
                $table->integer('chance')->nullable();
                $table->integer('chanceday')->nullable();
                $table->text('detail')->nullable();
                $table->integer('rate1')->nullable();
                $table->integer('rate2')->nullable();
                $table->integer('endtime')->nullable();
                $table->integer('joins')->nullable();
                $table->integer('views')->nullable();
                $table->integer('createtime')->nullable();
                $table->boolean('status')->nullable();
                $table->boolean('deleted')->nullable();
                $table->text('showlevels')->nullable();
                $table->text('buylevels')->nullable();
                $table->text('showgroups')->nullable();
                $table->text('buygroups')->nullable();
                $table->boolean('vip')->nullable();
                $table->boolean('istop')->nullable();
                $table->boolean('isrecommand')->nullable();
                $table->boolean('istime')->nullable();
                $table->integer('timestart')->nullable();
                $table->integer('timeend')->nullable();
                $table->string('share_title', 255)->nullable();
                $table->string('share_icon', 255)->nullable();
                $table->string('share_desc', 500)->nullable();
                $table->boolean('followneed')->nullable();
                $table->string('followtext', 255)->nullable();
                $table->string('subtitle', 255)->nullable();
                $table->text('subdetail')->nullable();
                $table->text('noticedetail')->nullable();
                $table->string('usedetail', 255)->nullable();
                $table->text('goodsdetail')->nullable();
                $table->boolean('isendtime')->nullable();
                $table->boolean('usecredit2')->nullable();
                $table->string('area', 255)->nullable();
                $table->decimal('dispatch', 10,2)->nullable()->default("0.00");
                $table->text('storeids')->nullable();
                $table->string('noticeopenid', 255)->nullable();
                $table->boolean('noticetype')->nullable();
                $table->boolean('isverify')->nullable();
                $table->boolean('goodstype')->nullable();
                $table->integer('couponid')->nullable();
                $table->integer('goodsid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_type');
                $table->index('idx_endtime');
                $table->index('idx_createtime');
                $table->index('idx_status');
                $table->index('idx_displayorder');
                $table->index('idx_deleted');
                $table->index('idx_istop');
                $table->index('idx_isrecommand');
                $table->index('idx_istime');
                $table->index('idx_timestart');
                $table->index('idx_timeend');
                $table->index('idx_goodstype');
            });


	    /**
	     * Table: l5_creditshop_log
	     */
	    Schema::create('l5_creditshop_log', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('logno', 255)->nullable();
                $table->string('eno', 255)->nullable();
                $table->string('openid', 255)->nullable();
                $table->integer('goodsid')->nullable();
                $table->integer('createtime')->nullable();
                $table->boolean('status')->nullable();
                $table->boolean('paystatus')->nullable();
                $table->boolean('paytype')->nullable()->default("-1");
                $table->boolean('dispatchstatus')->nullable();
                $table->boolean('creditpay')->nullable();
                $table->integer('addressid')->nullable();
                $table->string('dispatchno', 255)->nullable();
                $table->integer('usetime')->nullable();
                $table->string('express', 255)->nullable();
                $table->string('expresssn', 255)->nullable();
                $table->string('expresscom', 255)->nullable();
                $table->string('verifyopenid', 255)->nullable();
                $table->integer('storeid')->nullable();
                $table->string('realname', 255)->nullable();
                $table->string('mobile', 255)->nullable();
                $table->integer('couponid')->nullable();
                $table->boolean('dupdate1')->nullable();
                $table->string('transid', 255)->nullable();
                $table->string('dispatchtransid', 255)->nullable();
                $table->text('address')->nullable();
            });


	    /**
	     * Table: l5_customer
	     */
	    Schema::create('l5_customer', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('kf_id', 255)->nullable();
                $table->string('kf_account', 255)->nullable();
                $table->string('kf_nick', 255)->nullable();
                $table->string('kf_pwd', 255)->nullable();
                $table->string('kf_headimgurl', 255)->nullable();
                $table->integer('createtime')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_createtime');
            });


	    /**
	     * Table: l5_customer_category
	     */
	    Schema::create('l5_customer_category', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('name', 50)->nullable();
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_customer_guestbook
	     */
	    Schema::create('l5_customer_guestbook', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->string('realname', 11)->nullable();
                $table->string('mobile', 255)->nullable();
                $table->string('weixin', 255)->nullable();
                $table->text('images')->nullable();
                $table->text('content')->nullable();
                $table->text('remark')->nullable();
                $table->boolean('status')->nullable();
                $table->integer('createtime')->nullable();
                $table->boolean('deleted')->nullable();
            });


	    /**
	     * Table: l5_customer_robot
	     */
	    Schema::create('l5_customer_robot', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('cate')->nullable();
                $table->string('keywords', 500)->nullable();
                $table->string('title', 255)->nullable();
                $table->longText('content')->nullable();
                $table->string('url', 255)->nullable();
                $table->integer('createtime')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_cate');
            });


	    /**
	     * Table: l5_designer
	     */
	    Schema::create('l5_designer', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->string('pagename', 255);
                $table->boolean('pagetype');
                $table->text('pageinfo');
                $table->string('createtime', 255);
                $table->string('keyword', 255)->nullable();
                $table->string('savetime', 255);
                $table->boolean('setdefault');
                $table->text('datas');
                $table->index('idx_uniacid');
                $table->index('idx_pagetype');
                $table->index('idx_keyword');
            });


	    /**
	     * Table: l5_designer_menu
	     */
	    Schema::create('l5_designer_menu', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('menuname', 255)->nullable();
                $table->boolean('isdefault')->nullable();
                $table->integer('createtime')->nullable();
                $table->text('menus')->nullable();
                $table->text('params')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_isdefault');
                $table->index('idx_createtime');
            });


	    /**
	     * Table: l5_dispatch
	     */
	    Schema::create('l5_dispatch', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('dispatchname', 50)->nullable();
                $table->integer('dispatchtype')->nullable();
                $table->integer('displayorder')->nullable();
                $table->decimal('firstprice', 10,2)->nullable()->default("0.00");
                $table->decimal('secondprice', 10,2)->nullable()->default("0.00");
                $table->integer('firstweight')->nullable();
                $table->integer('secondweight')->nullable();
                $table->string('express', 250)->nullable();
                $table->text('areas')->nullable();
                $table->text('carriers')->nullable();
                $table->integer('enabled')->nullable();
                $table->boolean('calculatetype')->nullable();
                $table->integer('firstnum')->nullable();
                $table->integer('secondnum')->nullable();
                $table->decimal('firstnumprice', 10,2)->nullable()->default("0.00");
                $table->decimal('secondnumprice', 10,2)->nullable()->default("0.00");
                $table->boolean('isdefault')->nullable();
                $table->integer('shopid')->nullable();
                $table->integer('merchid')->nullable();
                $table->text('nodispatchareas')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_displayorder');
            });


	    /**
	     * Table: l5_diyform_category
	     */
	    Schema::create('l5_diyform_category', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('name', 50)->nullable();
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_diyform_data
	     */
	    Schema::create('l5_diyform_data', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->integer('typeid');
                $table->integer('cid')->nullable();
                $table->text('diyformfields')->nullable();
                $table->text('fields');
                $table->string('openid', 255);
                $table->boolean('type')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_typeid');
                $table->index('idx_cid');
            });


	    /**
	     * Table: l5_diyform_temp
	     */
	    Schema::create('l5_diyform_temp', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->integer('typeid')->nullable();
                $table->integer('cid');
                $table->text('diyformfields')->nullable();
                $table->text('fields');
                $table->string('openid', 255);
                $table->boolean('type')->nullable();
                $table->integer('diyformid')->nullable();
                $table->text('diyformdata')->nullable();
                $table->string('carrier_realname', 255)->nullable();
                $table->string('carrier_mobile', 255)->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_cid');
            });


	    /**
	     * Table: l5_diyform_type
	     */
	    Schema::create('l5_diyform_type', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->integer('cate')->nullable();
                $table->string('title', 255);
                $table->text('fields');
                $table->integer('usedata');
                $table->integer('alldata');
                $table->boolean('status')->nullable()->default("1");
                $table->index('idx_uniacid');
                $table->index('idx_cate');
            });


	    /**
	     * Table: l5_diypage
	     */
	    Schema::create('l5_diypage', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->boolean('type');
                $table->string('name', 255);
                $table->longText('data');
                $table->integer('createtime');
                $table->integer('lastedittime');
                $table->string('keyword', 255);
                $table->integer('diymenu');
                $table->index('idx_uniacid');
                $table->index('idx_type');
                $table->index('idx_keyword');
                $table->index('idx_lastedittime');
                $table->index('idx_createtime');
            });


	    /**
	     * Table: l5_diypage_menu
	     */
	    Schema::create('l5_diypage_menu', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->string('name', 255);
                $table->text('data');
                $table->integer('createtime');
                $table->integer('lastedittime');
                $table->index('idx_uniacid');
                $table->index('idx_createtime');
                $table->index('idx_lastedittime');
            });


	    /**
	     * Table: l5_diypage_template
	     */
	    Schema::create('l5_diypage_template', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->boolean('type');
                $table->string('name', 255);
                $table->longText('data');
                $table->string('preview', 255);
                $table->integer('tplid')->nullable();
                $table->integer('cate')->nullable();
                $table->boolean('deleted')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_type');
                $table->index('idx_cate');
            });


	    /**
	     * Table: l5_diypage_template_category
	     */
	    Schema::create('l5_diypage_template_category', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->string('name', 255);
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_exhelper_express
	     */
	    Schema::create('l5_exhelper_express', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('type')->default("1");
                $table->string('expressname', 255)->nullable();
                $table->string('expresscom', 255);
                $table->string('express', 255);
                $table->decimal('width', 10,2)->nullable()->default("0.00");
                $table->text('datas')->nullable();
                $table->decimal('height', 10,2)->nullable()->default("0.00");
                $table->string('bg', 255)->nullable();
                $table->boolean('isdefault')->nullable();
                $table->integer('merchid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_isdefault');
            });


	    /**
	     * Table: l5_exhelper_senduser
	     */
	    Schema::create('l5_exhelper_senduser', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('sendername', 255)->nullable();
                $table->string('sendertel', 255)->nullable();
                $table->string('sendersign', 255)->nullable();
                $table->integer('sendercode')->nullable();
                $table->string('senderaddress', 255)->nullable();
                $table->string('sendercity', 255)->nullable();
                $table->boolean('isdefault')->nullable();
                $table->integer('merchid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_isdefault');
            });


	    /**
	     * Table: l5_exhelper_sys
	     */
	    Schema::create('l5_exhelper_sys', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->string('ip', 20)->default("localhost");
                $table->integer('port')->default("8000");
                $table->string('ip_cloud', 255);
                $table->integer('port_cloud')->default("8000");
                $table->integer('is_cloud');
                $table->integer('merchid')->nullable();
            });


	    /**
	     * Table: l5_express
	     */
	    Schema::create('l5_express', function($table) {
                $table->increments('id');
                $table->string('name', 50)->nullable();
                $table->string('express', 50)->nullable();
                $table->boolean('status')->nullable()->default("1");
                $table->boolean('displayorder')->nullable()->unsigned();
            });


	    /**
	     * Table: l5_feedback
	     */
	    Schema::create('l5_feedback', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('openid', 50)->nullable();
                $table->boolean('type')->nullable()->default("1");
                $table->boolean('status')->nullable();
                $table->string('feedbackid', 100)->nullable();
                $table->string('transid', 100)->nullable();
                $table->string('reason', 1000)->nullable();
                $table->string('solution', 1000)->nullable();
                $table->string('remark', 1000)->nullable();
                $table->integer('createtime')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_feedbackid');
                $table->index('idx_createtime');
                $table->index('idx_transid');
            });


	    /**
	     * Table: l5_form
	     */
	    Schema::create('l5_form', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('displayorder')->nullable();
                $table->boolean('isrequire')->nullable();
                $table->string('key', 255)->nullable();
                $table->string('title', 255)->nullable();
                $table->string('type', 255)->nullable();
                $table->text('values')->nullable();
                $table->integer('cate')->nullable();
            });


	    /**
	     * Table: l5_form_category
	     */
	    Schema::create('l5_form_category', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('name', 255)->nullable();
            });


	    /**
	     * Table: l5_globonus_bill
	     */
	    Schema::create('l5_globonus_bill', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('billno', 100)->nullable();
                $table->integer('paytype')->nullable();
                $table->integer('year')->nullable();
                $table->integer('month')->nullable();
                $table->integer('week')->nullable();
                $table->integer('ordercount')->nullable();
                $table->decimal('ordermoney', 10,2)->nullable()->default("0.00");
                $table->decimal('bonusmoney', 10,2)->nullable()->default("0.00");
                $table->decimal('bonusmoney_send', 10,2)->nullable()->default("0.00");
                $table->decimal('bonusmoney_pay', 10,2)->nullable()->default("0.00");
                $table->integer('paytime')->nullable();
                $table->integer('partnercount')->nullable();
                $table->integer('createtime')->nullable();
                $table->boolean('status')->nullable();
                $table->integer('starttime')->nullable();
                $table->integer('endtime')->nullable();
                $table->integer('confirmtime')->nullable();
                $table->decimal('bonusordermoney', 10,2)->nullable()->default("0.00");
                $table->decimal('bonusrate', 10,2)->nullable()->default("0.00");
                $table->index('idx_uniacid');
                $table->index('idx_paytype');
                $table->index('idx_createtime');
                $table->index('idx_paytime');
                $table->index('idx_status');
                $table->index('idx_month');
                $table->index('idx_week');
                $table->index('idx_year');
            });


	    /**
	     * Table: l5_globonus_billo
	     */
	    Schema::create('l5_globonus_billo', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('billid')->nullable();
                $table->integer('orderid')->nullable();
                $table->decimal('ordermoney', 10,2)->nullable()->default("0.00");
                $table->index('idx_billid');
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_globonus_billp
	     */
	    Schema::create('l5_globonus_billp', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('billid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->string('payno', 255)->nullable();
                $table->boolean('paytype')->nullable();
                $table->decimal('bonus', 10,2)->nullable()->default("0.00");
                $table->decimal('money', 10,2)->nullable()->default("0.00");
                $table->decimal('realmoney', 10,2)->nullable()->default("0.00");
                $table->decimal('paymoney', 10,2)->nullable()->default("0.00");
                $table->decimal('charge', 10,2)->nullable()->default("0.00");
                $table->decimal('chargemoney', 10,2)->nullable()->default("0.00");
                $table->boolean('status')->nullable();
                $table->string('reason', 255)->nullable();
                $table->integer('paytime')->nullable();
                $table->index('idx_billid');
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_globonus_level
	     */
	    Schema::create('l5_globonus_level', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->string('levelname', 50)->nullable();
                $table->decimal('bonus', 10,4)->nullable()->default("0.0000");
                $table->decimal('ordermoney', 10,2)->nullable()->default("0.00");
                $table->integer('ordercount')->nullable();
                $table->decimal('commissionmoney', 10,2)->nullable()->default("0.00");
                $table->decimal('bonusmoney', 10,2)->nullable()->default("0.00");
                $table->integer('downcount')->nullable();
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_goods
	     */
	    Schema::create('l5_goods', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('pcate')->nullable();
                $table->integer('ccate')->nullable();
                $table->boolean('type')->nullable()->default("1");
                $table->boolean('status')->nullable()->default("1");
                $table->integer('displayorder')->nullable();
                $table->string('title', 100)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->string('unit', 5)->nullable();
                $table->string('description', 1000)->nullable();
                $table->text('content')->nullable();
                $table->string('goodssn', 50)->nullable();
                $table->string('productsn', 50)->nullable();
                $table->decimal('productprice', 10,2)->nullable()->default("0.00");
                $table->decimal('marketprice', 10,2)->nullable()->default("0.00");
                $table->decimal('costprice', 10,2)->nullable()->default("0.00");
                $table->decimal('originalprice', 10,2)->nullable()->default("0.00");
                $table->integer('total')->nullable();
                $table->integer('totalcnf')->nullable();
                $table->integer('sales')->nullable();
                $table->integer('salesreal')->nullable();
                $table->string('spec', 5000)->nullable();
                $table->integer('createtime')->nullable();
                $table->decimal('weight', 10,2)->nullable()->default("0.00");
                $table->string('credit', 255)->nullable();
                $table->integer('maxbuy')->nullable();
                $table->integer('usermaxbuy')->nullable();
                $table->integer('hasoption')->nullable();
                $table->integer('dispatch')->nullable();
                $table->text('thumb_url')->nullable();
                $table->boolean('isnew')->nullable();
                $table->boolean('ishot')->nullable();
                $table->boolean('isdiscount')->nullable();
                $table->boolean('isrecommand')->nullable();
                $table->boolean('issendfree')->nullable();
                $table->boolean('istime')->nullable();
                $table->boolean('iscomment')->nullable();
                $table->integer('timestart')->nullable();
                $table->integer('timeend')->nullable();
                $table->integer('viewcount')->nullable();
                $table->boolean('deleted')->nullable();
                $table->boolean('hascommission')->nullable();
                $table->decimal('commission1_rate', 10,2)->nullable()->default("0.00");
                $table->decimal('commission1_pay', 10,2)->nullable()->default("0.00");
                $table->decimal('commission2_rate', 10,2)->nullable()->default("0.00");
                $table->decimal('commission2_pay', 10,2)->nullable()->default("0.00");
                $table->decimal('commission3_rate', 10,2)->nullable()->default("0.00");
                $table->decimal('commission3_pay', 10,2)->nullable()->default("0.00");
                $table->decimal('score', 10,2)->nullable()->default("0.00");
                $table->string('taobaoid', 255)->nullable();
                $table->string('taotaoid', 255)->nullable();
                $table->string('taobaourl', 255)->nullable();
                $table->integer('updatetime')->nullable();
                $table->string('share_title', 255)->nullable();
                $table->string('share_icon', 255)->nullable();
                $table->boolean('cash')->nullable();
                $table->string('commission_thumb', 255)->nullable();
                $table->boolean('isnodiscount')->nullable();
                $table->text('showlevels')->nullable();
                $table->text('buylevels')->nullable();
                $table->text('showgroups')->nullable();
                $table->text('buygroups')->nullable();
                $table->boolean('isverify')->nullable();
                $table->text('storeids')->nullable();
                $table->string('noticeopenid', 255)->nullable();
                $table->integer('tcate')->nullable();
                $table->text('noticetype')->nullable();
                $table->boolean('needfollow')->nullable();
                $table->string('followtip', 255)->nullable();
                $table->string('followurl', 255)->nullable();
                $table->decimal('deduct', 10,2)->nullable()->default("0.00");
                $table->integer('virtual')->nullable();
                $table->text('ccates')->nullable();
                $table->text('discounts')->nullable();
                $table->boolean('nocommission')->nullable();
                $table->boolean('hidecommission')->nullable();
                $table->text('pcates')->nullable();
                $table->text('tcates')->nullable();
                $table->integer('artid')->nullable();
                $table->string('detail_logo', 255)->nullable();
                $table->string('detail_shopname', 255)->nullable();
                $table->string('detail_btntext1', 255)->nullable();
                $table->string('detail_btnurl1', 255)->nullable();
                $table->string('detail_btntext2', 255)->nullable();
                $table->string('detail_btnurl2', 255)->nullable();
                $table->string('detail_totaltitle', 255)->nullable();
                $table->text('cates')->nullable();
                $table->boolean('saleupdate40170')->nullable();
                $table->decimal('deduct2', 10,2)->nullable()->default("0.00");
                $table->integer('ednum')->nullable();
                $table->decimal('edmoney', 10,2)->nullable()->default("0.00");
                $table->text('edareas')->nullable();
                $table->boolean('diyformtype')->nullable();
                $table->integer('diyformid')->nullable();
                $table->boolean('diymode')->nullable();
                $table->boolean('dispatchtype')->nullable();
                $table->integer('dispatchid')->nullable();
                $table->decimal('dispatchprice', 10,2)->nullable()->default("0.00");
                $table->boolean('manydeduct')->nullable();
                $table->string('shorttitle', 255)->nullable();
                $table->string('isdiscount_title', 255)->nullable();
                $table->integer('isdiscount_time')->nullable();
                $table->text('isdiscount_discounts')->nullable();
                $table->text('commission')->nullable();
                $table->boolean('saleupdate37975')->nullable();
                $table->integer('shopid')->nullable();
                $table->text('allcates')->nullable();
                $table->integer('minbuy')->nullable();
                $table->boolean('invoice')->nullable();
                $table->boolean('repair')->nullable();
                $table->boolean('seven')->nullable();
                $table->string('money', 255)->nullable();
                $table->decimal('minprice', 10,2)->nullable()->default("0.00");
                $table->decimal('maxprice', 10,2)->nullable()->default("0.00");
                $table->string('province', 255)->nullable();
                $table->string('city', 255)->nullable();
                $table->boolean('buyshow')->nullable();
                $table->text('buycontent')->nullable();
                $table->boolean('saleupdate51117')->nullable();
                $table->boolean('virtualsend')->nullable();
                $table->text('virtualsendcontent')->nullable();
                $table->boolean('verifytype')->nullable();
                $table->text('diyfields')->nullable();
                $table->integer('diysaveid')->nullable();
                $table->boolean('diysave')->nullable();
                $table->boolean('quality')->nullable();
                $table->boolean('groupstype')->unsigned();
                $table->boolean('showtotal')->unsigned();
                $table->string('subtitle', 255)->nullable();
                $table->boolean('sharebtn');
                $table->integer('merchid')->nullable();
                $table->boolean('checked')->nullable();
                $table->boolean('thumb_first')->nullable();
                $table->text('catesinit3')->nullable();
                $table->boolean('showtotaladd')->nullable();
                $table->boolean('merchsale')->nullable();
                $table->string('keywords', 255)->nullable();
                $table->string('catch_id', 255)->nullable();
                $table->string('catch_url', 255)->nullable();
                $table->string('catch_source', 255)->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_pcate');
                $table->index('idx_ccate');
                $table->index('idx_isnew');
                $table->index('idx_ishot');
                $table->index('idx_isdiscount');
                $table->index('idx_isrecommand');
                $table->index('idx_iscomment');
                $table->index('idx_issendfree');
                $table->index('idx_istime');
                $table->index('idx_deleted');
                $table->index('idx_tcate');
                $table->index('idx_scate');
                $table->index('idx_merchid');
                $table->index('idx_checked');
                $table->index('idx_buylevels');
                $table->index('idx_showgroups');
                $table->index('idx_buygroups');
            });


	    /**
	     * Table: l5_goods_comment
	     */
	    Schema::create('l5_goods_comment', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('goodsid')->nullable();
                $table->string('openid', 50)->nullable();
                $table->string('nickname', 50)->nullable();
                $table->string('headimgurl', 255)->nullable();
                $table->string('content', 255)->nullable();
                $table->integer('createtime')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_goodsid');
                $table->index('idx_openid');
                $table->index('idx_createtime');
            });


	    /**
	     * Table: l5_goods_group
	     */
	    Schema::create('l5_goods_group', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->string('name', 255);
                $table->string('goodsids', 255);
                $table->boolean('enabled');
                $table->index('idx_uniacid');
                $table->index('idx_enabled');
            });


	    /**
	     * Table: l5_goods_option
	     */
	    Schema::create('l5_goods_option', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('goodsid')->nullable();
                $table->string('title', 50)->nullable();
                $table->string('thumb', 60)->nullable();
                $table->decimal('productprice', 10,2)->nullable()->default("0.00");
                $table->decimal('marketprice', 10,2)->nullable()->default("0.00");
                $table->decimal('costprice', 10,2)->nullable()->default("0.00");
                $table->integer('stock')->nullable();
                $table->decimal('weight', 10,2)->nullable()->default("0.00");
                $table->integer('displayorder')->nullable();
                $table->text('specs')->nullable();
                $table->string('skuId', 255)->nullable();
                $table->string('goodssn', 255)->nullable();
                $table->string('productsn', 255)->nullable();
                $table->integer('virtual')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_goodsid');
                $table->index('idx_displayorder');
            });


	    /**
	     * Table: l5_goods_param
	     */
	    Schema::create('l5_goods_param', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('goodsid')->nullable();
                $table->string('title', 50)->nullable();
                $table->text('value')->nullable();
                $table->integer('displayorder')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_goodsid');
                $table->index('idx_displayorder');
            });


	    /**
	     * Table: l5_goods_spec
	     */
	    Schema::create('l5_goods_spec', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('goodsid')->nullable();
                $table->string('title', 50)->nullable();
                $table->string('description', 1000)->nullable();
                $table->boolean('displaytype')->nullable();
                $table->text('content')->nullable();
                $table->integer('displayorder')->nullable();
                $table->string('propId', 255)->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_goodsid');
                $table->index('idx_displayorder');
            });


	    /**
	     * Table: l5_goods_spec_item
	     */
	    Schema::create('l5_goods_spec_item', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('specid')->nullable();
                $table->string('title', 255)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->integer('show')->nullable();
                $table->integer('displayorder')->nullable();
                $table->string('valueId', 255)->nullable();
                $table->integer('virtual')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_specid');
                $table->index('idx_show');
                $table->index('idx_displayorder');
            });


	    /**
	     * Table: l5_groups_adv
	     */
	    Schema::create('l5_groups_adv', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('advname', 50)->nullable();
                $table->string('link', 255)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->integer('displayorder')->nullable();
                $table->integer('enabled')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_enabled');
                $table->index('idx_displayorder');
            });


	    /**
	     * Table: l5_groups_category
	     */
	    Schema::create('l5_groups_category', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('name', 50)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->boolean('displayorder')->nullable()->unsigned();
                $table->boolean('enabled')->nullable()->default("1");
                $table->string('advimg', 255)->nullable();
                $table->string('advurl', 500)->nullable();
                $table->boolean('isrecommand')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_displayorder');
                $table->index('idx_enabled');
            });


	    /**
	     * Table: l5_groups_goods
	     */
	    Schema::create('l5_groups_goods', function($table) {
                $table->increments('id');
                $table->integer('displayorder')->nullable()->unsigned();
                $table->integer('uniacid')->nullable();
                $table->string('goodssn', 50)->nullable();
                $table->string('productsn', 50)->nullable();
                $table->string('title', 255);
                $table->boolean('category')->unsigned();
                $table->boolean('showstock');
                $table->integer('stock');
                $table->decimal('price', 10,2)->nullable()->default("0.00");
                $table->decimal('groupsprice', 10,2)->nullable()->default("0.00");
                $table->integer('goodsnum')->default("1");
                $table->integer('purchaselimit');
                $table->boolean('single');
                $table->decimal('singleprice', 10,2)->nullable()->default("0.00");
                $table->string('units', 255)->default("件");
                $table->boolean('dispatchtype');
                $table->integer('dispatchid');
                $table->decimal('freight', 10,2)->nullable()->default("0.00");
                $table->integer('endtime')->unsigned();
                $table->integer('groupnum');
                $table->integer('sales');
                $table->string('thumb', 255)->nullable();
                $table->string('description', 1000)->nullable();
                $table->text('content')->nullable();
                $table->integer('createtime')->unsigned();
                $table->boolean('status');
                $table->boolean('isindex');
                $table->boolean('deleted');
                $table->integer('goodsid');
                $table->boolean('followneed');
                $table->string('followtext', 255)->nullable();
                $table->string('followurl', 255)->nullable();
                $table->string('share_title', 255)->nullable();
                $table->string('share_icon', 255)->nullable();
                $table->string('share_desc', 500)->nullable();
                $table->decimal('deduct', 10,2)->default("0.00");
                $table->text('thumb_url')->nullable();
                $table->boolean('rights')->default("1");
                $table->integer('gid')->nullable();
                $table->boolean('discount')->nullable();
                $table->boolean('headstype')->nullable();
                $table->decimal('headsmoney', 10,2)->nullable()->default("0.00");
                $table->integer('headsdiscount')->nullable();
                $table->boolean('isdiscount')->nullable();
                $table->boolean('isverify')->nullable();
                $table->boolean('verifytype')->nullable();
                $table->integer('verifynum')->nullable();
                $table->text('storeids')->nullable();
                $table->integer('merchid')->nullable();
                $table->string('shorttitle', 255)->nullable();
                $table->integer('teamnum')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_type');
                $table->index('idx_createtime');
                $table->index('idx_status');
            });


	    /**
	     * Table: l5_groups_goods_atlas
	     */
	    Schema::create('l5_groups_goods_atlas', function($table) {
                $table->increments('id');
                $table->integer('g_id');
                $table->string('thumb', 145);
            });


	    /**
	     * Table: l5_groups_order
	     */
	    Schema::create('l5_groups_order', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->string('openid', 45);
                $table->string('orderno', 45);
                $table->integer('groupnum');
                $table->integer('paytime');
                $table->integer('credit')->nullable();
                $table->decimal('creditmoney', 11,2)->nullable()->default("0.00");
                $table->decimal('price', 11,2)->nullable()->default("0.00");
                $table->decimal('freight', 11,2)->nullable()->default("0.00");
                $table->integer('status');
                $table->string('pay_type', 45)->nullable();
                $table->integer('dispatchid')->nullable();
                $table->integer('addressid');
                $table->string('address', 255)->nullable();
                $table->integer('goodid');
                $table->integer('teamid');
                $table->integer('is_team');
                $table->integer('heads')->nullable();
                $table->decimal('discount', 10,2)->nullable()->default("0.00");
                $table->integer('starttime');
                $table->integer('canceltime');
                $table->integer('endtime');
                $table->integer('createtime');
                $table->integer('finishtime');
                $table->integer('refundid');
                $table->boolean('refundstate');
                $table->integer('refundtime');
                $table->string('express', 45)->nullable();
                $table->string('expresscom', 100)->nullable();
                $table->string('expresssn', 45)->nullable();
                $table->integer('sendtime')->nullable();
                $table->string('remark', 255)->nullable();
                $table->text('remarkclose')->nullable();
                $table->text('remarksend')->nullable();
                $table->string('message', 255)->nullable();
                $table->integer('success');
                $table->integer('deleted');
                $table->string('realname', 20)->nullable();
                $table->string('mobile', 11)->nullable();
                $table->boolean('isverify')->nullable();
                $table->boolean('verifytype')->nullable();
                $table->string('verifycode', 45)->nullable();
                $table->integer('verifynum')->nullable();
                $table->integer('printstate');
                $table->integer('printstate2');
                $table->boolean('apppay');
            });


	    /**
	     * Table: l5_groups_order_refund
	     */
	    Schema::create('l5_groups_order_refund', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->string('openid', 45);
                $table->integer('orderid');
                $table->string('refundno', 45);
                $table->boolean('refundstatus');
                $table->integer('refundaddressid');
                $table->string('refundaddress', 255);
                $table->string('content', 255)->nullable();
                $table->string('reason', 255)->nullable();
                $table->string('images', 255)->nullable();
                $table->string('applytime', 45);
                $table->integer('applycredit');
                $table->decimal('applyprice', 11,2)->default("0.00");
                $table->text('reply')->nullable();
                $table->string('refundtype', 45)->nullable();
                $table->integer('rtype');
                $table->string('refundtime', 45);
                $table->string('endtime', 45);
                $table->string('message', 255)->nullable();
                $table->string('operatetime', 45);
                $table->integer('realcredit');
                $table->decimal('realmoney', 11,2);
                $table->string('express', 45)->nullable();
                $table->string('expresscom', 100)->nullable();
                $table->string('expresssn', 45)->nullable();
                $table->string('sendtime', 45);
                $table->integer('returntime');
                $table->string('rexpress', 45)->nullable();
                $table->string('rexpresscom', 100)->nullable();
                $table->string('rexpresssn', 45)->nullable();
            });


	    /**
	     * Table: l5_groups_paylog
	     */
	    Schema::create('l5_groups_paylog', function($table) {
                $table->increments('plid')->unsigned();
                $table->string('type', 20);
                $table->integer('uniacid');
                $table->integer('acid')->unsigned();
                $table->string('openid', 40);
                $table->string('tid', 64);
                $table->integer('credit');
                $table->decimal('creditmoney', 10,2);
                $table->decimal('fee', 10,2);
                $table->boolean('status');
                $table->string('module', 50);
                $table->string('tag', 2000);
                $table->boolean('is_usecard')->unsigned();
                $table->boolean('card_type')->unsigned();
                $table->string('card_id', 50);
                $table->decimal('card_fee', 10,2)->unsigned();
                $table->string('encrypt_code', 100);
                $table->string('uniontid', 50);
                $table->index('idx_openid');
                $table->index('idx_tid');
                $table->index('idx_uniacid');
                $table->index('uniontid');
            });


	    /**
	     * Table: l5_groups_set
	     */
	    Schema::create('l5_groups_set', function($table) {
                $table->increments('id');
                $table->string('uniacid', 45)->nullable();
                $table->integer('groups');
                $table->string('followurl', 255)->nullable();
                $table->string('followqrcode', 255)->nullable();
                $table->string('groupsurl', 255)->nullable();
                $table->string('share_title', 255)->nullable();
                $table->string('share_icon', 255)->nullable();
                $table->string('share_desc', 255)->nullable();
                $table->string('share_url', 255)->nullable();
                $table->text('groups_description')->nullable();
                $table->integer('description');
                $table->boolean('creditdeduct');
                $table->boolean('groupsdeduct');
                $table->integer('credit')->default("1");
                $table->decimal('groupsmoney', 11,2)->default("0.00");
                $table->integer('refund');
                $table->integer('refundday');
                $table->text('goodsid');
                $table->text('rules')->nullable();
                $table->integer('receive')->nullable();
                $table->boolean('discount')->nullable();
                $table->boolean('headstype')->nullable();
                $table->decimal('headsmoney', 10,2)->nullable()->default("0.00");
                $table->integer('headsdiscount')->nullable();
            });


	    /**
	     * Table: l5_groups_verify
	     */
	    Schema::create('l5_groups_verify', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('openid', 45)->nullable();
                $table->integer('orderid')->nullable();
                $table->string('verifycode', 45)->nullable();
                $table->integer('storeid')->nullable();
                $table->string('verifier', 45)->nullable();
                $table->boolean('isverify')->nullable();
                $table->integer('verifytime')->nullable();
            });


	    /**
	     * Table: l5_mc_merchant
	     */
	    Schema::create('l5_mc_merchant', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->string('merchant_no', 255);
                $table->string('username', 255);
                $table->string('password', 32);
                $table->string('salt', 8);
                $table->string('contact_name', 255);
                $table->string('contact_mobile', 16);
                $table->string('contact_address', 255);
                $table->boolean('type');
                $table->boolean('status');
                $table->integer('createtime');
                $table->integer('validitytime');
                $table->string('industry', 255);
                $table->string('remark', 1000);
            });


	    /**
	     * Table: l5_member
	     */
	    Schema::create('l5_member', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('uid')->nullable();
                $table->integer('groupid')->nullable();
                $table->integer('level')->nullable();
                $table->integer('agentid')->nullable();
                $table->string('openid', 50)->nullable();
                $table->string('realname', 20)->nullable();
                $table->string('mobile', 11)->nullable();
                $table->string('pwd', 32)->nullable();
                $table->string('weixin', 100)->nullable();
                $table->text('content')->nullable();
                $table->integer('createtime')->nullable();
                $table->integer('agenttime')->nullable();
                $table->boolean('status')->nullable();
                $table->boolean('isagent')->nullable();
                $table->integer('clickcount')->nullable();
                $table->integer('agentlevel')->nullable();
                $table->text('noticeset')->nullable();
                $table->string('nickname', 255)->nullable();
                $table->decimal('credit1', 10,2)->nullable()->default("0.00");
                $table->decimal('credit2', 10,2)->nullable()->default("0.00");
                $table->string('birthyear', 255)->nullable();
                $table->string('birthmonth', 255)->nullable();
                $table->string('birthday', 255)->nullable();
                $table->boolean('gender')->nullable();
                $table->string('avatar', 255)->nullable();
                $table->string('province', 255)->nullable();
                $table->string('city', 255)->nullable();
                $table->string('area', 255)->nullable();
                $table->integer('childtime')->nullable();
                $table->integer('inviter')->nullable();
                $table->integer('agentnotupgrade')->nullable();
                $table->boolean('agentselectgoods')->nullable();
                $table->integer('agentblack')->nullable();
                $table->boolean('fixagentid')->nullable();
                $table->integer('diymemberid')->nullable();
                $table->text('diymemberfields')->nullable();
                $table->text('diymemberdata')->nullable();
                $table->integer('diymemberdataid')->nullable();
                $table->integer('diycommissionid')->nullable();
                $table->text('diycommissionfields')->nullable();
                $table->text('diycommissiondata')->nullable();
                $table->integer('diycommissiondataid')->nullable();
                $table->integer('isblack')->nullable();
                $table->string('username', 255)->nullable();
                $table->decimal('commission_total', 10,2)->nullable()->default("0.00");
                $table->integer('endtime2')->nullable();
                $table->boolean('ispartner')->nullable();
                $table->integer('partnertime')->nullable();
                $table->boolean('partnerstatus')->nullable();
                $table->boolean('partnerblack')->nullable();
                $table->integer('partnerlevel')->nullable();
                $table->boolean('partnernotupgrade')->nullable();
                $table->integer('diyglobonusid')->nullable();
                $table->text('diyglobonusdata')->nullable();
                $table->text('diyglobonusfields')->nullable();
                $table->boolean('isaagent')->nullable();
                $table->integer('aagentlevel')->nullable();
                $table->integer('aagenttime')->nullable();
                $table->boolean('aagentstatus')->nullable();
                $table->boolean('aagentblack')->nullable();
                $table->boolean('aagentnotupgrade')->nullable();
                $table->boolean('aagenttype')->nullable();
                $table->text('aagentprovinces')->nullable();
                $table->text('aagentcitys')->nullable();
                $table->text('aagentareas')->nullable();
                $table->integer('diyaagentid')->nullable();
                $table->text('diyaagentdata')->nullable();
                $table->text('diyaagentfields')->nullable();
                $table->string('salt', 32)->nullable();
                $table->boolean('mobileverify')->nullable();
                $table->boolean('mobileuser')->nullable();
                $table->string('carrier_mobile', 11)->nullable();
                $table->boolean('isauthor')->nullable();
                $table->integer('authortime')->nullable();
                $table->boolean('authorstatus')->nullable();
                $table->boolean('authorblack')->nullable();
                $table->integer('authorlevel')->nullable();
                $table->boolean('authornotupgrade')->nullable();
                $table->integer('diyauthorid')->nullable();
                $table->text('diyauthordata')->nullable();
                $table->text('diyauthorfields')->nullable();
                $table->integer('authorid')->nullable();
                $table->string('comefrom', 20)->nullable();
                $table->string('openid_qq', 32)->nullable();
                $table->string('openid_wx', 50)->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_shareid');
                $table->index('idx_openid');
                $table->index('idx_status');
                $table->index('idx_agenttime');
                $table->index('idx_isagent');
                $table->index('idx_uid');
                $table->index('idx_groupid');
                $table->index('idx_level');
            });


	    /**
	     * Table: l5_member_address
	     */
	    Schema::create('l5_member_address', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
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
                $table->index('idx_uniacid');
                $table->index('idx_openid');
                $table->index('idx_isdefault');
                $table->index('idx_deleted');
            });


	    /**
	     * Table: l5_member_cart
	     */
	    Schema::create('l5_member_cart', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
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
                $table->index('idx_uniacid');
                $table->index('idx_goodsid');
                $table->index('idx_openid');
                $table->index('idx_deleted');
            });


	    /**
	     * Table: l5_member_favorite
	     */
	    Schema::create('l5_member_favorite', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('goodsid')->nullable();
                $table->string('openid', 50)->nullable();
                $table->boolean('deleted')->nullable();
                $table->integer('createtime')->nullable();
                $table->integer('merchid')->nullable();
                $table->integer('type')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_goodsid');
                $table->index('idx_openid');
                $table->index('idx_deleted');
                $table->index('idx_createtime');
            });


	    /**
	     * Table: l5_member_group
	     */
	    Schema::create('l5_member_group', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('groupname', 255)->nullable();
            });


	    /**
	     * Table: l5_member_history
	     */
	    Schema::create('l5_member_history', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('goodsid')->nullable();
                $table->string('openid', 50)->nullable();
                $table->boolean('deleted')->nullable();
                $table->integer('createtime')->nullable();
                $table->integer('times')->nullable();
                $table->integer('merchid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_goodsid');
                $table->index('idx_openid');
                $table->index('idx_deleted');
                $table->index('idx_createtime');
            });


	    /**
	     * Table: l5_member_level
	     */
	    Schema::create('l5_member_level', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->integer('level')->nullable();
                $table->string('levelname', 50)->nullable();
                $table->decimal('ordermoney', 10,2)->nullable()->default("0.00");
                $table->integer('ordercount')->nullable();
                $table->decimal('discount', 10,2)->nullable()->default("0.00");
                $table->boolean('enabled')->nullable();
                $table->boolean('enabledadd')->nullable();
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_member_log
	     */
	    Schema::create('l5_member_log', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->boolean('type')->nullable();
                $table->string('logno', 255)->nullable();
                $table->string('title', 255)->nullable();
                $table->integer('createtime')->nullable();
                $table->integer('status')->nullable();
                $table->decimal('money', 10,2)->nullable()->default("0.00");
                $table->string('rechargetype', 255)->nullable();
                $table->decimal('gives', 10,2)->nullable();
                $table->integer('couponid')->nullable();
                $table->string('transid', 255)->nullable();
                $table->decimal('realmoney', 10,2)->nullable()->default("0.00");
                $table->decimal('charge', 10,2)->nullable()->default("0.00");
                $table->decimal('deductionmoney', 10,2)->nullable()->default("0.00");
                $table->boolean('isborrow')->nullable();
                $table->string('borrowopenid', 100)->nullable();
                $table->string('remark', 255);
                $table->boolean('apppay');
                $table->index('idx_uniacid');
                $table->index('idx_openid');
                $table->index('idx_type');
                $table->index('idx_createtime');
                $table->index('idx_status');
            });


	    /**
	     * Table: l5_member_message_template
	     */
	    Schema::create('l5_member_message_template', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('title', 255)->nullable();
                $table->string('template_id', 255)->nullable();
                $table->text('first');
                $table->string('firstcolor', 255)->nullable();
                $table->text('data');
                $table->text('remark');
                $table->string('remarkcolor', 255)->nullable();
                $table->string('url', 255);
                $table->integer('createtime')->nullable();
                $table->integer('sendtimes')->nullable();
                $table->integer('sendcount')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_createtime');
            });


	    /**
	     * Table: l5_member_rank
	     */
	    Schema::create('l5_member_rank', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->unsigned();
                $table->boolean('status');
                $table->integer('num');
            });


	    /**
	     * Table: l5_merch_account
	     */
	    Schema::create('l5_merch_account', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->integer('merchid')->nullable();
                $table->string('username', 255)->nullable();
                $table->string('pwd', 255)->nullable();
                $table->string('salt', 255)->nullable();
                $table->boolean('status')->nullable();
                $table->text('perms')->nullable();
                $table->boolean('isfounder')->nullable();
                $table->string('lastip', 255)->nullable();
                $table->string('lastvisit', 255)->nullable();
                $table->integer('roleid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_merchid');
                $table->index('idx_status');
            });


	    /**
	     * Table: l5_merch_adv
	     */
	    Schema::create('l5_merch_adv', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('advname', 50)->nullable();
                $table->string('link', 255)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->integer('displayorder')->nullable();
                $table->integer('enabled')->nullable();
                $table->integer('merchid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_merchid');
            });


	    /**
	     * Table: l5_merch_banner
	     */
	    Schema::create('l5_merch_banner', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('bannername', 50)->nullable();
                $table->string('link', 255)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->integer('displayorder')->nullable();
                $table->integer('enabled')->nullable();
                $table->integer('merchid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_enabled');
                $table->index('idx_displayorder');
                $table->index('idx_merchid');
            });


	    /**
	     * Table: l5_merch_bill
	     */
	    Schema::create('l5_merch_bill', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->string('applyno', 255);
                $table->integer('merchid');
                $table->text('orderids');
                $table->decimal('realprice', 10,2)->default("0.00");
                $table->decimal('realpricerate', 10,2)->default("0.00");
                $table->decimal('finalprice', 10,2)->default("0.00");
                $table->decimal('payrateprice', 10,2)->default("0.00");
                $table->decimal('payrate', 10,2)->default("0.00");
                $table->decimal('money', 10,2)->default("0.00");
                $table->integer('applytime');
                $table->integer('checktime');
                $table->integer('paytime');
                $table->integer('invalidtime');
                $table->integer('refusetime');
                $table->text('remark');
                $table->boolean('status');
                $table->integer('ordernum');
                $table->decimal('orderprice', 10,2)->default("0.00");
                $table->decimal('price', 10,2)->default("0.00");
                $table->decimal('passrealprice', 10,2)->default("0.00");
                $table->decimal('passrealpricerate', 10,2)->default("0.00");
                $table->text('passorderids');
                $table->integer('passordernum');
                $table->decimal('passorderprice', 10,2)->default("0.00");
                $table->index('idx_uniacid');
                $table->index('idx_merchid');
                $table->index('idx_status');
            });


	    /**
	     * Table: l5_merch_billo
	     */
	    Schema::create('l5_merch_billo', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->integer('billid');
                $table->integer('orderid');
                $table->decimal('ordermoney', 10,2)->default("0.00");
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_merch_category
	     */
	    Schema::create('l5_merch_category', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('catename', 255)->nullable();
                $table->integer('createtime')->nullable();
                $table->boolean('status')->nullable();
                $table->integer('displayorder')->nullable();
                $table->string('thumb', 500)->nullable();
                $table->boolean('isrecommand')->nullable();
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_merch_category_swipe
	     */
	    Schema::create('l5_merch_category_swipe', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('title', 255)->nullable();
                $table->integer('createtime')->nullable();
                $table->boolean('status')->nullable();
                $table->integer('displayorder')->nullable();
                $table->string('thumb', 500)->nullable();
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_merch_clearing
	     */
	    Schema::create('l5_merch_clearing', function($table) {
                $table->increments('id')->unsigned();
                $table->integer('uniacid');
                $table->integer('merchid');
                $table->string('clearno', 64);
                $table->decimal('goodsprice', 10,2)->default("0.00");
                $table->decimal('dispatchprice', 10,2)->default("0.00");
                $table->decimal('deductprice', 10,2)->default("0.00");
                $table->decimal('deductcredit2', 10,2)->default("0.00");
                $table->decimal('discountprice', 10,2)->default("0.00");
                $table->decimal('deductenough', 10,2)->default("0.00");
                $table->decimal('merchdeductenough', 10,2)->default("0.00");
                $table->decimal('isdiscountprice', 10,2)->default("0.00");
                $table->decimal('price', 10,2)->default("0.00");
                $table->integer('createtime')->unsigned();
                $table->integer('starttime')->unsigned();
                $table->integer('endtime')->unsigned();
                $table->boolean('status');
                $table->decimal('realprice', 10,2)->default("0.00");
                $table->decimal('realpricerate', 10,2)->default("0.00");
                $table->decimal('finalprice', 10,2)->default("0.00");
                $table->string('remark', 2000);
                $table->integer('paytime');
                $table->decimal('payrate', 10,2)->default("0.00");
                $table->index('uniacid');
                $table->index('merchid');
                $table->index('starttime');
                $table->index('endtime');
                $table->index('status');
            });


	    /**
	     * Table: l5_merch_group
	     */
	    Schema::create('l5_merch_group', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('groupname', 255)->nullable();
                $table->integer('createtime')->nullable();
                $table->boolean('status')->nullable();
                $table->boolean('isdefault')->nullable();
                $table->boolean('goodschecked')->nullable();
                $table->boolean('commissionchecked')->nullable();
                $table->boolean('changepricechecked')->nullable();
                $table->boolean('finishchecked')->nullable();
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_merch_nav
	     */
	    Schema::create('l5_merch_nav', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('navname', 255)->nullable();
                $table->string('icon', 255)->nullable();
                $table->string('url', 255)->nullable();
                $table->integer('displayorder')->nullable();
                $table->boolean('status')->nullable();
                $table->integer('merchid')->nullable();
                $table->index('idx_status');
                $table->index('idx_uniacid');
                $table->index('idx_merchid');
            });


	    /**
	     * Table: l5_merch_notice
	     */
	    Schema::create('l5_merch_notice', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('displayorder')->nullable();
                $table->string('title', 255)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->string('link', 255)->nullable();
                $table->text('detail')->nullable();
                $table->boolean('status')->nullable();
                $table->integer('createtime')->nullable();
                $table->integer('merchid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_merchid');
            });


	    /**
	     * Table: l5_merch_perm_log
	     */
	    Schema::create('l5_merch_perm_log', function($table) {
                $table->increments('id');
                $table->integer('uid')->nullable();
                $table->integer('uniacid')->nullable();
                $table->string('name', 255)->nullable();
                $table->string('type', 255)->nullable();
                $table->text('op')->nullable();
                $table->string('ip', 255)->nullable();
                $table->integer('createtime')->nullable();
                $table->integer('merchid')->nullable();
                $table->index('idx_createtime');
                $table->index('idx_uniacid');
                $table->index('idx_merchid');
                $table->index('uid');
            });


	    /**
	     * Table: l5_merch_perm_role
	     */
	    Schema::create('l5_merch_perm_role', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('merchid')->nullable();
                $table->string('rolename', 255)->nullable();
                $table->boolean('status')->nullable();
                $table->text('perms')->nullable();
                $table->boolean('deleted')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_status');
                $table->index('idx_deleted');
                $table->index('merchid');
            });


	    /**
	     * Table: l5_merch_reg
	     */
	    Schema::create('l5_merch_reg', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->string('merchname', 255)->nullable();
                $table->string('salecate', 255)->nullable();
                $table->string('desc', 500)->nullable();
                $table->string('realname', 255)->nullable();
                $table->string('mobile', 255)->nullable();
                $table->boolean('status')->nullable();
                $table->text('diyformdata')->nullable();
                $table->text('diyformfields')->nullable();
                $table->integer('applytime')->nullable();
                $table->text('reason')->nullable();
            });


	    /**
	     * Table: l5_merch_saler
	     */
	    Schema::create('l5_merch_saler', function($table) {
                $table->increments('id');
                $table->integer('storeid')->nullable();
                $table->integer('uniacid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->boolean('status')->nullable();
                $table->string('salername', 255)->nullable();
                $table->integer('merchid')->nullable();
                $table->index('idx_storeid');
                $table->index('idx_uniacid');
                $table->index('idx_merchid');
            });


	    /**
	     * Table: l5_merch_store
	     */
	    Schema::create('l5_merch_store', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('storename', 255)->nullable();
                $table->string('address', 255)->nullable();
                $table->string('tel', 255)->nullable();
                $table->string('lat', 255)->nullable();
                $table->string('lng', 255)->nullable();
                $table->boolean('status')->nullable();
                $table->boolean('type')->nullable();
                $table->string('realname', 255)->nullable();
                $table->string('mobile', 255)->nullable();
                $table->string('fetchtime', 255)->nullable();
                $table->string('logo', 255)->nullable();
                $table->string('saletime', 255)->nullable();
                $table->text('desc')->nullable();
                $table->integer('displayorder')->nullable();
                $table->decimal('commission_total', 10,2)->nullable();
                $table->integer('merchid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_status');
                $table->index('idx_merchid');
            });


	    /**
	     * Table: l5_merch_user
	     */
	    Schema::create('l5_merch_user', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('regid')->nullable();
                $table->string('openid', 255);
                $table->integer('groupid')->nullable();
                $table->string('merchno', 255);
                $table->string('merchname', 255);
                $table->string('salecate', 255);
                $table->string('desc', 500);
                $table->string('realname', 255);
                $table->string('mobile', 255);
                $table->boolean('status')->nullable();
                $table->integer('accounttime')->nullable();
                $table->text('diyformdata')->nullable();
                $table->text('diyformfields')->nullable();
                $table->integer('applytime')->nullable();
                $table->integer('accounttotal')->nullable();
                $table->text('remark')->nullable();
                $table->integer('jointime')->nullable();
                $table->integer('accountid')->nullable();
                $table->text('sets')->nullable();
                $table->string('logo', 255);
                $table->string('payopenid', 32);
                $table->decimal('payrate', 10,2)->default("0.00");
                $table->boolean('isrecommand')->nullable();
                $table->integer('cateid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_status');
                $table->index('idx_groupid');
                $table->index('idx_regid');
                $table->index('idx_cateid');
            });


	    /**
	     * Table: l5_migrations
	     */
	    Schema::create('l5_migrations', function($table) {
                $table->increments('id')->unsigned();
                $table->string('migration', 255);
                $table->integer('batch');
            });


	    /**
	     * Table: l5_multi_shop
	     */
	    Schema::create('l5_multi_shop', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('uid')->nullable();
                $table->string('name', 255)->nullable();
                $table->string('company', 255)->nullable();
                $table->string('sales', 255)->nullable();
                $table->integer('starttime')->nullable();
                $table->integer('endtime')->nullable();
                $table->integer('applytime')->nullable();
                $table->integer('jointime')->nullable();
                $table->boolean('status')->nullable();
                $table->text('refusecontent')->nullable();
            });


	    /**
	     * Table: l5_nav
	     */
	    Schema::create('l5_nav', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('navname', 255)->nullable();
                $table->string('icon', 255)->nullable();
                $table->string('url', 255)->nullable();
                $table->integer('displayorder')->nullable();
                $table->boolean('status')->nullable();
                $table->index('idx_status');
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_notice
	     */
	    Schema::create('l5_notice', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('displayorder')->nullable();
                $table->string('title', 255)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->string('link', 255)->nullable();
                $table->text('detail')->nullable();
                $table->boolean('status')->nullable();
                $table->integer('createtime')->nullable();
                $table->integer('shopid')->nullable();
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_order
	     */
	    Schema::create('l5_order', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('openid', 50)->nullable();
                $table->integer('agentid')->nullable();
                $table->string('ordersn', 30)->nullable();
                $table->decimal('price', 10,2)->nullable()->default("0.00");
                $table->decimal('goodsprice', 10,2)->nullable()->default("0.00");
                $table->decimal('discountprice', 10,2)->nullable()->default("0.00");
                $table->boolean('status')->nullable();
                $table->boolean('paytype')->nullable();
                $table->string('transid', 30)->nullable();
                $table->string('remark', 1000)->nullable();
                $table->integer('addressid')->nullable();
                $table->decimal('dispatchprice', 10,2)->nullable()->default("0.00");
                $table->integer('dispatchid')->nullable();
                $table->integer('createtime')->nullable();
                $table->boolean('dispatchtype')->nullable();
                $table->text('carrier')->nullable();
                $table->integer('refundid')->nullable();
                $table->boolean('iscomment')->nullable();
                $table->boolean('creditadd')->nullable();
                $table->boolean('deleted')->nullable();
                $table->boolean('userdeleted')->nullable();
                $table->integer('finishtime')->nullable();
                $table->integer('paytime')->nullable();
                $table->string('expresscom', 30);
                $table->string('expresssn', 50);
                $table->string('express', 255)->nullable();
                $table->integer('sendtime')->nullable();
                $table->integer('fetchtime')->nullable();
                $table->boolean('cash')->nullable();
                $table->integer('canceltime')->nullable();
                $table->integer('cancelpaytime')->nullable();
                $table->integer('refundtime')->nullable();
                $table->boolean('isverify')->nullable();
                $table->boolean('verified')->nullable();
                $table->string('verifyopenid', 255)->nullable();
                $table->string('verifycode', 255)->nullable();
                $table->integer('verifytime')->nullable();
                $table->integer('verifystoreid')->nullable();
                $table->decimal('deductprice', 10,2)->nullable()->default("0.00");
                $table->integer('deductcredit')->nullable();
                $table->decimal('deductcredit2', 10,2)->nullable()->default("0.00");
                $table->decimal('deductenough', 10,2)->nullable()->default("0.00");
                $table->integer('virtual')->nullable();
                $table->text('virtual_info')->nullable();
                $table->text('virtual_str')->nullable();
                $table->text('address')->nullable();
                $table->boolean('sysdeleted')->nullable();
                $table->integer('ordersn2')->nullable();
                $table->decimal('changeprice', 10,2)->nullable()->default("0.00");
                $table->decimal('changedispatchprice', 10,2)->nullable()->default("0.00");
                $table->decimal('oldprice', 10,2)->nullable()->default("0.00");
                $table->decimal('olddispatchprice', 10,2)->nullable()->default("0.00");
                $table->boolean('isvirtual')->nullable();
                $table->integer('couponid')->nullable();
                $table->decimal('couponprice', 10,2)->nullable()->default("0.00");
                $table->text('diyformdata')->nullable();
                $table->text('diyformfields')->nullable();
                $table->integer('diyformid')->nullable();
                $table->integer('storeid')->nullable();
                $table->boolean('printstate')->nullable();
                $table->boolean('printstate2')->nullable();
                $table->text('address_send')->nullable();
                $table->boolean('refundstate')->nullable();
                $table->text('closereason')->nullable();
                $table->text('remarksaler')->nullable();
                $table->text('remarkclose')->nullable();
                $table->text('remarksend')->nullable();
                $table->integer('ismr');
                $table->decimal('isdiscountprice', 10,2)->nullable()->default("0.00");
                $table->boolean('isvirtualsend')->nullable();
                $table->text('virtualsend_info')->nullable();
                $table->text('verifyinfo')->nullable();
                $table->boolean('verifytype')->nullable();
                $table->text('verifycodes')->nullable();
                $table->integer('merchid')->nullable();
                $table->string('invoicename', 255)->nullable();
                $table->boolean('ismerch')->nullable();
                $table->integer('parentid')->nullable();
                $table->boolean('isparent')->nullable();
                $table->decimal('grprice', 10,2)->nullable()->default("0.00");
                $table->boolean('merchshow')->nullable();
                $table->decimal('merchdeductenough', 10,2)->nullable()->default("0.00");
                $table->integer('couponmerchid')->nullable();
                $table->boolean('isglobonus')->nullable();
                $table->boolean('merchapply')->nullable();
                $table->boolean('isabonus')->nullable();
                $table->boolean('isborrow')->nullable();
                $table->string('borrowopenid', 100)->nullable();
                $table->decimal('merchisdiscountprice', 10,2)->default("0.00");
                $table->boolean('apppay');
                $table->index('idx_uniacid');
                $table->index('idx_openid');
                $table->index('idx_shareid');
                $table->index('idx_status');
                $table->index('idx_createtime');
                $table->index('idx_refundid');
                $table->index('idx_paytime');
                $table->index('idx_finishtime');
                $table->index('idx_merchid');
            });


	    /**
	     * Table: l5_order_comment
	     */
	    Schema::create('l5_order_comment', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('orderid')->nullable();
                $table->integer('goodsid')->nullable();
                $table->string('openid', 50)->nullable();
                $table->string('nickname', 50)->nullable();
                $table->string('headimgurl', 255)->nullable();
                $table->boolean('level')->nullable();
                $table->string('content', 255)->nullable();
                $table->text('images')->nullable();
                $table->integer('createtime')->nullable();
                $table->boolean('deleted')->nullable();
                $table->string('append_content', 255)->nullable();
                $table->text('append_images')->nullable();
                $table->string('reply_content', 255)->nullable();
                $table->text('reply_images')->nullable();
                $table->string('append_reply_content', 255)->nullable();
                $table->text('append_reply_images')->nullable();
                $table->boolean('istop')->nullable();
                $table->boolean('checked');
                $table->boolean('replychecked');
                $table->index('idx_uniacid');
                $table->index('idx_goodsid');
                $table->index('idx_openid');
                $table->index('idx_createtime');
                $table->index('idx_orderid');
            });


	    /**
	     * Table: l5_order_goods
	     */
	    Schema::create('l5_order_goods', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('orderid')->nullable();
                $table->integer('goodsid')->nullable();
                $table->decimal('price', 10,2)->nullable()->default("0.00");
                $table->integer('total')->nullable()->default("1");
                $table->integer('optionid')->nullable();
                $table->integer('createtime')->nullable();
                $table->text('optionname')->nullable();
                $table->text('commission1')->nullable();
                $table->integer('applytime1')->nullable();
                $table->integer('checktime1')->nullable();
                $table->integer('paytime1')->nullable();
                $table->integer('invalidtime1')->nullable();
                $table->integer('deletetime1')->nullable();
                $table->boolean('status1')->nullable();
                $table->text('content1')->nullable();
                $table->text('commission2')->nullable();
                $table->integer('applytime2')->nullable();
                $table->integer('checktime2')->nullable();
                $table->integer('paytime2')->nullable();
                $table->integer('invalidtime2')->nullable();
                $table->integer('deletetime2')->nullable();
                $table->boolean('status2')->nullable();
                $table->text('content2')->nullable();
                $table->text('commission3')->nullable();
                $table->integer('applytime3')->nullable();
                $table->integer('checktime3')->nullable();
                $table->integer('paytime3')->nullable();
                $table->integer('invalidtime3')->nullable();
                $table->integer('deletetime3')->nullable();
                $table->boolean('status3')->nullable();
                $table->text('content3')->nullable();
                $table->decimal('realprice', 10,2)->nullable()->default("0.00");
                $table->string('goodssn', 255)->nullable();
                $table->string('productsn', 255)->nullable();
                $table->boolean('nocommission')->nullable();
                $table->decimal('changeprice', 10,2)->nullable()->default("0.00");
                $table->decimal('oldprice', 10,2)->nullable()->default("0.00");
                $table->text('commissions')->nullable();
                $table->integer('diyformid')->nullable();
                $table->integer('diyformdataid')->nullable();
                $table->text('diyformdata')->nullable();
                $table->text('diyformfields')->nullable();
                $table->string('openid', 255)->nullable();
                $table->integer('printstate');
                $table->integer('printstate2');
                $table->boolean('rstate')->nullable();
                $table->integer('refundtime')->nullable();
                $table->integer('merchid')->nullable();
                $table->integer('parentorderid')->nullable();
                $table->boolean('merchsale');
                $table->decimal('isdiscountprice', 10,2)->default("0.00");
                $table->index('idx_uniacid');
                $table->index('idx_orderid');
                $table->index('idx_goodsid');
                $table->index('idx_createtime');
                $table->index('idx_applytime1');
                $table->index('idx_checktime1');
                $table->index('idx_status1');
                $table->index('idx_applytime2');
                $table->index('idx_checktime2');
                $table->index('idx_status2');
                $table->index('idx_applytime3');
                $table->index('idx_invalidtime1');
                $table->index('idx_checktime3');
                $table->index('idx_invalidtime2');
                $table->index('idx_invalidtime3');
                $table->index('idx_status3');
                $table->index('idx_paytime1');
                $table->index('idx_paytime2');
                $table->index('idx_paytime3');
            });


	    /**
	     * Table: l5_order_refund
	     */
	    Schema::create('l5_order_refund', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('orderid')->nullable();
                $table->string('refundno', 255)->nullable();
                $table->string('price', 255)->nullable();
                $table->string('reason', 255)->nullable();
                $table->text('images')->nullable();
                $table->text('content')->nullable();
                $table->integer('createtime')->nullable();
                $table->boolean('status')->nullable();
                $table->text('reply')->nullable();
                $table->boolean('refundtype')->nullable();
                $table->decimal('orderprice', 10,2)->nullable()->default("0.00");
                $table->decimal('applyprice', 10,2)->nullable()->default("0.00");
                $table->text('imgs')->nullable();
                $table->boolean('rtype')->nullable();
                $table->text('refundaddress')->nullable();
                $table->text('message')->nullable();
                $table->string('express', 100)->nullable();
                $table->string('expresscom', 100)->nullable();
                $table->string('expresssn', 100)->nullable();
                $table->integer('operatetime')->nullable();
                $table->integer('sendtime')->nullable();
                $table->integer('returntime')->nullable();
                $table->integer('refundtime')->nullable();
                $table->string('rexpress', 100)->nullable();
                $table->string('rexpresscom', 100)->nullable();
                $table->string('rexpresssn', 100)->nullable();
                $table->integer('refundaddressid')->nullable();
                $table->integer('endtime')->nullable();
                $table->decimal('realprice', 10,2)->nullable()->default("0.00");
                $table->integer('merchid')->nullable();
                $table->index('idx_createtime');
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_password_resets
	     */
	    Schema::create('l5_password_resets', function($table) {
                $table->string('email', 255);
                $table->string('token', 255);
                $table->timestamp('created_at')->nullable();
                $table->index('password_resets_email_index');
                $table->index('password_resets_token_index');
            });


	    /**
	     * Table: l5_perm_log
	     */
	    Schema::create('l5_perm_log', function($table) {
                $table->increments('id');
                $table->integer('uid')->nullable();
                $table->integer('uniacid')->nullable();
                $table->string('name', 255)->nullable();
                $table->string('type', 255)->nullable();
                $table->text('op')->nullable();
                $table->integer('createtime')->nullable();
                $table->string('ip', 255)->nullable();
                $table->index('idx_uid');
                $table->index('idx_createtime');
                $table->index('idx_uniacid');
                $table->index('idx_type');
                $table->index('idx_op');
            });


	    /**
	     * Table: l5_perm_plugin
	     */
	    Schema::create('l5_perm_plugin', function($table) {
                $table->increments('id');
                $table->integer('acid')->nullable();
                $table->integer('uid')->nullable();
                $table->boolean('type')->nullable();
                $table->text('plugins')->nullable();
                $table->text('coms')->nullable();
                $table->text('datas')->nullable();
                $table->index('idx_uid');
                $table->index('idx_acid');
                $table->index('idx_type');
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_perm_role
	     */
	    Schema::create('l5_perm_role', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('rolename', 255)->nullable();
                $table->boolean('status')->nullable();
                $table->text('perms')->nullable();
                $table->boolean('deleted')->nullable();
                $table->text('perms2')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_status');
                $table->index('idx_deleted');
            });


	    /**
	     * Table: l5_perm_user
	     */
	    Schema::create('l5_perm_user', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('uid')->nullable();
                $table->string('username', 255)->nullable();
                $table->string('password', 255)->nullable();
                $table->integer('roleid')->nullable();
                $table->integer('status')->nullable();
                $table->text('perms')->nullable();
                $table->boolean('deleted')->nullable();
                $table->string('realname', 255)->nullable();
                $table->string('mobile', 255)->nullable();
                $table->text('perms2')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_uid');
                $table->index('idx_roleid');
                $table->index('idx_status');
                $table->index('idx_deleted');
            });


	    /**
	     * Table: l5_plugin
	     */
	    Schema::create('l5_plugin', function($table) {
                $table->increments('id');
                $table->integer('displayorder')->nullable();
                $table->string('identity', 50)->nullable();
                $table->string('name', 50)->nullable();
                $table->string('version', 10)->nullable();
                $table->string('author', 20)->nullable();
                $table->integer('status')->nullable();
                $table->string('category', 255)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->text('desc')->nullable();
                $table->boolean('iscom')->nullable();
                $table->boolean('deprecated')->nullable();
                $table->boolean('isv2')->nullable();
                $table->index('idx_displayorder');
                $table->index('idx_identity');
            });


	    /**
	     * Table: l5_poster
	     */
	    Schema::create('l5_poster', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->boolean('type')->nullable();
                $table->string('title', 255)->nullable();
                $table->string('bg', 255)->nullable();
                $table->text('data')->nullable();
                $table->string('keyword', 255)->nullable();
                $table->integer('times')->nullable();
                $table->integer('follows')->nullable();
                $table->boolean('isdefault')->nullable();
                $table->string('resptitle', 255)->nullable();
                $table->string('respthumb', 255)->nullable();
                $table->integer('createtime')->nullable();
                $table->string('respdesc', 255)->nullable();
                $table->string('respurl', 255)->nullable();
                $table->string('waittext', 255)->nullable();
                $table->string('oktext', 255)->nullable();
                $table->integer('subcredit')->nullable();
                $table->decimal('submoney', 10,2)->nullable()->default("0.00");
                $table->integer('reccredit')->nullable();
                $table->decimal('recmoney', 10,2)->nullable()->default("0.00");
                $table->boolean('paytype');
                $table->string('scantext', 255)->nullable();
                $table->string('subtext', 255)->nullable();
                $table->boolean('beagent')->nullable();
                $table->boolean('bedown')->nullable();
                $table->boolean('isopen')->nullable();
                $table->string('opentext', 255)->nullable();
                $table->string('openurl', 255)->nullable();
                $table->string('templateid', 255)->nullable();
                $table->text('subpaycontent')->nullable();
                $table->string('recpaycontent', 255)->nullable();
                $table->string('entrytext', 255)->nullable();
                $table->integer('reccouponid')->nullable();
                $table->integer('reccouponnum')->nullable();
                $table->integer('subcouponid')->nullable();
                $table->integer('subcouponnum')->nullable();
                $table->boolean('resptype')->nullable();
                $table->text('resptext')->nullable();
                $table->string('keyword2', 255)->nullable();
                $table->text('resptext11')->nullable();
                $table->string('reward_totle', 500)->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_type');
                $table->index('idx_times');
                $table->index('idx_isdefault');
                $table->index('idx_createtime');
            });


	    /**
	     * Table: l5_poster_log
	     */
	    Schema::create('l5_poster_log', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->integer('posterid')->nullable();
                $table->string('from_openid', 255)->nullable();
                $table->integer('subcredit')->nullable();
                $table->decimal('submoney', 10,2)->nullable()->default("0.00");
                $table->integer('reccredit')->nullable();
                $table->decimal('recmoney', 10,2)->nullable()->default("0.00");
                $table->integer('createtime')->nullable();
                $table->integer('reccouponid')->nullable();
                $table->integer('reccouponnum')->nullable();
                $table->integer('subcouponid')->nullable();
                $table->integer('subcouponnum')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_openid');
                $table->index('idx_createtime');
                $table->index('idx_posterid');
                $table->index('idx_from_openid');
            });


	    /**
	     * Table: l5_poster_qr
	     */
	    Schema::create('l5_poster_qr', function($table) {
                $table->increments('id');
                $table->integer('acid')->unsigned();
                $table->string('openid', 100);
                $table->boolean('type')->nullable();
                $table->integer('sceneid')->nullable();
                $table->string('mediaid', 255)->nullable();
                $table->string('ticket', 250);
                $table->string('url', 80);
                $table->integer('createtime')->unsigned();
                $table->integer('goodsid')->nullable();
                $table->string('qrimg', 1000)->nullable();
                $table->string('scenestr', 255)->nullable();
                $table->integer('posterid')->nullable();
                $table->index('idx_acid');
                $table->index('idx_sceneid');
                $table->index('idx_type');
                $table->index('idx_openid');
            });


	    /**
	     * Table: l5_poster_scan
	     */
	    Schema::create('l5_poster_scan', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('posterid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->string('from_openid', 255)->nullable();
                $table->integer('scantime')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_posterid');
                $table->index('idx_scantime');
                $table->index('idx_openid');
            });


	    /**
	     * Table: l5_postera
	     */
	    Schema::create('l5_postera', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->boolean('type')->nullable();
                $table->integer('days')->nullable();
                $table->string('title', 255)->nullable();
                $table->string('bg', 255)->nullable();
                $table->text('data')->nullable();
                $table->string('keyword', 255)->nullable();
                $table->boolean('isdefault')->nullable();
                $table->string('resptitle', 255)->nullable();
                $table->string('respthumb', 255)->nullable();
                $table->integer('createtime')->nullable();
                $table->string('respdesc', 255)->nullable();
                $table->string('respurl', 255)->nullable();
                $table->string('waittext', 255)->nullable();
                $table->string('oktext', 255)->nullable();
                $table->integer('subcredit')->nullable();
                $table->decimal('submoney', 10,2)->nullable()->default("0.00");
                $table->integer('reccredit')->nullable();
                $table->decimal('recmoney', 10,2)->nullable()->default("0.00");
                $table->string('scantext', 255)->nullable();
                $table->string('subtext', 255)->nullable();
                $table->boolean('beagent')->nullable();
                $table->boolean('bedown')->nullable();
                $table->boolean('isopen')->nullable();
                $table->string('opentext', 255)->nullable();
                $table->string('openurl', 255)->nullable();
                $table->boolean('paytype');
                $table->text('subpaycontent')->nullable();
                $table->string('recpaycontent', 255)->nullable();
                $table->string('templateid', 255)->nullable();
                $table->string('entrytext', 255)->nullable();
                $table->integer('reccouponid')->nullable();
                $table->integer('reccouponnum')->nullable();
                $table->integer('subcouponid')->nullable();
                $table->integer('subcouponnum')->nullable();
                $table->integer('timestart')->nullable();
                $table->integer('timeend')->nullable();
                $table->boolean('status')->nullable();
                $table->integer('goodsid')->nullable();
                $table->string('starttext', 255)->nullable();
                $table->string('endtext', 255)->nullable();
                $table->boolean('resptype')->nullable();
                $table->text('resptext')->nullable();
                $table->boolean('testflag')->nullable();
                $table->string('keyword2', 255)->nullable();
                $table->string('reward_totle', 500)->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_type');
                $table->index('idx_isdefault');
                $table->index('idx_createtime');
            });


	    /**
	     * Table: l5_postera_log
	     */
	    Schema::create('l5_postera_log', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->integer('posterid')->nullable();
                $table->string('from_openid', 255)->nullable();
                $table->integer('subcredit')->nullable();
                $table->decimal('submoney', 10,2)->nullable()->default("0.00");
                $table->integer('reccredit')->nullable();
                $table->decimal('recmoney', 10,2)->nullable()->default("0.00");
                $table->integer('createtime')->nullable();
                $table->integer('reccouponid')->nullable();
                $table->integer('reccouponnum')->nullable();
                $table->integer('subcouponid')->nullable();
                $table->integer('subcouponnum')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_openid');
                $table->index('idx_createtime');
                $table->index('idx_posteraid');
                $table->index('idx_from_openid');
            });


	    /**
	     * Table: l5_postera_qr
	     */
	    Schema::create('l5_postera_qr', function($table) {
                $table->increments('id');
                $table->integer('acid')->unsigned();
                $table->string('openid', 100);
                $table->integer('posterid')->nullable();
                $table->boolean('type')->nullable();
                $table->integer('sceneid')->nullable();
                $table->string('mediaid', 255)->nullable();
                $table->string('ticket', 250);
                $table->string('url', 80);
                $table->integer('createtime')->unsigned();
                $table->integer('goodsid')->nullable();
                $table->string('qrimg', 1000)->nullable();
                $table->integer('expire')->nullable();
                $table->integer('endtime')->nullable();
                $table->index('idx_acid');
                $table->index('idx_sceneid');
                $table->index('idx_type');
                $table->index('idx_posterid');
            });


	    /**
	     * Table: l5_qa_adv
	     */
	    Schema::create('l5_qa_adv', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('advname', 50)->nullable();
                $table->string('link', 255)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->integer('displayorder')->nullable();
                $table->integer('enabled')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_enabled');
                $table->index('idx_displayorder');
            });


	    /**
	     * Table: l5_qa_category
	     */
	    Schema::create('l5_qa_category', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('name', 50)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->boolean('displayorder')->nullable()->unsigned();
                $table->boolean('enabled')->nullable()->default("1");
                $table->boolean('isrecommand')->nullable();
                $table->index('idx_displayorder');
                $table->index('idx_enabled');
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_qa_question
	     */
	    Schema::create('l5_qa_question', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->integer('cate');
                $table->string('title', 255);
                $table->string('keywords', 255);
                $table->mediumText('content');
                $table->boolean('status');
                $table->boolean('isrecommand');
                $table->integer('displayorder');
                $table->integer('createtime');
                $table->integer('lastedittime');
                $table->index('idx_uniacid');
                $table->index('idx_status');
            });


	    /**
	     * Table: l5_qa_set
	     */
	    Schema::create('l5_qa_set', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->boolean('showmember');
                $table->boolean('showtype');
                $table->string('keyword', 255);
                $table->string('enter_title', 255);
                $table->string('enter_img', 255);
                $table->string('enter_desc', 255);
                $table->index('idx_unaicid');
            });


	    /**
	     * Table: l5_refund_address
	     */
	    Schema::create('l5_refund_address', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('title', 20)->nullable();
                $table->string('name', 20)->nullable();
                $table->string('tel', 20)->nullable();
                $table->string('mobile', 11)->nullable();
                $table->string('province', 30)->nullable();
                $table->string('city', 30)->nullable();
                $table->string('area', 30)->nullable();
                $table->string('address', 300)->nullable();
                $table->boolean('isdefault')->nullable();
                $table->string('zipcode', 255)->nullable();
                $table->text('content')->nullable();
                $table->boolean('deleted')->nullable();
                $table->string('openid', 50)->nullable();
                $table->integer('merchid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_openid');
                $table->index('idx_isdefault');
                $table->index('idx_deleted');
            });


	    /**
	     * Table: l5_sale_coupon
	     */
	    Schema::create('l5_sale_coupon', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('name', 255)->nullable();
                $table->boolean('type')->nullable();
                $table->decimal('ckey', 10,2)->nullable()->default("0.00");
                $table->decimal('cvalue', 10,2)->nullable()->default("0.00");
                $table->integer('nums')->nullable();
                $table->integer('createtime')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_createtime');
            });


	    /**
	     * Table: l5_sale_coupon_data
	     */
	    Schema::create('l5_sale_coupon_data', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->integer('couponid')->nullable();
                $table->integer('gettime')->nullable();
                $table->boolean('gettype')->nullable();
                $table->integer('usedtime')->nullable();
                $table->integer('orderid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_couponid');
                $table->index('idx_gettime');
                $table->index('idx_gettype');
                $table->index('idx_usedtime');
                $table->index('idx_orderid');
            });


	    /**
	     * Table: l5_saler
	     */
	    Schema::create('l5_saler', function($table) {
                $table->increments('id');
                $table->integer('storeid')->nullable();
                $table->integer('uniacid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->boolean('status')->nullable();
                $table->string('salername', 255)->nullable();
                $table->index('idx_storeid');
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_settings
	     */
	    Schema::create('l5_settings', function($table) {
                $table->increments('id')->unsigned();
                $table->string('key', 255);
                $table->string('value', 255);
                $table->string('class', 255);
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });


	    /**
	     * Table: l5_sign_records
	     */
	    Schema::create('l5_sign_records', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->integer('time');
                $table->string('openid', 50);
                $table->integer('credit');
                $table->string('log', 255)->nullable();
                $table->boolean('type');
                $table->integer('day');
                $table->index('idx_uniacid');
                $table->index('idx_time');
                $table->index('idx_type');
            });


	    /**
	     * Table: l5_sign_set
	     */
	    Schema::create('l5_sign_set', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->boolean('iscenter');
                $table->boolean('iscreditshop');
                $table->string('keyword', 255);
                $table->string('title', 255);
                $table->string('thumb', 255);
                $table->string('desc', 255);
                $table->boolean('isopen');
                $table->boolean('signold');
                $table->integer('signold_price');
                $table->boolean('signold_type');
                $table->string('textsign', 255);
                $table->string('textsignold', 255);
                $table->string('textsigned', 255);
                $table->string('textsignforget', 255);
                $table->string('maincolor', 20);
                $table->boolean('cycle');
                $table->integer('reward_default_first');
                $table->integer('reward_default_day');
                $table->text('reword_order');
                $table->text('reword_sum');
                $table->text('reword_special');
                $table->text('sign_rule');
                $table->boolean('share');
            });


	    /**
	     * Table: l5_sign_user
	     */
	    Schema::create('l5_sign_user', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->string('openid', 255);
                $table->integer('order');
                $table->integer('orderday');
                $table->integer('sum');
                $table->string('signdate', 10)->nullable();
            });


	    /**
	     * Table: l5_sms
	     */
	    Schema::create('l5_sms', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->string('name', 255);
                $table->string('type', 10);
                $table->boolean('template');
                $table->string('smstplid', 255);
                $table->string('smssign', 255);
                $table->string('content', 100);
                $table->text('data');
                $table->boolean('status');
            });


	    /**
	     * Table: l5_sms_set
	     */
	    Schema::create('l5_sms_set', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->boolean('juhe');
                $table->string('juhe_key', 255);
                $table->boolean('dayu');
                $table->string('dayu_key', 255);
                $table->string('dayu_secret', 255);
                $table->boolean('emay');
                $table->string('emay_url', 255);
                $table->string('emay_sn', 255);
                $table->string('emay_pw', 255);
                $table->string('emay_sk', 255);
                $table->string('emay_phost', 255);
                $table->integer('emay_pport');
                $table->string('emay_puser', 255);
                $table->string('emay_ppw', 255);
                $table->integer('emay_out');
                $table->integer('emay_outresp')->default("30");
                $table->decimal('emay_warn', 10,2)->default("0.00");
                $table->string('emay_mobile', 11);
                $table->integer('emay_warn_time');
            });


	    /**
	     * Table: l5_sns_adv
	     */
	    Schema::create('l5_sns_adv', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('advname', 50)->nullable();
                $table->string('link', 255)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->integer('displayorder')->nullable();
                $table->integer('enabled')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_enabled');
                $table->index('idx_displayorder');
            });


	    /**
	     * Table: l5_sns_board
	     */
	    Schema::create('l5_sns_board', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('cid')->nullable();
                $table->string('title', 50)->nullable();
                $table->string('logo', 255)->nullable();
                $table->string('desc', 255)->nullable();
                $table->integer('displayorder')->nullable();
                $table->integer('enabled')->nullable();
                $table->text('showgroups')->nullable();
                $table->text('showlevels')->nullable();
                $table->text('postgroups')->nullable();
                $table->text('postlevels')->nullable();
                $table->text('showagentlevels')->nullable();
                $table->text('postagentlevels')->nullable();
                $table->integer('postcredit')->nullable();
                $table->integer('replycredit')->nullable();
                $table->integer('bestcredit')->nullable();
                $table->integer('bestboardcredit')->nullable();
                $table->boolean('notagent')->nullable();
                $table->boolean('notagentpost')->nullable();
                $table->integer('topcredit')->nullable();
                $table->integer('topboardcredit')->nullable();
                $table->boolean('status')->nullable();
                $table->boolean('noimage')->nullable();
                $table->boolean('novoice')->nullable();
                $table->boolean('needfollow')->nullable();
                $table->boolean('needpostfollow')->nullable();
                $table->string('share_title', 255)->nullable();
                $table->string('share_icon', 255)->nullable();
                $table->string('share_desc', 255)->nullable();
                $table->string('keyword', 255)->nullable();
                $table->boolean('isrecommand')->nullable();
                $table->string('banner', 255)->nullable();
                $table->boolean('needcheck')->nullable();
                $table->boolean('needcheckmanager')->nullable();
                $table->integer('needcheckreply')->nullable();
                $table->integer('needcheckreplymanager')->nullable();
                $table->text('showsnslevels')->nullable();
                $table->text('postsnslevels')->nullable();
                $table->text('showpartnerlevels')->nullable();
                $table->text('postpartnerlevels')->nullable();
                $table->boolean('notpartner')->nullable();
                $table->boolean('notpartnerpost')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_enabled');
                $table->index('idx_displayorder');
                $table->index('idx_cid');
            });


	    /**
	     * Table: l5_sns_board_follow
	     */
	    Schema::create('l5_sns_board_follow', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('bid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->integer('createtime')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_bid');
            });


	    /**
	     * Table: l5_sns_category
	     */
	    Schema::create('l5_sns_category', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('name', 50)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->boolean('displayorder')->nullable()->unsigned();
                $table->boolean('enabled')->nullable()->default("1");
                $table->string('advimg', 255)->nullable();
                $table->string('advurl', 500)->nullable();
                $table->boolean('isrecommand')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_enabled');
                $table->index('idx_isrecommand');
                $table->index('idx_displayorder');
            });


	    /**
	     * Table: l5_sns_complain
	     */
	    Schema::create('l5_sns_complain', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->boolean('type');
                $table->integer('postsid');
                $table->string('defendant', 255);
                $table->string('complainant', 255);
                $table->integer('complaint_type');
                $table->text('complaint_text');
                $table->text('images');
                $table->integer('createtime');
                $table->integer('checkedtime');
                $table->boolean('checked');
                $table->string('checked_note', 255);
                $table->boolean('deleted');
            });


	    /**
	     * Table: l5_sns_complaincate
	     */
	    Schema::create('l5_sns_complaincate', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->string('name', 255);
                $table->boolean('status');
                $table->integer('displayorder');
            });


	    /**
	     * Table: l5_sns_level
	     */
	    Schema::create('l5_sns_level', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('levelname', 255)->nullable();
                $table->integer('credit')->nullable();
                $table->boolean('enabled')->nullable();
                $table->integer('post')->nullable();
                $table->string('color', 255)->nullable();
                $table->string('bg', 255)->nullable();
                $table->index('idx_enabled');
            });


	    /**
	     * Table: l5_sns_like
	     */
	    Schema::create('l5_sns_like', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->integer('pid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_pid');
            });


	    /**
	     * Table: l5_sns_manage
	     */
	    Schema::create('l5_sns_manage', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('bid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->boolean('enabled')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_bid');
            });


	    /**
	     * Table: l5_sns_member
	     */
	    Schema::create('l5_sns_member', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->integer('level')->nullable();
                $table->integer('createtime')->nullable();
                $table->integer('credit')->nullable();
                $table->string('sign', 255)->nullable();
                $table->boolean('isblack')->nullable();
                $table->boolean('notupgrade')->nullable();
            });


	    /**
	     * Table: l5_sns_post
	     */
	    Schema::create('l5_sns_post', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->integer('bid')->nullable();
                $table->integer('pid')->nullable();
                $table->integer('rpid')->nullable();
                $table->string('openid', 255)->nullable();
                $table->string('avatar', 255)->nullable();
                $table->string('nickname', 255)->nullable();
                $table->string('title', 50)->nullable();
                $table->text('content')->nullable();
                $table->text('images')->nullable();
                $table->string('voice', 255)->nullable();
                $table->integer('createtime')->nullable();
                $table->integer('replytime')->nullable();
                $table->integer('credit')->nullable();
                $table->integer('views')->nullable();
                $table->boolean('islock')->nullable();
                $table->boolean('istop')->nullable();
                $table->boolean('isboardtop')->nullable();
                $table->boolean('isbest')->nullable();
                $table->boolean('isboardbest')->nullable();
                $table->boolean('deleted')->nullable();
                $table->integer('deletedtime')->nullable();
                $table->boolean('checked')->nullable();
                $table->integer('checktime')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_bid');
                $table->index('idx_pid');
                $table->index('idx_createtime');
                $table->index('idx_islock');
                $table->index('idx_istop');
                $table->index('idx_isboardtop');
                $table->index('idx_isbest');
                $table->index('idx_deleted');
                $table->index('idx_deletetime');
                $table->index('idx_checked');
                $table->index('idx_rpid');
            });


	    /**
	     * Table: l5_store
	     */
	    Schema::create('l5_store', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('storename', 255)->nullable();
                $table->string('address', 255)->nullable();
                $table->string('tel', 255)->nullable();
                $table->string('lat', 255)->nullable();
                $table->string('lng', 255)->nullable();
                $table->boolean('status')->nullable();
                $table->string('realname', 255)->nullable();
                $table->string('mobile', 255)->nullable();
                $table->string('fetchtime', 255)->nullable();
                $table->boolean('type')->nullable();
                $table->string('logo', 255)->nullable();
                $table->string('saletime', 255)->nullable();
                $table->text('desc')->nullable();
                $table->integer('displayorder')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_status');
            });


	    /**
	     * Table: l5_sysset
	     */
	    Schema::create('l5_sysset', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->longText('sets')->nullable();
                $table->longText('plugins')->nullable();
                $table->text('sec')->nullable();
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_system_adv
	     */
	    Schema::create('l5_system_adv', function($table) {
                $table->increments('id');
                $table->string('title', 255)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->string('url', 255)->nullable();
                $table->integer('createtime')->nullable();
                $table->integer('displayorder')->nullable();
                $table->string('module', 255)->nullable();
                $table->boolean('status')->nullable();
            });


	    /**
	     * Table: l5_system_article
	     */
	    Schema::create('l5_system_article', function($table) {
                $table->increments('id');
                $table->string('title', 255)->nullable();
                $table->string('author', 255)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->text('content')->nullable();
                $table->integer('createtime')->nullable();
                $table->integer('displayorder')->nullable();
                $table->integer('cate')->nullable();
                $table->boolean('status')->nullable();
            });


	    /**
	     * Table: l5_system_banner
	     */
	    Schema::create('l5_system_banner', function($table) {
                $table->increments('id');
                $table->string('title', 255)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->string('url', 255)->nullable();
                $table->integer('createtime')->nullable();
                $table->integer('displayorder')->nullable();
                $table->boolean('status')->nullable();
                $table->string('background', 10)->nullable();
            });


	    /**
	     * Table: l5_system_case
	     */
	    Schema::create('l5_system_case', function($table) {
                $table->increments('id');
                $table->string('title', 255)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->string('qr', 255)->nullable();
                $table->integer('displayorder')->nullable();
                $table->boolean('status')->nullable();
                $table->integer('cate')->nullable();
                $table->string('description', 255)->nullable();
            });


	    /**
	     * Table: l5_system_casecategory
	     */
	    Schema::create('l5_system_casecategory', function($table) {
                $table->increments('id');
                $table->string('name', 255)->nullable();
                $table->integer('displayorder')->nullable();
                $table->integer('status')->nullable();
            });


	    /**
	     * Table: l5_system_category
	     */
	    Schema::create('l5_system_category', function($table) {
                $table->increments('id');
                $table->string('name', 255)->nullable();
                $table->integer('displayorder')->nullable();
                $table->integer('status')->nullable();
            });


	    /**
	     * Table: l5_system_company_article
	     */
	    Schema::create('l5_system_company_article', function($table) {
                $table->increments('id');
                $table->string('title', 255)->nullable();
                $table->string('author', 255)->nullable();
                $table->string('thumb', 255)->nullable();
                $table->text('content')->nullable();
                $table->integer('createtime')->nullable();
                $table->integer('displayorder')->nullable();
                $table->integer('cate')->nullable();
                $table->boolean('status')->nullable();
            });


	    /**
	     * Table: l5_system_company_category
	     */
	    Schema::create('l5_system_company_category', function($table) {
                $table->increments('id');
                $table->string('name', 255)->nullable();
                $table->integer('displayorder')->nullable();
                $table->integer('status')->nullable();
            });


	    /**
	     * Table: l5_system_copyright
	     */
	    Schema::create('l5_system_copyright', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->text('copyright')->nullable();
                $table->string('bgcolor', 255)->nullable();
                $table->boolean('ismanage')->nullable();
                $table->string('logo', 255)->nullable();
                $table->string('title', 255)->nullable();
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_system_copyright_notice
	     */
	    Schema::create('l5_system_copyright_notice', function($table) {
                $table->increments('id');
                $table->string('title', 255)->nullable();
                $table->string('author', 255)->nullable();
                $table->text('content')->nullable();
                $table->integer('createtime')->nullable();
                $table->integer('displayorder')->nullable();
                $table->boolean('status')->nullable();
            });


	    /**
	     * Table: l5_system_guestbook
	     */
	    Schema::create('l5_system_guestbook', function($table) {
                $table->increments('id');
                $table->string('title', 255);
                $table->string('content', 255);
                $table->string('nickname', 255);
                $table->integer('createtime')->nullable();
                $table->string('email', 255);
                $table->string('clientip', 64);
                $table->string('mobile', 11);
            });


	    /**
	     * Table: l5_system_link
	     */
	    Schema::create('l5_system_link', function($table) {
                $table->increments('id');
                $table->string('name', 255);
                $table->string('url', 255);
                $table->string('thumb', 255);
                $table->integer('displayorder')->nullable();
                $table->boolean('status')->nullable();
            });


	    /**
	     * Table: l5_system_setting
	     */
	    Schema::create('l5_system_setting', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('background', 10)->nullable();
                $table->string('casebanner', 255)->nullable();
                $table->text('contact')->nullable();
            });


	    /**
	     * Table: l5_system_site
	     */
	    Schema::create('l5_system_site', function($table) {
                $table->increments('id')->unsigned();
                $table->string('type', 32);
                $table->text('content')->nullable();
            });


	    /**
	     * Table: l5_users
	     */
	    Schema::create('l5_users', function($table) {
                $table->increments('id')->unsigned();
                $table->string('name', 255);
                $table->string('email', 255);
                $table->string('password', 255);
                $table->string('remember_token', 100)->nullable();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
                $table->index('users_email_unique');
            });


	    /**
	     * Table: l5_virtual_category
	     */
	    Schema::create('l5_virtual_category', function($table) {
                $table->increments('id');
                $table->integer('uniacid')->nullable();
                $table->string('name', 50)->nullable();
                $table->integer('merchid')->nullable();
                $table->index('idx_uniacid');
            });


	    /**
	     * Table: l5_virtual_data
	     */
	    Schema::create('l5_virtual_data', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->integer('typeid');
                $table->string('pvalue', 255)->nullable();
                $table->text('fields');
                $table->string('openid', 255);
                $table->integer('usetime');
                $table->integer('orderid')->nullable();
                $table->string('ordersn', 255)->nullable();
                $table->decimal('price', 10,2)->nullable()->default("0.00");
                $table->integer('merchid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_typeid');
                $table->index('idx_usetime');
                $table->index('idx_orderid');
            });


	    /**
	     * Table: l5_virtual_type
	     */
	    Schema::create('l5_virtual_type', function($table) {
                $table->increments('id');
                $table->integer('uniacid');
                $table->integer('cate')->nullable();
                $table->string('title', 255);
                $table->text('fields');
                $table->integer('usedata');
                $table->integer('alldata');
                $table->integer('merchid')->nullable();
                $table->index('idx_uniacid');
                $table->index('idx_cate');
            });


         }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
         public function down()
         {
            
	            Schema::drop('l5_admin_password_resets');
	            Schema::drop('l5_admins');
	            Schema::drop('l5_adv');
	            Schema::drop('l5_article');
	            Schema::drop('l5_article_category');
	            Schema::drop('l5_article_log');
	            Schema::drop('l5_article_report');
	            Schema::drop('l5_article_share');
	            Schema::drop('l5_article_sys');
	            Schema::drop('l5_banner');
	            Schema::drop('l5_carrier');
	            Schema::drop('l5_category');
	            Schema::drop('l5_commission_apply');
	            Schema::drop('l5_commission_bank');
	            Schema::drop('l5_commission_clickcount');
	            Schema::drop('l5_commission_level');
	            Schema::drop('l5_commission_log');
	            Schema::drop('l5_commission_rank');
	            Schema::drop('l5_commission_repurchase');
	            Schema::drop('l5_commission_shop');
	            Schema::drop('l5_coupon');
	            Schema::drop('l5_coupon_category');
	            Schema::drop('l5_coupon_data');
	            Schema::drop('l5_coupon_guess');
	            Schema::drop('l5_coupon_log');
	            Schema::drop('l5_creditshop_adv');
	            Schema::drop('l5_creditshop_category');
	            Schema::drop('l5_creditshop_goods');
	            Schema::drop('l5_creditshop_log');
	            Schema::drop('l5_customer');
	            Schema::drop('l5_customer_category');
	            Schema::drop('l5_customer_guestbook');
	            Schema::drop('l5_customer_robot');
	            Schema::drop('l5_designer');
	            Schema::drop('l5_designer_menu');
	            Schema::drop('l5_dispatch');
	            Schema::drop('l5_diyform_category');
	            Schema::drop('l5_diyform_data');
	            Schema::drop('l5_diyform_temp');
	            Schema::drop('l5_diyform_type');
	            Schema::drop('l5_diypage');
	            Schema::drop('l5_diypage_menu');
	            Schema::drop('l5_diypage_template');
	            Schema::drop('l5_diypage_template_category');
	            Schema::drop('l5_exhelper_express');
	            Schema::drop('l5_exhelper_senduser');
	            Schema::drop('l5_exhelper_sys');
	            Schema::drop('l5_express');
	            Schema::drop('l5_feedback');
	            Schema::drop('l5_form');
	            Schema::drop('l5_form_category');
	            Schema::drop('l5_globonus_bill');
	            Schema::drop('l5_globonus_billo');
	            Schema::drop('l5_globonus_billp');
	            Schema::drop('l5_globonus_level');
	            Schema::drop('l5_goods');
	            Schema::drop('l5_goods_comment');
	            Schema::drop('l5_goods_group');
	            Schema::drop('l5_goods_option');
	            Schema::drop('l5_goods_param');
	            Schema::drop('l5_goods_spec');
	            Schema::drop('l5_goods_spec_item');
	            Schema::drop('l5_groups_adv');
	            Schema::drop('l5_groups_category');
	            Schema::drop('l5_groups_goods');
	            Schema::drop('l5_groups_goods_atlas');
	            Schema::drop('l5_groups_order');
	            Schema::drop('l5_groups_order_refund');
	            Schema::drop('l5_groups_paylog');
	            Schema::drop('l5_groups_set');
	            Schema::drop('l5_groups_verify');
	            Schema::drop('l5_mc_merchant');
	            Schema::drop('l5_member');
	            Schema::drop('l5_member_address');
	            Schema::drop('l5_member_cart');
	            Schema::drop('l5_member_favorite');
	            Schema::drop('l5_member_group');
	            Schema::drop('l5_member_history');
	            Schema::drop('l5_member_level');
	            Schema::drop('l5_member_log');
	            Schema::drop('l5_member_message_template');
	            Schema::drop('l5_member_rank');
	            Schema::drop('l5_merch_account');
	            Schema::drop('l5_merch_adv');
	            Schema::drop('l5_merch_banner');
	            Schema::drop('l5_merch_bill');
	            Schema::drop('l5_merch_billo');
	            Schema::drop('l5_merch_category');
	            Schema::drop('l5_merch_category_swipe');
	            Schema::drop('l5_merch_clearing');
	            Schema::drop('l5_merch_group');
	            Schema::drop('l5_merch_nav');
	            Schema::drop('l5_merch_notice');
	            Schema::drop('l5_merch_perm_log');
	            Schema::drop('l5_merch_perm_role');
	            Schema::drop('l5_merch_reg');
	            Schema::drop('l5_merch_saler');
	            Schema::drop('l5_merch_store');
	            Schema::drop('l5_merch_user');
	            Schema::drop('l5_migrations');
	            Schema::drop('l5_multi_shop');
	            Schema::drop('l5_nav');
	            Schema::drop('l5_notice');
	            Schema::drop('l5_order');
	            Schema::drop('l5_order_comment');
	            Schema::drop('l5_order_goods');
	            Schema::drop('l5_order_refund');
	            Schema::drop('l5_password_resets');
	            Schema::drop('l5_perm_log');
	            Schema::drop('l5_perm_plugin');
	            Schema::drop('l5_perm_role');
	            Schema::drop('l5_perm_user');
	            Schema::drop('l5_plugin');
	            Schema::drop('l5_poster');
	            Schema::drop('l5_poster_log');
	            Schema::drop('l5_poster_qr');
	            Schema::drop('l5_poster_scan');
	            Schema::drop('l5_postera');
	            Schema::drop('l5_postera_log');
	            Schema::drop('l5_postera_qr');
	            Schema::drop('l5_qa_adv');
	            Schema::drop('l5_qa_category');
	            Schema::drop('l5_qa_question');
	            Schema::drop('l5_qa_set');
	            Schema::drop('l5_refund_address');
	            Schema::drop('l5_sale_coupon');
	            Schema::drop('l5_sale_coupon_data');
	            Schema::drop('l5_saler');
	            Schema::drop('l5_settings');
	            Schema::drop('l5_sign_records');
	            Schema::drop('l5_sign_set');
	            Schema::drop('l5_sign_user');
	            Schema::drop('l5_sms');
	            Schema::drop('l5_sms_set');
	            Schema::drop('l5_sns_adv');
	            Schema::drop('l5_sns_board');
	            Schema::drop('l5_sns_board_follow');
	            Schema::drop('l5_sns_category');
	            Schema::drop('l5_sns_complain');
	            Schema::drop('l5_sns_complaincate');
	            Schema::drop('l5_sns_level');
	            Schema::drop('l5_sns_like');
	            Schema::drop('l5_sns_manage');
	            Schema::drop('l5_sns_member');
	            Schema::drop('l5_sns_post');
	            Schema::drop('l5_store');
	            Schema::drop('l5_sysset');
	            Schema::drop('l5_system_adv');
	            Schema::drop('l5_system_article');
	            Schema::drop('l5_system_banner');
	            Schema::drop('l5_system_case');
	            Schema::drop('l5_system_casecategory');
	            Schema::drop('l5_system_category');
	            Schema::drop('l5_system_company_article');
	            Schema::drop('l5_system_company_category');
	            Schema::drop('l5_system_copyright');
	            Schema::drop('l5_system_copyright_notice');
	            Schema::drop('l5_system_guestbook');
	            Schema::drop('l5_system_link');
	            Schema::drop('l5_system_setting');
	            Schema::drop('l5_system_site');
	            Schema::drop('l5_users');
	            Schema::drop('l5_virtual_category');
	            Schema::drop('l5_virtual_data');
	            Schema::drop('l5_virtual_type');
         }

}