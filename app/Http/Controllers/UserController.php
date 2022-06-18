<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $nama = 'Nelson Rumpa';
        $alat = ['Laptop', 'Keyboard','Mouse','Meja','Mouse Pad'];
        return view('index', ['nama' => $nama, 'alat' => $alat]);
    }

    public function home()
    {
        return view('home');
    }

    public function process(Request $request)
    {
        $number = $request->input('number');
        $text = $request->input('text');
        $txt  = htmlspecialchars($text);
        $gd = $request->input('gender');
        $jurusan = $request->input('jurusan');
        $hobi = $request->input('hobi');
        $hb = implode("-",$hobi);
        return $number.','.$txt.','.$gd.','.$jurusan.','.$hb;
    }
    
    public function about()
    {
        $nama = 'About';
        return view('about', ['nama' => $nama]);

    }

    public function profile()
    {
        $nama = 'Profile';
        return view('profile', ['nama' => $nama]);
    }

    public function contact()
    {
        $nama = 'contact';
        return view('contact', ['nama' => $nama]);
    }
}
