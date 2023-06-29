<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scripty</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body>
  @include('components.navbar')
  @yield('content')
  @include('components.footer')

  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>
</html>