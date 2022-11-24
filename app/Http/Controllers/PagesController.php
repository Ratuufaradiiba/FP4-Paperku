<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DownloadJurnal;
use App\Models\Kategori;
use App\Models\Profile;
use App\Models\Jurnal;
use Illuminate\Http\Request;
use Psy\VersionUpdater\Downloader;

class PagesController extends Controller
{
    public function index()
    {
        $jurnal = Jurnal::with(['kategori','profile'])->get();
        $kategori = Kategori::all();
        $profile = Profile::all();
        return view('frontend.pages.home', compact('kategori','profile','jurnal'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

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
        return view('frontend.pages.postdetail',compact('row'));
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
