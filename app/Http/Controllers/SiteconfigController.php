<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSiteconfig;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Siteconfig;
use Illuminate\Support\Facades\Storage;

class SiteconfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['siteconfigs']  = Siteconfig::latest()->paginate();
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.siteconfig.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.siteconfig.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSiteconfig $request)
    {
        $data = $request->only('nomesite', 'descricao', 'palavraschave', 'endereco', 'email', 'celular', 'telefone', 'linkendereco', 'iframemapa', 'facebook', 'instagram', 'whatsapp', 'twitter', 'linkedin', 'youtube', 'facebookid', 'taghead', 'codchat');
        if ($request->hasFile('logobranca') && $request->logobranca->isValid()) {
            $logobrancaPath = $request->logobranca->store('uploads/siteconfig');
            $data['logobranca'] = $logobrancaPath;
        }
        if ($request->hasFile('logoescura') && $request->logoescura->isValid()) {
            $logoescuraPath = $request->logoescura->store('uploads/siteconfig');
            $data['logoescura'] = $logoescuraPath;
        }
        if ($request->hasFile('favicon') && $request->favicon->isValid()) {
            $faviconPath = $request->favicon->store('uploads/siteconfig');
            $data['favicon'] = $faviconPath;
        }
        Siteconfig::create($data);
        Alert::toast('Configurações Cadastradas com Sucesso!', 'success');
        return redirect()->route('siteconfig.index');
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
        if(!$siteconfigs = $siteconfigs = Siteconfig::find($id))
            return redirect()->back();
            return view('painel.admin.siteconfig.show', [
            'siteconfigs' => $siteconfigs,
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
        if(!$siteconfigs = $siteconfigs = Siteconfig::find($id))
            return redirect()->back();
        return view('painel.admin.siteconfig.edit', compact('siteconfigs'))->with('configuracao', $configuracao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSiteconfig $request, $id)
    {
        if(!$siteconfigs = $siteconfigs = Siteconfig::find($id))
            return redirect()->back();
        $data = $request->all();
        if ($request->hasFile('logobranca') && $request->logobranca->isValid()) {
            if ($siteconfigs->logobranca && Storage::exists($siteconfigs->logobranca)) {
                Storage::delete($siteconfigs->logobranca);
            }
            $logobrancaPath = $request->logobranca->store('uploads/siteconfig');
            $data['logobranca'] = $logobrancaPath;
        }
        if ($request->hasFile('logoescura') && $request->logoescura->isValid()) {
            if ($siteconfigs->logoescura && Storage::exists($siteconfigs->logoescura)) {
                Storage::delete($siteconfigs->logoescura);
            }
            $logoescuraPath = $request->logoescura->store('uploads/siteconfig');
            $data['logoescura'] = $logoescuraPath;
        }
        if ($request->hasFile('favicon') && $request->favicon->isValid()) {
            if ($siteconfigs->favicon && Storage::exists($siteconfigs->favicon)) {
                Storage::delete($siteconfigs->favicon);
            }
            $faviconPath = $request->favicon->store('uploads/siteconfig');
            $data['favicon'] = $faviconPath;
        }
        $siteconfigs->update($data);
        Alert::toast('Configurações Atualizadas!', 'warning');
        return redirect()->route('siteconfig.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $siteconfigs = Siteconfig::findOrFail($request->siteconfig_id);
        if ($siteconfigs->logobranca && Storage::exists($siteconfigs->logobranca)) {
            Storage::delete($siteconfigs->logobranca);
        }
        if ($siteconfigs->logoescura && Storage::exists($siteconfigs->logoescura)) {
            Storage::delete($siteconfigs->logoescura);
        }
        if ($siteconfigs->favicon && Storage::exists($siteconfigs->favicon)) {
            Storage::delete($siteconfigs->favicon);
        }
        $siteconfigs->delete();
        Alert::toast('Configurações Deletadas!', 'error');
        return redirect()->route('siteconfig.index');
    }

}