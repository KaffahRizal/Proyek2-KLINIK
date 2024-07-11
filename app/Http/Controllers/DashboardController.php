<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faskes;
use App\Models\KabKota;
use App\Models\Provinsi;

class DashboardController extends Controller
{
    public function show()
    {
        // ambil semua data dri tabel faskes
        $totalfaskes = Faskes::count();
        $totalprovinsi = Provinsi::count();
        $totalkabkota = KabKota::count();

        // kirim ke view
        return view('admin.contents.dashboard.index', [
            'totalfaskes' => $totalfaskes,
            'totalprovinsi' => $totalprovinsi,
            'totalkabkota' => $totalkabkota

        ]);
    }
}
