<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenagaPendidikModel extends Model
{
    // use HasFactory;

    public $table = 'tenaga_pendidik';

    protected $dates = [
        'updated_at',
        'created_at'
    ];

    protected $fillable = [
        'name', 
        'url_path',
        'updated_at',
        'created_at'
    ];
}
