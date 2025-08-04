@extends('layouts.projects')

@section('title')
    Index | Projects
@endsection

@section('content')
    <div class="container">

        <h1 class="my-4">My projects</h1>

        <div class="container border rounded">
            <div class="row bg-dark text-white rounded-top">
                <div class="col fw-bold">
                    Name
                </div>
                <div class="col fw-bold">
                    Client
                </div>
                <div class="col fw-bold">
                    Date
                </div>
                <div class="col fw-bold">
                    Link
                </div>
            </div>

            {{-- @dd($projects) --}}
            @foreach ($projects as $project)
                <div class="row my-3 pb-3 border-bottom ">
                    <div class="col">
                        {{ $project->name }}
                    </div>
                    <div class="col">
                        {{ $project->client }}
                    </div>
                    <div class="col">
                        {{ $project->date }}
                    </div>
                    <div class="col">
                        <a href="{{ route('projects.show', $project->id) }}">Details</a>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
