<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Signa extends Model
{
    protected $table = 'signa';
    protected $fillable = [
        'signa_kode',
        'signa_nama',
        'additional_data',
        'created_date',
        'created_by',
        'modified_count',
        'last_modified_date',
        'last_modified_by',
        'is_deleted',
        'is_active',
        'deleted_date',
        'deleted_by'
    ];

    public function resepRacikans()
    {
        return $this->hasMany(ResepRacikan::class);
    }

    public function resepNonRacikans()
    {
        return $this->hasMany(ResepNonRacikan::class);
    }
}
