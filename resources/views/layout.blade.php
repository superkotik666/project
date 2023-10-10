<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <base href="{{ url('/') }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="slyles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

@yield('content')


</body>

</html>
