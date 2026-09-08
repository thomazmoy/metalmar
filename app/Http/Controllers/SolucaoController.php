<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSolucao;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Solucao;
use App\Models\Siteconfig;
use Illuminate\Support\Facades\Storage;

class SolucaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['solucoes'] = Solucao::paginate(20);
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.solucao.index', $this->data);
    }

    public function pesquisa(Request $request)
    {
        $pesquisa = $request->get('pesquisa');
        $this->data['pesquisa'] = Solucao::where( 'titulo', 'like', '%'. $pesquisa .'%')
                                    ->orWhere( 'texto', 'like', '%'. $pesquisa .'%')
                                    ->orWhere( 'descricao', 'like', '%'. $pesquisa .'%')
                                    ->latest()->paginate(20)->appends(['pesquisa' => $pesquisa]);
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.solucao.pesquisa', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.solucao.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSolucao $request)
    {
        $data = $request->only('titulo', 'urltitulo', 'texto', 'descricao', 'descricaodois', 'situacao');
        if ($request->hasFile('img') && $request->img->isValid()) {
            $imgPath = $request->img->store('uploads/solucao');
            $data['img'] = $imgPath;
        }
        if ($request->hasFile('img2') && $request->img2->isValid()) {
            $img2Path = $request->img2->store('uploads/solucao');
            $data['img2'] = $img2Path;
        }
        if ($request->hasFile('img3') && $request->img3->isValid()) {
            $img3Path = $request->img3->store('uploads/solucao');
            $data['img3'] = $img3Path;
        }
        Solucao::create($data);
        Alert::toast('Solução Cadastrada com Sucesso!', 'success');
        return redirect()->route('solucao.index');
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
        if(!$solucoes = $solucoes = Solucao::find($id))
            return redirect()->back();
            return view('painel.admin.solucao.show', [
            'solucoes' => $solucoes,
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
        if(!$solucoes = $solucoes = Solucao::find($id))
            return redirect()->back();
        return view('painel.admin.solucao.edit', compact('solucoes'))->with('configuracao', $configuracao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSolucao $request, $id)
    {
        if(!$solucoes = $solucoes = Solucao::find($id))
            return redirect()->back();
        $data = $request->all();
        if ($request->hasFile('img') && $request->img->isValid()) {
            if ($solucoes->img && Storage::exists($solucoes->img)) {
                Storage::delete($solucoes->img);
            }
            $imgPath = $request->img->store('uploads/solucao');
            $data['img'] = $imgPath;
        }
        if ($request->hasFile('img2') && $request->img2->isValid()) {
            if ($solucoes->img2 && Storage::exists($solucoes->img2)) {
                Storage::delete($solucoes->img2);
            }
            $img2Path = $request->img2->store('uploads/solucao');
            $data['img2'] = $img2Path;
        }
        if ($request->hasFile('img3') && $request->img3->isValid()) {
            if ($solucoes->img3 && Storage::exists($solucoes->img3)) {
                Storage::delete($solucoes->img3);
            }
            $img3Path = $request->img3->store('uploads/solucao');
            $data['img3'] = $img3Path;
        }
        $solucoes->update($data);
        Alert::toast('Solução Atualizada!', 'warning');
        return redirect()->route('solucao.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $solucoes = Solucao::findOrFail($request->solucao_id);
        if ($solucoes->img && Storage::exists($solucoes->img)) {
            Storage::delete($solucoes->img);
        }
        if ($solucoes->img2 && Storage::exists($solucoes->img2)) {
            Storage::delete($solucoes->img2);
        }
        if ($solucoes->img3 && Storage::exists($solucoes->img3)) {
            Storage::delete($solucoes->img3);
        }
        $solucoes->delete();
        Alert::toast('Solução Deletada!', 'error');
        return redirect()->route('solucao.index');
    }

}