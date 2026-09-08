<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="/assets/image/x-icon" href="/assets/img/folhaclimed2.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/folhaclimed2.png">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
      <link href="painel/assets/css/nucleo-icons.css" rel="stylesheet" />
      <link href="painel/assets/css/nucleo-svg.css" rel="stylesheet" />
      <!-- Font Awesome Icons -->
      <script src="https://kit.fontawesome.com/852e05a3a6.js" crossorigin="anonymous"></script>
      <link href="painel/assets/css/nucleo-svg.css" rel="stylesheet" />
      <!-- CSS Files -->
      <link id="pagestyle" href="painel/assets/css/soft-ui-dashboard.css?v=1.0.2" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
    <script src="painel/assets/js/core/popper.min.js"></script>
  <script src="painel/assets/js/core/bootstrap.min.js"></script>
  <script src="painel/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="painel/assets/js/soft-ui-dashboard.min.js?v=1.0.2"></script>
  <script language="JavaScript">
    window.onload = function() {
      document.addEventListener("contextmenu", function(e){
        e.preventDefault();
      }, false);
      document.addEventListener("keydown", function(e) {
        //document.onkeydown = function(e) {
        // "I" key
        if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
          disabledEvent(e);
        }
        // "J" key
        if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
          disabledEvent(e);
        }
        // "S" key + macOS
        if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
          disabledEvent(e);
        }
        // "U" key
        if (e.ctrlKey && e.keyCode == 85) {
          disabledEvent(e);
        }
        // "F12" key
        if (event.keyCode == 123) {
          disabledEvent(e);
        }
      }, false);
      function disabledEvent(e){
        if (e.stopPropagation){
          e.stopPropagation();
        } else if (window.event){
          window.event.cancelBubble = true;
        }
        e.preventDefault();
        return false;
      }
    };
  </script>

</body>
</html>
