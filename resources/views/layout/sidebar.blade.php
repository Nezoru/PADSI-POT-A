<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body>

<header class="navbar navbar-dark bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
  
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

        <div class="nav-item dropdown">
        
        <a class="nav-link dropdown-toggle px-3" href="#" ... data-bs-toggle="dropdown">
            Profile Pengguna
        </a>
        
        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>

        </div>

</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
              <i class="bi bi-house-door me-2"></i>
              Dashboard
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-dark">
              <i class="bi bi-file-earmark-text me-2"></i>
              Orders
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-dark">
              <i class="bi bi-cart me-2"></i>
              Products
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-dark">
              <i class="bi bi-people me-2"></i>
              Customers
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-dark">
              <i class="bi bi-graph-up me-2"></i>
              Reports
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-dark">
              <i class="bi bi-puzzle me-2"></i>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <i class="bi bi-plus-circle"></i>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">
              <i class="bi bi-file-earmark-text me-2"></i>
              Current month
            </a>
          </li>
          </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
      @yield('content')

    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>

@stack('scripts')
</body>
</html>