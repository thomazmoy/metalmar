<script src="/ckeditor/ckeditor.js"></script>
@csrf
<main class="main-content mt-1 border-radius-lg">
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-lg-10">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Blog</h6>
          </div>
          <div class="table-responsive p-0">
            <div class="card-body">
              <form role="form text-left">
                <div class="mb-3">
                  <label>Título <span class="obrigatorio">&lowast;</span></label>
                  <input type="text" name="titulo" class="form-control" placeholder="Titulo" value="{{ $blogs->titulo ?? old('titulo')}}">
                  @error('titulo')
                    <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label>Url Amigável <span class="obrigatorio">&lowast;</span></label>
                  <input type="text" name="urltitulo" class="form-control" placeholder="Url Amigável" value="{{ $blogs->urltitulo ?? old('urltitulo')}}">
                  <small class="form-text text-muted">Palavras com letras minúsculas, sem acento, sem espaço e separadas por traço (-)</small>
                  @error('urltitulo')
                    <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label>Categoria <span class="obrigatorio">&lowast;</span></label>
                  <select id="id_categoria" name="id_categoria" class="form-select">
                    <option value="{{$blogs->categoria->id ?? ''}}">{{$blogs->categoria->nome ?? ''}} Selecionado</option>
                    @if($categorias ?? '')
                      @foreach($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                      @endforeach
                    @endif
                  </select>
                  @error('id_categoria')
                    <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label>Texto <span class="obrigatorio">&lowast;</span></label>
                  <textarea id="texto" name="texto" value="">{{ $blogs->texto ?? old('texto')}}</textarea>
                  <script>
                    CKEDITOR.replace('texto');
                  </script>
                  @error('texto')
                    <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label>Descrição <span class="obrigatorio">&lowast;</span></label>
                  <input type="text" name="descricao" class="form-control" placeholder="Descrição" value="{{ $blogs->descricao ?? old('descricao')}}">
                  @error('descricao')
                    <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label>Imagem 1 (Capa) <span class="obrigatorio">&lowast;</span></label>
                  <div class="form-group d-grid mt-2">
                    @if($blogs->img ?? '')
                      <img src='{{ url("storage/{$blogs->img}") }}' class="border-radius-lg" width="100px">
                      <small>{{ url("storage/{$blogs->img}") }}</small>
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
                    @if($blogs->img2 ?? '')
                      <img src='{{ url("storage/{$blogs->img2}") }}' class="border-radius-lg" width="100px">
                      <small>{{ url("storage/{$blogs->img2}") }}</small>
                    @endif
                  </div>
                  <input type="file" name="img2" class="form-control" id="img2">
                  <small class="form-text text-muted">jpeg, png, jpg e webp || 1MB || 800x400px</small>
                  @error('img2')
                    <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label>Imagem 3 <span class="obrigatorio">&lowast;</span></label>
                  <div class="form-group d-grid mt-2">
                    @if($blogs->img3 ?? '')
                      <img src='{{ url("storage/{$blogs->img3}") }}' class="border-radius-lg" width="100px">
                      <small>{{ url("storage/{$blogs->img3}") }}</small>
                    @endif
                  </div>
                  <input type="file" name="img3" class="form-control" id="img3">
                  <small class="form-text text-muted">jpeg, png, jpg e webp || 1MB || 800x400px</small>
                  @error('img3')
                    <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label>iframe</label>
                  <input type="text" name="iframe" class="form-control" value="{{ $blogs->iframe ?? old('iframe')}}">
                  @error('iframe')
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
              MS System &copy;{{ date('Y') }} Todos os direitos reservados. | Desenvolvido por <a href="https://moystation.com" target="_blank">Moy Station</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</main>