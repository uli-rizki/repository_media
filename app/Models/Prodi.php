<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodi';
    protected $primaryKey = 'prodi_id';

    // kolom yang bisa diisi atau insert melalui controller
    protected $fillable = [
        'nama_prodi',
        'singkatan'
    ];
}
