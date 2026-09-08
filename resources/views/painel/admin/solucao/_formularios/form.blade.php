<script src="/ckeditor/ckeditor.js"></script>
@csrf
<main class="main-content mt-1 border-radius-lg">
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Solução</h6>
          </div>
          <div class="table-responsive p-0">
            <div class="card-body">
              <form role="form text-left">
                <div class="mb-3">
                  <label>Titulo <span class="obrigatorio">&lowast;</span></label>
                  <input type="text" name="titulo" class="form-control" value="{{ $solucoes->titulo ?? old('titulo')}}">
                  @error('titulo')
                    <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label>Url Amigável <span class="obrigatorio">&lowast;</span></label>
                  <input type="text" name="urltitulo" class="form-control" placeholder="Url Amigável" value="{{ $solucoes->urltitulo ?? old('urltitulo')}}">
                  <small class="form-text text-muted">Palavras com letras minúsculas, sem acento, sem espaço e separadas por traço (-)</small>
                  @error('urltitulo')
                    <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label>Texto <span class="obrigatorio">&lowast;</span></label>
                  <textarea id="texto" name="texto" value="">{{ $solucoes->texto ?? old('texto')}}</textarea>
                  <script>
                    CKEDITOR.replace('texto');
                  </script>
                  @error('texto')
                    <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label>Descrição <span class="obrigatorio">&lowast;</span></label>
                  <textarea id="descricao" name="descricao" class="form-control" value="">{{ $solucoes->descricao ?? old('descricao')}}</textarea>
                  @error('descricao')
                    <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                  @enderror
                </div>
                @if($solucoes->id ?? '')
                  @if($solucoes->id <= '3')
                    <div class="mb-3">
                      <label>Descrição da Seção <span class="obrigatorio">&lowast;</span></label>
                      <textarea id="descricaodois" name="descricaodois" value="">{{ $solucoes->descricaodois ?? old('descricaodois')}}</textarea>
                      <script>
                        CKEDITOR.replace('descricaodois');
                      </script>
                      @error('descricaodois')
                        <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                      @enderror
                    </div>
                  @endif
                @endif
                <div class="mb-3">
                  <label>Imagem 1 (Capa) <span class="obrigatorio">&lowast;</span></label>
                  <div class="form-group d-grid mt-2">
                    @if($solucoes->img ?? '')
                      <img src='{{ url("storage/{$solucoes->img}") }}' class="border-radius-lg" width="100px">
                      <small>{{ url("storage/{$solucoes->img}") }}</small>
                    @endif
                  </div>
                  <input type="file" name="img" class="form-control" id="img">
                  <small class="form-text text-muted">jpeg, png, jpg e webp || 1MB || 800x600px</small>
                  @error('img')
                    <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label>Imagem 2 <span class="obrigatorio">&lowast;</span></label>
                  <div class="form-group d-grid mt-2">
                    @if($solucoes->img2 ?? '')
                      <img src='{{ url("storage/{$solucoes->img2}") }}' class="border-radius-lg" width="100px">
                      <small>{{ url("storage/{$solucoes->img2}") }}</small>
                    @endif
                  </div>
                  <input type="file" name="img2" class="form-control" id="img2">
                  <small class="form-text text-muted">jpeg, png, jpg e webp || 1MB || 800x600px</small>
                  @error('img2')
                    <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label>Imagem 3 <span class="obrigatorio">&lowast;</span></label>
                  <div class="form-group d-grid mt-2">
                    @if($solucoes->img3 ?? '')
                      <img src='{{ url("storage/{$solucoes->img3}") }}' class="border-radius-lg" width="100px">
                      <small>{{ url("storage/{$solucoes->img3}") }}</small>
                    @endif
                  </div>
                  <input type="file" name="img3" class="form-control" id="img3">
                  <small class="form-text text-muted">jpeg, png, jpg e webp || 1MB || 800x600px</small>
                  @error('img3')
                    <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label>Status <span class="obrigatorio">&lowast;</span></label>
                  <select id="situacao" name="situacao" class="form-select">
                    <option value="1">On</option>
                    <option value="0">Off</option>
                  </select>
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