<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuModel extends Model
{
    use HasFactory;

    protected $table = 'buku';
    public $timestamp = false;

    protected $fillable = [
        'id',
        'judul',
        'tahun_terbit',
    ];
}