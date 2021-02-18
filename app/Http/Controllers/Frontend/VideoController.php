<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function __invoke(Request $request)
    {
        $page = $request->page ?? 1;
        $paginator = 2;
        $videos = Video::skip(0)->take($page*$paginator)->get();
        return view('frontend.videos.index',compact('videos','page')); 
    }
}
