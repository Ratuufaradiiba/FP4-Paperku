<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jurnal;
use App\Models\Kategori;
use App\Models\Profile;
use Illuminate\Http\Request;
use DB;
use App\Exports\jurnalExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDF;
use Illuminate\Support\Facades\Auth;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan seluruh data jurnal
        //INI ORM 
        $jurnal = Jurnal::with(['kategori', 'profile'])->get();
        return view('jurnal.index', compact('jurnal'), [
            "title" => "Jurnal Tabel",
            "active" => "Jurnal"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $penulis = Profile::all();
        return view('jurnal.form', compact('kategori', 'penulis'), [
            "title" => "Jurnal Form",
            "active" => "Jurnal"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'tahun' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'required|mimes:pdf',
            'ket' => 'required|string',
            'isi' => 'required|string',
            'id_kategori' => 'required|exists:kategori,id',
            'id_profile' => 'required|exists:profile,id'
        ]);

        $jurnal = new Jurnal();
        $jurnal->judul = $request->judul;
        $jurnal->tahun = $request->tahun;
        $jurnal->id_profile = $request->id_profile;
        $jurnal->ket = $request->ket;
        $jurnal->isi = $request->isi;
        $jurnal->id_kategori = $request->id_kategori;
        $jurnal->id_user = Auth::user()->id;

        if ($request->hasFile('foto')) {
            $filename = $request->file('foto')->hashName();
            $request->file('foto')->move('assets/img/jurnals', $filename);
            $jurnal->foto = 'assets/img/jurnals/' . $filename;
        }
        if ($request->hasFile('file')) {
            $filename = $request->file('file')->hashName();
            $request->file('file')->move('assets/img/jurnals', $filename);
            $jurnal->file = 'assets/img/jurnals/' . $filename;
        }

        $jurnal->save();

        return redirect()->route('jurnal.index')->with('success', 'Jurnal berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Jurnal::find($id);
        return view('jurnal.detail', compact('row'), [
            "title" => "Detail Jurnal",
            "active" => "Jurnal"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurnal = Jurnal::findOrFail($id);
        $kategori = Kategori::all();
        $penulis = Profile::all();
        return view('jurnal.edit', compact('jurnal', 'kategori', 'penulis'), [
            "title" => "Edit Jurnal",
            "active" => "Jurnal"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string',
            'tahun' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'required|mimes:pdf',
            'ket' => 'required|string',
            'isi' => 'required|string',
            'id_kategori' => 'required|exists:kategori,id',
            'id_profile' => 'required|exists:profile,id'
        ]);

        $jurnal = Jurnal::findOrFail($id);
        $jurnal->judul = $request->judul;
        $jurnal->tahun = $request->tahun;
        $jurnal->id_profile = $request->id_profile;
        $jurnal->ket = $request->ket;
        $jurnal->isi = $request->isi;
        $jurnal->id_kategori = $request->id_kategori;

        if ($request->hasFile('foto')) {
            if ($jurnal->foto != null) {
                unlink($jurnal->foto);
            }
            $filename = $request->file('foto')->hashName();
            $request->file('foto')->move('assets/img/jurnals', $filename);
            $jurnal->foto = 'assets/img/jurnals/' . $filename;
        }
        if ($request->hasFile('file')) {
            if ($jurnal->file != null) {
                unlink($jurnal->file);
            }
            $filename = $request->file('file')->hashName();
            $request->file('file')->move('assets/img/jurnals', $filename);
            $jurnal->file = 'assets/img/jurnals/' . $filename;
        }

        $jurnal->save();

        return redirect()->route('jurnal.index')->with('success', 'Jurnal berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Jurnal::find($id);
        if (!empty($row->foto)) unlink($row->foto);
        if (!empty($row->file)) unlink($row->file);
        Jurnal::where('id', $id)->delete();
        return redirect()->route('jurnal.index')->with('success', 'Data Jurnal Berhasil Di Hapus');
    }

    public function JurnalExcel()
    {
        return Excel::download(new jurnalExport, 'jurnal.xlsx');
    }

    public function jurnalPDF()
    {
        $Jurnal = Jurnal::all();
        $pdf = PDF::loadView('jurnal.jurnalPDF', [
            'Jurnal' => $Jurnal,
            'title' => 'jurnalPDF',
            "active" => "Jurnal"
        ]);

        return $pdf->download('datajurnal.pdf');
    }
}
