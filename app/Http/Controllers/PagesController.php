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
        $jurnal = Jurnal::with(['kategori', 'profile'])->latest()->limit(10)->get();
        $jurnalkanan = Jurnal::with(['kategori', 'profile'])->latest()->limit(3)->get();
        $kategori = Kategori::all();
        $profile = Profile::all();
        $data = DB::table('jurnal')->select('kategori.id as idKategori', 'kategori.nama_kategori', DB::raw('COUNT(jurnal.id) as jml_kategori'))
            ->join('kategori', 'jurnal.id_kategori', '=', 'kategori.id', 'right')
            ->groupBy('kategori.id')->get();
        return view('frontend.pages.home', compact('kategori', 'profile', 'jurnal', 'data','jurnalkanan'));
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
        //$jurnal = Jurnal::with('profile')->where('id_profile', $id)->get();
        $row = Profile::with('jurnal')->withCount('jurnal')->find($id);
        return view('frontend.pages.author', compact('row'));
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

    public function search(Request $request)
    {
        $keyword = request('keyword');
        if ($keyword) {
            $jurnal = Jurnal::where('judul', 'LIKE', '%' . $keyword . '%')->get();
        } else {
            $jurnal = Jurnal::all();
        }


        return view('frontend.pages.searchResult', ['jurnal' => $jurnal, 'keyword' => $keyword]);
    }

    public function filter_kategori($id)
    {
        $jurnal = Jurnal::with('kategori')->where('id_kategori', $id)->get();
        $row = Kategori::find($id);
        return view('frontend.pages.filter_kategori', compact('row', 'jurnal'));
    }
}
    // --------------------- PEMBELAJARAN REST API MANUAL JSON --------------------- NOTE: TAROH DIDALAM CLASS DIATAS JIKA INGIN DIGUNAKAN
    
    // public function apiJurnal()
    // {
    //     $jurnal = Jurnal::all();

    //     return response()->json(
    //         [
    //             'success' => true,
    //             'message' => 'Data Jurnal',
    //             'data' => $jurnal,
    //         ],
    //         200
    //     );
    // }

    // public function apiJurnalDetail($id)
    // {
    //     // menampilkan detail data tiap jurnal
    //     $jurnal = Jurnal::find($id);
    //     if ($jurnal) { // jika data jurnal ditemukan maka tampilkan
    //         return response()->json(
    //             [
    //                 'success' => true,
    //                 'message' => 'Detail Jurnal',
    //                 'data' => $jurnal,
    //             ],
    //             200 // kode success
    //         );
    //     } else { // jika data jurnal tidak ditemukan
    //         return response()->json(
    //             [
    //                 'success' => false,
    //                 'message' => 'Detail Jurnal Tidak Ditemukan',
    //                 'data' => $jurnal,
    //             ],
    //             404 // kode error
    //         );
    //     }
    // }

    // public function apiKategori()
    // {
    //     $kategori = Kategori::all();

    //     return response()->json(
    //         [
    //             'success' => true,
    //             'message' => 'Data Kategori',
    //             'data' => $kategori,
    //         ],
    //         200
    //     );
    // }

    // public function apiKategoriDetail($id)
    // {
    //     // menampilkan detail data tiap Kategori
    //     $kategori = Kategori::find($id);
    //     if ($kategori) { // jika data Kategori ditemukan maka tampilkan
    //         return response()->json(
    //             [
    //                 'success' => true,
    //                 'message' => 'Detail Kategori',
    //                 'data' => $kategori,
    //             ],
    //             200 // kode success
    //         );
    //     } else { // jika data kategori tidak ditemukan
    //         return response()->json(
    //             [
    //                 'success' => false,
    //                 'message' => 'Detail Kategori Tidak Ditemukan',
    //                 'data' => $kategori,
    //             ],
    //             404 // kode error
    //         );
    //     }
    // }
    // public function apiProfile()
    // {
    //     $profile = Profile::all();

    //     return response()->json(
    //         [
    //             'success' => true,
    //             'message' => 'Data Profile',
    //             'data' => $profile,
    //         ],
    //         200
    //     );
    // }

    // public function apiProfileDetail($id)
    // {
    //     // menampilkan detail data tiap Profile
    //     $profile = Profile::find($id);
    //     if ($profile) { // jika data Profile ditemukan maka tampilkan
    //         return response()->json(
    //             [
    //                 'success' => true,
    //                 'message' => 'Detail Profile',
    //                 'data' => $profile,
    //             ],
    //             200 // kode success
    //         );
    //     } else { // jika data Profile tidak ditemukan
    //         return response()->json(
    //             [
    //                 'success' => false,
    //                 'message' => 'Detail Profile Tidak Ditemukan',
    //                 'data' => $profile,
    //             ],
    //             404 // kode error
    //         );
    //     }
    // }

    // --------------------- END // PEMBELAJARAN REST API MANUAL JSON // END ---------------------
