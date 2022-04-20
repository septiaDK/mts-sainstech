<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisiMisiModel;
use App\Models\KurikulumModel;
use App\Models\IdentitasWebModel;
use App\Models\PrestasiModel;
use App\Models\ProgramUnggulanModel;
use App\Models\SiswaModel;
use App\Models\TenagaPendidikModel;
use Illuminate\Support\Facades\Storage;
use File;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identitas_web = IdentitasWebModel::limit(1)->first();
        $tenaga_pendidik = TenagaPendidikModel::get();
        $prestasi = PrestasiModel::get();
        $program_unggulan = ProgramUnggulanModel::get();

        return view('pages.landing.index', compact('identitas_web', 'tenaga_pendidik', 'prestasi', 'program_unggulan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return abort(404);
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
        return abort(404);
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
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return abort(404);
    }

    public function visi_misi()
    {
        $visi = VisiMisiModel::where('jenis', '1')->first();
        $misi = VisiMisiModel::where('jenis', '0')->get();
        $identitas_web = IdentitasWebModel::limit(1)->first();

        return view('pages.landing.visi_misi', compact('visi', 'misi', 'identitas_web'));
    }

    public function kurikulum()
    {
        $kurikulum = KurikulumModel::get();
        $identitas_web = IdentitasWebModel::limit(1)->first();
        
        return view('pages.landing.kurikulum', compact('kurikulum', 'identitas_web'));
    }

    public function prestasi()
    {
        return view('pages.landing.kurikulum');
    }

    public function ekstrakurikuler()
    {
        return view('pages.landing.kurikulum');
    }

    public function organisasi()
    {
        return view('pages.landing.kurikulum');
    }

    // function daftar siswa baru
    public function daftar()
    {
        $identitas_web = IdentitasWebModel::limit(1)->first();

        return view('pages.landing.daftar', compact('identitas_web'));
    }

    // function simpan daftar siswa baru
    public function store_daftar(Request $request)
    {
        $new_siswa = new SiswaModel;
        $new_siswa->name                     = strtoupper($request->get('name'));
        $new_siswa->nisn                     = $request->get('nisn');
        $new_siswa->nik                      = $request->get('nik');
        $new_siswa->tempat_lahir             = strtoupper($request->get('tempat_lahir'));
        $new_siswa->tanggal_lahir            = date('Y-m-d', strtotime($request->get('tanggal_lahir')));
        $new_siswa->jenis_kelamin            = $request->get('jenis_kelamin');
        $new_siswa->alamat                   = strtoupper($request->get('alamat_lengkap'));
        $new_siswa->no_telpon                = $request->get('no_telpon');
        $new_siswa->asal_sekolah             = $request->get('asal_sekolah');
        $new_siswa->nama_ayah                = $request->get('nama_ayah');
        $new_siswa->pekerjaan_ayah           = $request->get('pekerjaan_ayah');
        $new_siswa->pendidikan_terakhir_ayah = $request->get('pendidikan_terakhir_ayah');
        $new_siswa->nama_ibu                 = $request->get('nama_ibu');
        $new_siswa->pekerjaan_ibu            = $request->get('pekerjaan_ibu');
        $new_siswa->pendidikan_terakhir_ibu  = $request->get('pendidikan_terakhir_ibu');
        $new_siswa->penghasilan_ortu         = $request->get('penghasilan_ortu');
        $new_siswa->status_ortu              = $request->get('status_ortu');
        $new_siswa->nama_wali                = $request->get('nama_wali');
        $new_siswa->pekerjaan_wali           = $request->get('pekerjaan_wali');
        $new_siswa->hubungan_wali            = $request->get('hubungan_wali');
        $new_siswa->status_verifikasi        = "PENDING";

        $photo = $request->file('photo');
        if(isset($photo)){
            $new_siswa->photo = $request->file('photo')->store('assets/photo_siswa', 'public');
        }

        $new_siswa->save();

        return redirect()->route('landing.success_daftar_siswa');
    }

    // notifikasi berhasil daftar siswa
    public function success_daftar_siswa()
    {
        $identitas_web = IdentitasWebModel::limit(1)->first();

        return view('pages.landing.success_daftar', compact('identitas_web'));
    }
}
