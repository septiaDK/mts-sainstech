<?php

namespace App\Http\Controllers;

use App\Models\IdentitasWebModel;
use Illuminate\Http\Request;

class IdentitasWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identitas_web = IdentitasWebModel::limit(1)->first();
        return view('pages.dashboard.identitas_web.index', array("identitas_web" => $identitas_web));
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
        $identitas_web = IdentitasWebModel::findOrFail($id);
        
        $identitas_web->alamat          = $request->get('alamat');
        $identitas_web->no_telpon       = $request->get('no_telpon');
        $identitas_web->email           = $request->get('email');
        $identitas_web->path_video      = $request->get('path_video');
        $identitas_web->deskripsi_video = $request->get('deskripsi_video');

        $identitas_web->save();

        toast()->success('Update data berhasil.');
        return back();
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
}
