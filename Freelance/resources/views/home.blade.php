@extends('layouts.sidebar')

@section('title','Available projects')

@section('content')

    @foreach  ($projects as $project)
    <div class="row">    
      <div class="col-sm-10">
        <h3>{{ $project->name}}</h3>
        <h4><span class="label label-default">{{ App\Category::find($project->category_id)->name }}</span></h4><h4>
        <small class="text-muted">Por {{App\User::find($project->creator_id)->name }} • <a href="#" class="text-muted">Read More</a></small>
      </h4>
    </div>
    <div class="col-sm-2">
      <a href="#" class="pull-right"><img src="{{Storage::url($project->image_path)}}" class="img-circle"></a>
    </div> 
    </div>
    @endforeach

@endsection
