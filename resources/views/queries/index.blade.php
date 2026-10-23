@extends('layout.app')
@section('content')
<h2>Truy vấn Eloquent</h2>

<h3>1. Sản phẩm có giá &gt; 100.000 ({{ $expensive->count() }})</h3>
<table>
    <tr><th>Tên</th><th>Giá</th><th>Danh mục</th></tr>
    @foreach ($expensive as $p)
    <tr>
        <td>{{ $p->name }}</td>
        <td>{{ number_format($p->price) }} đ</td>
        <td>{{ $p->category?->name }}</td>
    </tr>
    @endforeach
</table>

<h3>2. Số sản phẩm mỗi danh mục (withCount)</h3>
<table>
    <tr><th>Danh mục</th><th>Số sản phẩm</th></tr>
    @foreach ($categories as $c)
    <tr>
        <td>{{ $c->name }}</td>
        <td>{{ $c->products_count }}</td>
    </tr>
    @endforeach
</table>

<h3>3. Sinh viên kèm số môn học đã đăng ký</h3>
<table>
    <tr><th>Họ tên</th><th>Email</th><th>Số môn</th></tr>
    @foreach ($students as $s)
    <tr>
        <td>{{ $s->name }}</td>
        <td>{{ $s->email }}</td>
        <td>{{ $s->courses_count }}</td>
    </tr>
    @endforeach
</table>
@endsection
