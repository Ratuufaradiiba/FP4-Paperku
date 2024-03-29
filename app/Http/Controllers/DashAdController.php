<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DownloadJurnal;
use App\Models\Jurnal;
use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class DashAdController extends Controller
{
    public function index()
    {
        $row = Jurnal::count();
        $profile = User::with('profile')->where('role', 'penulis')->count();
        $user = User::count();
        $djurnal = DownloadJurnal::count();
        //dd($djurnal);
        $tahun = Carbon::now()->format('Y');


        $data = [
            $januari = DownloadJurnal::WhereYear('created_at', $tahun)->WhereMonth('created_at', '01')->count(),
            $februari = DownloadJurnal::WhereYear('created_at', $tahun)->WhereMonth('created_at', '02')->count(),
            $maret = DownloadJurnal::WhereYear('created_at', $tahun)->WhereMonth('created_at', '03')->count(),
            $april = DownloadJurnal::WhereYear('created_at', $tahun)->WhereMonth('created_at', '04')->count(),
            $mei = DownloadJurnal::WhereYear('created_at', $tahun)->WhereMonth('created_at', '05')->count(),
            $juni = DownloadJurnal::WhereYear('created_at', $tahun)->WhereMonth('created_at', '06')->count(),
            $juli = DownloadJurnal::WhereYear('created_at', $tahun)->WhereMonth('created_at', '07')->count(),
            $agustus = DownloadJurnal::WhereYear('created_at', $tahun)->WhereMonth('created_at', '08')->count(),
            $september = DownloadJurnal::WhereYear('created_at', $tahun)->WhereMonth('created_at', '09')->count(),
            $oktober = DownloadJurnal::WhereYear('created_at', $tahun)->WhereMonth('created_at', '10')->count(),
            $november = DownloadJurnal::WhereYear('created_at', $tahun)->WhereMonth('created_at', '11')->count(),
            $desember = DownloadJurnal::WhereYear('created_at', $tahun)->WhereMonth('created_at', '12')->count()
        ];
        return view('admin.home', compact('row', 'profile', 'user', 'djurnal'), [
            "title" => "Home",
            "active" => "Home",
            "data" => $data
        ]);
    }
}
