<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasWebModel extends Model
{
    // use HasFactory;

    public $table = 'identitas_web';

    protected $dates = [
        'updated_at',
        'created_at'
    ];

    protected $fillable = [
        'alamat', 
        'no_telpon',
        'email',
        'path_video',
        'deskripsi_video',
        'updated_at',
        'created_at'
    ];
}
