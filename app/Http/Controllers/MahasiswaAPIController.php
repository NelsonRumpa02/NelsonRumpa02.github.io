<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class MahasiswaAPIController extends Controller
{
    public function all()
    {
        $mhs = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'massage' => 'Berhasil Ditampilkan',
            'data'    => $mhs
        ],200);
    }

    public function create(Request $request)
    {
        $mhs = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request->bidang_minat,
        ]);

        if($mhs)
        {
            return response()->json([
                'success' => true,
                'massage' => 'Berhasil Dibuat',
            ], 200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'massage' => 'Gagal Dibuat',
            ], 401);
        }
    }

    public function update($id, Request $request)
    {
        $mhs = Mahasiswa::whereId($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request->bidang_minat
        ]);

        if($mhs)
        {
            return response()->json([
                'success' => true,
                'massage' => 'Berhasil Diupdate',
            ], 200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'massage' => 'Gagal Diupdate',
            ], 400);
        }
    }

    public function delete($id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs -> delete();

        if($mhs)
        {
            return response()->json([
                'success' => true,
                'massage' => 'Berhasil Dihapus',
            ], 200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'massage' => 'Gagal Dihapus',
            ], 400);
        }
    }
}
