<div class="js-cookie-consent cookie-consent py-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <span class="cookie-consent__message">
                    {{ GoogleTranslate::trans('Ao clicar em "Continuar", concorda com o armazenamento de cookies no seu dispositivo para melhorar a navegação no site, analisar a utilização do site e ajudar nas nossas iniciativas de marketing conforme nossa',\App::getLocale()) }}
                    <a class="d-inline-block ml-1" href='{{ url("politica-de-privacidade") }}'>{{ GoogleTranslate::trans('Política de Privacidade.',\App::getLocale()) }}</a>
                </span>
                <button class="js-cookie-consent-agree cookie-consent__agree btn btn-primary btn-style py-2">
                    {{ GoogleTranslate::trans('Continuar',\App::getLocale()) }}
                </button>
            </div>
        </div>
    </div>
</div>
