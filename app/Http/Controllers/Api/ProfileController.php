<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Http\Resources\ProfileResource;
use DB;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index()
    {
        //menampilkan seluruh data profile
        $profile = Profile::all();
        return new ProfileResource(true, 'Data Author', $profile);
    }

    public function showProfile($id)
    {
        $profile = Profile::find($id);
        return new ProfileResource(true, 'Detail Data Profile', $profile);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|unique:profile|max:45',
            'username' => 'required|unique:profile|max:45',
            'email' => 'required|unique:profile|max:45',
            // 'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // cek error atau tidak
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        // proses menyimpan data yang di input
        $profile = Profile::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email
        ]);
        return new ProfileResource(true, 'Data Profile Berhasil Di Input', $profile);
    }
}
