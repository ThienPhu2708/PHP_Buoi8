@extends('layout.app')
@section('content')
<h2>Thêm sản phẩm</h2>
<form method="POST" action="{{ route('products.store') }}">
    @include('products._form')
</form>
@endsection
