<?php

namespace App\Http\Controllers;

use App\Models\kabkota;
use App\Models\faskes;
use Illuminate\Http\Request;

class FaskesController extends Controller
{
    //menampilkan semua data faskes
    public function show()
    {
        // ambil semua data dri tabel students
        $faskes = Faskes::all();

        // kirim ke view
        return view('admin.contents.faskes.index', [
            'faskes' => $faskes
        ]);
    }

    //menampilkan form create faskes
    public function create()
    {
        return view('admin.contents.faskes.create');
    }

    //menyimpan data faskes
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nama_pengelola' => 'required',
            'alamat' => 'required',
            'website' => 'required',
            'email' => 'required',
            'kabkota_id' => 'integer|nullable',
            'rating' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'jenis_faskes_id' => 'integer|nullable',
            'kategori_id' => 'integer|nullable',
        ]);

        // simpan data
        faskes::create([
            'nama' => $request->nama,
            'nama_pengelola' => $request->nama_pengelola,
            'alamat' => $request->alamat,
            'website' => $request->website,
            'email' => $request->email,
            'kabkota_id' => $request->kabkota_id,
            'rating' => $request->rating,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'jenis_faskes_id' => $request->jenis_faskes_id,
            'kategori_id' => $request->kategori_id,
        ]);

        // kembali ke halaman faskes
        return redirect('/admin/faskes')->with('pesan', 'Faskes created successfully!');

    }
    //menampilkan form edit faskes
    public function edit($id)
    {
        // ambil data berdasarkan id
        $kabkotas = kabkota::all();

        //cari data faskes berdasarkan id
        $faskes = faskes::find($id);

        //kirim ke view
        return view('admin.contents.faskes.edit', [
            'faskes' => $faskes,
            'kabkota' => $kabkota
        ]);
    }

    //mengupdate data faskes
    public function update($id,Request $request)
    {
        //cari data faskes berdasarkan id
        $faskes = faskes::find($id);

        //validasi data
        $request->validate([
            'nama' => 'required',
            'nama_pengelola' => 'required',
            'alamat' => 'required',
            'website' => 'required',
            'email' => 'required',
            'kabkota_id' => 'integer|nullable',
            'rating' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'jenis_faskes_id' => 'integer|nullable',
            'kategori_id' => 'integer|nullable',
        ]);

        //update data
        $faskes->update([
            'nama' => $request->nama,
            'nama_pengelola' => $request->nama_pengelola,
            'alamat' => $request->alamat,
            'website' => $request->website,
            'email' => $request->email,
            'kabkota_id' => $request->kabkota_id,
            'rating' => $request->rating,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'jenis_faskes_id' => $request->jenis_faskes_id,
            'kategori_id' => $request->kategori_id,
        ]);

        //kembali ke halaman faskes
        return redirect('/admin/faskes')->with('pesan', 'Faskes updated successfully!');
    }

    //menghapus data faskes
    public function destroy($id)
    {
        //cari data faskes berdasarkan id
        $faskes = faskes::find($id);

        //delete data
        $faskes->delete();

        //kembali ke halaman faskes
        return redirect('/admin/faskes')->with('pesan', 'Faskes deleted successfully!');
    }
}
