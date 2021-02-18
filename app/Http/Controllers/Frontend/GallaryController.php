<?php

namespace App\Http\Controllers\Frontend;

use App\Gallary;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page = $request->page ?? 1;
        $paginator = 6;
        $gallaries = Gallary::skip(0)->take($page*$paginator)->get();
        return view('frontend.gallaries.index',compact('gallaries','page'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gallary $gallary)
    {
        return view('frontend.gallaries.show',compact('gallary'));

    }

}
