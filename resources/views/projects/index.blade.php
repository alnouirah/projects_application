@extends('layout')

@section('title')

    Show projects

@stop

@section('content')

    <h1>projects</h1>

    <ul>

        @foreach($projects as $project)
        
            <a href="projects/{{ $project->id }}">
            
                <li> {{ $project->title }} </li>
            
            </a>

        @endforeach

    </ul>

    <p>
        <a href="/projects/create" class="btn btn-primary">Create New Project</a>
    </p>


@endsection
