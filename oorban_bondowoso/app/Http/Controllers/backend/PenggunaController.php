<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = User::all();

        return view('master.pengguna.index')->with('pengguna', $pengguna);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengguna= new User;
        $pengguna->name=$request->get('nama');
        $pengguna->username=$request->get('username');
        $pengguna->password=\Hash::make($request->get('password'));
        $pengguna->alamat=$request->get('alamat');
        $pengguna->no_hp=$request->get('no_hp');
        $pengguna->email=$request->get('email');
        $pengguna->level=$request->get('level');
        $pengguna->save();
        return redirect('dashboard/master/pengguna')->with('success','Data berhasil di masukkan');
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
        $pengguna = User::where('id', $id)->first();

	    return view('master.pengguna.edit')->with('pengguna', $pengguna);
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
        $pengguna = User::find($id);
        $pengguna->name=$request->get('nama');
        $pengguna->username=$request->get('username');
        $pengguna->password=\Hash::make($request->get('password'));
        $pengguna->alamat=$request->get('alamat');
        $pengguna->no_hp=$request->get('no_hp');
        $pengguna->email=$request->get('email');
        $pengguna->level=$request->get('level');
        $pengguna->save();
        return redirect('dashboard/master/pengguna')->with('success','Data berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengguna = User::findOrFail($id);
        $pengguna->delete();
	    return redirect('dashboard/master/pengguna')->with('danger','Data berhasil dihapus');
    }
}
