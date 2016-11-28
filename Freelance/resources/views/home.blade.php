@extends('layouts.sidebar')

@section('title','Available projects')

@section('content')

    @foreach($projects->chunk(4) as $project)
        <div class="row">
        @foreach($project as $projects)
            @if($projects->claimer_id == NULL)
                @if($projects->creator_id != $id)  
                    <div class="col-sm-5 col-md-4">
                      <div class="thumbnail">
                        <a href="#" ><img src="{{Storage::url($projects->image_path)}}" class="img-responsive"></a>
                      <div class="caption">
                        <h3>{{$projects->name}}</h3>
                        <h4><span class="label label-default">{{ App\Category::find($projects->category_id)->name }}</span><small class="text-muted"> By {{App\User::find($projects->creator_id)->name }} </small></h4>
                        <p class="description">{{  str_limit($projects->description, 170, "...") }}</p>                            
                        <div>
                        <a href="{{ route('projects.show', [ $projects->id]) }}" class="btn btn-primary" role="button">Read more</a>
                        </div>
                      </div>
                      </div>
                    </div>
                @endif
            @endif
      @endforeach
    </div>
    @endforeach

@endsection