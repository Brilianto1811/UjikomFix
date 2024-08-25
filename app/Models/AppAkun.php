<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class AppAkun extends Authenticatable
{
    use HasFactory;

    // Nama tabel
    protected $table = 'app_akun';
    protected $primaryKey = 'id_akun';

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relasi ke model Provinsi
    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'id_provinsi', 'id_provinsi');
    }

    // Relasi ke model Kabkot
    public function kabkot()
    {
        return $this->belongsTo(Kabkot::class, 'id_kabkot', 'id_kabkot');
    }

    // Kolom yang dapat diisi
    // protected $fillable = [
    //     'uid_akun',
    //     'nama_akun',
    //     'alamatktp_akun',
    //     'alamatdomisili_akun',
    //     'idkecamatan_akun',
    //     'idkabupaten_akun',
    //     'idprovinsi_akun',
    //     'nomortelepon_akun',
    //     'nomorhp_akun',
    //     'email_akun',
    //     'kewarganegaraan_akun',
    //     'tanggallahir_akun',
    //     'tempatlahir_akun',
    //     'provinsilahir_akun',
    //     'kabkotlahir_akun',
    //     'luarlahir_akun',
    //     'jk_akun',
    //     'statusnikah_akun',
    //     'idagama_akun',
    // ];

    // Definisi relasi ke tabel lain
    // public function kecamatan()
    // {
    //     return $this->belongsTo(Kecamatan::class, 'idkecamatan_akun', 'id_kecamatan');
    // }

    // public function kabupaten()
    // {
    //     return $this->belongsTo(Kabkot::class, 'idkabupaten_akun', 'id_kabkot');
    // }

    // public function provinsi()
    // {
    //     return $this->belongsTo(Provinsi::class, 'idprovinsi_akun', 'id_provinsi');
    // }

    // public function agama()
    // {
    //     return $this->belongsTo(Agama::class, 'idagama_akun', 'id_agama');
    // }
}
