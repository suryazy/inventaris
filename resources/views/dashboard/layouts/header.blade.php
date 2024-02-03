<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <form action="/logout" method="post">
      @csrf
      <button type="submit" class="navbar-brand px-3 text-dark"><i class="bi bi-box-arrow-left"></i> Logout</button>
    </form>
    <a class="navbar-brand text-light" href="#">Perusahaan A</a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-light active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Pengguna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Kategori</a>
        </li>
      </ul>
    </div>
  </div>
</nav>