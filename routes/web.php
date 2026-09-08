<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\GoogleTranslateController;
use App\Models\Blog;
use App\Models\Solucao;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*  -- Google Translate --  */
Route::get('google/translate',[GoogleTranslateController::class,'googleTranslate'])->name('google.translate');
Route::get('google/translate/change',[GoogleTranslateController::class,'googleTranslateChange'])->name('google.translate.change');

/*  -- Suporte --  */
Route::get ('/limparcache', function () { Artisan::call('optimize:clear'); });
Route::get ('/storagelink', function () { Artisan::call('storage:link'); });

/*  -- Site --  */
// Index
Route::get  ('',
            'SiteController@index')
            ->name('index');
// Quem Somos
Route::get  ('metalmar-manutencao-industrial-e-naval-em-belem-do-para',
            'SiteController@quemsomos')
            ->name('quemsomos');
// Soluções
Route::get  ('solucoes-em-manutencao-industrial-e-naval-em-belem-do-para',
            'SiteController@solucao')
            ->name('solucao');
Route::get  ('solucoes/{urltitulo}',
            'SiteController@ver')
            ->name('ver');
// Blog
Route::get  ('blog-metalmar',
            'SiteController@blog')
            ->name('blog');
Route::get  ('blog/{urltitulo}',
            'SiteController@ler')
            ->name('ler');
Route::get  ('pesquisar',
            'SiteController@pesquisar')
            ->name('pesquisar');
// Contato
Route::get  ('contato-metalmar-manutencao-industrial-e-naval-em-belem-do-para',
            'SiteController@contato')
            ->name('contato');
Route::post ('store',
            'SiteController@store')
            ->name('store');
// Política de Privacidade
Route::get  ('politica-de-privacidade',
            'SiteController@privacidade')
            ->name('privacidade');

/*  -- Sitemap --  */
Route::get ('gerar-sitemap', function () {
  $sitemap = App::make("sitemap");
  $sitemap->add(URL::to (''),
                        '2023-01-01T10:10:00+01:00', '1.0', 'weekly');
  $sitemap->add(URL::to ('metalmar-manutencao-industrial-e-naval-em-belem-do-para'),
                        '2023-01-01T10:10:00+01:00', '0.8', 'monthly');
  $sitemap->add(URL::to ('solucoes-em-manutencao-industrial-e-naval-em-belem-do-para'),
                        '2023-01-01T10:10:00+01:00', '0.8', 'monthly');
  $sitemap->add(URL::to ('blog-metalmar'),
                        '2023-01-01T10:10:00+01:00', '1.0', 'weekly');
  $sitemap->add(URL::to ('contato-metalmar-manutencao-industrial-e-naval-em-belem-do-para'),
                        '2023-01-01T10:10:00+01:00', '0.8', 'monthly');
  $sitemap->add(URL::to ('politica-de-privacidade'),
                        '2023-01-01T10:10:00+01:00', '0.8', 'monthly');
  $solucoes = Solucao::all();
  foreach ($solucoes as $solucao) {
    $sitemap->add(URL::to('solucoes/'.$solucao->urltitulo), $solucao->updated_at, '1.0', 'weekly');
  }
  $blogs = Blog::all();
  foreach ($blogs as $blog) {
  	$sitemap->add(URL::to('blog/'.$blog->urltitulo), $blog->updated_at, '1.0', 'weekly');
  }
  $sitemap->store('xml', 'sitemap');
  return redirect(url('sitemap.xml'));
});

/*  -- Painel --  */
//  Banner
Route::resource ('admin/banner',          'BannerController')           ->middleware('auth');
//  Quem Somos
Route::resource ('admin/quemsomos',       'QuemsomosController')        ->middleware('auth');
//  Soluções
Route::resource ('admin/solucao',         'SolucaoController')          ->middleware('auth');
//  Categoria do Blog
Route::resource ('admin/categoria',       'CategoriaController')        ->middleware('auth');
//  Blog
Route::resource ('admin/blog',            'BlogController')             ->middleware('auth');
//  Depoimento
Route::resource ('admin/depoimento',      'DepoimentoController')       ->middleware('auth');
//  Galeria
Route::resource ('admin/galeria',         'GaleriaController')          ->middleware('auth');
//  Contato
Route::resource ('admin/contato',         'ContatoController')          ->middleware('auth');
//  Privacidade
Route::resource ('admin/privacidade',     'PrivacidadeController')      ->middleware('auth');
//  Configuração do Site
Route::resource ('admin/siteconfig',      'SiteconfigController')       ->middleware('auth');

/*  -- Auth --  */
Auth::routes();
Route::get ('admin',					'DashboardController@index')					->name('dashboard');
Route::get ('procurar',       'BlogController@procurar')						->name('procurar');
Route::get ('search',         'ContatoController@search')           ->name('search');
Route::get ('pesquisa',       'SolucaoController@pesquisa')         ->name('pesquisa');
Route::get ('exportar',       'ContatoController@exportar')         ->name('exportar');