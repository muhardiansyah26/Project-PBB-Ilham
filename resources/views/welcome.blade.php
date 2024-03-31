<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard PBB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    
    <nav class="navbar" style="margin-bottom:20rem">
    <div class="container">
    <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="/">Pembayaran</a>
        <a class="nav-link" href="/information">Informasi</a>
        <a class="nav-link" href="/about">Tentang Kami</a>
        <a class="nav-link" href="/create">Coba Buat</a>
      </div>
      <div class="navbar-title">
        <a href="#">Kantor Desa Labuhan Sampang</a>
      </div>
    </div>
    </nav>
    <script>
      feather.replace();
    </script>
    <script src="js/script.js"></script>
    <div class="container mt-4">
        @yield('container')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>