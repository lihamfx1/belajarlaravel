@extends('master.master')
@section('title', 'Login')

@section('content')
<div class="container" style="margin-top: 20px;">
    <div class="col-md-12 mb-3">
        <h1 class="text-center">Tambah Data Siswa</h1>
    </div>
    <form method="post" action="{{ route('postLogin') }}">
        @csrf
          <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="nisn" autofocus>
            @error('nisn')
                <div class="small text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control" name="nama">
          @error('nama')
            <div class="small text-danger">{{ $message }}</div>
          @enderror
        </div>
        {{-- <div class="form-group">
          <label for="inputAlamat">Alamat</label>
          <input class="form-control" type="text" name="alamat"></input>
          @error('alamat')
            <div class="small text-danger">{{ $message }}</div>
          @enderror
        </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
