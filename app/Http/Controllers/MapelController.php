<?php

namespace App\Http\Controllers;

use App\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtMapel = Mapel::paginate(5);
        return view('Halaman.Data-Mapel', compact('dtMapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Halaman.Create-Mapel');
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
        Mapel::create([
            'id' => $request->id,
            'kode_mapel' => $request->kode_mapel,
            'nama_mapel' => $request->nama_mapel,

        ]);
        return redirect('data-mapel')->with('success', 'Data Berhasil Disimpan!');
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
        $map = Mapel::findorfail($id);
        return view('Halaman.Edit-Mapel', compact('map'));
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
        $map = Mapel::findorfail($id);
        $map->update($request->all());
        return redirect('data-mapel')->with('success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $map = Mapel::findorfail($id);
        $map->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}