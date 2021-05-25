<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PegawaiModel extends Model
{
    use HasFactory;

    protected $table = "pegawai";
    public $fillable = [
        'nip',
        'nama',
        'alamat',
        'golongan',
        'tgl_lahir',
        'tempat_lahir',
        'jenis_kelamin',
        'agama',
        'telepon',
        'pendidikan',
        'status_pernikahan',
        'tgl_masuk',
        'jabatan',
        'kantor',
    ];
}
