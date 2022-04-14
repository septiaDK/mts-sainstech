<?php

namespace App\Http\Controllers;

use App\Models\TenagaPendidikModel;
use Illuminate\Http\Request;

use File;

class TenagaPendidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenaga_pendidik = TenagaPendidikModel::get();
        $jmlh_tenaga_pendidik = TenagaPendidikModel::count();
        return view('pages.dashboard.tenaga_pendidik.index', compact('tenaga_pendidik', 'jmlh_tenaga_pendidik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.tenaga_pendidik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_tenaga_pendidik = new TenagaPendidikModel;
        $new_tenaga_pendidik->name = $request->get('name');

        $path_foto = $request->file('url_path');
        if (isset($path_foto)) {
            $new_tenaga_pendidik->url_path = $request->file('url_path')->store('assets/tenaga_pendidik', 'public');
        }

        $new_tenaga_pendidik->save();

        toast()->success("Tambah data berhasil");
        return redirect()->route('admin.tenaga_pendidik.index');
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
        $tenaga_pendidik = TenagaPendidikModel::findOrFail($id);

        return view('pages.dashboard.tenaga_pendidik.edit', compact('tenaga_pendidik'));
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
        $tenaga_pendidik = TenagaPendidikModel::findOrFail($id);

        $tenaga_pendidik->name = $request->get('name');

        $path_foto = $request->file('url_path');
        if (isset($path_foto)) {

            // check old photo and delete
            $path_foto_old = 'storage/' . $tenaga_pendidik->url_path;
            if (File::exists($path_foto_old)) {
                File::delete($path_foto_old);
            } else {
                File::delete('storage/app/public/' . $tenaga_pendidik->url_path);
            }

            $tenaga_pendidik->url_path = $request->file('url_path')->store('assets/tenaga_pendidik', 'public');
        }

        $tenaga_pendidik->save();

        toast()->success("Update data berhasil");
        return redirect()->route('admin.tenaga_pendidik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tenaga_pendidik = TenagaPendidikModel::findOrFail($id);

        // delete photo
        $photo_path = 'storage/' . $tenaga_pendidik->url_path;
        if (File::exists($photo_path)) {
            File::delete($photo_path);
        } else {
            File::delete('storage/app/public/' . $tenaga_pendidik->url_path);
        }

        $tenaga_pendidik->delete();

        toast()->success("Delete data berhasil.");
        return redirect()->route('admin.tenaga_pendidik.index');
    }
}
