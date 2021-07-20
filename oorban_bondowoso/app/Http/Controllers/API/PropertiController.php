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
        $massage = null;
        $data = null;
        try {
            $data = Detail_properti::orderby('nama_pemilik', 'asc')->get();
            $status = 200;
            $massage = 'Sukses';
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
}
