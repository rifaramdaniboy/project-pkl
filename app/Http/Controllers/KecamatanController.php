<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Http\Controllers\DB;
use App\Models\Kota;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $kecamatan = Kecamatan::with('kota')->get();
        return view('layouts.kecamatan.index',compact('kecamatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kota = Kota::all();
        return view('layouts.kecamatan.create',compact('kota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kecamatan' => 'required|unique:kecamatans|max:20',
            'kode_kecamatan' => 'required|max:5|unique:kecamatans'
        ], [
            'kode_kecamatan.unique' => 'Kode Kecamatan Tidak Boleh Sama',
            'kode_kecamatan.required' => 'Kode Kecamatan Tidak Boleh Kosong',
            'kode_kecamatan.max' => 'Kode Kecamatan Max 5 Karakter',
            'nama_kecamatan.required' => 'Nama Kecamatan Tidak Boleh Kosong',
            'nama_kecamatan.unique' => 'Nama Kecamatan Tidak Boleh Sama',
            'nama_kecamatan.max' => 'Nama Kecamatan max 20 Karakter',
        ]);

        $kecamatan= new Kecamatan();
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan->kode_kecamatan = $request->kode_kecamatan;
        $kecamatan->id_kota = $request->id_kota;
        $kecamatan->save();
        return redirect()->route('kecamatan.index')
            ->with(['message'=>'Data Berhasil Dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        return view('layouts.kecamatan.show',compact('kecamatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kota = Kota::all();
        $kecamatan = Kecamatan::findOrFail($id);
        return view('layouts.kecamatan.edit',compact('kecamatan','kota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kecamatan' => 'required|unique:kecamatans|max:20',
            'kode_kecamatan' => 'required|max:5|unique:kecamatans'
        ], [
            'kode_kecamatan.unique' => 'Kode Kecamatan Tidak Boleh Sama',
            'kode_kecamatan.required' => 'Kode Kecamatan Tidak Boleh Kosong',
            'kode_kecamatan.max' => 'Kode Kecamatan Max 5 Karakter',
            'nama_kecamatan.required' => 'Nama Kecamatan Tidak Boleh Kosong',
            'nama_kecamatan.unique' => 'Nama Kecamatan Tidak Boleh Sama',
            'nama_kecamatan.max' => 'Nama Kecamatan max 20 Karakter',
        ]);
        
        $kecamatan= Kecamatan::findOrFail($id);
        $kecamatan->kode_kecamatan = $request->kode_kecamatan;
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan->id_kota = $request->id_kota;
        $kecamatan->save();
        return redirect()->route('kecamatan.index')
            ->with(['message'=>'Data Berhasil Diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kecamatan = Kecamatan::findOrFail($id)->delete();
        return redirect()->route('kecamatan.index')
                        ->with(['message1'=>'Berhasil Dihapus']);
    }
}
