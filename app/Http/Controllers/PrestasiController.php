<?php

namespace App\Http\Controllers;

use App\Models\PrestasiModel;
use Illuminate\Http\Request;

use File;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = PrestasiModel::get();
        return view('pages.dashboard.prestasi.index', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.prestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_prestasi = New PrestasiModel;
        $new_prestasi->judul = $request->get('judul');

        $path_foto = $request->file('photo');
        if(isset($path_foto)){
            $new_prestasi->photo = $request->file('photo')->store('assets/prestasi', 'public');
        }

        $new_prestasi->save();

        toast()->success("Tambah data berhasil");
        return redirect()->route('admin.prestasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestasi = PrestasiModel::findOrFail($id);

        return view('pages.dashboard.prestasi.edit', compact('prestasi'));
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
        $prestasi = PrestasiModel::findOrFail($id);

        $prestasi->judul = $request->get('judul');

        $path_foto = $request->file('photo');
        if(isset($path_foto)){
            $prestasi->photo = $request->file('photo')->store('assets/prestasi', 'public');
        }

        $prestasi->save();

        toast()->success("Update data berhasil");
        return redirect()->route('admin.prestasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestasi = PrestasiModel::findOrFail($id);

        // delete photo
        $photo_path = 'storage/'. $prestasi->photo;
        if(File::exists($photo_path)){
            File::delete($photo_path);
        } else {
            File::delete('storage/app/public/'. $prestasi->photo);
        }

        $prestasi->delete();

        toast()->success("Delete data berhasil.");
        return redirect()->route('admin.prestasi.index');
    }
}
