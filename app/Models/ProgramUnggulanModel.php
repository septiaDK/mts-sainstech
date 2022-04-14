<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramUnggulanModel extends Model
{
    // use HasFactory;

    public $table = 'program_unggulan';

    protected $dates = [
        'updated_at',
        'created_at'
    ];

    protected $fillable = [
        'judul', 
        'logo',
        'updated_at',
        'created_at'
    ];
}
