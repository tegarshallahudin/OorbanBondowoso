<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Detail_properti;
use Exception;
use Illuminate\Http\Request;
use File;

class PropertiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->param['title'] = 'Data Properti';
        $properti = Detail_properti::all();

        return view('master.properti.index', $this->param)->with('detail_properti', $properti);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->param['title'] = 'Tambah Data';
        return view('master.properti.create', $this->param);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'umurbangunan' => 'required',
            'jumlahkamarmandi' => 'required',
            'jumlahkamartidur' => 'required',
            'luastanah' => 'required',
            'luasbangunan' => 'required',
            'lantai' => 'required',
            'dayalistrik' => 'required',
            'tahundibangun' => 'required',
            'keterangan' => 'required',
            'sertifikat' => 'required'

        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
            'umurbangunan.required' => 'Umur bangunan tidak boleh kosong',
            'jumlahkamarmandi.required' => 'Jumlah kamar mandi tidak boleh kosong',
            'jumlahkamartidur.required' => 'Jumlah kamar tidur tidak boleh kosong',
            'luastanah.required' => 'Luas tanah tidak boleh kosong',
            'luasbangunan.required' => 'Luas bangunan tidak boleh kosong',
            'lantai.required' => 'Lantai tidak boleh kosong',
            'dayalistrik.required' => 'Daya listrik tidak boleh kosong',
            'tahundibangun.required' => 'Tahun dibangun tidak boleh kosong',
            'keterangan.required' => 'Keternangan tidak boleh kosong',
            'sertifikat.required' => 'Sertifikat harus dipilih'
        ]);

        // dd($request->gambar);
        try{
            $properti= new Detail_properti;
            $properti->nama_pemilik=$request->get('nama');
            $properti->umur_bangunan=$request->get('umurbangunan');
            $properti->harga=$request->get('harga');
            $properti->jml_kamartidur=$request->get('jumlahkamartidur');
            $properti->jml_kamarmandi=$request->get('jumlahkamarmandi');
            $properti->luas_tanah=$request->get('luastanah');
            $properti->luas_bangunan=$request->get('luasbangunan');
            $properti->lantai=$request->get('lantai');
            $properti->daya_listrik=$request->get('dayalistrik');
            $properti->tahun_dibangun=$request->get('tahundibangun');
            $properti->keterangan=$request->get('keterangan');
            $properti->sertifikat=$request->get('sertifikat');
            if($request->file('gambar') !=null){
                $folder = 'backend/upload/properti';
                $file = $request->file('gambar');
                $filename = date('YmdHis').$file->getClientOriginalName();
                $path = realpath($folder);

                if(!($path !== true AND is_dir($path)))
                {
                    mkdir($folder, 0755, true);
                }

                if($file->move($folder, $filename)) {
                    $properti->gambar = $folder.'/'.$filename;
                }
            }else{
                return $request->file('gambar');
            }
            $properti->save();
            return redirect('dashboard/master/properti')->with('success','Data berhasil di masukkan');
        }
        catch(\Exception $e){
            return $e;
            // return redirect()->back()->withError($e->getMessage());
        }
        catch(\Illuminate\Database\QueryException $e){
            return $e;
            // return redirect()->back()->withError($e->getMessage());
        }
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
        $this->param['title'] = 'Edit Data';
        $properti = Detail_properti::where('id', $id)->first();

	    return view('master.properti.edit', $this->param)->with('properti', $properti);
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
         // validate
         $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'umurbangunan' => 'required',
            'jumlahkamarmandi' => 'required',
            'jumlahkamartidur' => 'required',
            'luastanah' => 'required',
            'luasbangunan' => 'required',
            'lantai' => 'required',
            'dayalistrik' => 'required',
            'tahundibangun' => 'required',
            'keterangan' => 'required',
            'sertifikat' => 'required'

        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
            'umurbangunan.required' => 'Umur bangunan tidak boleh kosong',
            'jumlahkamarmandi.required' => 'Jumlah kamar mandi tidak boleh kosong',
            'jumlahkamartidur.required' => 'Jumlah kamar tidur tidak boleh kosong',
            'luastanah.required' => 'Luas tanah tidak boleh kosong',
            'luasbangunan.required' => 'Luas bangunan tidak boleh kosong',
            'lantai.required' => 'Lantai tidak boleh kosong',
            'dayalistrik.required' => 'Daya listrik tidak boleh kosong',
            'tahundibangun.required' => 'Tahun dibangun tidak boleh kosong',
            'keterangan.required' => 'Keternangan tidak boleh kosong',
            'sertifikat.required' => 'Sertifikat harus dipilih'
        ]);

        try {
            $properti = Detail_properti::find($id);
            $properti->nama_pemilik=$request->get('nama');
            $properti->umur_bangunan=$request->get('umurbangunan');
            $properti->harga=$request->get('harga');
            $properti->jml_kamartidur=$request->get('jumlahkamartidur');
            $properti->jml_kamarmandi=$request->get('jumlahkamarmandi');
            $properti->luas_tanah=$request->get('luastanah');
            $properti->luas_bangunan=$request->get('luasbangunan');
            $properti->lantai=$request->get('lantai');
            $properti->daya_listrik=$request->get('dayalistrik');
            $properti->tahun_dibangun=$request->get('tahundibangun');
            $properti->keterangan=$request->get('keterangan');
            $properti->sertifikat=$request->get('sertifikat');
            $properti->status=$request->get('status');
            if($request->file('gambar') !=null){
                $folder = 'backend/upload/properti';
                $file = $request->file('gambar');
                $filename = date('YmdHis').$file->getClientOriginalName();

                $path = realpath($folder);

                if(!($path !== true AND is_dir($path)))
                {
                    mkdir($folder, 0755, true);
                }
                if($file->move($folder, $filename)) {
                    $properti->gambar = $folder.'/'.$filename;
                }
            }
            $properti->save();
            return redirect('dashboard/master/properti')->with('success','Data berhasil diedit');
        } catch (Exception $e) {
            return $e;
        }catch(\Illuminate\Database\QueryException $e){
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $properti = Detail_properti::findOrFail($id);
            $foto = $properti->gambar;
            if($foto != null){
                if(file_exists($foto)){
                    if(File::delete($foto)){
                        $properti->delete();
                    }
                }
            }
            else {
            }
            $properti->delete();
            return redirect('dashboard/master/properti')->with('danger','Data berhasil dihapus');
        }
        catch(\Exception $e){
            return $e;
            return redirect()->back()->withError($e->getMessage());
        }
        catch(\Illuminate\Database\QueryException $e){
            return $e;
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
