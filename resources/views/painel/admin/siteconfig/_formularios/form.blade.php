@csrf
<main class="main-content mt-1 border-radius-lg">
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-lg-10">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Configurações do Site</h6>
          </div>
          <div class="table-responsive p-0">
            <div class="card-body">
              <form role="form text-left">
                <div class="border border-radius-lg p-md-4 p-2 mb-3">
                  <div class="mb-3">
                    <label>Nome do Site <span class="obrigatorio">&lowast;</span></label>
                    <input type="text" name="nomesite" class="form-control" value="{{ $siteconfigs->nomesite ?? old('nomesite')}}">
                    @error('nomesite')
                      <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label>Descrição <span class="obrigatorio">&lowast;</span></label>
                    <input type="text" name="descricao" class="form-control" value="{{ $siteconfigs->descricao ?? old('descricao')}}">
                    @error('descricao')
                      <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label>Palavras-Chave (250 caracteres) <span class="obrigatorio">&lowast;</span></label>
                    <textarea onkeyup="limite_textarea(this.value)" id="palavraschave" name="palavraschave" class="form-control" value="">{{ $siteconfigs->palavraschave ?? old('palavraschave')}}</textarea>
                    <small><span id="cont">250</span> restantes</small>
                    @error('palavraschave')
                      <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label>Endereço <span class="obrigatorio">&lowast;</span></label>
                    <input type="text" name="endereco" class="form-control" value="{{ $siteconfigs->endereco ?? old('endereco')}}">
                    @error('endereco')
                      <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label>Email <span class="obrigatorio">&lowast;</span></label>
                        <input type="email" name="email" class="form-control" value="{{ $siteconfigs->email ?? old('email')}}">
                        @error('email')
                          <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label>Celular <span class="obrigatorio">&lowast;</span></label>
                        <input type="text" name="celular" class="form-control" value="{{ $siteconfigs->celular ?? old('celular')}}">
                        @error('celular')
                          <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label>Telefone Fixo ou Celular 2</label>
                        <input type="text" name="telefone" class="form-control" value="{{ $siteconfigs->telefone ?? old('telefone')}}">
                        @error('telefone')
                          <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label>Link do Google Maps</label>
                        <input type="text" name="linkendereco" class="form-control" value="{{ $siteconfigs->linkendereco ?? old('linkendereco')}}">
                        @error('linkendereco')
                          <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label>iframe do Google Maps</label>
                        <textarea id="iframemapa" name="iframemapa" class="form-control" value="">{{ $siteconfigs->iframemapa ?? old('iframemapa')}}</textarea>
                        @error('iframemapa')
                          <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label>ID Facebook App</label>
                        <input type="text" name="facebookid" class="form-control" value="{{ $siteconfigs->facebookid ?? old('facebookid')}}">
                        @error('facebookid')
                          <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label>Facebook</label>
                        <input type="text" name="facebook" class="form-control" value="{{ $siteconfigs->facebook ?? old('facebook')}}">
                        @error('facebook')
                          <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label>Instagram</label>
                        <input type="text" name="instagram" class="form-control" value="{{ $siteconfigs->instagram ?? old('instagram')}}">
                        @error('instagram')
                          <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label>Whatsapp</label>
                        <input type="text" name="whatsapp" class="form-control" value="{{ $siteconfigs->whatsapp ?? old('whatsapp')}}">
                        @error('whatsapp')
                          <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label>Twitter</label>
                        <input type="text" name="twitter" class="form-control" value="{{ $siteconfigs->twitter ?? old('twitter')}}">
                        @error('twitter')
                          <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label>Linkedin</label>
                        <input type="text" name="linkedin" class="form-control" value="{{ $siteconfigs->linkedin ?? old('linkedin')}}">
                        @error('linkedin')
                          <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label>YouTube</label>
                        <input type="text" name="youtube" class="form-control" value="{{ $siteconfigs->youtube ?? old('youtube')}}">
                        @error('youtube')
                          <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label>Código para Tag HEAD</label>
                        <textarea id="taghead" name="taghead" class="form-control" value="">{{ $siteconfigs->taghead ?? old('taghead')}}</textarea>
                        @error('taghead')
                          <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label>Código para chat externo</label>
                        <textarea id="codchat" name="codchat" class="form-control" value="">{{ $siteconfigs->codchat ?? old('codchat')}}</textarea>
                        @error('codchat')
                          <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label>Logo Branca <span class="obrigatorio">&lowast;</span></label>
                        <div class="form-group">
                          @if($siteconfigs->logobranca ?? '')
                          <img src='{{ url("storage/{$siteconfigs->logobranca}") }}' class="border-radius-lg bg-escuro p-2" width="200px">
                          @endif
                        </div>
                        <input type="file" name="logobranca" class="form-control" id="logobranca">
                        <small class="form-text text-muted">jpeg, png, jpg e webp || 512KB || 500x500px</small>
                        @error('logobranca')
                          <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="mb-3">
                      <label>Logo Escura<span class="obrigatorio">&lowast;</span></label>
                      <div class="form-group">
                        @if($siteconfigs->logoescura ?? '')
                        <img src='{{ url("storage/{$siteconfigs->logoescura}") }}' class="border-radius-lg bg-light p-2" width="200px">
                        @endif
                      </div>
                      <input type="file" name="logoescura" class="form-control" id="logoescura">
                      <small class="form-text text-muted">jpeg, png, jpg e webp || 512KB || 500x500px</small>
                      @error('logoescura')
                        <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label>Favicon <span class="obrigatorio">&lowast;</span></label>
                        <div class="form-group">
                          @if($siteconfigs->favicon ?? '')
                          <img src='{{ url("storage/{$siteconfigs->favicon}") }}' class="border-radius-lg bg-light p-2" width="50px">
                          @endif
                        </div>
                        <input type="file" name="favicon" class="form-control" id="favicon">
                        <small class="form-text text-muted">jpeg, png, jpg e webp || 256KB || 100x100px</small>
                        @error('favicon')
                          <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                        @enderror
                      </div>
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
              MS System &copy;{{ date('Y') }} Todos os direitos reservados. | Desenvolvido por <a href="https://moystation.com" target="_blank">Moy Station</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</main>
<script>
  function limite_textarea(valor) {
    quant = 250;
    total = valor.length;
    if(total <= quant) {
      resto = quant - total;
      document.getElementById('cont').innerHTML = resto;
    } else {
      document.getElementById('palavraschave').value = valor.substr(0,quant);
    }
  }
</script>