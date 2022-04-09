<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ObatAlkes;
use App\Models\Signa;
use App\Models\ResepRacikan;
use App\Models\ResepNonRacikan;

class ObatController extends Controller
{
    // Menampilkan Halaman Master Data Obat & Alkes
    public function Obat()
    {
        $obat = ObatAlkes::all();

        // dd($obat);

        return view('admin/obat', compact('obat'));
    }

    // Menampilkan Halaman Master Data Signa
    public function Signa()
    {
        $signa = Signa::all();

        // dd($signa);

        return view('admin/signa', compact('signa'));
    }

    // Menampilkan Halaman Manajemen Data Obat Racikan
    public function ResepRacikan()
    {
        $resep = ResepRacikan::all();

        // dd($resep);

        return view('admin/resepRacik', compact('resep'));
    }

    // Menampilkan Halaman Manajemen Data Obat Non-Racikan
    public function ResepNonRacikan()
    {
        $resep = ResepNonRacikan::all();

        // dd($resep);

        return view('admin/resepNonRacik', compact('resep'));
    }
}
