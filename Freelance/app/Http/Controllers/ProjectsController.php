<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Project;
use App\Category;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', ['projects'=>Project::all()]);
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

        Project::create(["name"=>$request->name, "description"=>$request->description, "image_path"=>$path, "category_id"=>$idCat, "creator_id"=>1]);

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
    public function destroy($id)
    {
        //
    }
}
