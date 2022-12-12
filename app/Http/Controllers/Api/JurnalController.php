<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurnal;
use App\Http\Resources\JurnalResource;
use DB;
use Illuminate\Support\Facades\Validator;

class JurnalController extends Controller
{
    public function index()
    {
        $jurnal = Jurnal::all();
        return new JurnalResource(true, 'Data Jurnal', $jurnal);
    }

    public function showJurnal($id)
    {
        $jurnal = Jurnal::find($id);
        return new JurnalResource(true, 'Detail Data Jurnal', $jurnal);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string',
            'tahun' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            // 'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'file' => 'required|mimes:pdf',
            'ket' => 'required|string',
            'isi' => 'required|string',
            'id_kategori' => 'required|exists:kategori,id',
            'id_profile' => 'required|exists:profile,id'
        ]);

        // cek error atau tidak
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        // proses menyimpan data yang di input
        $jurnal = Jurnal::create([
            'judul' => $request->judul,
            'tahun' => $request->tahun . (date('Y') + 1),
            // 'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'file' => 'required|mimes:pdf',
            'ket' => $request->ket,
            'isi' => $request->isi,
            'id_kategori' => $request->id_kategori,
            'id_profile' => $request->id_profile
        ]);
        return new JurnalResource(true, 'Data Jurnal Berhasil Di Input', $jurnal);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string',
            'tahun' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            // 'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'file' => 'required|mimes:pdf',
            'ket' => 'required|string',
            'isi' => 'required|string',
            'id_kategori' => 'required|exists:kategori,id',
            'id_profile' => 'required|exists:profile,id'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $jurnal = Jurnal::whereId($id)->update([
            'judul' => $request->judul,
            'tahun' => $request->tahun . (date('Y') + 1),
            // 'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'file' => 'required|mimes:pdf',
            'ket' => $request->ket,
            'isi' => $request->isi,
            'id_kategori' => $request->id_kategori,
            'id_profile' => $request->id_profile
        ]);
        return new JurnalResource(true, 'Data Jurnal Berhasil Di Ubah', $jurnal);
    }

    public function destroy($id)
    {
        $jurnal = Jurnal::whereId($id)->first();
        $jurnal->delete();
        //return response
        return new JurnalResource(true, 'Data Jurnal Berhasil Dihapus!', $jurnal);
    }
}
