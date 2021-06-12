@extends('layouts.template')
@section('content')
<div class="main-content">
    <section class="section">
      <h1 class="section-header">
        <div> {{ $title }} </div>
      </h1>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <form method="post" action=" {{ route('properti.store') }} " enctype="multipart/form-data" class="needs-validation" novalidate="">
                @csrf
                <div class="card">
                    <div class="card-header">
                    {{-- <h4>Q</h4> --}}
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Properti</label>
                            <select name="id_properti" id="id_properti" class="selectpicker form-control" data-live-search="true">
                                @foreach ($data_properti as $item)
                                    <option value=""> {{ $item->nama_pemilik }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Properti</label>
                            <input type="text" name="nama" id="nama" value="" class="form-control  @error('nama') is-invalid @enderror" autofocus >
                            <span class="text-muted" style="font-size: 12px">Masukkan Nama Properti</span>
                            @if ($errors->has('nama'))
                                <div class="invalid-feedback">
                                {{ $errors->first('nama') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" name="harga" id="harga" value="" class="form-control  @error('harga') is-invalid @enderror" autofocus >
                            <span class="text-muted" style="font-size: 12px">Exp : 120000</span>
                            @if ($errors->has('harga'))
                                <div class="invalid-feedback">
                                {{ $errors->first('harga') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Umur Bangunan</label>
                            <input type="text" name="umurbangunan" id="umurbangunan" value="" class="form-control  @error('umurbangunan') is-invalid @enderror" autofocus >
                            <span class="text-muted" style="font-size: 12px">Exp : 2 Bulan / 4 Tahun</span>
                            @if ($errors->has('umurbangunan'))
                                <div class="invalid-feedback">
                                {{ $errors->first('umurbangunan') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Jumlah Kamar Mandi</label>
                            <input type="text" id="jumlahkamarmandi" name="jumlahkamarmandi" value="" placeholder="Masukkan jumlah kamar mandi" class="form-control form-control-line"> </div>
                            <span class="text-muted" style="font-size: 12px">Masukkan Alamat dengan benar</span>
                            @if ($errors->has('jumlahkamarmandi'))
                                <div class="invalid-feedback">
                                {{ $errors->first('jumlahkamarmandi') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Jumlah Kamar Tidur</label>
                            <div class="col-md-12">
                                <input type="text" id="jumlahkamartidur" name="jumlahkamartidur" value="" placeholder="Masukkan Jumlah Kamar tidur" class="form-control form-control-line"> </div>
                                @error('jumlahkamartidur')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Luas Tanah</label>
                            <div class="col-md-12">
                                <input type="text" id="luastanah" name="luastanah" value="" placeholder="Masukkan luas tanah" class="form-control form-control-line"> </div>
                                @error('luastanah')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Luas Bangunan</label>
                            <div class="col-md-12">
                                <input type="text" id="luasbangunan" name="luasbangunan" value="" placeholder="Masukkan luas bangunan" class="form-control form-control-line"> </div>
                                @error('luasbangunan')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Lantai</label>
                            <div class="col-md-12">
                                <input type="text" id="lantai" name="lantai" value="" placeholder="Masukkan jumlah lantai" class="form-control form-control-line"> </div>
                                @error('lantai')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Daya Listrik</label>
                            <div class="col-md-12">
                                <input type="text" id="dayalistrik" name="dayalistrik" value="" placeholder="Masukkan daya listrik" class="form-control form-control-line"> </div>
                                @error('dayalistrik')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Tahun Dibangunan</label>
                            <div class="col-md-12">
                                <input type="text" id="tahundibangun" name="tahundibangun" value="" placeholder="Masukkan tahun bangunan" class="form-control form-control-line"> </div>
                                @error('tahundibangun')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Keterangan</label>
                            <div class="col-md-12">
                                <input type="text" id="keterangan" name="keterangan" value="" placeholder="Masukkan keterangan" class="form-control form-control-line"> </div>
                                @error('keterangan')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                            <div class="form-group">
                                <label class="col-md-12">Masukkan Gambar</label>
                                <div class="ml-4">
                                <input type="file" id="gambar" name="gambar" style="margin-left: 20px" class="form-control-file" id="exampleFormControlFile1">
                                @error('gambar')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="col-sm-12">Sertifikat</label>
                            <div class="col-sm-12">
                                <select id="sertifikat" name="sertifikat" class="form-control form-control-line">
                                    <option value="shm">SHM(Sertifikat Surat Hak Milik)</option>
                                    <option value="shgb">SHGB(Sertifikat Hak Guna Bangunan )</option>
                                    <option value="ajb">AJB(Akta Jual Beli)</option>
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
                    </div>
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
