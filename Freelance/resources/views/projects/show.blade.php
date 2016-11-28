@extends('layouts.sidebar')

@section('title','Project Page')

@section('content')

	<div class="col-xs-12">
	    <img src="{{Storage::url($project->image_path)}}" class="img-responsive col-xs-12 col-sm-4 col-sm-offset-4 img-thumbnail">
	</div>
	<h1 class="text-center">{{$project->name}}</h1>
	<h5 class="text-center">By: {{App\User::find($project->creator_id)->name }}</h5>
	<h5 class="text-center">Category: {{ App\Category::find($project->category_id)->name }}</h5>
	<h3 class="text-center">What's this project about?</h3>
	<p class="text-center">{{$project->description}}</p>
	<br>
	
	<div align="right" class="col-xs-12">
		@if($project->creator_id == $id)			
			{!! Form::open( [ 'method' => 'GET', 'route'=>['projects.edit', $project->id]]) !!}
		    <button class="btn btn-primary btn-block">Edit project</button>
		    {!! Form::close() !!}		    
		@else
			@if($project->claimer_id == NULL)
	            {!! Form::open( ['method'=>'PUT', 'route'=>['projects.update_claimer', $project->id]]) !!}
				<button class="btn btn-success btn-block">Claim Project</button>
				{!! Form::close() !!}
			@else
                {!! Form::open( ['method'=>'PUT', 'route'=>['projects.unclaim_project', $project->id]]) !!}
                <button  class="btn btn-danger btn-block">Unclaim Project</i></button>
                {!! Form::close() !!}				
			@endif
		@endif
	</div>
	


@endsection