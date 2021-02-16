<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(9);
        return view('frontend.projects.index',compact('projects'));
    }

    public function more(){
        $page = request()->page;
        $projects = Project::take($page*9)->get();
        return view('frontend.projects.ajax',compact('projects'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

}
