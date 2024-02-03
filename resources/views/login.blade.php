<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Halaman Login | Inventaris</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="/css/sign-in.css" rel="stylesheet">

    </head>

    <body class="d-flex align-items-center py-4 bg-body-tertiary">
  
    <main class="form-signin w-100 m-auto">
    <form action="/login" method="post">
      @csrf
      @if (session('loginFailed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginFailed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

        <div class="form-floating">
          <input type="username" class="form-control" id="username" name="username" placeholder="Username">
          <label for="username">Username</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          <label for="password">Password</label>
        </div>

        <button class="btn btn-success w-100 py-2" type="submit">Login</button>
    </form>
    </main>

    <script src="/js/bootstrap.bundle.min.js"></script>

    </body>
</html>