<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Transaksi::with('customer', 'produk')->orderBy('created_at', 'desc')->get();

        // dd($data);

        return view('transaksi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_customer = Customer::all();
        $data_produk = Produk::all();
        return view('transaksi.create', compact('data_customer', 'data_produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "customer_id" => "",
            "produk_id" => "",
            "harga_beli" => "required",
            "jumlah_pesan" => "required",
            "total" => "required",
            "tanggal_pesan" => "required",
        ]);

        transaksi::create($request->all());
        return to_route('transaksi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        $data_customer = Customer::all();
        $data_produk = Produk::all();
        return view("transaksi.edit", compact("transaksi", 'data_customer', 'data_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            "customer_id" => "",
            "produk_id" => "",
            "harga_beli" => "required",
            "jumlah_pesan" => "required",
            "total" => "required",
            "tanggal_pesan" => "required",
        ]);
        $transaksi->update($request->all());
        return to_route("transaksi.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return to_route("transaksi.index")->with("success", "Data berhasil disimpan");
    }
}
