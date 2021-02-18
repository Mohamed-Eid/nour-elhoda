<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function __invoke()
    {
        $videos = Video::all();
        return view('frontend.videos.index',compact('videos')); 
    }
}
