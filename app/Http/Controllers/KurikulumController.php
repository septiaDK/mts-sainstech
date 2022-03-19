<?php

namespace App\Http\Controllers;

use App\Models\KurikulumModel;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurikulum = KurikulumModel::orderBy('name', 'asc')->get();
        return view('pages.dashboard.kurikulum.index', ['kurikulum' => $kurikulum]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.kurikulum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_kurikulum = new KurikulumModel;
        $new_kurikulum->name = $request->get('name');
        $new_kurikulum->vii  = $request->get('vii');
        $new_kurikulum->viii = $request->get('viii');
        $new_kurikulum->ix   = $request->get('ix');

        $new_kurikulum->save();

        toast()->success('Simpan data berhasil.');
        return redirect()->route('admin.kurikulum.index');
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
        $kurikulum = KurikulumModel::where('id', $id)->first();

        return view('pages.dashboard.kurikulum.edit', ['kurikulum' => $kurikulum]);
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
        $kurikulum = KurikulumModel::findOrFail($id);

        $kurikulum->name = $request->get('name');
        $kurikulum->vii  = $request->get('vii');
        $kurikulum->viii = $request->get('viii');
        $kurikulum->ix   = $request->get('ix');

        $kurikulum->save();

        toast()->success('Update data berhasil.');
        return redirect()->route('admin.kurikulum.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kurikulum = KurikulumModel::findOrFail($id);
        $kurikulum->delete();

        toast()->success('Delete data berhasil.');
        return redirect()->route('admin.kurikulum.index');
    }
}
