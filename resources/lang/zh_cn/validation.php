<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute 必须是 yes、 on 或者是 1.',
    'active_url'           => ':attribute 必须是一个合法的 URL.',
    'after'                => ':attribute 必须在 :date之后.',
    'alpha'                => ':attribute 必须全部由字母字符构成.',
    'alpha_dash'           => ':attribute 必须全部由字母、数字、中划线或下划线字符构成.',
    'alpha_num'            => ':attribute 必须全部由字母和数字构成.',
    'array'                => ':attribute 必须是数组.',
    'before'               => ':attribute 必须在 :date之前.',
    'between'              => [
        'numeric' => ':attribute 数值必须在:min ~ :max之间.',
        'file'    => ':attribute must be between :min and :max kilobytes.',
        'string'  => ':attribute must be between :min and :max characters.',
        'array'   => ':attribute must have between :min and :max items.',
    ],
    'boolean'              => ':attribute 字段的值必须是true或false.',
    'confirmed'            => ':attribute confirmation does not match.',
    'date'                 => ':attribute 不是一个有效的日期.',
    'date_format'          => ':attribute does not match the format :format.',
    'different'            => ':attribute and :other must be different.',
    'digits'               => ':attribute must be :digits digits.',
    'digits_between'       => ':attribute must be between :min and :max digits.',
    'dimensions'           => ':attribute has invalid image dimensions.',
    'distinct'             => ':attribute 不能有重复值.',
    'email'                => ':attribute 必须为有个有效的邮箱.',
    'exists'               => '选择的 :attribute 无效.',
    'file'                 => ':attribute 必须是个文件.',
    'filled'               => ':attribute field is required.',
    'image'                => ':attribute 的值必须是一个图片.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => ':attribute field does not exist in :other.',
    'integer'              => ':attribute 必须是整数.',
    'ip'                   => ':attribute 必须是一个有效的IP地址.',
    'json'                 => ':attribute 必须为一个有效的JSON字符串.',
    'max'                  => [
        'numeric' => ':attribute 的值不能大于:max.',
        'file'    => ':attribute 文件大小不能大于:max MB.',
        'string'  => ':attribute 长度不能大于:max 个字符.',
        'array'   => ':attribute may not have more than :max items.',
    ],
    'mimes'                => ':attribute must be a file of type: :values.',
    'mimetypes'            => ':attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => ':attribute 的值不能小于 :min.',
        'file'    => ':attribute 文件大小不能小于 :min MB.',
        'string'  => ':attribute 长度不能小于 :min 个字符.',
        'array'   => ':attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => ':attribute must be a number.',
    'present'              => ':attribute 字段必须存在.',
    'regex'                => ':attribute 格式无效.',
    'required'             => ':attribute 字段是必填项.',
    'required_if'          => ':attribute field is required when :other is :value.',
    'required_unless'      => ':attribute field is required unless :other is in :values.',
    'required_with'        => ':attribute field is required when :values is present.',
    'required_with_all'    => ':attribute field is required when :values is present.',
    'required_without'     => ':attribute field is required when :values is not present.',
    'required_without_all' => ':attribute field is required when none of :values are present.',
    'same'                 => ':attribute 和 :other 必须匹配.',
    'size'                 => [
        'numeric' => ':attribute must be :size.',
        'file'    => ':attribute must be :size kilobytes.',
        'string'  => ':attribute must be :size characters.',
        'array'   => ':attribute must contain :size items.',
    ],
    'string'               => ':attribute 必须是一个字符串.',
    'timezone'             => ':attribute 必须是一个有效的时区.',
    'unique'               => ':attribute 已经存在了，必须唯一',
    'uploaded'             => ':attribute 上传失败.',
    'url'                  => ':attribute 格式无效，必须是一个合法的 URL.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        /*'website_name' => [
            'required' => '站点名称不能为空。',
        ],*/

    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'website_name' => '站点名称',
        'website_domain' => '站点域名',
    ],

];
