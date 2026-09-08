<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGaleria;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Galeria;
use App\Models\Siteconfig;
use Illuminate\Support\Facades\Storage;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['galerias'] = Galeria::latest()->paginate(10);
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.galeria.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.galeria.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGaleria $request)
    {
        $data = $request->only('titulo', 'descricao');
        if ($request->hasFile('img') && $request->img->isValid()) {
            $imgPath = $request->img->store('uploads/galeria');
            $data['img'] = $imgPath;
        }
        Galeria::create($data);
        Alert::toast('Imagem Cadastrada com Sucesso!', 'success');
        return redirect()->route('galeria.index');
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
        if(!$galerias = $galerias = Galeria::find($id))
            return redirect()->back();
        return view('painel.admin.galeria.show', [
            'galerias' => $galerias,
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
        if(!$galerias = $galerias = Galeria::find($id))
            return redirect()->back();
        return view('painel.admin.galeria.edit', compact('galerias'))->with('configuracao', $configuracao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreGaleria $request, $id)
    {
        if(!$galerias = $galerias = Galeria::find($id))
            return redirect()->back();
        $data = $request->all();
        if ($request->hasFile('img') && $request->img->isValid()) {
            if ($galerias->img && Storage::exists($galerias->img)) {
                Storage::delete($galerias->img);
            }
            $imgPath = $request->img->store('uploads/galeria');
            $data['img'] = $imgPath;
        }
        $galerias->update($data);
        Alert::toast('Imagem Atualizada!', 'warning');
        return redirect()->route('galeria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $galerias = Galeria::findOrFail($request->galeria_id);
        if ($galerias->img && Storage::exists($galerias->img)) {
            Storage::delete($galerias->img);
        }
        $galerias->delete();
        Alert::toast('Imagem Deletada!', 'warning');
        return redirect()->route('galeria.index');
    }

}