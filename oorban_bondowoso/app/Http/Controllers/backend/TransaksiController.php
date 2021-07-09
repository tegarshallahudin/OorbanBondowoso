<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Detail_properti;
use App\Models\Tabel_transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->param['title'] = "Data Transaksi";

        $properti = Tabel_transaksi::all();

        return view('master.transaksi.index', $this->param)->with('tabel_transaksi', $properti);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->param['title'] = "Tambah Data";
        $this->param['data_properti'] = Detail_properti::all();
        return view('master.transaksi.create', $this->param);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi= Detail_transaksi::find($id);
        $transaksi->kode_transkasi=$request->get('kode_transaksi');
        $transaksi->id_properti=$request->get('id_properti');
        $transaksi->id_pengguna_android=$request->get('id_pengguna_android');
        $transaksi->id_pengguna=$request->get('id_pengguna');
        $transaksi->total_bayar=$request->get('total_bayar');
        $transaksi->kembalian=$request->get('kembalian');
        $transaksi->save();
        return redirect('dashboard/master/transaksi')->with('success','Data berhasil di masukkan');
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
        $tabel_transaksi = Tabel_transaksi::where('id', $id)->first();

	    return view('master.transaksi.edit')->with('transaksi', $tabel_transaksi);
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
        $transaksi= Detail_transaksi::find($id);
        $transaksi->kode_transkasi=$request->get('kode_transaksi');
        $transaksi->id_properti=$request->get('id_properti');
        $transaksi->id_pengguna_android=$request->get('id_pengguna_android');
        $transaksi->id_pengguna=$request->get('id_pengguna');
        $transaksi->total_bayar=$request->get('total_bayar');
        $transaksi->kembalian=$request->get('kembalian');
        $transaksi->save();
        return redirect('dashboard/master/transaksi')->with('success','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Tabel_transaksi::findOrFail($id);
        $transaksi->delete();
	    return redirect('dashboard/master/transaksi')->with('danger','Data berhasil dihapus');
    }
}
