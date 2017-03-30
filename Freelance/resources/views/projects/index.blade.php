@extends('layouts.sidebar')

@section('title','My projects')

@section('content')
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>            
                   @if($project->creator_id == $id)
                      <td>{{$project->id}}</td>
                      <td><a href="{{ route('projects.show', [ $project->id]) }}">{{$project->name}}</a></td>
                      <td>{{ App\Category::find($project->category_id)->name }}</td>
                      <td>
                      {!! Form::open( [ 'method' => 'GET', 'route'=>['projects.edit', $project->id]]) !!}
                      <button class="btn btn-primary btn-block" id="edit"><i class="fa fa-pencil"></i></button>
                      {!! Form::close() !!}

                      </td>
                      
                      <td>
                      {!! Form::open( ['method'=>'DELETE', 'route'=>['projects.destroy', $project->id]]) !!}
                      <button class="btn btn-danger btn-block" id="delete"><i class="fa fa-trash"></i></button>
                      {!! Form::close() !!}
                      </td>
                      
                    @endif
            </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection