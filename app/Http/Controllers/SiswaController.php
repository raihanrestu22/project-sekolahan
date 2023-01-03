<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtSiswa = Siswa::paginate(5);
        return view('Halaman.Data-Siswa', compact('dtSiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Halaman.Create-Siswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Siswa::create([
            'id' => $request->id,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'nama_ortu' => $request->nama_ortu,
            'alamat' => $request->alamat,
            'phone_number' => $request->phone_number,
            'kelas_id' => $request->kelas_id

        ]);
        return redirect('data-siswa')->with('success', 'Data Berhasil Disimpan!');
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
        $sis = Siswa::findorfail($id);
        return view('Halaman.Edit-Siswa', compact('sis'));
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
        $sis = Siswa::findorfail($id);
        $sis->update($request->all());
        return redirect('data-siswa')->with('success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sis = Siswa::findorfail($id);
        $sis->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}