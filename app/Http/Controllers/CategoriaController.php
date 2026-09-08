<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoria;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Categoria;
use App\Models\Siteconfig;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['categorias'] = Categoria::paginate(20);
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.categoria.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.categoria.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoria $request)
    {
        $data = $request->only('nome');
        Categoria::create($data);
        Alert::toast('Categoria Cadastrada com Sucesso!', 'success');
        return redirect()->route('categoria.index');
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
        if(!$categorias = $categorias = Categoria::find($id))
            return redirect()->back();
        return view('painel.admin.categoria.show', [
            'categorias' => $categorias,
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
        $configuracao = Siteconfig::all();
        if(!$categorias = $categorias = Categoria::find($id))
            return redirect()->back();
        return view('painel.admin.categoria.edit', compact('categorias'))->with('configuracao', $configuracao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoria $request, $id)
    {
        if(!$categorias = $categorias = Categoria::find($id))
            return redirect()->back();
        $data = $request->all();
        $categorias->update($data);
        Alert::toast('Categoria Atualizada com Sucesso!', 'success');
        return redirect()->route('categoria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $categorias = Categoria::findOrFail($request->categoria_id);
        $categorias->delete();
        Alert::toast('Categoria Deletada com Sucesso!', 'success');
        return redirect()->route('categoria.index');
    }
}
