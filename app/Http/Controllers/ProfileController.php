<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan seluruh data profile
        //INI ORM
        $profile = Profile::all();
        return view('profile.index',compact('profile'),[
            "title" => "Author Tabel",
            "active" => "Author"]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.form',[
            "title" => "Author Form",
            "active" => "Author"]);
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
            'nama' => 'required|unique:profile|max:45',
            'username' => 'required|unique:profile|max:45',
            'email' => 'required|unique:profile|max:45',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $profile = new Profile();
        $profile->nama = $request->nama;
        $profile->username = $request->username;
        $profile->email = $request->email;

        if ($request->hasFile('foto')) {
            $filename = $request->file('foto')->hashName();
            $request->file('foto')->move('assets/img/authors/', $filename);
            $profile->foto = 'assets/img/authors/'.$filename;
        }

        $profile->save();



        return redirect()->route('author.index')
                        ->with('success','Author Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('profile.edit',compact('profile'),[
            "title" => "Author Form",
            "active" => "Author"]);
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
            'nama' => 'required|max:45|unique:profile,nama,'.$id,
            'username' => 'required|max:45|unique:profile,username,'.$id,
            'email' => 'required|max:45|unique:profile,email,'.$id,
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $profile = Profile::find($id);
        $profile->nama = $request->nama;
        $profile->username = $request->username;
        $profile->email = $request->email;

        if ($request->hasFile('foto')) {
            if ($profile->foto != null) {
                unlink($profile->foto);
            }

            $filename = $request->file('foto')->hashName();
            $request->file('foto')->move('assets/img/authors/', $filename);
            $profile->foto = 'assets/img/authors/'.$filename;
        }

        $profile->save();

        return redirect()->route('author.index')
                        ->with('success','Author Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
