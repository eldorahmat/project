<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard #1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6fa;
            font-family: 'Segoe UI', sans-serif;
        }
        .sidebar {
            height: 100vh;
            width: 240px;
            background-color: #fff;
            border-right: 1px solid #ddd;
            position: fixed;
            padding: 20px 0;
        }
        .sidebar a {
            display: block;
            padding: 12px 24px;
            color: #444;
            text-decoration: none;
        }
        .sidebar a.active {
            background-color: #007bff;
            color: #fff;
            border-radius: 6px;
        }
        .main {
            margin-left: 240px;
            padding: 20px;
        }
    </style>
</head>
<body>
    {{-- Sidebar --}}
    @include('layouts.partials.sidebar')

    {{-- Main content --}}
    <div class="main">
        {{-- Header --}}
        @include('layouts.partials.header')

        {{-- Halaman dinamis --}}
        @yield('content')

        {{-- Footer --}}
        @include('layouts.partials.footer')
    </div>

    {{-- Bootstrap JS for dropdown --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
