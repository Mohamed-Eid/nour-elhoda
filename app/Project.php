<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Project extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['name', 'description'];

    protected $guarded = [];


    public function videos()
    {
        return $this->morphMany(Video::class, 'videoable');
    }

    public function investigations()
    {
        return $this->hasMany(Investigation::class);
    }
}
