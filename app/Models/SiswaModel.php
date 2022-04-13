<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiswaModel extends Model
{
    // use HasFactory;
    // use SoftDeletes;

    public $table = 'siswa';

    protected $dates = [
        'updated_at',
        'created_at'
    ];

    protected $fillable = [
        'name', 
        'nisn',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_telpon',
        'photo',
        'updated_at',
        'created_at'
    ];
}
