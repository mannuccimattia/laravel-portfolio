@extends('layouts.projects')

@section('title')
    Add new | Technologies
@endsection

@section('content')
    <div class="container narrow">
        <h2 class="my-4">Add a new technology</h2>

        <form action="{{ route('technologies.store') }}" method="POST">
            @csrf

            <div class="input-group mb-3">
                <label class="input-group-text" for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="description">Color</label>
                <div>
                    <input type="color" name="color" id="color"
                        class="form-control form-control-color rounded-0 rounded-end">
                </div>
            </div>

            <div class="d-flex gap-2">
                <input class="btn btn-light border" type="submit" value="Save">
                <a href="{{ route('technologies.index') }}" class="btn btn-light border">Back</a>
            </div>
        </form>
    </div>
@endsection
