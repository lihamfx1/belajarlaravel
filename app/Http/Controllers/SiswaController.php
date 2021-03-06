<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // untuk menampilkan form tambah data siswa
        
        return view('siswa.tambah_siswa');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $message= [
            'required'  => 'Pastikan data telah diisi',
            'digits'    => 'Pastikan angka terisi 8 digit',
            'max'       => 'Pastikan karakter/huruf tidak lebih dari 30'
        ];

        $validatedSiswa = $request->validate([
            'nisn'      => 'required|numeric|digits:8',
            'nama'      => 'required|max:30',
            'alamat'    => 'required|max:50'
        ], $message);

        Siswa::create($request->all());
        return redirect()->route('siswa.index')->with('alert', 'Data Siswa ' . $request->nama . ' berhasil ditambahkan!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $Siswa = Siswa::find($id);
        return view('siswa.edit', compact('Siswa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $message= [
        //     'required'  => 'Pastikan data telah diisi',
        //     'digits'    => 'Pastikan angka terisi 8 digit',
        //     'max'       => 'Pastikan karakter/huruf tidak lebih dari 30'
        // ];

        $validatedSiswa = $request->validate([
            'nisn'      => 'required|numeric|digits:8',
            'nama'      => 'required|max:30',
            'alamat'    => 'required|max:50'
        ]);
        Siswa::updateOrCreate(['id' => $id], request()->all());
        return redirect()->route('siswa.index')->with('alert', 'Data Siswa ' . $request->nama . ' berhasil diedit!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('alert', 'Data berhasil dihapus!');

    }
}