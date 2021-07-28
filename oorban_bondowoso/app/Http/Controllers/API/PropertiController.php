<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Detail_properti;
use Illuminate\Http\Request;

class PropertiController extends Controller
{
    public function allProperty()
    {
        $status = null;
        $message = null;
        $data = null;
        try {
            $data = Detail_properti::where('status', '!=', 'TERJUAL')->orderBy('nama_pemilik', 'asc')->get();
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

    public function searchProperty(Request $request)
    {
        $status = null;
        $message = null;
        $data = null;
        try {
            $data = Detail_properti::where('status', '!=', 'TERJUAL')->where('nama_pemilik', 'like', '%'.$request->get('query').'%')->orderBy('nama_pemilik', 'asc')->get();
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
