<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user()
    {
        $user = User::paginate(10);
        return view('user',['user' => $user]);
    }

    public function formuliruser()
    {
        return view('formuliruser');
    }

    public function simpanuser(Request $request)
    {
        $user = request()->validate([
            'nik_user' => 'required',
            'nama_user' => 'required',
            'no_hp' => 'required',
            'password' => 'required',
        ]);
        
       $user = User::create([
           'nik_user' => $request -> nik_user,
           'nama_user' => $request -> nama_user,      
           'no_hp' => $request -> no_hp,
           'password' => bcrypt($request -> password)
       ]);
       return redirect('/user')->with('alert','Berhasil disimpan');
    }

    public function edituser($id)
    {
        $user = User::find($id);
        return view('edituser',['user'=>$user]);
    }

    public function updateuser($id, Request $request)
    {
        $user = request()->validate([
            'nik_user' => 'required',
            'nama_user' => 'required',
            'no_hp' => 'required',
            'password' => 'required',
        ]);

        $user = user::find($id);
        $user->nik_user = $request->nik_user;
        $user->nama_user = $request->nama_user;
        $user->no_hp = $request->no_hp;
        $user->password = bcrypt($request -> password);
        $user->save();
        return redirect("/user")->with('ubah','Berhasil diubah');
    }

    public function hapususer($id)
    {
        $user = User::find($id);
        $user -> delete();
        return redirect("/user")->with('hapus','Berhasil dihapus');
    }

    public function login()
    {
        return view('login');
    }

    public function ceklogin(Request $request)
    {
        if(!Auth::attempt(['nama_user' => $request->nama_user,'password' => $request->password]))
        {
            return redirect('/login');
        }
        else
        {
            return redirect('/mahasiswa');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('logout','Berhasil Logout');
    }
}
