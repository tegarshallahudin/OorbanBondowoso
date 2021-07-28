<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tabel_transaksi;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function riwayat(Request $request)
    {
        $status = null;
        $message = null;
        $data = null;
        try {
            $data = Tabel_transaksi::select('tabel_transaksi.id AS id_transaksi','tabel_transaksi.kode_transaksi','tabel_transaksi.id_properti','tabel_transaksi.id_pengguna_android','tabel_transaksi.users_id','tabel_transaksi.total_bayar',
                                            'users.id AS user_id', 'users.name',
                                            'detail_properti.id AS id_properti','detail_properti.nama_pemilik',
                                            'pengguna_android.id', 'pengguna_android.username')
                                            ->join('users','users.id', 'tabel_transaksi.users_id')
                                            ->join('detail_properti','detail_properti.id', 'tabel_transaksi.id_properti')
                                            ->join('pengguna_android','pengguna_android.id', 'tabel_transaksi.id_pengguna_android')
                                            ->where('pengguna_android.id', $request->get('id_pengguna_android'))
                                            ->orderBy('tabel_transaksi.kode_transaksi','ASC')
                                            ->get();
            $status = 200;
            $message = 'Sukses';
        }
        catch(\Exception $e) {
            $status = 400;
            $message = 'Gagal';
        }
        catch(\Illuminate\Database\QueryException $e) {
            $status = 400;
            $message = 'Gagal';
        }
        finally{
            $result = array(
                'status' => $status,
                'message' => $message,
                'data'  => $data
            );
            return response($result, $status);
        }
    }
}
