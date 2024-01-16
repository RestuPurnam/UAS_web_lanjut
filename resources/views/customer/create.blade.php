@extends('layout.backend.template')
@section('title', 'Tambah Customer')
@section('content')

<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-md-10">


            <div class="card">
                <div class="card-header">Tambah Customer</div>
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

                 <form action="{{ route('customer.store')}}" method="POST">
                    @csrf
                    <div  class="mb-3">
                        <label for="">Nama Customers</label>
                        <input type="text" name="nama_customer" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Jenis Kelamin</label>
                        <select name="jk" class="form-select">
                            <option disabled value="">-- Pilih Jenis Kelamin --</option>
                            <option value="L" >Laki-Laki</option>
                            <option value="P" >Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Nomor HP</label>
                        <input type="text" name="no_hp" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat</label>
                         <input type="text" name="alamat" class="form-control">
                     </div>
                    <div class="mb-3">
                       <label for="">E-mail</label>
                        <input type="text" name="email" class="form-control">
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
                    <a href="{{ route('customer.index')}}" class="btn btn-warning" >Batal</a>
                 </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
