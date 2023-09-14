<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use RealRashid\SweetAlert\Facades\Alert;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $mahasiswa = Mahasiswa::all();
       return view('mahasiswa.index',compact('mahasiswa')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa;

        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $mahasiswa->npm = $request->npm;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;

        $simpan = $mahasiswa->save();

        if($simpan){
            Alert::success('Success', 'Data Berasil ditambah');
            return redirect('/mahasiswa');
        }else{
            Alert::error('Failed', 'Data Gagal ditambah');
        }

        return redirect('/mahasiswa');
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
        $mahasiswa = Mahasiswa::where('id',$id)->first();

        return view('mahasiswa.edit', compact('mahasiswa'));
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
        
        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->npm = $request->npm;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;

        $ubah = $mahasiswa->save();

        if($ubah){
            Alert::success('Success', 'Data Berasil diubah');
            return redirect('/mahasiswa');
        }else{
            Alert::error('Failed', 'Data Gagal diubah');
        }

        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $hapus = $mahasiswa ->delete();

        if($hapus){
            Alert::success('Success', 'Data Berasil dihapus');
            return redirect('/mahasiswa');
        }else{
            Alert::error('Failed', 'Data Gagal dihapus');
        }
        return redirect('/mahasiswa');
    }
}
