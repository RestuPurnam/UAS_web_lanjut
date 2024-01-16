@extends('layout.backend.template')
@section('title', 'Data transaksi')
@section('content')
<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-md-10">

            <a href="{{ route('transaksi.create')}}" class="btn btn-primary mb-3" >
                <i class="fas fa-plus"></i>
                Tambah data</a>
            <div class="card">
                <div class="card-header">Data transaksi</div>
                <div class="card-body">
                 <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Customer</th>
                            <th>Nama Produk</th>
                            <th>Harga Beli</th>
                            <th>Jumlah Pesan</th>
                            <th>Total</th>
                            <th>Tanggal Pesan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $row->customer?->nama_customer}}</td>
                            <td>{{ $row->produk?->nama_produk}}</td>
                            <td>{{ $row->harga_beli}}</td>
                            <td>{{ $row->jumlah_pesan}}</td>
                            <td>{{ $row->total}}</td>
                            <td>{{ $row->tanggal_pesan}}</td>
                            {{-- <td>{{ $row->category->name}}</td> --}}
                            <td> <form  method="POST" action="{{ route ('transaksi.destroy', $row->id)}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Hapus" class="btn btn-danger">
                                <a href="{{ route ('transaksi.edit', $row->id)}}" class="btn btn-warning">Edit</a>
                                </form></td>
                        </tr>
                        @endforeach
                    </tbody>
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
