@csrf
<main class="main-content mt-1 border-radius-lg">
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Galeria</h6>
          </div>
          <div class="table-responsive p-0">
            <div class="card-body">
              <form role="form text-left">
                <div class="mb-3">
                  <label>Título <span class="obrigatorio">&lowast;</span></label>
                  <input type="text" name="titulo" class="form-control" value="{{ $galerias->titulo ?? old('titulo')}}">
                  @error('titulo')
                    <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label>Descrição <span class="obrigatorio">&lowast;</span></label>
                  <textarea id="descricao" name="descricao" class="form-control" value="">{{ $galerias->descricao ?? old('descricao')}}</textarea>
                  @error('descricao')
                    <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label>Imagem <span class="obrigatorio">&lowast;</span></label>
                  <div class="d-block py-2">
                    @if($galerias->img ?? '')
                      <img src='{{ url("storage/{$galerias->img}") }}' class="border-radius-lg" width="100px">
                    @endif
                  </div>
                  <input type="file" name="img" class="form-control" id="img">
                  <small class="form-text text-muted">jpeg, png, jpg e webp || 1MB || 800x600px</small>
                  @error('img')
                    <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                  @enderror
                </div>
                <div class="box-footer mt-4">
                  <button type="submit" class="btn bg-gradient-primary"><i class="fas fa-angle-right"></i>&nbsp;&nbsp;Enviar</button>
                  <a class="btn bg-gradient-danger ml-3" href="{{ URL::previous() }}"><i class="fas fa-times"></i>&nbsp;&nbsp;Cancelar</a>
                </div>
                <div class="mb-3">
                  <small><span class="obrigatorio">&lowast;</span> Campo obrigatório</small>
                </div>
              </form>
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
              MS System &copy;{{ date('Y') }} Todos os direitos reservados | Desenvolvido por <a href="https://moystation.com" target="_blank">Moy Station</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</main>