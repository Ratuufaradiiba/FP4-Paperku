<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DownloadJurnal extends Model
{
    use HasFactory;
    protected $table = 'download_jurnal';
    protected $guarded = ['id'];
}
