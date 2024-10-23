@extends('layouts.admin')

@section('content')
    <h1>Create Product</h1>

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.products._form')
        {{-- <button type="submit" class="btn btn-primary">Save Product</button> --}}
    </form>
@endsection
