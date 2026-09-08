<!DOCTYPE html>
@extends('template.app')
@section('metatags')
  @if(!empty($siteconfig->taghead))
    {!!$siteconfig->taghead!!}
  @endif
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Contato | {{$siteconfig->nomesite}}</title>
  <link rel="canonical" href='{{ url("contato-metalmar-manutencao-industrial-e-naval-em-belem-do-para") }}'>
  <meta property="og:url" content='{{ url("contato-metalmar-manutencao-industrial-e-naval-em-belem-do-para") }}'>
  <meta property="og:title" content="Contato | {{$siteconfig->nomesite}}">
  <meta property="og:image:alt" content="Contato | {{$siteconfig->nomesite}}">
  <meta name="twitter:url" content='{{ url("contato-metalmar-manutencao-industrial-e-naval-em-belem-do-para") }}'>
  <meta name="twitter:title" content="Contato | {{$siteconfig->nomesite}}">
@endsection
@section('metatagsog')
  @include('template.metatags')
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
        <h2>{{ GoogleTranslate::trans('Contato',\App::getLocale()) }}</h2>
      </div>
    </div>
  </section>

  <!-- Contatos -->
  <section class="w3l-contact py-5" id="contact">
    <div class="container py-lg-3">
      <div class="row justify-content-center pb-5">
        <div class="col-lg-6 col-md-8 mt-md-0 mt-5 w3-contact-address">
          <h3 class="title mb-4">{{ GoogleTranslate::trans('Fale Conosco!',\App::getLocale()) }}</h3>
          <b class="text-verde">{{ GoogleTranslate::trans('Endereço:',\App::getLocale()) }}</b>
          <p><a href="{{$siteconfig->linkendereco}}">{{ GoogleTranslate::trans(($siteconfig->endereco),\App::getLocale()) }}</a></p>
          <hr>
          <b class="text-verde">{{ GoogleTranslate::trans('Celular:',\App::getLocale()) }}</b>
          <p><a href='tel:{{preg_replace("/[^0-9]/", "", $siteconfig->celular)}}'>{{$siteconfig->celular}}</a></p>
          <b class="text-verde">{{ GoogleTranslate::trans('Telefone:',\App::getLocale()) }}</b>
          <p><a href='tel:{{preg_replace("/[^0-9]/", "", $siteconfig->telefone)}}'>{{$siteconfig->telefone}}</a></p>
          <hr>
          <b class="text-verde">Email:</b>
          <p><a href="mailto:{{$siteconfig->email}}">{{$siteconfig->email}}</a></p>
          <hr>
          <div class="widget-social-icons mt-3">
            <b class="text-verde mb-3">{{ GoogleTranslate::trans('Redes Sociais:',\App::getLocale()) }}</b>
            <ul class="icon-rounded">
              @if(!empty($siteconfig->facebook))
                <li><a class="social-link text-white facebook" href="{{$siteconfig->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
              @endif
              @if(!empty($siteconfig->instagram))
                <li><a class="social-link text-white instagram" href="{{$siteconfig->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
              @endif
              @if(!empty($siteconfig->whatsapp))
                <li><a class="social-link text-white whatsapp" href="{{$siteconfig->whatsapp}}" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
              @endif
              @if(!empty($siteconfig->twitter))
                <li><a class="social-link text-white twitter" href="{{$siteconfig->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
              @endif
              @if(!empty($siteconfig->linkedin))
                <li><a class="social-link text-white linkedin" href="{{$siteconfig->linkedin}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              @endif
              @if(!empty($siteconfig->youtube))
                <li><a class="social-link text-white youtube" href="{{$siteconfig->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a></li>
              @endif
            </ul>
          </div>
        </div>
        <div class="col-md-6 contact-form">
          <h3 class="title mb-4">{{ GoogleTranslate::trans('Envie Sua Mensagem',\App::getLocale()) }}</h3>
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
            <input type="text" class="form-control" name="assunto" id="assunto" placeholder="{{ GoogleTranslate::trans('Assunto',\App::getLocale()) }}" required>
            @error('assunto')
              <label class="fw-bold text-vermelho">{{ $message }}</label>
            @enderror
            <br>
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
  </section>

  <div class="map">
    {!!$siteconfig->iframemapa!!}
  </div>

@endsection