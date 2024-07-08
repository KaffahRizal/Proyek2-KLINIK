<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function show(){
        $provinsi = Provinsi::all();

        return view('admin.contents.provinsi.index',[
            'provinsi' => $provinsi
        ]);
    }

    public function create(){
        return view('admin.contents.provinsi.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'ibukota' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        Provinsi::create([
            'nama' => $request->nama,
            'ibukota' => $request->ibukota,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ]);

        return redirect('/admin/provinsi')->with('pesan', 'Berhasil menambah data provinsi.');
    }

    public function edit($id){
        $provinsi = Provinsi::find($id);

        return view('admin.contents.provinsi.edit',
            ['provinsi' => $provinsi]
        );
    }

    public function update($id, Request $request){
        $provinsi = Provinsi::find($id);

        $request->validate([
            'nama' => 'required',
            'ibukota' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        $provinsi->update([
            'nama' => $request->nama,
            'ibukota' => $request->ibukota,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ]);

        return redirect('/admin/provinsi')->with('pesan', 'Berhasil mengubah data provinsi.');
    }

    public function destroy($id){
        $provinsi = Provinsi::find($id);

        $provinsi->delete();

        return redirect('/admin/provinsi')->with('pesan', 'Berhasil menghapus data provinsi.');
    }
}
