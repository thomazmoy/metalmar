@extends('painel.admin.template.app')
<title>MS System | Configurações do Site</title>
@section('content')
  <main class="main-content mt-1 border-radius-lg">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Painel</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Configurações do Site</li>
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
              <h6 class="mb-0">Configurações do Site</h6>
              <a class="btn bg-gradient-ms ml-auto" href="{{ URL::previous() }}"><i class="fas fa-angle-left"></i>&nbsp;&nbsp;Voltar</a>
            </div>
            <div class="card-body p-4">
              <div class="d-flex flex-column h-100">
                <div class="border border-radius-lg p-md-4 p-2 mb-3">
                  <small class="form-text text-muted">Nome do Site</small>
                  <span class="mb-2 text-xs"><b>{{$siteconfigs->nomesite}}</b></span>
                  <small class="form-text text-muted">Descrição</small>
                  <span class="mb-2 text-xs"><b>{{$siteconfigs->descricao}}</b></span>
                  <small class="form-text text-muted">Palavras-Chave</small>
                  <span class="mb-2 text-xs"><b>{{$siteconfigs->palavraschave}}</b></span>
                  <small class="form-text text-muted">Endereço</small>
                  <span class="mb-2 text-xs"><b>{{$siteconfigs->endereco}}</b></span>
                  <small class="form-text text-muted">Email</small>
                  <span class="mb-2 text-xs"><b>{{$siteconfigs->email}}</b></span>
                  <small class="form-text text-muted">Celular</small>
                  <span class="mb-2 text-xs"><b>{{$siteconfigs->celular}}</b></span>
                  @if(!empty($siteconfigs->telefone))
                    <small class="form-text text-muted">Telefone</small>
                    <span class="mb-2 text-xs"><b>{{$siteconfigs->telefone}}</b></span>
                  @endif
                  @if(!empty($siteconfigs->linkendereco))
                    <small class="form-text text-muted">Link do Google Maps</small>
                    <span class="mb-2 text-xs"><b>{{$siteconfigs->linkendereco}}</b></span>
                  @endif
                  @if(!empty($siteconfigs->iframemapa))
                    <div class="row mapa">
                      <div class="col-lg-6">
                        <small class="form-text text-muted">iframe do Google Maps</small>
                        {!!$siteconfigs->iframemapa!!}
                      </div>
                    </div>
                  @endif
                  @if(!empty($siteconfigs->facebook))
                    <small class="form-text text-muted">Facebook</small>
                    <span class="mb-2 text-xs"><b>{{$siteconfigs->facebook}}</b></span>
                  @endif
                  @if(!empty($siteconfigs->instagram))
                    <small class="form-text text-muted">Instagram</small>
                    <span class="mb-2 text-xs"><b>{{$siteconfigs->instagram}}</b></span>
                  @endif
                  @if(!empty($siteconfigs->whatsapp))
                    <small class="form-text text-muted">Whatsapp</small>
                    <span class="mb-2 text-xs"><b>{{$siteconfigs->whatsapp}}</b></span>
                  @endif
                  @if(!empty($siteconfigs->twitter))
                    <small class="form-text text-muted">Twitter</small>
                    <span class="mb-2 text-xs"><b>{{$siteconfigs->twitter}}</b></span>
                  @endif
                  @if(!empty($siteconfigs->linkedin))
                    <small class="form-text text-muted">Linkedin</small>
                    <span class="mb-2 text-xs"><b>{{$siteconfigs->linkedin}}</b></span>
                  @endif
                  @if(!empty($siteconfigs->youtube))
                    <small class="form-text text-muted">YouTube</small>
                    <span class="mb-2 text-xs"><b>{{$siteconfigs->youtube}}</b></span>
                  @endif
                  @if(!empty($siteconfigs->facebookid))
                    <small class="form-text text-muted">Facebook App ID</small>
                    <span class="mb-2 text-xs"><b>{{$siteconfigs->facebookid}}</b></span>
                  @endif
                  @if(!empty($siteconfigs->codchat))
                    <small class="form-text text-muted">Código para Chat(Fim da Tag Body)</small>
                    <span class="mb-2 text-xs"><b>{{$siteconfigs->codchat}}</b></span>
                  @endif
                  @if(!empty($siteconfigs->taghead))
                    <small class="form-text text-muted">Código para Tag HEAD</small>
                    <span class="mb-2 text-xs"><b>{{$siteconfigs->taghead}}</b></span>
                  @endif
                  <small class="form-text text-muted">Favicon</small>
                  @if($siteconfigs->favicon)
                    <img src='{{ url("storage/{$siteconfigs->favicon}") }}' class="border-radius-lg bg-light p-2" width="50px">
                  @endif
                  <small class="form-text text-muted">Logo Clara</small>
                  @if($siteconfigs->logobranca)
                    <img src='{{ url("storage/{$siteconfigs->logobranca}") }}' class="border-radius-lg bg-escuro p-2" width="250px">
                  @endif
                  <small class="form-text text-muted">Logo Escura</small>
                  @if($siteconfigs->logoescura)
                    <img src='{{ url("storage/{$siteconfigs->logoescura}") }}' class="border-radius-lg bg-light p-2" width="250px">
                  @endif
                </div>
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