@extends('layout.app')
@section('content')
<h2>Thông tin người dùng kèm Profile (One to One)</h2>
<table>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Điện thoại</th>
    </tr>
    @foreach ($users as $u)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $u->name }}</td>
        <td>{{ $u->email }}</td>
        <td>{{ $u->profile?->address ?? '(chưa có)' }}</td>
        <td>{{ $u->profile?->phone ?? '(chưa có)' }}</td>
    </tr>
    @endforeach
</table>
@endsection
