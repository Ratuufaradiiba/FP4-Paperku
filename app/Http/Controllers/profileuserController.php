<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jurnal;
use App\Models\KelolaUser;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

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

    public function profileUser()
    {
        $jurnal = Jurnal::where('id_user', Auth::user()->id)->latest()->get();
        $row = auth()->user();
        return view('frontend.pages.profileUser.profile_user', compact('jurnal', 'row'), [
            "title" => "My Profile"
        ]);
    }

    public function create()
    {
        return view('profile.form', [
            "title" => "Author Form",
            "active" => "Author"
        ]);
    }


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

    // public function editJurnal($id)
    // {
    //     $profile = Jurnal::find($id);
    //     return view('profile.edit', compact('profile'), [
    //         "title" => "Author Form",
    //         "active" => "Author"
    //     ]);
    // }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|max:45|unique:users,name,' . auth()->user()->id,
            'username' => 'required|max:45|unique:users,username,' . auth()->user()->id,
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
            // 'password' => 'password'
        ]);

        $kelola_user = KelolaUser::find(auth()->user()->id);
        if ($request->password) {
            $password = bcrypt($request->password);
        } else {
            $password = $kelola_user->password;
        }

        $kelola_user->name = $request->name;
        $kelola_user->username = $request->username;
        $kelola_user->password = $password;
        // $kelola_user->bcrypt($request->password);

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

        return redirect()->back()
            ->with('success', 'Profile Berhasil Diupdate');
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
