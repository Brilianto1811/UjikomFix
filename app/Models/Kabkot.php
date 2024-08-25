<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabkot extends Model
{
    use HasFactory;

    protected $table = 'kabkot';
    protected $primaryKey = 'id_kabkot';

    protected $fillable = ['id_provinsi', 'nama_kabkot'];

    // Relasi dengan Provinsi
    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'id_provinsi', 'id_provinsi');
    }

    // Relasi dengan Kecamatan
    public function kecamatan()
    {
        return $this->hasMany(Kecamatan::class, 'id_kabkot', 'id_kabkot');
    }
}
