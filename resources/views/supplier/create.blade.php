@extends('layout.be.template')
@section('title', 'Tambah Supplier ')

@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center"><strong>Tambah Data Supplier</strong>
                    </div>
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

                        <form action="{{ route('supplier-store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Nama PT</label>
                                <input type="text" name="nama_pt" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Nama Ketua</label>
                                <input type="text" name="nama_ketua" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Nomor Kontak</label>
                                <input type="number" name="nomor_kontak" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Alamat</label>
                                <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-primary">
                            <a href="{{ route('supplier-index') }}" class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
