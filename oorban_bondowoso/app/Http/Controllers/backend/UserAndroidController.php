<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Pengguna_android;
use Illuminate\Http\Request;

class UserAndroidController extends Controller
{
    public $param;
    public function index()
    {
        $this->param['title'] = 'Pengguna Android';
        $userandroid = Pengguna_android::all();
        return view('master.user-android.index', $this->param)->with('user_android', $userandroid);
    }

    public function destroy($id)
    {
        $userandroid = Pengguna_android::findOrFail($id);
        $userandroid->delete();
	    return redirect('dashboard/master/user-android')->with('danger','Data berhasil dihapus');
    }
}
