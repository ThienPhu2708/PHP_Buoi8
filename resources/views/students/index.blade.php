@extends('layout.app')
@section('content')
<h2>Danh sách sinh viên và các môn học đã đăng ký</h2>
<table>
    <tr>
        <th>STT</th>
        <th>Họ tên</th>
        <th>Email</th>
        <th>Môn học</th>
    </tr>
    @foreach ($students as $s)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $s->name }}</td>
        <td>{{ $s->email }}</td>
        <td>{{ $s->courses->pluck('title')->implode(', ') }}</td>
    </tr>
    @endforeach
</table>
@endsection
