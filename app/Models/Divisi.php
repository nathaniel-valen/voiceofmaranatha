<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = 'divisis';

    protected $fillable = [
        'title',
        'description',
        'image',
    ];
    
    use HasFactory;
}
