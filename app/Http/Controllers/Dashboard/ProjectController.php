<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('dashboard.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($this->process_videos($request));
        // dd($request->all());
        //TODO : Validate request

        $project_data = $request->except('_token','investigations','videos','image','header');
        $project_data['image'] = upload_image_without_resize('projects',$request->image);
        $project_data['header'] = upload_image_without_resize('projects',$request->header);
        $project = Project::create($project_data);

        foreach ($request->investigations as $key => $investigation) {
            $investigation['image'] = upload_image_without_resize('investigations',$investigation['image']); 
            $project->investigations()->create($investigation);
        }
        foreach ($this->process_videos($request) as $video) {
            $project->videos()->create($video);
        }

        return redirect()->back()->with('success','تمت الإضافة بنجاح');
        
    }

    private function process_videos(Request $request){
        $data = [];
        foreach ($request->videos as $key => $video) {
            $data[$key]['ar']['name'] = $video['ar_name'];
            $data[$key]['en']['name'] = $video['en_name'];
            $data[$key]['url']        = $video['url'];
        }
        return $data;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if ($project->image != 'default.png' ) {
            delete_image('projects',$project->image);
        }

        if ($project->header != 'default.png' ) {
            delete_image('projects',$project->header);
        }

        foreach ($project->investigations as $investigation) {
            if ($investigation->image != 'default.png' ) {
                delete_image('investigations',$investigation->header);
            }
        }

        $project->delete();

        return redirect()->back()->with('success','تم الحذف بنجاح');   
    }
}
