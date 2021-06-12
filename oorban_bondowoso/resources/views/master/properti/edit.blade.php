@extends('layouts.template')
@section('content')
<div class="main-content">
    <section class="section">
      <h1 class="section-header">
        <div> {{ $title }} </div>
      </h1>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <form method="POST" action=" {{ route('properti.update', $properti->id) }} " enctype="multipart/form-data" class="needs-validation" novalidate="">
                    @csrf
                    @method('PUT')
                <div class="card">
                    <div class="card-header">
                    {{-- <h4>Q</h4> --}}
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Nama Properti</label>
                            <div class="col-md-12">
                                <input type="text" id="nama" name="nama" value="{{ $properti->nama_pemilik }}" placeholder="Masukkan nama properti" class="form-control form-control-line"> </div>
                                @error('nama')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Umur Bangunan</label>
                            <div class="col-md-12">
                                <input type="text" id="umurbangunan" name="umurbangunan" value="{{ $properti->umur_bangunan }}" placeholder="Masukkan umur bangunan" class="form-control form-control-line"> </div>
                                @error('umurbangunan')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Harga</label>
                            <div class="col-md-12">
                                <input type="text" id="harga" name="harga" value="{{ $properti->harga }}" placeholder="Masukkan harga" class="form-control form-control-line"> </div>
                                @error('harga')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Jumlah Kamar Tidur</label>
                            <div class="col-md-12">
                                <input type="text" id="jumlahkamartidur" name="jumlahkamartidur" value="{{ $properti->jml_kamartidur }}" placeholder="Masukkan Jumlah Kamar tidur" class="form-control form-control-line"> </div>
                                @error('jumlahkamartidur')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Jumlah Kamar Mandi</label>
                            <div class="col-md-12">
                                <input type="text" id="jumlahkamarmandi" name="jumlahkamarmandi" value="{{ $properti->jml_kamarmandi }}" placeholder="Masukkan jumlah kamar mandi" class="form-control form-control-line"> </div>
                                @error('jumlahkamarmandi')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Luas Tanah</label>
                            <div class="col-md-12">
                                <input type="text" id="luastanah" name="luastanah" value="{{ $properti->luas_tanah }}" placeholder="Masukkan luas tanah" class="form-control form-control-line"> </div>
                                @error('luastanah')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Luas Bangunan</label>
                            <div class="col-md-12">
                                <input type="text" id="luasbangunan" name="luasbangunan" value="{{ $properti->luas_bangunan }}" placeholder="Masukkan luas bangunan" class="form-control form-control-line"> </div>
                                @error('luasbangunan')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Lantai</label>
                            <div class="col-md-12">
                                <input type="text" id="lantai" name="lantai" value="{{ $properti->lantai }}" placeholder="Masukkan jumlah lantai" class="form-control form-control-line"> </div>
                                @error('lantai')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Daya Listrik</label>
                            <div class="col-md-12">
                                <input type="text" id="dayalistrik" name="dayalistrik" value="{{ $properti->daya_listrik }}" placeholder="Masukkan daya listrik" class="form-control form-control-line"> </div>
                                @error('dayalistrik')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Tahun Dibangunan</label>
                            <div class="col-md-12">
                                <input type="text" id="tahundibangun" name="tahundibangun" value="{{ $properti->tahun_dibangun }}" placeholder="Masukkan tahun bangunan" class="form-control form-control-line"> </div>
                                @error('tahundibangun')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Keterangan</label>
                            <div class="col-md-12">
                                <input type="text" id="keterangan" name="keterangan" value="{{ $properti->keterangan }}" placeholder="Masukkan keterangan" class="form-control form-control-line"> </div>
                                @error('keterangan')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                            <div class="form-group">
                                <label class="col-md-12">Masukkan Gambar</label>
                                <div class="ml-4">
                                <input type="file" id="gambar" name="gambar" value="{{ $properti->gambar }}" style="margin-left: 20px" class="form-control-file" id="exampleFormControlFile1">
                                @error('gambar')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                                <img src=" {{ asset('backend/upload/properti/'),$properti->gambar }} " alt="">
                            </div>
                        <div class="form-group">
                            <label class="col-sm-12">Sertifikat</label>
                            <div class="col-sm-12">
                                <select id="sertifikat" name="sertifikat" class="form-control form-control-line">
                                    <option value="shm" {{ $properti->sertifikat == 'shm' ? 'selected' : '' }} >SHM(Sertifikat Surat Hak Milik)</option>
                                    <option value="shgb" {{ $properti->sertifikat == 'shgb' ? 'selected' : '' }}>SHGB(Sertifikat Hak Guna Bangunan )</option>
                                    <option value="ajb" {{ $properti->sertifikat == 'ajb' ? 'selected' : '' }}>AJB(Akta Jual Beli)</option>
                                </select>
                                @error('sertifikat')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label>Content</label>
                            <textarea class="summernote-simple"></textarea>
                        </div> --}}
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <button type="reset" class="btn btn-outline-secondary">Reset</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
