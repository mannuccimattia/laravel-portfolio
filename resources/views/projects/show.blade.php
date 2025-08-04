@extends('layouts.projects')

@section('title')
    Show | Projects
@endsection

@section('content')
    <div class="container">
        <h2 class="my-4">{{ $project->name }}</h2>
        <small>
            Made for <b>{{ $project->client }}</b> in <b>{{ $project->date }}</b>
        </small>
        <p class="my-4">{{ $project->description }}</p>
        <a href="{{ route('projects.index') }}">Back to index</a>
    </div>
@endsection
