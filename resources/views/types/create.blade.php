@extends('layouts.projects')

@section('title')
    Add new | Types
@endsection

@section('content')
    <div class="container narrow">
        <h2 class="my-4">Add a new type</h2>

        <form action="{{ route('types.store') }}" method="POST">
            @csrf

            <div class="input-group mb-3">
                <label class="input-group-text" for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="description">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
            </div>

            <div class="d-flex gap-2">
                <input class="btn btn-light border" type="submit" value="Save">
                <a href="{{ route('types.index') }}" class="btn btn-light border">Back</a>
            </div>
        </form>
    </div>
@endsection
