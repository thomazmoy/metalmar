<script src="/ckeditor/ckeditor.js"></script>
@csrf
<main class="main-content mt-1 border-radius-lg">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Contatos</h6>
            </div>
            <div class="table-responsive p-0">
              <div class="card-body">
	              <form role="form text-left">
	                <div class="mb-3">
                    <label>Nome <span class="obrigatorio">&lowast;</span></label>
	                  <input type="text" name="nome" class="form-control" value="{{ $contatos->nome ?? old('nome')}}">
                    @error('nome')
                      <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                    @enderror
	                </div>
                  <div class="mb-3">
                    <label>Email <span class="obrigatorio">&lowast;</span></label>
                    <input type="email" name="email" class="form-control" value="{{ $contatos->email ?? old('email')}}">
                    @error('email')
                      <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label>Telefone <span class="obrigatorio">&lowast;</span></label>
                    <input type="text" name="telefone" class="form-control" value="{{ $contatos->telefone ?? old('telefone')}}">
                    @error('telefone')
                      <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label>Assunto <span class="obrigatorio">&lowast;</span></label>
                    <input type="text" name="assunto" class="form-control" value="{{ $contatos->assunto ?? old('assunto')}}">
                    @error('assunto')
                      <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label>Mensagem <span class="obrigatorio">&lowast;</span></label>
                    <textarea id="mensagem" name="mensagem" class="form-control" value="{{ $contatos->mensagem ?? old('mensagem')}}">{{ $contatos->mensagem ?? old('mensagem')}}</textarea>
                    @error('mensagem')
                      <span class="badge badge-sm mt-1 bg-gradient-warning">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label>Situação</label>
                    <select id="situacao" name="situacao" class="form-select">
                      <option value="{{$contatos->situacao ?? ''}}" selected>{{$contatos->situacao ?? ''}} Selecionado</option>
                      <option value="Recebido">Recebido</option>
                      <option value="Em Atendimento">Em Atendimento</option>
                      <option value="Finalizado">Finalizado</option>
                      <option value="Cancelado">Cancelado</option>
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
                MS System &copy;{{ date('Y') }} Todos os direitos reservados. | Desenvolvido por <a href="https://moystation.com" target="_blank">Moy Station</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
</main>