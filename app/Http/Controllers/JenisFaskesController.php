<?php

namespace App\Http\Controllers;

use App\Models\JenisFaskes;
use Illuminate\Http\Request;

class JenisFaskesController extends Controller
{
    public function show(){
        $jenis = JenisFaskes::all();

        return view('admin.contents.jenisfaskes.index', [
            'jenis' => $jenis
        ]);
    }

    public function create(){
        return view('admin.contents.jenisfaskes.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required'
        ]);

        JenisFaskes::create([
            'nama' => $request->nama
        ]);

        return redirect('/admin/jenis')->with('pesan', 'Berhasil menambah jenis faskes');
    }

    public function destroy($id){
        $jenis = JenisFaskes::find($id);

        $jenis->delete();

        return redirect('/admin/jenis')->with('pesan', 'Berhasil menghapus data jenis faskes');
    }
}
