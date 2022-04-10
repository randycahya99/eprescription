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

    // Menampilkan Halaman Manajemen Data Resep Racikan
    public function ResepRacikan()
    {
        $obat = ObatAlkes::all();
        $signa = Signa::all();
        $resep = ResepRacikan::all();

        // dd($resep);

        return view('admin/resepRacik', compact('resep','obat','signa'));
    }

    // Menampilkan Halaman Manajemen Data Resep Non-Racikan
    public function ResepNonRacikan()
    {
        $obat = ObatAlkes::all();
        $signa = Signa::all();
        $resep = ResepNonRacikan::all();

        // dd($resep);

        return view('admin/resepNonRacik', compact('resep','obat','signa'));
    }

    // Menambahkan Data Resep Non-Racikan
    public function AddResepNonRacikan(Request $request)
    {
        // Validasi inputan form
        $request->validate([
            'kode_resep' => 'required|unique:resep_non_racikan',
            'nama_resep' => 'required|string',
            'obatalkes_id' => 'required',
            'qty_obat' => 'required|numeric',
            'signa_id' => 'required'
        ], [
            'kode_resep.required' => 'Kode resep tidak boleh kosong.',
            'kode_resep.unique' => 'Kode resep sudah digunakan.',
            'nama_resep.required' => 'Nama resep tidak boleh kosong.',
            'nama_resep.string' => 'Nama resep harus berupa string.',
            'obatalkes_id.required' => 'Obat tidak boleh kosong.',
            'qty_obat.required' => 'Takaran obat tidak boleh kosong.',
            'qty_obat.numeric' => 'Takaran obat harus berupa angka.',
            'signa_id.required' => 'Signa tidak boleh kosong.',
        ]);

        // Menambahkan Data Resep Non-Racikan ke Database
        $resep = ResepNonRacikan::create([
            'kode_resep' => $request->kode_resep,
            'nama_resep' => $request->nama_resep,
            'obatalkes_id' => $request->obatalkes_id,
            'qty_obat' => $request->qty_obat,
            'signa_id' => $request->signa_id
        ]);

        // dd($resep);

        return redirect('/resep-non-racik')->with('sukses', 'Data resep non-racikan berhasil ditambahkan.');
    }

    // Menghapus Data Resep Non-Racikan
    public function DeleteResepNonRacik($id)
    {
        // Mencari Data Resep Non-Racikan di Database
        $resep = ResepNonRacikan::find($id);

        // Menghapus Data Resep Non-Racikan di Database
        $resep->delete();

        return redirect('/resep-non-racik');
    }

    //Mengubah Data Resep Non-Racikan
    public function UpdateResepNonRacikan(Request $request, $id)
    {
        // Validasi inputan form
        $request->validate([
            // 'kode_resep' => 'required|unique:resep_non_racikan',
            'nama_resep' => 'required|string',
            'obatalkes_id' => 'required',
            'qty_obat' => 'required|numeric',
            'signa_id' => 'required'
        ], [
            // 'kode_resep.required' => 'Kode resep tidak boleh kosong.',
            // 'kode_resep.unique' => 'Kode resep sudah digunakan.',
            'nama_resep.required' => 'Nama resep tidak boleh kosong.',
            'nama_resep.string' => 'Nama resep harus berupa string.',
            'obatalkes_id.required' => 'Obat tidak boleh kosong.',
            'qty_obat.required' => 'Takaran obat tidak boleh kosong.',
            'qty_obat.numeric' => 'Takaran obat harus berupa angka.',
            'signa_id.required' => 'Signa tidak boleh kosong.',
        ]);

        //Mengubah Data di Database
        $resep = ResepNonRacikan::find($id);
        $resep->update($request->all());

        return redirect('/resep-non-racik')->with('sukses', 'Resep berhasil diperbarui.');
    }

    // Menambahkan Data Resep Racikan
    public function AddResepRacikan(Request $request)
    {
        // Validasi inputan form
        $request->validate([
            'kode_resep' => 'required|unique:resep_non_racikan',
            'nama_resep' => 'required|string',
            'obatalkes_id_1' => 'required',
            'obatalkes_id_2' => 'required',
            'obatalkes_id_3' => 'required',
            'qty_obat_1' => 'required|numeric',
            'qty_obat_2' => 'required|numeric',
            'qty_obat_3' => 'required|numeric',
            'signa_id' => 'required'
        ], [
            'kode_resep.required' => 'Kode resep tidak boleh kosong.',
            'kode_resep.unique' => 'Kode resep sudah digunakan.',
            'nama_resep.required' => 'Nama resep tidak boleh kosong.',
            'nama_resep.string' => 'Nama resep harus berupa string.',
            'obatalkes_id_1.required' => 'Obat tidak boleh kosong.',
            'obatalkes_id_2.required' => 'Obat tidak boleh kosong.',
            'obatalkes_id_3.required' => 'Obat tidak boleh kosong.',
            'qty_obat_1.required' => 'Takaran obat tidak boleh kosong.',
            'qty_obat_1.numeric' => 'Takaran obat harus berupa angka.',
            'qty_obat_2.required' => 'Takaran obat tidak boleh kosong.',
            'qty_obat_2.numeric' => 'Takaran obat harus berupa angka.',
            'qty_obat_3.required' => 'Takaran obat tidak boleh kosong.',
            'qty_obat_3.numeric' => 'Takaran obat harus berupa angka.',
            'signa_id.required' => 'Signa tidak boleh kosong.',
        ]);

        // Menambahkan Data Resep Racikan ke Database
        $resep = ResepRacikan::create([
            'kode_resep' => $request->kode_resep,
            'nama_resep' => $request->nama_resep,
            'obatalkes_id_1' => $request->obatalkes_id_1,
            'obatalkes_id_2' => $request->obatalkes_id_2,
            'obatalkes_id_3' => $request->obatalkes_id_3,
            'qty_obat_1' => $request->qty_obat_1,
            'qty_obat_2' => $request->qty_obat_2,
            'qty_obat_3' => $request->qty_obat_3,
            'signa_id' => $request->signa_id
        ]);

        // dd($resep);

        return redirect('/resep-racik')->with('sukses', 'Data resep racikan berhasil ditambahkan.');
    }

    // Menghapus Data Resep Racikan
    public function DeleteResepRacik($id)
    {
        // Mencari Data Resep Racikan di Database
        $resep = ResepRacikan::find($id);

        // Menghapus Data Resep Racikan di Database
        $resep->delete();

        return redirect('/resep-racik');
    }

    //Mengubah Data Resep Racikan
    public function UpdateResepRacikan(Request $request, $id)
    {
        // Validasi inputan form
        $request->validate([
            // 'kode_resep' => 'required|unique:resep_non_racikan',
            'nama_resep' => 'required|string',
            'obatalkes_id_1' => 'required',
            'obatalkes_id_2' => 'required',
            'obatalkes_id_3' => 'required',
            'qty_obat_1' => 'required|numeric',
            'qty_obat_2' => 'required|numeric',
            'qty_obat_3' => 'required|numeric',
            'signa_id' => 'required'
        ], [
            // 'kode_resep.required' => 'Kode resep tidak boleh kosong.',
            // 'kode_resep.unique' => 'Kode resep sudah digunakan.',
            'nama_resep.required' => 'Nama resep tidak boleh kosong.',
            'nama_resep.string' => 'Nama resep harus berupa string.',
            'obatalkes_id_1.required' => 'Obat tidak boleh kosong.',
            'obatalkes_id_2.required' => 'Obat tidak boleh kosong.',
            'obatalkes_id_3.required' => 'Obat tidak boleh kosong.',
            'qty_obat_1.required' => 'Takaran obat tidak boleh kosong.',
            'qty_obat_1.numeric' => 'Takaran obat harus berupa angka.',
            'qty_obat_2.required' => 'Takaran obat tidak boleh kosong.',
            'qty_obat_2.numeric' => 'Takaran obat harus berupa angka.',
            'qty_obat_3.required' => 'Takaran obat tidak boleh kosong.',
            'qty_obat_3.numeric' => 'Takaran obat harus berupa angka.',
            'signa_id.required' => 'Signa tidak boleh kosong.',
        ]);

        //Mengubah Data di Database
        $resep = ResepRacikan::find($id);
        $resep->update($request->all());

        return redirect('/resep-racik')->with('sukses', 'Resep berhasil diperbarui.');
    }
}
