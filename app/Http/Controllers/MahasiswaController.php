<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = Mahasiswa::orderByDesc('id')
        ->paginate(10);
        return view('mahasiswa',['mahasiswa'=>$mahasiswa]);    
    }

    public function pencarian(Request $request)
    {
        $cari = $request->cari;
        $mahasiswa = Mahasiswa::where('nim', 'like', '%'.$cari.'%')->orWhere('nama', 'like', '%'.$cari.'%')->paginate();
        return view('mahasiswa',['mahasiswa'=>$mahasiswa]);    
    }

    public function formulirmahasiswa()
    {
        return view('formulirmahasiswa');    
    }

    public function simpanmahasiswa(Request $request)
    {
        $bidang_minat= implode(",", $request->bidang_minat);
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $bidang_minat
        ]);
        return redirect("/mahasiswa")->with('alert','Berhasil disimpan');
    }

    public function editmahasiswa($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('editmahasiswa',['mahasiswa'=>$mahasiswa]);
    }

    public function updatemahasiswa($id, Request $request)
    {
        $minat = implode(',',$request->bidang_minat);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->bidang_minat = $minat;
        $mahasiswa->save();
        return redirect("/mahasiswa")->with('ubah','Berhasil diubah');
    }

    public function hapusmahasiswa($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> delete();
        return redirect("/mahasiswa")->with('hapus','Berhasil dihapus');
    }
}
