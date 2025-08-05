@extends('layouts.projects')

@section('title')
    Show | Projects
@endsection

@section('content')
    <div class="container">
        <h2 class="my-4">{{ $project->name }}</h2>

        <div class="row mb-3">
            <div class="col-auto">
                <a href="{{ route('projects.edit', $project) }}" class="btn btn-outline-warning">Edit</a>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Delete
                </button>
            </div>

        </div>

        <small>
            Made for <b>{{ $project->client }}</b> in <b>{{ $project->date }}</b>
        </small>
        <span class="badge rounded-pill text-bg-info ms-2">{{ $project->type->name }}</span>
        <p class="my-4">{{ $project->description }}</p>
        <a href="{{ route('projects.index') }}">Back to index</a>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Unreversible changes ahead!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure to <strong>permanently delete</strong> this project?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Undo</button>
                    <form action="{{ route('projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-outline-danger" value="Delete">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
