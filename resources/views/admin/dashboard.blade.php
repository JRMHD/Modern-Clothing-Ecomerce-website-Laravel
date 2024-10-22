@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Admin Dashboard') }}</div>

                    <div class="card-body">
                        <h3>Welcome, {{ Auth::guard('admin')->user()->name }}</h3>
                        <p>You are logged in as an Admin!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
