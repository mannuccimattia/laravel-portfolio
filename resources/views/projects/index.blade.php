@extends('layouts.projects')

@section('title')
    Index | Projects
@endsection

@section('content')
    <h1>My projects</h1>
    <ul>
        @foreach ($projects as $project)
            <li>
                {{ $project->name }}
            </li>
        @endforeach
    </ul>
@endsection
