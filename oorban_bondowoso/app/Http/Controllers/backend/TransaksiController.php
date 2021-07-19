<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Detail_properti;
use App\Models\Tabel_transaksi;
use App\Models\Pengguna_android;
use App\Models\User;
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

        $properti = Tabel_transaksi::select('tabel_transaksi.id AS id_transaksi','tabel_transaksi.kode_transaksi','tabel_transaksi.id_properti','tabel_transaksi.id_pengguna_android','tabel_transaksi.users_id','tabel_transaksi.total_bayar',
                                            'users.id AS user_id', 'users.name',
                                            'detail_properti.id AS id_properti','detail_properti.nama_pemilik',
                                            'pengguna_android.id', 'pengguna_android.username')
                                            ->join('users','users.id', 'tabel_transaksi.users_id')
                                            ->join('detail_properti','detail_properti.id', 'tabel_transaksi.id_properti')
                                            ->join('pengguna_android','pengguna_android.id', 'tabel_transaksi.id_pengguna_android')
                                            ->orderBy('tabel_transaksi.kode_transaksi','ASC')
                                            ->get();
        // return $properti;
        return view('master.transaksi.index', $this->param)->with('tabel_transaksi', $properti);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $noTransaksi = null;
        // $randomAngka = rand(5,15);
        $transaksi = Tabel_transaksi::orderBy('kode_transaksi', 'DESC')->get();
        if ($transaksi->count() > 0) {
            $kode_transaksi = $transaksi[0]->kode_transaksi;
            $lastKodeTransaksi = substr($kode_transaksi, 2 );
            $kodeTransaksiBaru = str_pad($lastKodeTransaksi + 1,5, 0, STR_PAD_LEFT);
            $noTransaksi = 'KT'.$kodeTransaksiBaru;
            // return $noTransaksi;
        }else{
            $noTransaksi = 'KT00001';
        }
        $this->param['noTransaksi'] = $noTransaksi;
        $this->param['title'] = "Tambah Data";
        $this->param['data_properti'] = Detail_properti::all();
        $this->param['pengguna'] = User::all();
        $this->param['user_android'] = Pengguna_android::all();

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
        // return $request->get('kode_transaksi');
        $transaksi= new Tabel_transaksi;
        $transaksi->kode_transaksi= $request->get('kode_transaksi');
        $transaksi->id_properti=$request->get('id_properti');
        $transaksi->id_pengguna_android=$request->get('id_pengguna_android');
        $transaksi->users_id=$request->get('id_pengguna');
        $transaksi->total_bayar=$request->get('harga');
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
        $transaksi= Tabel_transaksi::find($id);
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
        // return $transaksi->kode_transaksi;
        $transaksi->delete();
	    return redirect('dashboard/master/transaksi')->with('danger','Data berhasil dihapus');
    }
}
