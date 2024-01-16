@extends('layout.backend.template')
@section('title', 'Tambah Category')
@section('content')

<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-md-10">


            <div class="card">
                <div class="card-header">Tambah kategori</div>
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

                 <form action="{{ route('kategori.update', $kategori->id)}}" method="POST">
                    @csrf
                    @method('patch')
                    <div  class="mb-3">
                        <label for="">Nama Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control" value="{{$kategori->nama_kategori}}">
                    </div>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <a href="{{route('kategori.index')}}" class="btn btn-warning" >Batal</a>
                 </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
