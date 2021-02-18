<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Gallary extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['name'];
    
    protected  $appends = ['image_path'];

    protected $guarded = [];
    
    public  function getImagePathAttribute(){
        return asset('uploads/gallaries/'.$this->image);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

}
