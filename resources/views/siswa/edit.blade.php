@extends('master.master')
@section('title', 'Edit Siswa')

@section('content')

<div class="container">
    <div class="col-md-12 mt-5">
        <h1 class="text-center">Edit Siswa</h1>
    </div>
        <form method="post" action="{{ route('update', $Siswa->id) }}">
            @csrf
            <div class="form-group">
                <label for="InputNISN">NISN</label>
                <input type="number" name="nisn" class="form-control" id="InputNISN" value="{{ $Siswa->nisn }}" placeholder="Enter NISN" autofocus>
                @error('nisn')
                    <div class="small text-danger">{{ $message }}</div>                  
                @enderror
            <div class="form-group">
                <label for="InputNama">Nama</label>
                <input type="text" name="nama" class="form-control" id="InputNama" value="{{ $Siswa->nama }}" placeholder="Enter Nama">
                @error('nama')
                    <div class="small text-danger">{{ $message }}</div>                  
                @enderror            
            </div>
            <div class="form-group">
                <label for="InputAlamat">Alamat</label>
                <input name="alamat" class="form-control" id="InputAlamat" value="{{ $Siswa->alamat }}" placeholder="Enter Alamat">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
@endsection
