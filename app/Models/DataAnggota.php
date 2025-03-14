<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAnggota extends Model
{
    protected $table = 'data_anggotas';

    protected $fillable = [
        'name',
        'faculty',
        'major',
        'generation',
        'nrp',
        'phone_number',
        'instagram',
        'date_of_birth',
        'division',
    ];

    use HasFactory;
}
