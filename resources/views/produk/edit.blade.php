@extends('layout.backend.template')
@section('title', 'Edit Produk')
@section('content')

<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-md-10">


            <div class="card">
                <div class="card-header">Edit Produk</div>
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

                 <form action="{{ route('produk.update', $produk->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="">Gambar</label>
                        <input type="file" name="image" class="form-control">
                        <img src="/images/{{ $produk->image }}" width="300px" alt="">
                    </div>
                    <div  class="mb-3">
                        <label for="">Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control" value="{{$produk->nama_produk}}" >
                    </div>
                    <div class="mb-3">
                        <label for="">Kategori</label>
                        <select name="kategori" id="" class="form-select">
                            <option disabled value="">-- Pilih Kategori --</option>
                            @foreach ($data_ctg as $row)
                                <option value="{{ $row->id }}"
                                    {{ $produk->ctg->id == $row->id ? 'selected' : '' }}>
                                    {{ $row->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Harga</label>
                        <input type="text" name="harga" class="form-control" value="{{$produk->harga}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Keterangan</label>
                         <input type="text" name="keterangan" class="form-control" value="{{$produk->keterangan}}">
                     </div>
                    <div class="mb-3">
                       <label for="">Stok</label>
                        <input type="text" name="stok" class="form-control" value="{{$produk->stok}}">
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
                    <a href="{{ route('produk.index')}}" class="btn btn-warning" >Batal</a>
                 </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
