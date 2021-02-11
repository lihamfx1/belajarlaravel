@extends('master.master')
@section('title', 'Edit Siswa')

@section('content')

<div class="container">
    <div class="col-md-12 mt-5">
        <h1 class="text-center">Edit Siswa</h1>
    </div>
        <form method="post" action="/siswa/{{ $siswa->id }}">
            
            @csrf
            <div class="form-group">
                <label for="InputNISN">NISN</label>
                <input type="number" name="nisn" class="form-control" id="InputNISN" value="{{ $siswa->nisn }}" placeholder="Enter NISN" autofocus>
            </div>
            <div class="form-group">
                <label for="InputNama">Nama</label>
                <input type="text" name="nama" class="form-control" id="InputNama" value="{{ $siswa->nama }}" placeholder="Enter Nama">
            </div>
            <div class="form-group">
                <label for="InputAlamat">Alamat</label>
                <input name="alamat" class="form-control" id="InputAlamat" value="{{ $siswa->alamat }}" placeholder="Enter Alamat">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
@endsection
