<script src="/ckeditor/ckeditor.js"></script>
@csrf
<main class="main-content mt-1 border-radius-lg">
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Que Somos</h6>
          </div>
          <div class="table-responsive p-0">
            <div class="card-body">
              <form role="form text-left">
                <div class="row border border-radius-lg p-md-4 p-2 mb-3">
                  <h5 class="font-weight-bolder">1</h5>
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Seção da 1ª Página em baixo do Banner</h6>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label>Título <span class="obrigatorio">&lowast;</span></label>
                      <input type="text" name="tituloum" class="form-control" placeholder="Titulo" value="{{ $quemsomos->tituloum ?? old('tituloum')}}">
                      @error('tituloum')
                        <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label>Texto <span class="obrigatorio">&lowast;</span></label>
                      <textarea id="textoum" name="textoum" value="">{{ $quemsomos->textoum ?? old('textoum')}}</textarea>
                      <script>
                        CKEDITOR.replace('textoum');
                      </script>
                      @error('textoum')
                        <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label>Imagem <span class="obrigatorio">&lowast;</span></label>
                      <div class="form-group mt-2">
                        @if($quemsomos->imgum ?? '')
                        <img src='{{ url("storage/{$quemsomos->imgum}") }}' class="border-radius-lg" width="100px">
                        @endif
                      </div>
                      <input type="file" name="imgum" class="form-control" id="imgum">
                      @error('imgum')
                        <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                      @enderror
                      <small class="form-text text-muted">jpeg, png, jpg e webp || 1MB || 800X800px</small>
                    </div>
                  </div>
                </div>
                <div class="row border border-radius-lg p-md-4 p-2 mb-3">
                  <h5 class="font-weight-bolder">2</h5>
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">2ª Seção da 1ª Página em baixo do Banner</h6>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label>Imagem <span class="obrigatorio">&lowast;</span></label>
                      <div class="form-group mt-2">
                        @if($quemsomos->imgdois ?? '')
                        <img src='{{ url("storage/{$quemsomos->imgdois}") }}' class="border-radius-lg" width="100px">
                        @endif
                      </div>
                      <input type="file" name="imgdois" class="form-control" id="imgdois">
                      @error('imgdois')
                        <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                      @enderror
                      <small class="form-text text-muted">jpeg, png, jpg e webp || 1MB || 800X800px</small>
                    </div>
                  </div>
                </div>
                <div class="row border border-radius-lg p-md-4 p-2 mb-3">
                  <h5 class="font-weight-bolder">3</h5>
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">1ª Seção da Página Quem Somos</h6>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label>Título <span class="obrigatorio">&lowast;</span></label>
                      <input type="text" name="titulodois" class="form-control" placeholder="Titulo" value="{{ $quemsomos->titulodois ?? old('titulodois')}}">
                      @error('titulodois')
                        <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label>Texto <span class="obrigatorio">&lowast;</span></label>
                      <textarea id="textodois" name="textodois" value="">{{ $quemsomos->textodois ?? old('textodois')}}</textarea>
                      <script>
                        CKEDITOR.replace('textodois');
                      </script>
                      @error('textodois')
                        <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label>Imagem <span class="obrigatorio">&lowast;</span></label>
                      <div class="form-group mt-2">
                        @if($quemsomos->imgtres ?? '')
                        <img src='{{ url("storage/{$quemsomos->imgtres}") }}' class="border-radius-lg" width="100px">
                        @endif
                      </div>
                      <input type="file" name="imgtres" class="form-control" id="imgtres">
                      @error('imgtres')
                        <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                      @enderror
                      <small class="form-text text-muted">jpeg, png, jpg e webp || 1MB || 800X800px</small>
                    </div>
                  </div>
                </div>
                <div class="row border border-radius-lg p-md-4 p-2 mb-3">
                  <h5 class="font-weight-bolder">4</h5>
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">2ª Seção da Página Quem Somos</h6>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label>Título <span class="obrigatorio">&lowast;</span></label>
                      <input type="text" name="titulotres" class="form-control" placeholder="Titulo" value="{{ $quemsomos->titulotres ?? old('titulotres')}}">
                      @error('titulotres')
                        <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label>Texto <span class="obrigatorio">&lowast;</span></label>
                      <textarea id="textotres" name="textotres" value="">{{ $quemsomos->textotres ?? old('textotres')}}</textarea>
                      <script>
                        CKEDITOR.replace('textotres');
                      </script>
                      @error('textotres')
                        <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label>iframe do Vídeo</label>
                      <input type="text" name="iframevideo" class="form-control" placeholder="iframe do Vídeo" value="{{ $quemsomos->iframevideo ?? old('iframevideo')}}">
                      @error('iframevideo')
                        <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
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