<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Eloquent
        // $data = Mahasiswa::all();

        // Query Builder
        $data = DB::table('mahasiswa')
                    ->orderBy('nim', 'asc')
                    ->get();
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
        // Eloquent        
        // $mahasiswa = Mahasiswa::where('id', $id)->first();

        // Query Builder
        $mahasiswa = DB::table('mahasiswa')
                        ->where('id', $id)
                        ->first();
        return view('mahasiswa.show', ['mahasiswa'=>$mahasiswa]);
    }
    
}
