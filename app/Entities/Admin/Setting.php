<?php

namespace App\Entities\Admin;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Setting extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
		'',
	];

}
