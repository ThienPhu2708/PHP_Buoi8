@extends('layout.app')
@section('content')
<h2>Sửa sản phẩm #{{ $product->id }}</h2>
<form method="POST" action="{{ route('products.update', $product) }}">
    @method('PUT')
    @include('products._form')
</form>
@endsection
