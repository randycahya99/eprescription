<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResepRacikan extends Model
{
    protected $table = 'resep_racikan';
    protected $fillable = [
        'kode_resep',
        'nama_resep',
        'obatalkes_id_1',
        'obatalkes_id_2',
        'obatalkes_id_3',
        'signa_id',
        'qty_obat_1',
        'qty_obat_2',
        'qty_obat_3'
    ];

    public function obats1()
    {
        return $this->belongsTo(ObatAlkes::class, 'obatalkes_id_1');
    }

    public function obats2()
    {
        return $this->belongsTo(ObatAlkes::class, 'obatalkes_id_2');
    }

    public function obats3()
    {
        return $this->belongsTo(ObatAlkes::class, 'obatalkes_id_3');
    }

    public function signas()
    {
        return $this->belongsTo(Signa::class, 'signa_id');
    }
}
