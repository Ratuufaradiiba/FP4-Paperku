<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProfileuserController extends Controller
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
        $profile = User::all();
        return view('profile.index', compact('profile'), [
            "title" => "Author Tabel",
            "active" => "Author"
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.form', [
            "title" => "Author Form",
            "active" => "Author"
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
            'nama' => 'required|unique:profile|max:45',
            'username' => 'required|unique:profile|max:45',
            'email' => 'required|unique:profile|max:45',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $profile = new User();
        $profile->nama = $request->nama;
        $profile->username = $request->username;
        $profile->email = $request->email;

        if ($request->hasFile('foto')) {
            $filename = $request->file('foto')->hashName();
            $request->file('foto')->move('assets/img/authors', $filename);
            $profile->foto = 'assets/img/authors/' . $filename;
        }

        $profile->save();

        return redirect()->route('author.index')
            ->with('success', 'Author Berhasil Disimpan');
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
        $profile = User::find($id);
        return view('profile.edit', compact('profile'), [
            "title" => "Author Form",
            "active" => "Author"
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
            'nama' => 'required|max:45|unique:profile,nama,' . $id,
            'username' => 'required|max:45|unique:profile,username,' . $id,
            'email' => 'required|max:45|unique:profile,email,' . $id,
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $profile = User::find($id);
        $profile->nama = $request->nama;
        $profile->username = $request->username;
        $profile->email = $request->email;

        if ($request->hasFile('foto')) {
            if ($profile->foto != null) {
                unlink($profile->foto);
            }

            $filename = $request->file('foto')->hashName();
            $request->file('foto')->move('assets/img/authors/', $filename);
            $profile->foto = 'assets/img/authors/' . $filename;
        }

        $profile->save();

        return redirect()->route('author.index')
            ->with('success', 'Author Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = User::find($id);
        if (!empty($row->foto)) unlink($row->foto);
        User::where('id', $id)->delete();
        return redirect()->route('author.index')->with('success', 'Data Author Berhasil Di Hapus');
    }

    public function profilePDF()
    {
        $profile = User::all();
        $pdf = PDF::loadView('profile.profilePDF', [
            'title' => 'profilePDF',
            'profile' => $profile

        ]);

        return $pdf->download('profile.pdf');
    }

    // public function search(Request $request)
    // {
    //     $keyword = request('keyword');
    //     if ($keyword) {
    //         $profile = Profile::where('nama', 'LIKE', '%' . $keyword . '%')->get();
    //     } else {
    //         $profile = Profile::all();
    //     }
    //     return view('frontend.pages.searchResult', ['profile' => $profile, 'keyword' => $keyword]);
    // }
}