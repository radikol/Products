<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link href="{{ asset('css/wave-bsb.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Satisfy&display=swap" rel="stylesheet">
    @yield('styles')
</head>
<body data-bs-spy="scroll" data-bs-target="#bsb-tpl-navbar">
    @include('admin.partials.header')
    
    <main>
        @yield('content')
    </main>

    @include('admin.partials.footer')
    
    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/wave-bsb.js') }}"></script>
    @yield('scripts')
</body>
</html>