<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tabel_favorit;
use Illuminate\Http\Request;

class FavoritController extends Controller
{
    public function addfavorit(Request $request)
    {
        $status = null;
        $massage = null;
        $data = null;
        try {
            $data= new Tabel_favorit;
            $data->id_properti=$request->get('id_properti');
            $data->id_pengguna_android=$request->get('id_pengguna_android');

            $data->save();
            $massage = 'Sukses';
            $status = 200;
        }
        catch(\Exception $e) {
            $status = 400;
            $massage = 'Gagal' .$e->getMessage();
        }
        catch(\Illuminate\Database\QueryException $e) {
            $status = 400;
            $massage = 'Gagal' .$e->getMessage();
        }
        finally{
            $result = array(
                'status' => $status,
                'message' => $massage,
            );
            return response($result, $status);
        }
    }

    public function deletefavorit(Request $request)
    {
        $status = null;
        $massage = null;
        $data = null;
        try {
            $data= Tabel_favorit::where('id_properti', $request->get('id_properti'))->where('id_pengguna_android', $request->get('id_pengguna_android'))->first();
            $data->id_properti=$request->get('id_properti');
            $data->id_pengguna_android=$request->get('id_pengguna_android');
            $data->delete();
            $massage = 'Sukses';
            $status = 200;
        }
        catch(\Exception $e) {
            $status = 400;
            $massage = 'Gagal' .$e->getMessage();
        }
        catch(\Illuminate\Database\QueryException $e) {
            $status = 400;
            $massage = 'Gagal' .$e->getMessage();
        }
        finally{
            $result = array(
                'status' => $status,
                'message' => $massage,
            );
            return response($result, $status);
        }
    }

    public function checkfavorit(Request $request)
    {
        $status = null;
        $massage = null;
        $data = null;
        try {
            $data= Tabel_favorit::where('id_properti', $request->get('id_properti'))->where('id_pengguna_android', $request->get('id_pengguna_android'))->first();

            if($data != null) {
                $massage = 'sudah favorit';
            }
            else {
                $massage = 'belum favorit';
            }
            $status = 200;
        }
        catch(\Exception $e) {
            $status = 400;
            $massage = 'Gagal' .$e->getMessage();
        }
        catch(\Illuminate\Database\QueryException $e) {
            $status = 400;
            $massage = 'Gagal' .$e->getMessage();
        }
        finally{
            $result = array(
                'status' => $status,
                'message' => $massage
            );
            return response($result, $status);
        }
    }

    public function listfavorit(Request $request)
    {
        $status = null;
        $massage = null;
        $data = null;
        try {
            $data= Tabel_favorit::select('detail_properti.*')
                                    ->join('detail_properti', 'detail_properti.id', 'tabel_favorit.id_properti')
                                    ->where('tabel_favorit.id_pengguna_android', $request->get('id_pengguna_android'))
                                    ->get();

            $status = 200;
            $massage = 'Sukses';
        }
        catch(\Exception $e) {
            $status = 400;
            $massage = 'Gagal' .$e->getMessage();
        }
        catch(\Illuminate\Database\QueryException $e) {
            $status = 400;
            $massage = 'Gagal' .$e->getMessage();
        }
        finally{
            $result = array(
                'status' => $status,
                'message' => $massage,
                'data' => $data
            );
            return response($result, $status);
        }
    }
}
