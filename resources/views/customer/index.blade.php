@extends('layout.backend.template')
@section('title', 'Data customer')
@section('content')
<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-md-10">

            <a href="{{ route('customer.create')}}" class="btn btn-primary mb-3" >
                <i class="fas fa-plus"></i>
                Tambah data</a>
            <div class="card">
                <div class="card-header">Data product</div>
                <div class="card-body">
                 <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Customer</th>
                            <th>Jenis Kelamin</th>
                            <th>Nomor HP</th>
                            <th>Alamat</th>
                            <th>E-mail</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $row->nama_customer}}</td>
                            <td>{{ $row->jk}}</td>
                            <td>{{ $row->no_hp}}</td>
                            <td>{{ $row->alamat}}</td>
                            <td>{{ $row->email}}</td>
                            {{-- <td>{{ $row->category->name}}</td> --}}
                            <td> <form  method="POST" action="{{ route ('customer.destroy', $row->id)}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Hapus" class="btn btn-danger">
                                <a href="{{ route ('customer.edit', $row->id)}}" class="btn btn-warning">Edit</a>
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
