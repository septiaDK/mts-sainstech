<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use Illuminate\Http\Request;

use File;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        if($keyword){
            $siswa = SiswaModel::where("name", "LIKE", "%$keyword%")->orWhere('nisn', "LIKE", "%$keyword%")->orWhere('nik', "LIKE", "%$keyword%")->simplePaginate(10);
        } else {
            $siswa = SiswaModel::orderBy('created_at', 'DESC')->simplePaginate(10);
        }

        $jlmh_siswa = SiswaModel::count();

        return view('pages.dashboard.siswa.index', ["siswa" => $siswa, "jmlh_siswa" => $jlmh_siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_siswa = new SiswaModel;
        $new_siswa->name          = strtoupper($request->get('name'));
        $new_siswa->nisn          = $request->get('nisn');
        $new_siswa->nik           = $request->get('nik');
        $new_siswa->tempat_lahir  = $request->get('tempat_lahir');
        $new_siswa->tanggal_lahir = date('Y-m-d', strtotime($request->get('tanggal_lahir')));
        $new_siswa->jenis_kelamin = $request->get('jenis_kelamin');
        $new_siswa->alamat        = $request->get('alamat_lengkap');
        $new_siswa->no_telpon     = $request->get('no_telpon');

        $photo = $request->file('photo');
        if(isset($photo)){
            $new_siswa->photo = $request->file('photo')->store('assets/photo_siswa', 'public');
        }

        $new_siswa->save();

        toast()->success("Tambah data berhasil.");
        return redirect()->route('admin.siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = SiswaModel::findOrFail($id);
        $nama_button = 'Update';
        return view('pages.dashboard.siswa.edit', compact('siswa', 'nama_button'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = SiswaModel::findOrFail($id);
        $nama_button = 'Verifikasi';
        return view('pages.dashboard.siswa.edit', compact('siswa', 'nama_button'));
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
        $siswa = SiswaModel::findOrFail($id);

        $siswa->name                     = strtoupper($request->get('name'));
        $siswa->nisn                     = $request->get('nisn');
        $siswa->nik                      = $request->get('nik');
        $siswa->tempat_lahir             = strtoupper($request->get('tempat_lahir'));
        $siswa->tanggal_lahir            = date('Y-m-d', strtotime($request->get('tanggal_lahir')));
        $siswa->jenis_kelamin            = $request->get('jenis_kelamin');
        $siswa->alamat                   = strtoupper($request->get('alamat_lengkap'));
        $siswa->no_telpon                = $request->get('no_telpon');
        $siswa->asal_sekolah             = $request->get('asal_sekolah');
        $siswa->nama_ayah                = $request->get('nama_ayah');
        $siswa->pekerjaan_ayah           = $request->get('pekerjaan_ayah');
        $siswa->pendidikan_terakhir_ayah = $request->get('pendidikan_terakhir_ayah');
        $siswa->nama_ibu                 = $request->get('nama_ibu');
        $siswa->pekerjaan_ibu            = $request->get('pekerjaan_ibu');
        $siswa->pendidikan_terakhir_ibu  = $request->get('pendidikan_terakhir_ibu');
        $siswa->penghasilan_ortu         = $request->get('penghasilan_ortu');
        $siswa->status_ortu              = $request->get('status_ortu');
        $siswa->nama_wali                = $request->get('nama_wali');
        $siswa->pekerjaan_wali           = $request->get('pekerjaan_wali');
        $siswa->hubungan_wali            = $request->get('hubungan_wali');
        $siswa->status_verifikasi        = "SELESAI";

        $path_foto = $request->file('photo');
        if(isset($path_foto)){
            $siswa->photo = $request->file('photo')->store('assets/siswa', 'public');
        }

        $siswa->save();

        toast()->success("Verifikasi data berhasil");
        return redirect()->route('admin.siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = SiswaModel::findOrFail($id);
        // delete photo
        $photo_path = 'storage/'. $siswa->photo;
        if(File::exists($photo_path)){
            File::delete($photo_path);
        } else {
            File::delete('storage/app/public/'. $siswa->photo);
        }

        $siswa->delete();

        toast()->success('Delete data berhasil.');
        return redirect()->route('admin.siswa.index');
    }
}
