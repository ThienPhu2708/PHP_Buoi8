<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Lab 8')</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; font-size: 14px; color: #111; }
        .topbar { background: #111827; padding: 8px 12px; }
        .topbar a { color: #fff; margin-right: 10px; text-decoration: underline; }
        main { padding: 16px; }
        table { width: 100%; border-collapse: collapse; border: 1px solid #ddd; margin-bottom: 16px; }
        th, td { text-align: left; padding: 8px 6px; border-bottom: 1px solid #eee; }
        th { background: #f3f4f6; }
        .alert { padding: 8px 12px; margin-bottom: 12px; border: 1px solid #999; background: #f9f9f9; }
        .error { color: #b00020; font-size: 13px; }
        .field { margin-bottom: 12px; }
        .field label { display: block; margin-bottom: 4px; font-weight: bold; }
        .field input, .field select { padding: 6px; width: 320px; max-width: 100%; box-sizing: border-box; }
        .btn { padding: 5px 10px; border: 1px solid #333; background: #fff; cursor: pointer; text-decoration: none; color: #111; font-size: 13px; }
        .pager a, .pager span { display: inline-block; padding: 3px 8px; border: 1px solid #ccc; margin-right: 3px; text-decoration: none; color: #111; }
        .pager .current { background: #111827; color: #fff; }
        .pager .disabled { color: #aaa; }
        form.inline { display: inline; }
    </style>
</head>
<body>
    <nav class="topbar">
        <a href="{{ route('products.index') }}">Products</a>
        <a href="{{ route('students.index') }}">Students</a>
        <a href="{{ route('profiles.index') }}">Profiles</a>
        <a href="{{ route('queries.index') }}">Queries</a>
    </nav>
    <main>
        @if (session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif
        @yield('content')
    </main>
</body>
</html>
