@extends('layout.app')
@section('content')
<h2>Danh sách sản phẩm</h2>
<p><a class="btn" href="{{ route('products.create') }}">+ Thêm sản phẩm</a></p>
<table>
    <tr>
        <th>Tên</th>
        <th>Giá</th>
        <th>Tồn kho</th>
        <th>Danh mục</th>
        <th>Thao tác</th>
    </tr>
    @foreach ($products as $p)
    <tr>
        <td>{{ $p->name }}</td>
        <td>{{ number_format($p->price) }} đ</td>
        <td>{{ $p->stock }}</td>
        <td>{{ $p->category?->name }}</td>
        <td>
            <a class="btn" href="{{ route('products.edit', $p) }}">Sửa</a>
            <form class="inline" method="POST" action="{{ route('products.destroy', $p) }}" onsubmit="return confirm('Xóa sản phẩm này?')">
                @csrf
                @method('DELETE')
                <button class="btn" type="submit">Xóa</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $products->links() }}
@endsection
