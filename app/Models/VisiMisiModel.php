<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisiModel extends Model
{
    // use HasFactory;

    public $table = 'visi_misi';

    protected $dates = [
        'updated_at',
        'created_at'
    ];

    protected $fillable = [
        'name', 
        'jenis',
        'updated_at',
        'created_at'
    ];
}
