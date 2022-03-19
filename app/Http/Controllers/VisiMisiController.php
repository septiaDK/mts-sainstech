<?php

namespace App\Http\Controllers;

use App\Models\VisiMisiModel;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visi_misi = VisiMisiModel::orderBy('jenis', 'desc')->get();
        return view('pages.dashboard.visi_misi.index', ['visi_misi' => $visi_misi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.visi_misi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_visi_misi = New VisiMisiModel;
        $new_visi_misi->name  = $request->get('name');
        $new_visi_misi->jenis = $request->get('jenis');

        $new_visi_misi->save();

        toast()->success('Simpan data berhasil.');
        return redirect()->route('admin.visi_misi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $visi_misi = VisiMisiModel::where('id', $id)->first();
        
        return view('pages.dashboard.visi_misi.edit', ['visi_misi' => $visi_misi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $visi_misi = VisiMisiModel::findOrFail($id);

        $visi_misi->name  = $request->get('name');
        $visi_misi->jenis = $request->get('jenis');

        $visi_misi->save();

        toast()->success('Update data berhasil.');
        return redirect()->route('admin.visi_misi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visi_misi = VisiMisiModel::findOrFail($id);
        $visi_misi->delete();

        toast()->success('Delete data berhasil.');
        return redirect()->route('admin.visi_misi.index');
    }
}
