<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestasiModel extends Model
{
    // use HasFactory;

    public $table = 'prestasi';

    protected $dates = [
        'updated_at',
        'created_at'
    ];

    protected $fillable = [
        'judul', 
        'photo',
        'updated_at',
        'created_at'
    ];
}
