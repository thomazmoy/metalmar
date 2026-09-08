<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBanner;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Banner;
use App\Models\Siteconfig;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['banners'] = Banner::paginate(10);
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.banner.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['configuracao'] = Siteconfig::all();
        return view('painel.admin.banner.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBanner $request)
    {
        $data = $request->only('titulo', 'linkbanner');
        if ($request->hasFile('imgbanner') && $request->imgbanner->isValid()) {
            $imgbannerPath = $request->imgbanner->store('uploads/banner');
            $data['imgbanner'] = $imgbannerPath;
        }
        if ($request->hasFile('imgmobile') && $request->imgmobile->isValid()) {
            $imgmobilePath = $request->imgmobile->store('uploads/banner');
            $data['imgmobile'] = $imgmobilePath;
        }
        Banner::create($data);
        Alert::toast('Banner Cadastrado com Sucesso!', 'success');
        return redirect()->route('banner.index');
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
        if(!$banners = $banners = Banner::find($id))
            return redirect()->back();
        return view('painel.admin.banner.show', [
            'banners' => $banners,
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
        if(!$banners = $banners = Banner::find($id))
            return redirect()->back();
        return view('painel.admin.banner.edit', compact('banners'))->with('configuracao', $configuracao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBanner $request, $id)
    {
        if(!$banners = $banners = Banner::find($id))
            return redirect()->back();
        $data = $request->all();
        if ($request->hasFile('imgbanner') && $request->imgbanner->isValid()) {
            if ($banners->imgbanner && Storage::exists($banners->imgbanner)) {
                Storage::delete($banners->imgbanner);
            }
            $imgbannerPath = $request->imgbanner->store('uploads/banner');
            $data['imgbanner'] = $imgbannerPath;
        }
        if ($request->hasFile('imgmobile') && $request->imgmobile->isValid()) {
            if ($banners->imgmobile && Storage::exists($banners->imgmobile)) {
                Storage::delete($banners->imgmobile);
            }
            $imgmobilePath = $request->imgmobile->store('uploads/banner');
            $data['imgmobile'] = $imgmobilePath;
        }
        $banners->update($data);
        Alert::toast('Banner Atualizado!', 'warning');
        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $banners = Banner::findOrFail($request->banner_id);
        if ($banners->imgbanner && Storage::exists($banners->imgbanner)) {
            Storage::delete($banners->imgbanner);
        }
        if ($banners->imgmobile && Storage::exists($banners->imgmobile)) {
            Storage::delete($banners->imgmobile);
        }
        $banners->delete();
        Alert::toast('Banner Deletado!', 'error');
        return redirect()->route('banner.index');
    }

}