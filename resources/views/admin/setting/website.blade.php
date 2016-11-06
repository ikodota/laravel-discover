@extends('adminlte::page')

@section('title', 'Website setting')

@section('content_header')
    <h1>
        {{ trans('setting.website.setting') }}
        <small>setting</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Setting</a></li>
        <li class="active">Website</li>
    </ol>
@stop

@section('content')
    @if (Session::has('flash_message'))
        <div class="alert alert-success">
            {{Session::get('flash_message')}}
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <!-- form start -->
                <form class="form-horizontal" method="post" action="">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="box-header">
                            <h3 class="box-title">{{ trans('setting.website.base_info') }}</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="form-group">
                            <label for="inputSiteStatus" class="col-sm-2 control-label">{{ trans('setting.website.status') }}</label>
                            <div class="col-sm-10">
                                {{--<label><input type="radio" id="inputSiteStatus1" name="website_status" class="iradio_square-blue" >{{ trans('common.option.open') }}</label>
                                </label><input type="radio" id="inputSiteStatus2" name="website_status" class="iradio_square-blue" >{{ trans('common.option.close') }}</label>--}}
                                <input type="checkbox" id="inputSiteStatus" name="website_status" @if(isset($website_status) and $website_status=='on') checked @endif  data-size="small" data-on-color="success"  data-off-color="danger" data-on-text="{{ trans('common.option.start') }}" data-off-text="{{ trans('common.option.stop') }}">
                            </div>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title">{{ trans('setting.website.base_info') }}</h3>
                        </div>
                        <div class="form-group">
                            <label for="inputSiteName" class="col-sm-2 control-label">{{ trans('setting.website.name') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputSiteName" name="website_name" value="{{ $website_name or '' }}" placeholder="{{ trans('setting.website.name') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSiteUrl" class="col-sm-2 control-label">{{ trans('setting.website.domain') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputSiteUrl" name="website_domain" value="{{ $website_domain or '' }}" placeholder="{{ trans('setting.website.domain') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputLogo" class="col-sm-2 control-label">{{ trans('setting.website.logo') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputLogo" name="website_logo" value="{{ $website_logo or '' }}" placeholder="{{ trans('setting.website.logo') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputIntro" class="col-sm-2 control-label">{{ trans('setting.website.intro') }}</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputIntro" name="website_intro" rows="2" placeholder="{{ trans('setting.website.intro') }}">{{ $website_intro or '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputKeyword" class="col-sm-2 control-label">{{ trans('setting.website.keywords') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputKeyword" name="website_keywords" value="{{ $website_keywords or '' }}" placeholder="{{ trans('setting.website.keywords') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription" class="col-sm-2 control-label">{{ trans('setting.website.description') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputDescription" name="website_description" value="{{ $website_description or '' }}" placeholder="{{ trans('setting.website.description') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCode" class="col-sm-2 control-label">{{ trans('setting.website.code') }}</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputCode" name="website_code" rows="3" placeholder="{{ trans('setting.website.code') }}">{{ $website_code or '' }}</textarea>
                            </div>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title">{{ trans('setting.website.verify_code') }}</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="form-group">


                            <label for="VerifyCodeReg" class="col-sm-2 control-label">{{ trans('setting.website.reg_verify_code') }}</label>
                            <div class="col-sm-10">
                                <input type="checkbox" id="VerifyCodeReg" name="verify_code_reg" @if(isset($verify_code_reg) and $verify_code_reg=='on') checked @endif  data-size="small" data-on-text="{{ trans('common.option.enable') }}" data-off-text="{{ trans('common.option.disable') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="VerifyCodelogin" class="col-sm-2 control-label">{{ trans('setting.website.login_verify_code') }}</label>
                            <div class="col-sm-10">
                                <input type="checkbox" id="VerifyCodelogin" name="verify_code_login" @if(isset($verify_code_login) and $verify_code_login=='on') checked @endif  data-size="small" data-on-text="{{ trans('common.option.enable') }}" data-off-text="{{ trans('common.option.disable') }}">
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">{{ trans('common.button.reset') }}</button>
                        <button type="submit" class="btn btn-info pull-right">{{ trans('common.button.submit') }}</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/iCheck/square/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-switch-master/dist/css/bootstrap3/bootstrap-switch.css') }}" >
    <link rel="stylesheet" href="{{ asset('vendor/webuploader/webuploader.css') }}">
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stack('css')
    @yield('css')
@stop


@section('js')
    <script src="{{ asset('vendor/adminlte/plugins/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-switch-master/dist/js/bootstrap-switch.min.js') }}"></script>
    <script src="{{ asset('vendor/webuploader/webuploader.js') }}"></script>
    <script>
        $("[name='website_status']").bootstrapSwitch();
        $("[name='verify_code_reg']").bootstrapSwitch();
        $("[name='verify_code_login']").bootstrapSwitch();
    </script>
    @stack('js')
    @yield('js')
@stop
