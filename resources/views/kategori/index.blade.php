@extends('layout.backend.template')
@section('title', 'Data Kategori')
@section('content')
<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-md-10">

            <a href="{{ route('kategori.create')}}" class="btn btn-primary mb-3" >
                <i class="fas fa-plus"></i>
                Tambah data</a>
            <div class="card">
                <div class="card-header">Data kategori</div>
                <div class="card-body">
                 <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama kategori</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $row->nama_kategori}}</td>
                            <td>{{ $row->created_at}}</td>
                            <td>
                                <form  method="POST" action="{{ route ('kategori.destroy', $row->id)}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Hapus" class="btn btn-danger">
                                <a href="{{ route ('kategori.edit', $row->id)}}" class="btn btn-warning">Edit</a>
                                </form>
                            </td>
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
