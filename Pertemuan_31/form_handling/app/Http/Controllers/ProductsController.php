<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        $products = new Products;
        $products->nama = $request->get('nama');
        $products->deskripsi = $request->get('deskripsi');
        $products->gambar = $image_name;
        $products->save();

        // Products::create([
        //     'nama'  => $request->nama,
        //     'deskripsi' => $request->deskripsi,
        //     'gambar' => $image_name,

        // ]);

        return redirect()->route('products.index')
            ->with('success', 'Produk Berhasil Ditambahkan');
        // var_dump(Request('namaproduk'));
        // var_dump(Request('deskripsiproduk'));
        // var_dump(Request('formFile'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Products::find($id);
        return view('products.detail', ['products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::find($id);
        return view('products.edit', ['products' => $products]);
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
        $products = Products::find($id);

        $products->nama = $request->nama;
        $products->deskripsi = $request->deskripsi;

        if ($products->gambar && file_exists(storage_path('app/public/' . $products->gambar))) {
            \Storage::delete('public/' . $products->gambar);
        }

        $image_name = $request->file('image')->store('images', 'public');
        $products->gambar = $image_name;

        $products->save();

        return redirect()->route('products.index')
            ->with('success', 'Produk Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::find($id)->delete();
        return redirect()->route('products.index')
            ->with('success', 'Produk Berhasil Dihapus');
    }
}
