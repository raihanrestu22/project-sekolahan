<?php

namespace App\Http\Controllers;

use App\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtJadwal = Jadwal::paginate(5);
        return view('Halaman.Data-Jadwal', compact('dtJadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Halaman.Create-Jadwal');
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
        Jadwal::create([
            'id' => $request->id,
            'kelas_id' => $request->kelas_id,
            'mapel_id' => $request->mapel_id,
            'guru_id' => $request->guru_id,
            'hari' => $request->hari,
            'jam_pelajaran' => $request->jam_pelajaran
        ]);
        return redirect('data-jadwal')->with('success', 'Data Berhasil Disimpan!');
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
        $jad = Jadwal::findorfail($id);
        return view('Halaman.Edit-Jadwal', compact('jad'));
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
        $jad = Jadwal::findorfail($id);
        $jad->update($request->all());
        return redirect('data-jadwal')->with('success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jad = Jadwal::findorfail($id);
        $jad->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}