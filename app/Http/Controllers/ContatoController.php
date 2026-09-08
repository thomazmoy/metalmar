<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContato;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Contato;
use App\Models\Siteconfig;
use App\Exports\ContatoExport;
use Maatwebsite\Excel\Facades\Excel;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['contatos'] = Contato::latest()->paginate(20);
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.contato.index', $this->data);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $this->data['search'] = Contato::where( 'nome', 'like', '%'. $search .'%')
                                    ->orWhere( 'email', 'like', '%'. $search .'%')
                                    ->orWhere( 'telefone', 'like', '%'. $search .'%')
                                    ->orWhere( 'assunto', 'like', '%'. $search .'%')
                                    ->orWhere( 'mensagem', 'like', '%'. $search .'%')
                                    ->orWhere( 'situacao', 'like', '%'. $search .'%')
                                    ->orWhere( 'created_at', 'like', '%'. $search .'%')
                                    ->latest()->paginate(20)->appends(['search' => $search]);
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.contato.pesquisa', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.contato.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContato $request)
    {
        $contatos = Contato::create([
            'nome' => request('nome'),
            'email' => request('email'),
            'telefone' => request('telefone'),
            'assunto' => request('assunto'),
            'mensagem' => request('mensagem'),
            'situacao' => request ('situacao'),
        ]);
        Alert::toast('Contato Cadastrado com Sucesso!', 'success');
        return redirect()->route('contato.index');
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
        if(!$contatos = $contatos = Contato::find($id))
            return redirect()->back();
        return view('painel.admin.contato.show', [
            'contatos' => $contatos,
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
        if(!$contatos = $contatos = Contato::find($id))
            return redirect()->back();
        return view('painel.admin.contato.edit', compact('contatos'))->with('configuracao', $configuracao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreContato $request, $id)
    {
        if(!$contatos = $contatos = Contato::find($id))
            return redirect()->back();
        $contatos->update($request->all());
        Alert::toast('Contato Atualizado!', 'warning');
        return redirect()->route('contato.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $contatos = Contato::findOrFail($request->contato_id);
        $contatos->delete();
        Alert::toast('Contato Deletado!', 'error');
        return redirect()->route('contato.index');
    }

    public function exportar()
    {
        return Excel::download(new ContatoExport, 'contato.xls');
    }

}