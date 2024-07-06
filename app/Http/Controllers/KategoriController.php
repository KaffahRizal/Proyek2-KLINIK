<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function show(){
        $kategori = Kategori::all();

        return view('admin.contents.kategori.index',
            ['kategori' => $kategori]
        );
    }

    public function create(){
        return view('admin.contents.kategori.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required'
        ]);

        Kategori::create([
            'nama' => $request->nama
        ]);

        return redirect('/admin/kategori')->with('pesan', 'Berhasil menambah kategori faskes');
    }

    public function destroy($id){
        $kategori = Kategori::find($id);

        $kategori->delete();

        return redirect('/admin/kategori')->with('pesan', 'Berhasil menghapus data kategori faskes');
    }
}