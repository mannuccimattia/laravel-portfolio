@extends('layouts.projects')

@section('title')
    Index | Technologies
@endsection

@section('content')
    <div class="container">
        <div class="my-4 d-flex justify-content-between align-items-center">
            <h1>Technologies</h1>
            <div>
                <a href="{{ route('technologies.create') }}" class="btn btn-outline-dark">Add a technology</a>
            </div>
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

            @foreach ($technologies as $tech)
                <div class="row mt-3 pb-3 border-bottom ">
                    <div class="col">
                        {{ $tech->name }}
                    </div>
                    <div class="col">
                        <a href="{{ route('technologies.show', $tech->id) }}">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
