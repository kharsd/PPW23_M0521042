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

    public function simpan(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
   
        $data = $request->all();
   
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
     
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
    
    public function edit($id){
        // $menu = Menu::find($id)->first();
        $mahasiswa = Mahasiswa::where('id', $id)->first();

        return view('mahasiswa.edit', ['mahasiswa'=>$mahasiswa]);
    }

    public function update($id, Request $request){
        // $data = [
        //     'nama' => $request->nama,
        //     'kategori' => $request->kategori,
        //     'harga' => $request->harga,
        //     //nama di db => nama di menuTambah u/ name=''
        // ];

        // Mahasiswa::find($id)->update($data);
        // // Menu::where('id', $id)->first();

        // return redirect()->route('mahasiswa');

        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required',
            'alamat' => 'required'
        ]);
   
        $data = $request->all();
   
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }else{
            unset($data['image']);
        }
           
        Mahasiswa::find($id)->update($data);
     
        return redirect()->route('mahasiswa');
    }

    public function hapus($id){
        Mahasiswa::find($id)->delete();

        return redirect()->route('mahasiswa');
    }

}
