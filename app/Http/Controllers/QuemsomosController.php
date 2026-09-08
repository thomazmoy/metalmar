<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuemsomos;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Quemsomos;
use App\Models\Siteconfig;
use Illuminate\Support\Facades\Storage;

class QuemsomosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['quemsomos'] = Quemsomos::latest()->paginate();
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.quemsomos.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.quemsomos.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuemsomos $request)
    {
        $data = $request->only('tituloum', 'titulodois', 'titulotres', 'textoum', 'textodois', 'textotres', 'iframevideo');
        if ($request->hasFile('imgum') && $request->imgum->isValid()) {
            $imgumPath = $request->imgum->store('uploads/quemsomos');
            $data['imgum'] = $imgumPath;
        }
        if ($request->hasFile('imgdois') && $request->imgdois->isValid()) {
            $imgdoisPath = $request->imgdois->store('uploads/quemsomos');
            $data['imgdois'] = $imgdoisPath;
        }
        if ($request->hasFile('imgtres') && $request->imgtres->isValid()) {
            $imgtresPath = $request->imgtres->store('uploads/quemsomos');
            $data['imgtres'] = $imgtresPath;
        }
        Quemsomos::create($data);
        Alert::toast('Quem Somos Cadastrado com Sucesso!', 'success');
        return redirect()->route('quemsomos.index');
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
        if(!$quemsomos = $quemsomos = Quemsomos::find($id))
            return redirect()->back();
            return view('painel.admin.quemsomos.show', [
            'quemsomos' => $quemsomos,
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
        if(!$quemsomos = $quemsomos = Quemsomos::find($id))
            return redirect()->back();
        return view('painel.admin.quemsomos.edit', compact('quemsomos'))->with('configuracao', $configuracao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreQuemsomos $request, $id)
    {
        if(!$quemsomos = $quemsomos = Quemsomos::find($id))
            return redirect()->back();
        $data = $request->all();
        if ($request->hasFile('imgum') && $request->imgum->isValid()) {
            if ($quemsomos->imgum && Storage::exists($quemsomos->imgum)) {
                Storage::delete($quemsomos->imgum);
            }
            $imgumPath = $request->imgum->store('uploads/quemsomos');
            $data['imgum'] = $imgumPath;
        }
        if ($request->hasFile('imgdois') && $request->imgdois->isValid()) {
            if ($quemsomos->imgdois && Storage::exists($quemsomos->imgdois)) {
                Storage::delete($quemsomos->imgdois);
            }
            $imgdoisPath = $request->imgdois->store('uploads/quemsomos');
            $data['imgdois'] = $imgdoisPath;
        }
        if ($request->hasFile('imgtres') && $request->imgtres->isValid()) {
            if ($quemsomos->imgtres && Storage::exists($quemsomos->imgtres)) {
                Storage::delete($quemsomos->imgtres);
            }
            $imgtresPath = $request->imgtres->store('uploads/quemsomos');
            $data['imgtres'] = $imgtresPath;
        }
        $quemsomos->update($data);
        Alert::toast('Quem Somos Atualizado!', 'warning');
        return redirect()->route('quemsomos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $quemsomos = Quemsomos::findOrFail($request->sobre_id);
        if ($quemsomos->imgum && Storage::exists($quemsomos->imgum)) {
            Storage::delete($quemsomos->imgum);
        }
        if ($quemsomos->imgdois && Storage::exists($quemsomos->imgdois)) {
            Storage::delete($quemsomos->imgdois);
        }
        if ($quemsomos->imgtres && Storage::exists($quemsomos->imgtres)) {
            Storage::delete($quemsomos->imgtres);
        }
        $quemsomos->delete();
        Alert::toast('Quem Somos Deletado!', 'error');
        return redirect()->route('quemsomos.index');
    }

}