@extends('master.master')
@section('title', 'Data Siswa')
    
@section('content')
<div class="container">
    <div class="col-md-12">
        <h1 class="text-center">Data Siswa</h1>
    </div>
    <div class="row">
        <a href="/siswa/tambah">Tambah Siswa</a>
        <table border="1" class="table table-bordered">
            <thead>
                <th>No</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Alamat</th>
            </thead>
            <tbody>
                @foreach ($siswa as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->nisn }}</td>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->alamat }}</td>
                    <td>
                        <form action="/siswa/{{ $s->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <a class="btn btn-primary" href="/siswa/{{ $s->id }}/edit">Edit</a>
                            <a type="submit" class="btn btn-danger">Hapus</a>
                        </form>
                    </td>
                </tr>                   
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
{{-- <div class="card mt-3">
    <div class="card-body">
        <h5>List Siswa</h5>
        <hr>
        <a href="/siswa/index" class="btn btn-danger"></a>
        <table class="table table-bordered mt-3">
            <thead>
                <th>NISN</th>
                <th>Nama</th>
                <th>Alamat</th>
            </thead>
            <tbody>
                @foreach($siswa as $s)
                <tr>
                <td>{{$s->nisn}}</td>
                <td>{{$s->nama}}</td>
                <td>{{$s->alamat}}</td>       
                <td class="fit">
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-primary">Hapus</button>                    
                </td>                        
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> --}}