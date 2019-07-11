@extends('layout')

@section('title')

    Show projects

@stop

@section('content')

    <h1>projects</h1>
    
    @foreach($projects as $project)
    
        <li> {{ $project->title }} </li>
    
    @endforeach

@endsection
