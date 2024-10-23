@extends('layouts.admin')

@section('content')
    <h1>Edit Product: {{ $product->title }}</h1>

    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.products._form', ['product' => $product])
        {{-- <button type="submit" class="btn btn-primary">Update Product</button> --}}
    </form>
@endsection
