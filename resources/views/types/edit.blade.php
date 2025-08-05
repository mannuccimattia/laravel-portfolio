@extends('layouts.projects')

@section('title')
    Edit | Types
@endsection

@section('content')
    <div class="container narrow">
        <h2 class="my-4">Edit existing type</h2>

        <form action="{{ route('types.update', $type) }}" method="POST">
            @csrf

            @method('PUT')

            <div class="input-group mb-3">
                <label class="input-group-text" for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ $type->name }}">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="description">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $type->description }}</textarea>
            </div>

            <div class="d-flex gap-2">
                <input class="btn btn-light border" type="submit" value="Save">
                <a href="{{ route('types.index') }}" class="btn btn-light border">Back</a>
            </div>

        </form>
    </div>
@endsection
