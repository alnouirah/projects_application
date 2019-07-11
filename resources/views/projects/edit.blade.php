@extends('layout')
@section('title')
    Edit projects
@endsection

@section('content')

    <h1>Edit Projects</h1>

    <div>
        <form method="POST" action="/projects/{{ $project->id }}">

            {{-- {{ method_field('PATCH') }} --}}

            @method('PATCH')

            @csrf

            <input type="text" class="form-control" name="title" value="{{ $project->title }}"/> <br>

            <textarea class="form-control" name="description">{{ $project->description }}</textarea> <br>

            <button type="submit" class="btn btn-primary">Save</button>
            
        </form>
        <br>
        <form method="POST" action="/projects/{{ $project->id }}">
            @method('DELETE')
            @CSRF
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

    </div>

@endsection