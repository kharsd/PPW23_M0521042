<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Eloquent
        // $data = product::all();

        // Query Builder
        $data = DB::table('product')->get();
        return view ('admin.produk', ['data'=>$data]);
    }

    public function tambah()
    {
        return view ('admin.produkTambah');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
   
        $data = $request->all();
   
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
    
        Product::create($data);
      
        return redirect()->route('product');
    }

    public function show($id, Product $product)
    {
        // Eloquent        
        // $product = product::where('id', $id)->first();

        // Query Builder
        $product = DB::table('product')
                        ->where('id', $id)
                        ->first();
        return view('admin.produkShow', ['product'=>$product]);
    }
    
    public function edit($id){
        // $menu = Menu::find($id)->first();
        $product = Product::where('id', $id)->first();

        return view('admin.produkEdit', ['product'=>$product]);
    }

    public function update($id, Request $request){
        $request->validate([
            'nama' => 'required',
            'harga' => 'required'
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
           
        Product::find($id)->update($data);
    
        return redirect()->route('product');
    }

    public function hapus($id){
        Product::find($id)->delete();

        return redirect()->route('product');
    }
}
