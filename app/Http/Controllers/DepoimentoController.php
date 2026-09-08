<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepoimento;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Depoimento;
use App\Models\Siteconfig;
use Illuminate\Support\Facades\Storage;

class DepoimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['depoimentos'] = Depoimento::latest()->paginate(20);
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.depoimento.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.depoimento.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDepoimento $request)
    {
        $data = $request->only('nome', 'cargo', 'texto');
        if ($request->hasFile('img') && $request->img->isValid()) {
            $imgPath = $request->img->store('uploads/depoimento');
            $data['img'] = $imgPath;
        }
        Depoimento::create($data);
        Alert::toast('Depoimento Cadastrado com Sucesso!', 'success');
        return redirect()->route('depoimento.index');
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
        if(!$depoimentos = $depoimentos = Depoimento::find($id))
            return redirect()->back();
        return view('painel.admin.depoimento.show', [
            'depoimentos' => $depoimentos,
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
        if(!$depoimentos = $depoimentos = Depoimento::find($id))
            return redirect()->back();
        return view('painel.admin.depoimento.edit', compact('depoimentos'))->with('configuracao', $configuracao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDepoimento $request, $id)
    {
        if(!$depoimentos = $depoimentos = Depoimento::find($id))
            return redirect()->back();
        $data = $request->all();
        if ($request->hasFile('img') && $request->img->isValid()) {
            if ($depoimentos->img && Storage::exists($depoimentos->img)) {
                Storage::delete($depoimentos->img);
            }
            $imgPath = $request->img->store('uploads/depoimento');
            $data['img'] = $imgPath;
        }
        $depoimentos->update($data);
        Alert::toast('Depoimento Atualizado!', 'warning');
        return redirect()->route('depoimento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $depoimentos = Depoimento::findOrFail($request->depoimento_id);
        if ($depoimentos->img && Storage::exists($depoimentos->img)) {
            Storage::delete($depoimentos->img);
        }
        $depoimentos->delete();
        Alert::toast('Depoimento Deletado!', 'warning');
        return redirect()->route('depoimento.index');
    }

}