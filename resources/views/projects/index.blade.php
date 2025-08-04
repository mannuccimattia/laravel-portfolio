@extends('layouts.projects')

@section('title')
    Index | Projects
@endsection

@section('content')
    <div class="container">

        <h1>My projects</h1>

        <div class="">
            <div class="row">
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


            @foreach ($projects as $project)
                <div class="row">
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
                        link
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
