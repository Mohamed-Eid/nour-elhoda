<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $guarded = [];
    protected  $appends = ['image_path'];

    public  function getImagePathAttribute(){
        return asset('uploads/slider/'.$this->image);
    }
}
