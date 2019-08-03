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

            <input type="text" class="form-control {{ $errors->has('title')?'border-danger':'' }}" name="title" value="{{ $project->title }}"/> <br>

            <textarea class="form-control {{ $errors->has('description')?'border-danger':'' }}" name="description">{{ $project->description }}</textarea> <br>

            <button type="submit" class="btn btn-primary">Save</button>
            
        </form>
        <br>
        <form method="POST" action="/projects/{{ $project->id }}">
            @method('DELETE')
            @CSRF
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

    </div>

    @if($errors->any())

        <div class="alert alert-danger" role="alert" style="margin-top:10px;">
    
            @foreach($errors->all() as $error)
    
                <li>{{ $error }}</li>
    
            @endforeach
    
        </div>
    
    @endif


@endsection