<?php

namespace App\Http\Controllers;

use App\Models\ProgramUnggulanModel;
use Illuminate\Http\Request;

use FIle;

class ProgramUnggulanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program_unggulan = ProgramUnggulanModel::get();
        return view('pages.dashboard.program_unggulan.index', compact('program_unggulan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.program_unggulan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_program_unggulan = New ProgramUnggulanModel();
        $new_program_unggulan->judul = $request->get('judul');

        $path_foto = $request->file('logo');
        if(isset($path_foto)){
            $new_program_unggulan->logo = $request->file('logo')->store('assets/program_unggulan', 'public');
        }

        $new_program_unggulan->save();

        toast()->success("Tambah data berhasil");
        return redirect()->route('admin.program_unggulan.index');
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
        $program_unggulan = ProgramUnggulanModel::findOrFail($id);

        return view('pages.dashboard.program_unggulan.edit', compact('program_unggulan'));
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
        $program_unggulan = ProgramUnggulanModel::findOrFail($id);

        $program_unggulan->judul = $request->get('judul');

        $path_foto = $request->file('logo');
        if(isset($path_foto)){
            $program_unggulan->logo = $request->file('logo')->store('assets/program_unggulan', 'public');
        }

        $program_unggulan->save();

        toast()->success("Update data berhasil");
        return redirect()->route('admin.program_unggulan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program_unggulan = ProgramUnggulanModel::findOrFail($id);
        
        // delete photo
        $photo_path = 'storage/'. $program_unggulan->logo;
        if(File::exists($photo_path)){
            File::delete($photo_path);
        } else {
            File::delete('storage/app/public/'. $program_unggulan->logo);
        }

        $program_unggulan->delete();

        toast()->success("Delete data berhasil.");
        return redirect()->route('admin.program_unggulan.index');
    }
}
