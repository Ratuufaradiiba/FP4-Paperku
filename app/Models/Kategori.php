<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    // mapping ke table
    protected $table = 'kategori';
    // mapping ke kolom/field
    protected $fillable = ['nama_kategori'];

    //Relasi ke tabel jurnal
    public function jurnal(){
        return $this->hasMany(Jurnal::class);
    }
}