@extends('layouts.projects')

@section('title')
    Add new | Projects
@endsection

@section('content')
    <div class="container narrow">
        <h2 class="my-4">Add a new project</h2>

        <form action="{{ route('projects.store') }}" method="POST">
            @csrf

            <div class="input-group mb-3">
                <label class="input-group-text" for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="client">Client</label>
                <input class="form-control" type="text" name="client" id="client">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="type_id">Type</label>
                <select name="type_id" id="type_id" class="form-select" aria-label="project type select">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="technologies_id">Technologies</label>
                <div class="form-control d-flex flex-wrap row-cols-4">
                    @foreach ($technologies as $tech)
                        <div class="col">
                            <input type="checkbox" name="technologies[]" value="{{ $tech->id }}"
                                id="{{ $tech->id }}">
                            <small>
                                <label for="{{ $tech->id }}">{{ $tech->name }}</label>
                            </small>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="date">Date</label>
                <input class="form-control" type="date" name="date" id="date">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="description">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>

            <div class="d-flex gap-2">
                <input class="btn btn-light border" type="submit" value="Save">
                <a href="{{ route('projects.index') }}" class="btn btn-light border">Back</a>
            </div>
        </form>
    </div>
@endsection
