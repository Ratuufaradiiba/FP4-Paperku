<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Http\Resources\KategoriResource;
use DB;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    public function index()
    {
        //menampilkan seluruh data kategori
        $kategori = Kategori::all();
        return new KategoriResource(true, 'Data Kategori', $kategori);
    }

    public function showKategori($id)
    {
        $kategori = Kategori::find($id);
        return new KategoriResource(true, 'Detail Data Kategori', $kategori);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori' => 'required|unique:kategori|max:45'
        ]);

        // cek error atau tidak
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $kategori = Kategori::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return new KategoriResource(true, 'Data Kategori Berhasil Di Input', $kategori);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori' => 'required|unique:kategori|max:45'
        ]);

        // cek error atau tidak
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $kategori = Kategori::whereId($id)->update([
            'nama_kategori' => $request->nama_kategori
        ]);
        return new KategoriResource(true, 'Data Kategori Berhasil Di Update', $kategori);
    }

    public function destroy($id)
    {
        $kategori = Kategori::whereId($id)->first();
        $kategori->delete();
        //return response
        return new KategoriResource(true, 'Data Kategori Berhasil Dihapus!', $kategori);
    }
}
