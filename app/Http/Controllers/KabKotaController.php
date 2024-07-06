<?php

namespace App\Http\Controllers;

use App\Models\KabKota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class KabKotaController extends Controller
{
    public function show(){
        $kabkota = KabKota::all();

        return view('admin.contents.kabkota.index', [
            'kabkota' => $kabkota
        ]);
    }

    public function create(){
        $provisi = Provinsi::all();

        return view('admin.contents.kabkota.create', [
            'provinsi' => $provisi
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'latitude' => 'required',
            'longtitude' => 'required',
            'provinsi_id' => 'required | numeric'
        ]);

        KabKota::create([
            'nama' => $request->nama,
            'latitude' => $request->latitude,
            'longtitude' => $request->longtitude,
            'provinsi_id' => $request->provinsi_id
        ]);

        return redirect('/admin/kabkota')->with('pesan', 'Berhasil menambah data kabupaten');
    }

    public function edit($id){
        $kabkota = KabKota::find($id);
        $provinsi = Provinsi::all();

        return view('admin.contents.kabkota.edit',
            ['kabkota' => $kabkota, 'provinsi' => $provinsi]
        );
    }

    public function update($id, Request $request){
        $kabkota = KabKota::find($id);

        $request->validate([
            'nama' => 'required',
            'latitude' => 'required',
            'longtitude' => 'required',
            'provinsi_id' => 'required | numeric'
        ]);

        $kabkota->update([
            'nama' => $request->nama,
            'latitude' => $request->latitude,
            'longtitude' => $request->longtitude,
            'provinsi_id' => $request->provinsi_id
        ]);

        return redirect('admin/kabkota')->with('pesan', 'Berhasil mengubah data kabupaten');
    }

    public function destroy($id){
        $kabkota = KabKota::find($id);

        $kabkota->delete();

        return redirect('/admin/kabkota')->with('pesan', 'Berhasil menghapus data kabupaten');
    }
}
