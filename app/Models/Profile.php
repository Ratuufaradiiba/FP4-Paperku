<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    // mapping ke table
    protected $table = 'profile';
    // mapping ke kolom/field
    protected $fillable = ['nama', 'username', 'email', 'foto','id_user'];
    public function jurnal(){
        return $this->hasMany(Jurnal::class,'id_profile','id');
    }
}