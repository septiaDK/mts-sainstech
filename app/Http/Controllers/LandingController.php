<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisiMisiModel;
use App\Models\KurikulumModel;
use App\Models\IdentitasWebModel;

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

        return view('pages.landing.index', array('identitas_web' => $identitas_web));
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

    public function daftar()
    {
        return view('pages.landing.daftar');
    }

    public function store_daftar()
    {
        // 
    }
}
