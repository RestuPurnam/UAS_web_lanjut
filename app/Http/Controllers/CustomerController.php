<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = customer::all();

        // dd($data);

        return view('customer.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_customer" => "required",
            "jk" => "required",
            "no_hp" => "required",
            "alamat" => "required",
            "email" => "required",
        ]);

        Customer::create($request->all());
        return to_route('customer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view("customer.edit", compact("customer"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            "nama_customer" => "required",
            "jk" => "required",
            "no_hp" => "required",
            "alamat" => "required",
            "email" => "required",

        ]);
        $customer->update($request->all());
        return to_route("customer.index")->with("success", "Data berhasil disimpan");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return to_route("customer.index")->with("success", "Data berhasil disimpan");
    }
}
