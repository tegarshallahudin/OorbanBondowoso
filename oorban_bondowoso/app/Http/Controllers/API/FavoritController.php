<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tabel_favorit;
use Illuminate\Http\Request;

class FavoritController extends Controller
{
    public function allfavorit(Request $request)
    {
        $status = null;
        $massage = null;
        $data = null;
        try {
            $data= new Tabel_favorit;
            $data->id_poperti=$request->get('id_properti');
            $data->id_user_android=$request->get('id_user_android');

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
}
