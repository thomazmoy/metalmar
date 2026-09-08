<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href='{{ url("painel/assets/img/ico.png") }}'>
    <link rel="icon" type="image/png" href='{{ url("painel/assets/img/ico.png") }}'>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href='{{ url("painel/assets/css/nucleo-icons.css") }}' rel="stylesheet" />
    <link href='{{ url("painel/assets/css/nucleo-svg.css") }}' rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/852e05a3a6.js" crossorigin="anonymous"></script>
    <link href='{{ url("painel/assets/css/nucleo-svg.css") }}' rel="stylesheet" />
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link id="pagestyle" href='{{ url("painel/assets/css/soft-ui-dashboard.css") }}' rel="stylesheet" />
  </head>

<body class="g-sidenav-show bg-gray-100">

  @include('sweetalert::alert')

  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-left ms-3" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute right-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0 text-center" href='{{ route("login") }}'>
        <img src='{{ url("painel/assets/img/mssystem.png") }}' class="navbar-brand-img">
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="{{ Request::url() == url('admin') ? 'nav-link active' : 'nav-link' }}" href='{{ url("admin") }}'>
            <div class="icon icon-shape-2 icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-database"></i>
            </div>
            <span class="nav-link-text ms-1">Painel Administrativo</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::segment(2) === 'banner' ? 'nav-link active' : 'nav-link' }}" href='{{ url("admin/banner") }}'>
            <div class="icon icon-shape-2 icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-image"></i>
            </div>
            <span class="nav-link-text ms-1">Banner</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::segment(2) === 'quemsomos' ? 'nav-link active' : 'nav-link' }}" href='{{ url("admin/quemsomos") }}'>
            <div class="icon icon-shape-2 icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Quem Somos</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::segment(2) === 'solucao' ? 'nav-link active' : 'nav-link' }}" href='{{ url("admin/solucao") }}'>
            <div class="icon icon-shape-2 icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-users"></i>
            </div>
            <span class="nav-link-text ms-1">Soluções</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::segment(2) === 'categoria' ? 'nav-link active' : 'nav-link' }}" href='{{ url("admin/categoria") }}'>
            <div class="icon icon-shape-2 icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-newspaper"></i>
            </div>
            <span class="nav-link-text ms-1">Categoria do Blog</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::segment(2) === 'blog' ? 'nav-link active' : 'nav-link' }}" href='{{ url("admin/blog") }}'>
            <div class="icon icon-shape-2 icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-newspaper"></i>
            </div>
            <span class="nav-link-text ms-1">Blog</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::segment(2) === 'galeria' ? 'nav-link active' : 'nav-link' }}" href='{{ url("admin/galeria") }}'>
            <div class="icon icon-shape-2 icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-users"></i>
            </div>
            <span class="nav-link-text ms-1">Galeria</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::segment(2) === 'depoimento' ? 'nav-link active' : 'nav-link' }}" href='{{ url("admin/depoimento") }}'>
            <div class="icon icon-shape-2 icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-users"></i>
            </div>
            <span class="nav-link-text ms-1">Depoimento</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::segment(2) === 'contato' ? 'nav-link active' : 'nav-link' }}" href='{{ url("admin/contato") }}'>
            <div class="icon icon-shape-2 icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-headset"></i>
            </div>
            <span class="nav-link-text ms-1">Contato</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::segment(2) === 'privacidade' ? 'nav-link active' : 'nav-link' }}" href='{{ url("admin/privacidade") }}'>
            <div class="icon icon-shape-2 icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-comments"></i>
            </div>
            <span class="nav-link-text ms-1">Política de Privacidade</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::segment(2) === 'siteconfig' ? 'nav-link active' : 'nav-link' }}" href='{{ url("admin/siteconfig") }}'>
            <div class="icon icon-shape-2 icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-cog"></i>
            </div>
            <span class="nav-link-text ms-1">Configuração do Site</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  @yield('content')

  <!--   Core JS Files   -->
  <script src='{{ url("painel/assets/js/core/popper.min.js") }}'></script>
  <script src='{{ url("painel/assets/js/core/bootstrap.min.js") }}'></script>
  <script src='{{ url("painel/assets/js/plugins/smooth-scrollbar.min.js") }}'></script>
  <script src='{{ url("painel/assets/js/plugins/chartjs.min.js") }}'></script>
  <script src='{{ url("painel/assets/js/plugins/Chart.extension.js") }}'></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src='{{ url("painel/assets/js/soft-ui-dashboard.min.js") }}'></script>
  <script>
    $('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var orc_id = button.data('orcid')
      var modal = $(this)
      modal.find('.modal-body #orc_id').val(orc_id)
    })
  </script>
  <script>
    $('#flash-overlay-modal').modal();
  </script>
</body>
</html>