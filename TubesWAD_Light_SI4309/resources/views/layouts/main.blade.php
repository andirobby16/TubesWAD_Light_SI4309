<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Tubes Light</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Custom styles for this template -->
    <link href="/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
    <img src="foto/logomelon-lpg.png" width="40px">
    MELON.LGP</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3 fw-bold" href="/"><i class="bi bi-door-closed-fill"></i>Keluar</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "home") ? 'fw-bold' : '' }}" aria-current="page" href="/home">
              <i class="bi bi-house-door-fill"></i>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "stok") ? 'fw-bold' : '' }}" href="/stock">
              <i class="bi bi-boxes"></i>
              Stok Pangkalan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "pembelian") ? 'fw-bold' : '' }}" href="/pembelian">
              <i class="bi bi-pencil-square"></i>
              Data Pembelian
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "pangkalan") ? 'fw-bold' : '' }}" href="/pangkalan">
              <i class="bi bi-person-square"></i>
              Data Pangkalan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "riwayat") ? 'fw-bold' : '' }}" href="/riwayat">
              <i class="bi bi-book"></i>
              Riwayat Transaksi
            </a>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @yield('Konten')
    </main>
</div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        
        <script src="/dashboard.js"></script>
  </body>
</html>
