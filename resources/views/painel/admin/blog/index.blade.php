@extends('painel.admin.template.app')
<title>MS System | Blog</title>
@section('content')
  <main class="main-content mt-1 border-radius-lg">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Painel</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Blog</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Principal</h6>
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
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header">
              <h6 class="float-left">Blog</h6>
              <a class="btn bg-gradient-ms mb-0 float-right" href="{{route('blog.create')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Adicionar Novo</a>
              <div class="ms-md-auto pe-md-3 float-right">
                <form action="/procurar" method="get">
                  <div class="input-group">
                    <input type="text" name="procurar" class="form-control" placeholder="Pesquisar" value="{{ Request('procurar')}}">
                    <button class="input-group-text" type="submit"><i class="fas fa-search mr-1"></i></button>
                  </div>
                </form>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Imagem</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Titulo</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Categoria</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ação</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($blogs as $blog)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            @if($blog->img)
                              <img src='{{ url("storage/{$blog->img}") }}' class="avatar avatar-sm me-3">
                            @endif
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$blog->titulo}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$blog->categoria->nome}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{strftime('%d %b %Y', strtotime($blog->created_at))}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <a class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md" href="{{route('blog.show', $blog->id)}}">
                          <i class="fas fa-eye text-lg opacity-10" aria-hidden="true"></i>
                        </a>
                        <a class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md" href="{{route('blog.edit', $blog->id)}}">
                          <i class="fas fa-pencil-alt text-lg opacity-10" aria-hidden="true" ></i>
                        </a>
                        <a type="submit" class=" icon icon-shape bg-gradient-danger shadow text-center border-radius-md" data-bs-toggle="modal" data-bs-target="#delete" data-orcid='{{$blog->id}}'>
                          <i class="far fa-trash-alt text-lg opacity-10" aria-hidden="true"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          {{ $blogs->appends(Request::get('procurar'))->links() }}
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
  <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Remover Item</h5>
        </div>
        <form action="{{route('blog.destroy','blog')}}" method="post">
          {{method_field('delete')}}
          {{csrf_field('')}}
          <div class="modal-body">
            <p class="text-center">Você deseja realmente REMOVER?</p>
            <input type="hidden" name="blog_id" id="orc_id" value="">
          </div>
          <div class="text-center">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Não</button>
            <button type="submit" class="btn bg-gradient-danger">Sim</button>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection