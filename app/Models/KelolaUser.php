<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelolaUser extends Model
{
    use HasFactory;
    // mapping ke table
    protected $table = 'users';
    // mapping ke kolom/field
    protected $fillable = ['name', 'email', 'username', 'foto', 'role'];
    public function jurnal(){
        return $this->hasMany(Jurnal::class);
    }
}