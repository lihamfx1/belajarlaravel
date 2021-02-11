@extends('master.master')
@section('title', 'Tambah Siswa')

@section('content')

<div class="container">
    <div class="col-md-12 mt-5">
        <h1 class="text-center">Tambah Siswa</h1>
    </div>
        <form method="post" action="/siswa">
            @csrf
            <div class="form-group">
                <label for="InputNISN">NISN</label>
                <input name="nisn" class="form-control" id="InputNISN" placeholder="Enter NISN" autofocus>
            </div>
            <div class="form-group">
                <label for="InputNama">Nama</label>
                <input name="nama" class="form-control" id="InputNama" placeholder="Enter Nama">
            </div>
            <div class="form-group">
                <label for="InputAlamat">Alamat</label>
                <input name="alamat" class="form-control" id="InputAlamat" placeholder="Enter Alamat">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
@endsection
