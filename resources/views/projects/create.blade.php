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
