<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Theme style -->
      <link href="{{ asset('/assets/dist/css/adminlte.css') }}" rel="stylesheet">
      <link href="{{ asset('/assets/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
      
    <title>@yield('title') - Curso</title>
</head>
<body>
    <div class="app">
        @yield('content')
    </div>

<!-- jQuery -->
<script src="/assets/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.min.js"></script>

</body>
</html>