@extends('layouts.sidebar')

@section('title','My claimed projects')

@section('content')
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Unclaim</th>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>            
                   @if($project->claimer_id == $id)
                      <td>{{$project->id}}</td>
                      <td><a href="{{ route('projects.show', [ $project->id]) }}">{{$project->name}}</a></td>
                      <td>{{ App\Category::find($project->category_id)->name }}</td>
                      <td>
                      {!! Form::open( ['method'=>'PUT', 'route'=>['projects.unclaim_project', $project->id]]) !!}
                      <button text-align="center" class="btn btn-danger btn-block"><i class="fa fa-trash"></i></button>
                      {!! Form::close() !!}
                      </td>
                      
                    @endif
            </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection