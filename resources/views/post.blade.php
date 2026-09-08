<!DOCTYPE html>
@extends('template.app-post')
@section('metatags')
  @if(!empty($siteconfig->taghead))
    {!!$siteconfig->taghead!!}
  @endif
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @if(!empty($siteconfig->facebookid))
    <meta property="fb:app_id" content="{{$siteconfig->facebookid}}">
  @endif
  <link rel="canonical" href='{{ url("solucoes/{$post->urltitulo}") }}'>
  <meta property="og:url" content='{{ url("solucoes/{$post->urltitulo}") }}'>
  <meta name="twitter:url" content='{{ url("solucoes/{$post->urltitulo}") }}'>
@endsection
@section('metatagsog')
  @include('template.metatags-post')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script>
    function callbackThen(response) {
      response.json().then(function(data) {
        console.log(data);
        if(data.success && data.score > 0.5) {
          console.log('Recaptcha Valida!');
        } else {
          document.getElementById('registerForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('recpatcha error');
          });
        }
      });
    }
    function callbackCatch(error) {
      console.error('Error:', error)
    }
  </script>
  {!! htmlScriptTagJsApi([
    'callback_then' => 'callbackThen',
    'callback_catch' => 'callbackCatch',
  ]) !!}
@endsection
@section('content')

  <!--Breadcrumb -->
  <section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-contact py-5">
      <div class="container text-center py-lg-5 py-md-3">
        <h2>{{ GoogleTranslate::trans(($post->titulo),\App::getLocale()) }}</h2>
      </div>
    </div>
  </section>

  <!-- Post -->
  <div class="w3l-news" id="news">
    <section id="grids5-block" class="py-5">
      <div class="container py-lg-4 py-sm-3">
        <div class="row justify-content-between">
          <div class="col-lg-8 bg-branco rounded box-shadow-1 p-4">
            @if($post->img)
              <img src='{{ url("storage/{$post->img}") }}' class="img-fluid d-block w-100 rounded text-center" alt="{{$post->titulo}}">
            @endif
            <div class="sobre-p text-justify mt-3">
              {!! GoogleTranslate::trans(($post->texto),\App::getLocale()) !!}
            </div>
            <div class="d-grid justify-content-center my-4">
              <h4 class="fw-bold text-center pb-2">{{ GoogleTranslate::trans('Compartilhe',\App::getLocale()) }}</h4>
              <div class="a2a_kit a2a_kit_size_32 a2a_default_style d-flex justify-content-lg-start justify-content-center">
                <a class="a2a_button_facebook"></a>
                <a class="a2a_button_twitter"></a>
                <a class="a2a_button_whatsapp"></a>
                <a class="a2a_button_telegram"></a>
              </div>
              <script>
                var a2a_config = a2a_config || {};
                a2a_config.locale = "pt-BR";
              </script>
              <script async src="https://static.addtoany.com/menu/page.js"></script>
            </div>
          </div>
          <div class="col-lg-4 p-4">
            <div class="blog-info text-center">
              <h3 class="fw-bold pb-3">{{ GoogleTranslate::trans('Solicitar Orçamento!',\App::getLocale()) }}</h3>
              <a href="{{$siteconfig->whatsapp}}" class="btn btn-whatsapp btn-style mb-4" target="_blank"><span class="fa fa-whatsapp fw-bold fs-4 mr-2"></span> {{ GoogleTranslate::trans('WhatsApp',\App::getLocale()) }}</a>
              <a href='tel:{{preg_replace("/[^0-9]/", "", $siteconfig->celular)}}' class="btn btn-primary btn-style mb-4" target="_blank"><span class="fa fa-mobile fw-bold fs-4 mr-2"></span> {{ GoogleTranslate::trans('Celular',\App::getLocale()) }}</a>
            </div>
            <div class="w3l-contact bg-branco text-center box-shadow-1 p-3">
              <h3 class="fw-bold pb-3">{{ GoogleTranslate::trans('Envie Seus Dados',\App::getLocale()) }}</h3>
              <div class="contact-form">
                <form method="POST" action="{{ route('store') }}" id="registerForm">
                  @csrf
                  <input type="text" class="form-control" name="nome" id="nome" placeholder="{{ GoogleTranslate::trans('Nome',\App::getLocale()) }}" required>
                  @error('nome')
                    <label class="fw-bold text-vermelho">{{ $message }}</label>
                  @enderror
                  <br>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                  @error('email')
                    <label class="fw-bold text-vermelho">{{ $message }}</label>
                  @enderror
                  <br>
                  <input type="text" class="form-control" name="telefone" id="telefone" placeholder="{{ GoogleTranslate::trans('Telefone',\App::getLocale()) }}" required>
                  @error('telefone')
                    <label class="fw-bold text-vermelho">{{ $message }}</label>
                  @enderror
                  <br>
                  <input type="hidden" class="form-control" name="assunto" id="assunto" value="{{$post->titulo}}">
                  <textarea class="form-control h-ms-150" name="mensagem" id="mensagem" placeholder="{{ GoogleTranslate::trans('Sua Mensagem',\App::getLocale()) }}" required></textarea>
                  @error('mensagem')
                    <label class="fw-bold text-vermelho">{{ $message }}</label>
                  @enderror
                  <br>
                  <label class="text-justify">{{ GoogleTranslate::trans('Ao clicar na confirmação abaixo, você declara expressamente estar de acordo com a captação dos dados informados na',\App::getLocale()) }} <a href="politica-de-privacidade" target="_blank">{{ GoogleTranslate::trans('POLÍTICA DE PRIVACIDADE',\App::getLocale()) }}</a>{{ GoogleTranslate::trans(', para fins do contato solicitado, nos termos do art. 7º, I, da LGPD.',\App::getLocale()) }}</label>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheckDisabled1" required>
                    <label class="custom-control-label text-justify" for="customCheckDisabled1">{{ GoogleTranslate::trans('Estou de concordo com o armazenamento destes dados para o propósito de contato requerido.',\App::getLocale()) }}</label>
                  </div>
                  <br>
                  <button class="btn btn-primary btn-style" type="submit">{{ GoogleTranslate::trans('Enviar Agora!',\App::getLocale()) }} <span class="fa fa-angle-double-right fw-bold ml-2"></span></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection