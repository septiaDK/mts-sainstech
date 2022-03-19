<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KurikulumModel extends Model
{
    // use HasFactory;

    public $table = 'kurikulum';

    protected $dates = [
        'updated_at',
        'created_at'
    ];

    protected $fillable = [
        'name', 
        'vii',
        'viii',
        'xi',
        'updated_at',
        'created_at'
    ];
}
