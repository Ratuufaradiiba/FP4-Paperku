<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jurnal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashAdController extends Controller
{
    public function index()
    {
        $download = DB::table('jurnal')->select(['judul', 'download'])->get();
        //dd($coba);
        return view('admin.home',  [
            "download" => $download,
            "title" => "Home",
            "active" => "Home"
        ]);
    }
}
