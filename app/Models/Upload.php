<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;
    // mapping ke table
    protected $table = 'jurnal';
    // mapping ke kolom/field
    protected $fillable = ['judul','tahun','foto','ket','isi','id_kategori','id_profile'];

    public function kategori(){
        return $this->belongsTo(Kategori::class,'id_kategori','id');
    }
    public function profile(){
        return $this->belongsTo(Profile::class,'id_profile','id');
    }
}