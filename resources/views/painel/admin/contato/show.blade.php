@extends('painel.admin.template.app')
<title>MS System | Contato</title>
@section('content')
  <main class="main-content mt-1 border-radius-lg">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Painel</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Contato</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Visualizar</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <ul class="navbar-nav ml-auto justify-content-end">
            <li class="nav-item d-flex align-items-center mr-2">
              <a href="#" class="nav-link font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">{{Auth::user()->name}}</span>
              </a>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
                <i class="fa fa-door-open me-sm-1"></i>
                <span class="d-sm-inline d-none">Sair</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-12 mb-lg-0">
          <div class="card">
            <div class="card-header d-inline-flex pb-0 px-3">
              <h6 class="mb-0">Contato</h6>
              <a class="btn bg-gradient-ms ml-auto" href="{{ URL::previous() }}"><i class="fas fa-angle-left"></i>&nbsp;&nbsp;Voltar</a>
            </div>
            <div class="card-body p-4">
              <div class="d-flex flex-column h-100">
                <h5 class="font-weight-bolder">{{$contatos->nome}}</h5>
                <span class="mb-2 text-xs">Email: <b>{{$contatos->email}}</b></span>
                <span class="mb-2 text-xs">Telefone: <b>{{$contatos->telefone}}</b></span>
                <span class="mb-2 text-xs">Assunto: <b>{{$contatos->assunto}}</b></span>
                <span class="mb-2 text-xs">Mensagem: <b>{{$contatos->mensagem}}</b></span>
                <span class="mb-2 text-xs">Situação: <b>{{$contatos->situacao}}</b></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-12 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-left">
                MS System &copy;{{ date('Y') }} Todos os direitos reservados. | Desenvolvido por <a href="https://moystation.com" target="_blank">Moy Station</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
@endsection