<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view("halaman.index", compact('data'));
    }
}
