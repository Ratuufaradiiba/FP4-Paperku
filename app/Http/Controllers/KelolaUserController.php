<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KelolaUser;
use App\Models\Profile;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class KelolaUserController extends Controller
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
        $kelola_user = KelolaUser::all();
        return view('kelola_user.index', compact('kelola_user'), [
            "title" => "Kelola User",
            "active" => "Kelola User"
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
            'name' => 'required|unique:users|max:45',
            'username' => 'required|unique:users|max:45',
            'email' => 'required|unique:users|max:45',
            'role' => 'required|unique:users|max:45',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $kelola_user = new KelolaUser();
        $kelola_user->nama = $request->name;
        $kelola_user->username = $request->username;
        $kelola_user->email = $request->email;

        if ($request->hasFile('foto')) {
            $filename = $request->file('foto')->hashName();
            $request->file('foto')->move('assets/img/authors', $filename);
            $kelola_user->foto = 'assets/img/authors/' . $filename;
        }

        $kelola_user->save();

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
        $kelola_user = KelolaUser::find($id);
        return view('kelola_user.edit', compact('kelola_user'), [
            "title" => "Kelola User Edit",
            "active" => "Kelola User"
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
            'name' => 'required|max:45|unique:users,name,' . $id,
            'username' => 'required|max:45|unique:users,username,' . $id,
            'email' => 'required|max:45|unique:users,email,' . $id,
            'role' => 'required|max:45|:users,role,' . $id,
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $kelola_user = KelolaUser::find($id);
        $kelola_user->name = $request->name;
        $kelola_user->username = $request->username;
        $kelola_user->email = $request->email;
        $kelola_user->role = $request->role;
        // dd($request->file('foto')->hashName());
        if ($request->hasFile('foto')) {
            if ($kelola_user->foto != null) {
                // unlink($kelola_user->foto);
            }

            $filename = $request->file('foto')->hashName();
            $request->file('foto')->move('assets/img/users/', $filename);
            $kelola_user->foto = 'assets/img/users/' . $filename;
        }


        $kelola_user->save();
        Profile::where('id_user', $kelola_user->id)->update([
            'nama' => $kelola_user->name,
            'username' => $kelola_user->username,
            'foto' => $kelola_user->foto
        ]);
        return redirect()->route('kelola_user.index')
            ->with('success', 'User Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = KelolaUser::find($id);
        if (!empty($row->foto)) unlink($row->foto);
        KelolaUser::where('id', $id)->delete();
        return redirect()->route('kelola_user.index')->with('success', 'Data User Berhasil Di Hapus');
    }

    public function profilePDF()
    {
        $profile = KelolaUser::all();
        $pdf = PDF::loadView('profile.profilePDF', [
            'title' => 'profilePDF',
            'profile' => $profile

        ]);

        return $pdf->download('profile.pdf');
    }
}
