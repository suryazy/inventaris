<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Inventaris</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    @include('dashboard.layouts.header')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <main class="col-lg-10">
                @yield('container')
            </main>
        </div>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>