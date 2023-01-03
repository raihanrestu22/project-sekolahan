<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtGuru = Guru::paginate(5);
        return view('Halaman.Data-Guru', compact('dtGuru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Halaman.Create-Guru');
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
        Guru::create([
            'id' => $request->id,
            'user_id' => $request->user_id,
            'nip' => $request->nip,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'pendidikan' => $request->pendidikan
        ]);
        return redirect('data-guru')->with('success', 'Data Berhasil Disimpan!');
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
        $gur = Guru::findorfail($id);
        return view('Halaman.Edit-Guru', compact('gur'));
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
        $gur = Guru::findorfail($id);
        $gur->update($request->all());
        return redirect('data-guru')->with('success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gur = Guru::findorfail($id);
        $gur->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}