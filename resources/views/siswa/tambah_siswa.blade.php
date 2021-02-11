@extends('master.master')
@section('title', 'Tambah Siswa')

@section('content')

{{-- <div class="container">
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
</div> --}}

<div class="container" style="margin-top: 20px;">
    <div class="col-md-12 mb-3">
        <h1 class="text-center">Tambah Data Siswa</h1>
    </div>
    <form method="post" action="/siswa">
        @csrf
          <div class="form-group">
            <label for="inputEmail4">NISN</label>
            <input type="number" class="form-control" name="nisn">
        </div>
        <div class="form-group">
          <label for="inputAddress">Nama</label>
          <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Alamat</label>
          <input class="form-control" type="text" name="alamat"></input>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
