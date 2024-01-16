<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Produk::with('category')->orderBy('created_at', 'desc')->get();

        // dd($data);

        return view('produk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_ctg = Kategori::all();
        return view('produk.create', compact('data_ctg'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "image" => "required|image|mimes:png,jpg,jpeg",
            "nama_produk" => "required",
            "kategori" => "required",
            "harga" => "required",
            "keterangan" => "required",
            "stok" => "required",
        ]);

        $input = $request->all();

        //upload gambar
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }

        Produk::create($input);
        return to_route('produk.index')->with("Success", "Berhasil");
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        $data_ctg = Kategori::all();
        return view("produk.edit", compact("produk", 'data_ctg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            "nama_produk" => "required",
            "kategori" => "required",
            "harga" => "required",
            "keterangan" => "required",
            "stok" => "required",
            "image" => "image|mimes:jpg,jpeg,png",
        ]);

        $input = $request->except('image');

        if ($request->hasFile('image')) {
            $destinationPath = 'images/';

            // Hapus gambar lama jika ada
            if ($produk->image && file_exists($destinationPath . $produk->image)) {
                unlink($destinationPath . $produk->image);
            }

            // Upload dan simpan gambar baru
            $image = $request->file('image');
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = $postImage;
        }

        $produk->update($input);
        return to_route("produk.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();
        return to_route("produk.index")->with("success", "Data berhasil disimpan");
    }
}
