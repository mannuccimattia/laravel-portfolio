@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card bg-transparent text-light border-secondary shadow mt-4">
                    <div class="card-header bg-secondary border-secondary">{{ Auth::user()->name }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <div class="d-flex gap-3">
                            <p>
                                <a href="{{ url('/admin') }}">
                                    {{ __('Admin') }}</a>
                            </p>
                            <p>
                                <a href="{{ url('/projects') }}">
                                    {{ __('Projects') }}</a>
                            </p>
                            <p>
                                <a href="{{ url('/types') }}">
                                    {{ __('Types') }}</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
