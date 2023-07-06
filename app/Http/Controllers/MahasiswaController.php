<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::all();
        return view ('mahasiswa.home', ['data'=>$data]);
    }

    public function tambah()
    {
        return view ('mahasiswa.form');
    }

    public function simpan(Request $request){
        $data = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'email' => $request->email,
            'alamat' => $request->alamat,
            //nama pada db => nama di form u/ name=''
        ];

        Mahasiswa::create($data);

        return redirect()->route('mahasiswa');
    }

    public function show($id, Mahasiswa $mahasiswa)
    {
        $mahasiswa = Mahasiswa::where('id', $id)->first();
        return view('mahasiswa.show', ['mahasiswa'=>$mahasiswa]);
    }
    
}
