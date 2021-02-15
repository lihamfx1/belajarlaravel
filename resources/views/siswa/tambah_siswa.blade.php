@extends('master.master')
@section('title', 'Tambah Siswa')

@section('content')
<div class="container" style="margin-top: 20px;">
    <div class="col-md-12 mb-3">
        <h1 class="text-center">Tambah Data Siswa</h1>
    </div>
    <form method="post" action="/siswa">
        @csrf
          <div class="form-group">
            <label for="inputNISN">NISN</label>
            <input type="number" class="form-control" name="nisn" autofocus>
            @error('nisn')
                <div class="small text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="inputNama">Nama</label>
          <input type="text" class="form-control" name="nama">
          @error('nama')
            <div class="small text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputAlamat">Alamat</label>
          <input class="form-control" type="text" name="alamat"></input>
          @error('alamat')
            <div class="small text-danger">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
