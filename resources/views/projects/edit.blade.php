@extends('layouts.projects')

@section('title')
    Edit | Projects
@endsection

@section('content')
    <div class="container narrow">
        <h2 class="my-4">Edit existing project</h2>

        <form action="{{ route('projects.update', $project) }}" method="POST">
            @csrf

            @method('PUT')

            <div class="input-group mb-3">
                <label class="input-group-text" for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ $project->name }}">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="client">Client</label>
                <input class="form-control" type="text" name="client" id="client" value="{{ $project->client }}">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="type_id">Type</label>
                <select name="type_id" id="type_id" class="form-select" aria-label="project type select">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : '' }}>
                            {{ $type->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="date">Date</label>
                <input class="form-control" type="date" name="date" id="date" value="{{ $project->date }}">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="description">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $project->description }}</textarea>
            </div>

            <div class="d-flex gap-2">
                <input class="btn btn-light border" type="submit" value="Save">
                <a href="{{ route('projects.index') }}" class="btn btn-light border">Back</a>
            </div>

        </form>
    </div>
@endsection
