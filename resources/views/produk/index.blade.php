@extends('layout.backend.template')
@section('title', 'Data produk')
@section('content')
<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-md-10">

            <a href="{{ route('produk.create')}}" class="btn btn-primary mb-3" >
                <i class="fas fa-plus"></i>
                Tambah data</a>
            <div class="card">
                <div class="card-header">Data produk</div>
                <div class="card-body">
                 <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>keterangan</th>
                            <th>stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>
                                <img src="/images/{{ $row->image }}" width="100px" alt="">
                            </td>
                            <td>{{ $row->nama_produk }}</td>
                            <td>{{ $row->category?->nama_kategori }}</td>
                            <td>{{ $row->harga }}</td>
                            <td>{{ $row->keterangan }}</td>
                            <td>{{ $row->stok }}</td>
                            {{-- <td>{{ $row->category->name}}</td> --}}
                            <td> <form  method="POST" action="{{ route ('produk.destroy', $row->id)}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Hapus" class="btn btn-danger">
                                <a href="{{ route ('produk.edit', $row->id)}}" class="btn btn-warning">Edit</a>
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
