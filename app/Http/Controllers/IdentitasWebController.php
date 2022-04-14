<?php

namespace App\Http\Controllers;

use App\Models\IdentitasWebModel;
use Illuminate\Http\Request;

use File;

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
        if(isset($identitas_web)){
            $action = route('admin.identitas_web.update', [$identitas_web->id]);
            $jenis  = 'Update';
        } else {
            $action = route('admin.identitas_web.store');
            $jenis  = 'Insert';
        }

        return view('pages.dashboard.identitas_web.index', compact("identitas_web", "action", "jenis"));
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
        $new_identitas_web = new IdentitasWebModel;

        $new_identitas_web->alamat          = $request->get('alamat');
        $new_identitas_web->no_telpon       = $request->get('no_telpon');
        $new_identitas_web->email           = $request->get('email');
        $new_identitas_web->path_video      = $request->get('path_video');
        $new_identitas_web->deskripsi_video = $request->get('deskripsi_video');
        $new_identitas_web->link_instagram  = $request->get('link_instagram');
        $new_identitas_web->link_telegram   = $request->get('link_telegram');
        $new_identitas_web->link_facebook   = $request->get('link_facebook');

        $path_logo = $request->file('logo');
        if (isset($path_logo)) {
            $new_identitas_web->logo = $request->file('logo')->store('assets/logo', 'public');
        }

        $new_identitas_web->save();

        toast()->success('Simpan data berhasil.');
        return back();
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
        $identitas_web->link_instagram  = $request->get('link_instagram');
        $identitas_web->link_telegram   = $request->get('link_telegram');
        $identitas_web->link_facebook   = $request->get('link_facebook');

        $path_logo = $request->file('logo');
        if (isset($path_logo)) {

            $path_logo_old = 'storage/' . $identitas_web->logo;
            if (File::exists($path_logo_old)) {
                File::delete($path_logo_old);
            } else {
                File::delete('storage/app/public/' . $identitas_web->logo);
            }

            $identitas_web->logo = $request->file('logo')->store('assets/logo', 'public');
        }

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
