@extends('layouts.projects')

@section('title')
    Index | Types
@endsection

@section('content')
    <div class="container">
        <div class="my-4 d-flex justify-content-between">
            <h1>Types of projects</h1>
            <a href="{{ route('types.create') }}" class="btn btn-outline-dark">Add a type</a>
        </div>

        <div class="container border rounded mb-4">
            <div class="row bg-dark text-white rounded-top">
                <div class="col fw-bold">
                    Name
                </div>
                <div class="col fw-bold">
                    Link
                </div>
            </div>

            @foreach ($types as $type)
                <div class="row mt-3 pb-3 border-bottom ">
                    <div class="col">
                        {{ $type->name }}
                    </div>
                    <div class="col">
                        <a href="{{ route('types.show', $type->id) }}">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
