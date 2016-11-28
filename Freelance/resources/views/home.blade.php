@extends('layouts.sidebar')

@section('title','Available projects')

@section('content')

    @foreach($projects as $project)
      @if($project->claimer_id == NULL)  
        <div class="row">
          
          <div class="col-sm-10">
            <h3><a href="{{ route('projects.show', [ $project->id]) }}">{{ $project->name}}</a></h3>
            <h4><span class="label label-default">{{ App\Category::find($project->category_id)->name }}</span></h4><h4>
            <small class="text-muted">By {{App\User::find($project->creator_id)->name }} • <a href="#" class="text-muted">Read More</a></small>
          </h4>
        </div>
        <div class="col-sm-2">
          <a href="#" class="pull-right"><img src="{{Storage::url($project->image_path)}}" class="img-circle"></a>
        </div> 
        </div>
      @endif
    @endforeach

@endsection