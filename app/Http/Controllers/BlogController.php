<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Blog;
use App\Models\Categoria;
use App\Models\Siteconfig;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['blogs'] = Blog::latest()->paginate(20);
        $this->data['cat'] = Categoria::all();
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.blog.index', $this->data);
    }

    public function procurar(Request $request)
    {
        $procurar = $request->get('procurar');
        $this->data['procurar'] = Blog::where( 'titulo', 'like', '%'. $procurar .'%')
                                    ->orWhere( 'texto', 'like', '%'. $procurar .'%')
                                    ->orWhere( 'descricao', 'like', '%'. $procurar .'%')
                                    ->latest()->paginate(20)->appends(['procurar' => $procurar]);
        $this->data['cat'] = Categoria::all();
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.blog.pesquisa', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configuracao = Siteconfig::all();
        $categorias = Categoria::all();
        return view('painel.admin.blog.create', compact('categorias'))->with('configuracao', $configuracao);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlog $request)
    {
        $data = $request->only('titulo', 'urltitulo', 'texto', 'descricao', 'iframe', 'id_categoria');
        if ($request->hasFile('img') && $request->img->isValid()) {
            $imgPath = $request->img->store('uploads/blog');
            $data['img'] = $imgPath;
        }
        if ($request->hasFile('img2') && $request->img2->isValid()) {
            $img2Path = $request->img2->store('uploads/blog');
            $data['img2'] = $img2Path;
        }
        if ($request->hasFile('img3') && $request->img3->isValid()) {
            $img3Path = $request->img3->store('uploads/blog');
            $data['img3'] = $img3Path;
        }
        Blog::create($data);
        Alert::toast('Post Cadastrado com Sucesso!', 'success');
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configuracao = Siteconfig::all();
        if(!$blogs = $blogs = Blog::find($id))
            return redirect()->back();
        return view('painel.admin.blog.show', [
            'blogs' => $blogs,
            'configuracao' => $configuracao
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = Blog::find($id);
        $categorias = Categoria::all();
        $configuracao = Siteconfig::all();
        return view('painel.admin.blog.edit')
                        ->with('blogs', $blogs)
                        ->with('configuracao', $configuracao)
                        ->with('categorias', Categoria::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBlog $request, $id)
    {
        if(!$blogs = $blogs = Blog::find($id))
            return redirect()->back();
        $data = $request->all();
        if ($request->hasFile('img') && $request->img->isValid()) {
            if ($blogs->img && Storage::exists($blogs->img)) {
                Storage::delete($blogs->img);
            }
            $imgPath = $request->img->store('uploads/blog');
            $data['img'] = $imgPath;
        }
        if ($request->hasFile('img2') && $request->img2->isValid()) {
            if ($blogs->img2 && Storage::exists($blogs->img2)) {
                Storage::delete($blogs->img2);
            }
            $img2Path = $request->img2->store('uploads/blog');
            $data['img2'] = $img2Path;
        }
        if ($request->hasFile('img3') && $request->img3->isValid()) {
            if ($blogs->img3 && Storage::exists($blogs->img3)) {
                Storage::delete($blogs->img3);
            }
            $img3Path = $request->img3->store('uploads/blog');
            $data['img3'] = $img3Path;
        }
        $blogs->update($data);
        Alert::toast('Post Atualizado!', 'warning');
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $blogs = Blog::findOrFail($request->blog_id);
        if ($blogs->img && Storage::exists($blogs->img)) {
            Storage::delete($blogs->img);
        }
        if ($blogs->img2 && Storage::exists($blogs->img2)) {
            Storage::delete($blogs->img2);
        }
        if ($blogs->img3 && Storage::exists($blogs->img3)) {
            Storage::delete($blogs->img3);
        }
        $blogs->delete();
        Alert::toast('Post Deletado!', 'warning');
        return redirect()->route('blog.index');
    }

}