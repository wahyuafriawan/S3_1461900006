<?php

namespace App\Http\Controllers;

use App\Models\BukuModel;
use DB;
use Illuminate\Http\Request;

class BukuController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = DB::table('rak_buku')
        ->join('buku','buku.id','=','rak_buku.id_buku')
        ->join('jenis_buku', 'jenis_buku.id', '=', 'rak_buku.id_jenis_buku')
        ->get();
        return view('buku0006', ['buku'=>$buku]);
    }

    public function create()
    {
        return view('buku_tambah0006');
    }
    public function store(Request $request)
    {
        BukuModel::create([
            'id' => $request->id,
            'judul' => $request->judul,
            'tahun_terbit' => $request->tahun_terbit,
        ]);
        return redirect('buku0006');
        
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
        $buku0006 = Buku0006::find($id);
        return view('buku_edit0006', ['buku0006' => $buku0006]);
        
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
        $buku0006 = Buku0006::find($id);
        $buku0006->id = $request->id;
        $buku0006->judul = $request->judul;
        $buku0006->tahun_terbit = $request->tahun_terbit;
        $buku0006->save();

        return redirect('buku0006');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku0006 = Buku00069::find($id);
        $buku0006->delete();

        return redirect('buku0006');
    }
}