<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pengguna_android;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $status = null;
        $massage = null;
        $data = null;
        try {
            $data = Pengguna_android::where('username', $request->get('username'))->first();
            if($request->get('password')== $data->password){
                $massage = 'Sukses';
            }else{
                $massage = 'Password Salah';
            }
            $status = 200;
        }
        catch(\Exception $e) {
            $status = 400;
            $massage = 'Gagal';
        }
        catch(\Illuminate\Database\QueryException $e) {
            $status = 400;
            $massage = 'Gagal';
        }
        finally{
            $result = array(
                'status' => $status,
                'masssage' => $massage,
                'data'  => $data
            );
            return response($result, $status);
        }
    }

    public function register(Request $request)
    {
        $status = null;
        $massage = null;
        $data = null;
        try {
            $data= new Pengguna_android;
            $data->nama_lengkap=$request->get('nama_lengkap');
            $data->username=$request->get('username');
            $data->email=$request->get('email');
            $data->password=$request->get('password');

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
                'masssage' => $massage,
            );
            return response($result, $status);
        }
    }

    public function update(Request $request)
    {
        $status = null;
        $massage = null;
        $data = null;
        try {
            $data= Pengguna_android::find($request->get('id'));
            $data->nama_lengkap=$request->get('nama_lengkap');
            $data->username=$request->get('username');
            $data->alamat=$request->get('alamat');
            $data->nik=$request->get('nik');
            $data->no_hp=$request->get('no_hp');
            $data->email=$request->get('email');
            $data->gender=$request->get('gender');
            $data->password=$request->get('password');

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
                'masssage' => $massage,
                'data' => $data
            );
            return response($result, $status);
        }
    }
}
