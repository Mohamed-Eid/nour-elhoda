<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected  $appends = ['image_path'];

    protected $guarded = [];
    
    public  function getImagePathAttribute(){
        return asset('uploads/gallary/'.$this->image);
    }

    public function gallary(){
        return $this->belongsTo(Gallary::class);
    }
}
