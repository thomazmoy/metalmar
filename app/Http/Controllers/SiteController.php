<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreContato;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Categoria;
use App\Models\Contato;
use App\Models\Depoimento;
use App\Models\Galeria;
use App\Models\Privacidade;
use App\Models\Quemsomos;
use App\Models\Siteconfig;
use App\Models\Solucao;

class SiteController extends Controller
{

	public function index()
    {
        $this->data['banner']           = Banner::paginate(10);
        $this->data['blog']             = Blog::latest()->paginate(6);
        $this->data['galeria']          = Galeria::paginate(100);
        $this->data['depoimento']       = Depoimento::paginate(100);
        $this->data['quemsomos']        = Quemsomos::first();
        $this->data['siteconfig']       = Siteconfig::first();
        return view('index', $this->data);
    }

    public function quemsomos()
    {
        $this->data['quemsomos']        = Quemsomos::first();
        $this->data['depoimento']       = Depoimento::paginate(100);
        $this->data['siteconfig']       = Siteconfig::first();
        return view('quemsomos', $this->data);
    }

    public function solucao()
    {
        $this->data['solucao']          = Solucao::paginate(100);
        $this->data['siteconfig']       = Siteconfig::first();
        return view('solucao', $this->data);
    }

    public function ver($urltitulo)
    {
        $this->data['post']             = Solucao::where('urltitulo', $urltitulo)->first();
        $this->data['siteconfig']       = Siteconfig::first();
        return view('post', $this->data);
    }

    public function blog()
    {
        $this->data['blog']             = Blog::latest()->paginate(18);
        $this->data['siteconfig']       = Siteconfig::first();
        return view('blog', $this->data);
    }

    public function ler($urltitulo)
    {
        $this->data['post']             = Blog::where('urltitulo', $urltitulo)->first();
        $this->data['blog']             = Blog::latest()->paginate(10);
        $this->data['siteconfig']       = Siteconfig::first();
        return view('blog-post', $this->data);
    }

    public function pesquisar(Request $request)
    {
        $pesquisar = $request->get('pesquisar');
        $this->data['pesquisar'] = Blog::where( 'titulo', 'like', '%'. $pesquisar .'%')
                                    ->orWhere( 'texto', 'like', '%'. $pesquisar .'%')
                                    ->orWhere( 'descricao', 'like', '%'. $pesquisar .'%')
                                    ->latest()->paginate(20)->appends(['pesquisar' => $pesquisar]);
        $this->data['siteconfig'] = Siteconfig::first();
        return view('pesquisa', $this->data);
    }

    public function contato()
    {
        $this->data['siteconfig']       = Siteconfig::first();
        return view('contato', $this->data);
    }

    public function store(StoreContato $request)
    {
        $data = $request->only('nome', 'email', 'telefone', 'assunto', 'mensagem', 'situacao');
        Contato::create($data);
        Alert::success('Mensagem Enviada com Sucesso!', 'Em breve entraremos em contato.');
        return back();
    }

    public function privacidade()
    {
        $this->data['privacidade']      = Privacidade::paginate();
        $this->data['siteconfig']       = Siteconfig::first();
        return view('privacidade', $this->data);
    }

}