@extends('layouts.admin')

@section('title')
    Index | Admin
@endsection

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Admin Page') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Admin Dashboard') }}</div>

                    <div class="card-body">
                        <div>
                            <strong>admin:</strong> {{ $user->name }}
                        </div>
                        <div>
                            <strong>mail:</strong> {{ $user->email }}
                        </div>
                        <div>
                            <strong>created at:</strong> {{ $user->created_at }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
