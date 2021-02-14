<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Integration extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['name',];

    protected $guarded = [];

    protected  $appends = ['image_path',];
}
