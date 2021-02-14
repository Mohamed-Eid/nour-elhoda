<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['name', 'description'];

    protected $guarded = [];
    protected  $appends = ['image_path','header_path',];

    public function heighlights(){
        return $this->hasMany(Heighlight::class);
    }

    public function integrations(){
        return $this->hasMany(Integration::class);
    }


    public  function getImagePathAttribute(){
        return asset('uploads/products/'.$this->image);
    }
    public  function getHeaderPathAttribute(){
        return asset('uploads/products/'.$this->header);
    }
}
