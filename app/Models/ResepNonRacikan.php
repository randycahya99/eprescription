<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResepNonRacikan extends Model
{
    protected $table = 'resep_non_racikan';
    protected $fillable = [
        'kode_resep',
        'nama_resep',
        'obatalkes_id',
        'signa_id',
        'qty_obat'
    ];

    public function obats()
    {
        return $this->belongsTo(ObatAlkes::class, 'obatalkes_id');
    }

    public function signas()
    {
        return $this->belongsTo(Signa::class, 'signa_id');
    }
}
