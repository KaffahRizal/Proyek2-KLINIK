<?php

namespace App\Http\Controllers;


use App\Models\Kategori;
use App\Models\JenisFaskes;
use App\Models\KabKota;
use App\Models\Faskes;
use Illuminate\Http\Request;

class FaskesController extends Controller
{
    //menampilkan semua data faskes
    public function show()
    {
        // ambil semua data dri tabel faskes
        $faskes = Faskes::all();

        // kirim ke view
        return view('admin.contents.faskes.index', [
            'faskes' => $faskes
        ]);
    }

    //menampilkan form create faskes
    public function create()
    {
        // ambil data kabkota berdasarkan id
        $kabkota = kabkota::all();
        // ambil data jenis faskes
        $jenis_faskes = JenisFaskes::all();
        // ambil data kategori
        $kategoris = kategori::all();

        return view('admin.contents.faskes.create' , [
            'kabkota' => $kabkota,
            'jenis_faskes' => $jenis_faskes,
            'kategoris' => $kategoris
        ]);
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
            'kabkota_id' => 'required | numeric',
            'rating' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'jenis_faskes_id' => 'required | numeric',
            'kategori_id' => 'required | numeric',
        ]);

        

        // simpan data
        Faskes::create([
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
        $kabkota = kabkota::all();
        //ambil data jenis faskes
        $jenis_faskes = JenisFaskes::all();
        //ambil data kategori
        $kategoris = kategori::all();

        //cari data faskes berdasarkan id
        $faskes = Faskes::find($id);

        //kirim ke view
        return view('admin.contents.faskes.edit', [
            'faskes' => $faskes,
            'kabkotas' => $kabkota, 
            'jenis_faskes' => $jenis_faskes,
            'kategori' => $kategoris
        ]);
    }

    //mengupdate data faskes
    public function update($id,Request $request)
    {
        //cari data faskes berdasarkan id
        $faskes = Faskes::find($id);

        //validasi data
        $request->validate([
            'nama' => 'required',
            'nama_pengelola' => 'required',
            'alamat' => 'required',
            'website' => 'required',
            'email' => 'required',
            'kabkota_id' => 'numeric|nullable',
            'rating' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'jenis_faskes_id' => 'numeric|nullable',
            'kategori_id' => 'numeric|nullable',
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
        $faskes = Faskes::find($id);

        //delete data
        $faskes->delete();

        //kembali ke halaman faskes
        return redirect('/admin/faskes')->with('pesan', 'Faskes deleted successfully!');
    }
}
