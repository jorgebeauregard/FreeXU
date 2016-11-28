<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Project;
use App\Category;
use Auth;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', ['projects'=>Project::all(),'id'=> Auth::user()->getId()]);
    }

    public function index2()
    {
        return view('projects.index2', ['projects'=>Project::all(),'id'=> Auth::user()->getId()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $names = Category::select('name')->get();
        foreach ($names as $name) {
            $titulos[] = $name->name;
        }
        return view('projects.create', ['titulos'=>$titulos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_user = Auth::user()->getId();

        $this->validate($request, [
            "name" => "required|string",
            "description" => "required|string",
            "image" => "image",
            "category" => "required|string",
            ]);

        if($request->hasFile("image")){
            $path = $request->image->store('public');
        }
        else{
            $path = "public/noImgUser.png";
        }

        $indexCat = $request->category;
        $names = Category::select('name')->get();
        foreach ($names as $name) {
            $titulos[] = $name->name;
        }

        $idCat = Category::where('name', $titulos[$indexCat])->first()->id;

        Project::create(["name"=>$request->name, "description"=>$request->description, "image_path"=>$path, "category_id"=>$idCat, "creator_id"=>$id_user]);

        return redirect()->route("projects.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::where('id', $id)->firstOrFail();
        return view('projects.show', ['project' => $project,'id'=> Auth::user()->getId()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::where('id', $id)->firstOrFail();

        $names = Category::select('name')->get();
        foreach ($names as $name) {
            $titulos[] = $name->name;
        }
        return view('projects.edit', ['titulos'=>$titulos, 'project'=>$project]);
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
        $id_user = Auth::user()->getId();
        $project = Project::where('id', $id)->firstOrFail();


        $this->validate($request, [
            "name" => "required|string",
            "description" => "required|string",
            "image" => "image",
            "category" => "required|string",
            ]);

        if($request->hasFile("image")){
            $path = $request->image->store('public');
        }
        else{
            $path = "public/noImgUser.png";
        }

        $indexCat = $request->category;
        $names = Category::select('name')->get();
        foreach ($names as $name) {
            $titulos[] = $name->name;
        }

        $idCat = Category::where('name', $titulos[$indexCat])->first()->id;

        $project->update($request->all());

        return redirect()->route("projects.index");
    }

    public function update_claimer(Request $request, $id)
    {
        $project = Project::where('id', $id)->firstOrFail();
        $project->claimer_id = Auth::user()->getId();
        $project->save();
        return redirect()->route("projects.index2");
    }

    public function unclaim_project(Request $request, $id)
    {
        $project = Project::where('id', $id)->firstOrFail();
        $project->claimer_id = NULL;
        $project->save();
        return redirect()->route("home.index");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $project = Project::where('id', $id)->firstOrFail();
        $deleted = $project->delete();

        return redirect()->route('projects.index');
    }
}
