@extends('auth.template.app')
<title>MS System | Login</title>

@section('content')
<body class="g-sidenav-show   bg-white">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="/login">
              <img src="/painel//assets/img/mssystem2.png" class="navbar-brand-img w-100">
            </a>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="https://wa.me/559181500579" class="btn btn-round mb-0 me-1 bg-gradient-ms"><i class="fab fa-whatsapp me-1"></i> Suporte</a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <section>
    <div class="page-header section-height-75">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
            <div class="card card-plain mt-8">
              <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder text-info text-gradient">Seja Bem-vindo</h3>
                <p class="mb-0">Digite seu e-mail e senha para fazer login</p>
              </div>
              <div class="card-body">
                <form action="{{ route('login') }}" method="post">
                  @csrf
                  <label>Email</label>
                    <div class="mb-3">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" aria-label="Email" aria-describedby="email-addon" required autocomplete="email" autofocus>
                    </div>
                    @error('email')
                      <span class="input-group-text" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror   
                  <label>Senha</label>
                    <div class="mb-3">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha" aria-label="Password" aria-describedby="password-addon" required autocomplete="current-password">
                    </div>
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                      {{ __('Lembrar Senha') }}
                    </label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-ms w-100 mt-4 mb-0">
                      {{ __('Entrar') }}
                    </button>
                    @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}"></a>
                    @endif
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
              <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('/painel/assets/img/curved-images/login.jpg')"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer py-4">
    <div class="container">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-left">
            MS System &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Desenvolvido por <a href="https://moystation.com" target="_blank">Moy Station</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
@endsection