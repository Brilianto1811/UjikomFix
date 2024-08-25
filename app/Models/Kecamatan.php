<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'kecamatan';
    protected $primaryKey = 'id_kecamatan';

    protected $fillable = ['id_kabkot', 'nama_kecamatan'];

    public function kabkot()
    {
        return $this->belongsTo(Kabkot::class, 'id_kabkot', 'id_kabkot');
    }
}
