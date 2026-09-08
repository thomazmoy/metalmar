<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrivacidade;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Privacidade;
use App\Models\Siteconfig;

class PrivacidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['privacidades'] = Privacidade::latest()->paginate();
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.privacidade.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.privacidade.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrivacidade $request)
    {
        $data = $request->only('titulo', 'texto');
        Privacidade::create($data);
        Alert::toast('Privacidade Cadastrada com Sucesso!', 'success');
        return redirect()->route('privacidade.index');
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
        if(!$privacidades = $privacidades = Privacidade::find($id))
            return redirect()->back();
            return view('painel.admin.privacidade.show', [
            'privacidades' => $privacidades,
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
        if(!$privacidades = $privacidades = Privacidade::find($id))
            return redirect()->back();
        return view('painel.admin.privacidade.edit', compact('privacidades'))->with('configuracao', $configuracao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePrivacidade $request, $id)
    {
        if(!$privacidades = $privacidades = Privacidade::find($id))
            return redirect()->back();
        $data = $request->all();
        $privacidades->update($data);
        Alert::toast('Privacidade Atualizada!', 'warning');
        return redirect()->route('privacidade.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $privacidades = Privacidade::findOrFail($request->privacidade_id);
        $privacidades->delete();
        Alert::toast('Privacidade Deletada!', 'error');
        return redirect()->route('privacidade.index');
    }

}