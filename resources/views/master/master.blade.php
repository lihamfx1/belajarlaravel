<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\assets\css\bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <div class="">@include('master._navigasi')</div>
    <div class="container">
        <div>@yield('content')</div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="\assets\js\bootstrap.bundle.min.js"></script>
</body>
</html>