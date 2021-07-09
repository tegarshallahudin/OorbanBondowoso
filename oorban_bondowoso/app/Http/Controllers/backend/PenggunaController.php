<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $param;
    public function index()
    {
        $pengguna = User::all();
        $this->param['title'] = 'Pengguna Admin';
        return view('master.pengguna.index', $this->param)->with('pengguna', $pengguna);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->param['title'] = 'Tambah Data Pengguna';
        return view('master.pengguna.create', $this->param);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'password' => 'required'
        ], [
            'nama.required' => 'Nama lengkap tidak boleh kosong',
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'no_hp.required' => 'No. Handphone tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong'
        ]);

        $pengguna= new User;
        $pengguna->name=$request->get('nama');
        $pengguna->username=$request->get('username');
        $pengguna->password= Hash::make($request->get('password'));
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
        $this->param['title'] = 'Edit Data Pengguna';
        $pengguna = User::where('id', $id)->first();

	    return view('master.pengguna.edit', $this->param)->with('pengguna', $pengguna);
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
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
        ], [
            'nama.required' => 'Nama lengkap tidak boleh kosong',
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'no_hp.required' => 'No. Handphone tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong'
        ]);
        // $data = "Data";
        // if ($request->password == null) {
        //   return $data;
        // }else{
        //     echo "data adata";
        // }
        $pengguna = User::find($id);
        $pengguna->name=$request->get('nama');
        $pengguna->username=$request->get('username');
        //
        $pengguna->alamat=$request->get('alamat');
        $pengguna->no_hp=$request->get('no_hp');
        $pengguna->password=Hash::make($request->password);
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
