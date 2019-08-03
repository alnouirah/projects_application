@extends('layout')

@section('title')

    Show projects

@stop

@section('content')
    
    <h3 class="title">{{ $project->title }}</h3>

    <p class="content">{{ $project->description }}</p>

    <p>
        <a href="/projects/{{ $project->id }}/edit" class="btn btn-primary">Edit</a>
    </p>

    @if ($project->tasks->count() > 0 )
        
        <div>
            @foreach ($project->tasks as $task)

                    
                    <li>{{ $task->description }}</li>

                    
            @endforeach
        </div>
        
    @endif
    

@endsection
