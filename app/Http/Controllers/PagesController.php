<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DownloadJurnal;
use App\Models\Kategori;
use App\Models\Profile;
use App\Models\Jurnal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\VersionUpdater\Downloader;

class PagesController extends Controller
{
    public function index()
    {
        $jurnal = Jurnal::with(['kategori', 'profile'])->latest()->get();
        $kategori = Kategori::all();
        $profile = Profile::all();
        $data = DB::table('jurnal')->select('kategori.nama_kategori', DB::raw('COUNT(jurnal.id) as jml_kategori'))
            ->join('kategori', 'jurnal.id_kategori', '=', 'kategori.id', 'right')
            ->groupBy('kategori.id')->get();
        return view('frontend.pages.home', compact('kategori', 'profile', 'jurnal', 'data'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    // public function after_register()
    // {
    //     return view('frontend.pages.after_register');
    // }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function postdetail($id)
    {
        $row = Jurnal::find($id);
        return view('frontend.pages.postdetail', compact('row'));
    }

    public function authordetail($id)
    {
        $jurnal = Jurnal::with('profile')->get();
        $row = Profile::find($id);
        return view('frontend.pages.author', compact('row', 'jurnal'));
    }

    public function upload()
    {
        return view('frontend.pages.upload');
    }

    public function download()
    {
        $id = request('jurnal_id');
        DownloadJurnal::create([
            'jurnal_id' => $id
        ]);
        return redirect()->back();
    }
}
