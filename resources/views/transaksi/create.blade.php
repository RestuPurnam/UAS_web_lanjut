@extends('layout.backend.template')
@section('title', 'Tambah transaksi')
@section('content')

<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-md-10">


            <div class="card">
                <div class="card-header">Tambah transaksi</div>
                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                 <form action="{{ route('transaksi.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Nama Customer</label>
                        <select name="customer_id" id="" class="form-select">
                            <option disabled selected>-- Pilih --</option>
                            @foreach ($data_customer as $row)
                                <option value="{{ $row->id }}">{{ $row->nama_customer }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Nama Produk</label>
                        <select name="produk_id" id="" class="form-select">
                            <option disabled selected>-- Pilih --</option>
                            @foreach ($data_produk as $row)
                                <option value="{{ $row->id }}">{{ $row->nama_produk }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Harga Beli</label>
                        <input type="text" name="harga_beli" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Jumlah Pesan</label>
                         <input type="text" name="jumlah_pesan" class="form-control">
                     </div>
                    <div class="mb-3">
                       <label for="">Total</label>
                        <input type="text" name="total" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Tanggal Pesan</label>
                         <input type="date" name="tanggal_pesan" class="form-control">
                     </div>
                    {{-- <div class="mb-3">
                        <label for="">Kategori</label>

                        <select name="category_id" id="" class="form-select" >
                            @foreach ($data_category as $row )
                            <option value="{{ $row->id}}">{{ $row->name}}</option>

                            @endforeach
                        </select>

                        <input type="text" name="category_id" class="form-control">
                    </div> --}}

                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <a href="{{ route('transaksi.index')}}" class="btn btn-warning" >Batal</a>
                 </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
