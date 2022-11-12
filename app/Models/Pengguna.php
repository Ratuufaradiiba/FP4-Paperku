<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    // mapping ke table
    protected $table = 'pengguna';
    // mapping ke kolom/field
    protected $fillable = ['notelp', 'name', 'gender', 'alamat', 'email', 'foto'];
}
