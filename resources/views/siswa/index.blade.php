@extends('master.master')
@section('title', 'Data Siswa')
    
@section('content')
<div class="container">
    <div class="col-md-12">
        <h1 class="text-center">Data Siswa</h1>
    </div>
    <div class="row">
        <a href="/siswa/create">Tambah Siswa</a>
        <table border="1" class="table table-bordered">
            <thead>
                <th>No</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Action</th>
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
                            <a class="btn btn-warning" href="/siswa/{{ $s->id }}/edit">Edit</a>
                            <a class="btn btn-danger" href="/siswa/{{ $s->id }}/destroy">Hapus</a>
                        </form>
                    </td>
                </tr>                   
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
{{-- <div class="container" style="margin-top: 20px;">
    <div class="col-md-12 mb-3">
        <h1 class="text-center">Data Siswa</h1>
    </div>
    <a class="btn btn-success" href="/datasiswa/create" type="button" style="margin-bottom: 10px;">Tambah Data Siswa +</a>
    <table class="table text-light">
        <thead class="" style="font-size: 20px; background-color: #183d5d;">
            <th class="text-center">No.</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th class="text-center">Action</th>
        </thead>
        <tbody>
            @foreach ($siswa as $s)
            <tr style="font-size: 20px; ">
                <td style="width: 1%; white-space: nowrap;">{{ $s->id }}</td>
                <td style="width: 1%; white-space: nowrap;">{{ $s->nisn }}</td>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->alamat }}</td>
                <td style="width: 1%; white-space: nowrap;">
                    <a class="btn btn-sm btn-warning" href="/datasiswa/{{$s->id}}/edit">Edit</a>
                    <a class="btn btn-sm btn-danger" href="/datasiswa/{{$s->id}}/destroy">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div> --}}
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