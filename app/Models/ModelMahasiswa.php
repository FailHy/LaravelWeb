<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class ModelMahasiswa extends Model
{
    //
    use HasFactory;
    protected $table = 'mahasiswas';

    protected $fillable = [
        'nama',
        'nim',
        'jurusan'
    ];
}
