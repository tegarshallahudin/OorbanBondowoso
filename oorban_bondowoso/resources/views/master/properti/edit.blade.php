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
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Properti</label>
                            <input type="text" name="nama" id="nama" value="{{ old('nama', $properti->nama_pemilik) }}" class="form-control  @error('nama') is-invalid @enderror" autofocus >
                            <span class="text-muted" style="font-size: 12px"></span>
                            @if ($errors->has('nama'))
                                <div class="invalid-feedback">
                                {{ $errors->first('nama') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" name="harga" id="harga" value="{{ old('harga', $properti->harga) }}" class="form-control  @error('harga') is-invalid @enderror" autofocus >
                            <span class="text-muted" style="font-size: 12px"></span>
                            @if ($errors->has('harga'))
                                <div class="invalid-feedback">
                                {{ $errors->first('harga') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Umur Bangunan</label>
                            <input type="text" name="umurbangunan" id="umurbangunan" value="{{ old('umurbangunan', $properti->umur_bangunan) }}" class="form-control  @error('umurbangunan') is-invalid @enderror" autofocus >
                            <span class="text-muted" style="font-size: 12px"></span>
                            @if ($errors->has('umurbangunan'))
                                <div class="invalid-feedback">
                                {{ $errors->first('umurbangunan') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Jumlah Kamar Mandi</label>
                            <input type="text" id="jumlahkamarmandi" name="jumlahkamarmandi" value="{{ old('jumlahkamarmandi', $properti->jml_kamarmandi) }}" class="form-control @error('jumlahkamarmandi') is-invalid @enderror" autofocus>
                            <span class="text-muted" style="font-size: 12px"></span>
                            @if ($errors->has('jumlahkamarmandi'))
                                <div class="invalid-feedback">
                                {{ $errors->first('jumlahkamarmandi') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Jumlah Kamar Tidur</label>
                            <input type="text" id="jumlahkamartidur" name="jumlahkamartidur" value="{{ old('jumlahkamartidur', $properti->jml_kamartidur) }}" class="form-control @error('jumlahkamartidur') is-invalid @enderror" autofocus>
                            <span class="text-muted" style="font-size: 12px"></span>
                            @if ($errors->has('jumlahkamartidur'))
                                <div class="invalid-feedback">
                                {{ $errors->first('jumlahkamartidur') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Luas Tanah</label>
                            <input type="text" id="luastanah" name="luastanah" value="{{ old('luastanah', $properti->luas_tanah) }}" class="form-control @error('luastanah') is-invalid @enderror" autofocus>
                            <span class="text-muted" style="font-size: 12px"></span>
                            @if ($errors->has('luastanah'))
                                <div class="invalid-feedback">
                                {{ $errors->first('luastanah') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Luas Bangunan</label>
                            <input type="text" id="luasbangunan" name="luasbangunan" value="{{ old('luasbangunan', $properti->luas_bangunan) }}" class="form-control @error('luasbangunan') is-invalid @enderror" autofocus>
                            <span class="text-muted" style="font-size: 12px"></span>
                            @if ($errors->has('luasbangunan'))
                                <div class="invalid-feedback">
                                {{ $errors->first('luasbangunan') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Lantai</label>
                            <input type="text" id="lantai" name="lantai" value="{{ old('lantai', $properti->lantai) }}" class="form-control @error('lantai') is-invalid @enderror" autofocus>
                            <span class="text-muted" style="font-size: 12px"></span>
                            @if ($errors->has('lantai'))
                                <div class="invalid-feedback">
                                {{ $errors->first('lantai') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Daya Listrik</label>
                            <input type="text" id="dayalistrik" name="dayalistrik" value="{{ old('dayalistrik', $properti->daya_listrik) }}" class="form-control @error('dayalistrik') is-invalid @enderror" autofocus>
                            <span class="text-muted" style="font-size: 12px"></span>
                            @if ($errors->has('dayalistrik'))
                                <div class="invalid-feedback">
                                {{ $errors->first('dayalistrik') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Tahun Dibangunan</label>
                            <input type="text" id="tahundibangun" name="tahundibangun" value="{{ old('tahundibangun', $properti->tahun_dibangun) }}" class="form-control @error('tahundibangun') is-invalid @enderror" autofocus>
                            <span class="text-muted" style="font-size: 12px"></span>
                            @if ($errors->has('tahundibangun'))
                                <div class="invalid-feedback">
                                {{ $errors->first('tahundibangun') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <div>
                                <textarea type="text" id="keterangan" name="keterangan"  value="" placeholder="Masukkan keterangan" class="form-control" autofocus>{{ old('keterangan', $properti->keterangan) }}</textarea>
                            </div>
                            {{-- @if ($errors->has('keterangan'))
                                <div class="invalid-feedback">
                                {{ $errors->first('keterangan') }}
                                </div>
                            @endif --}}
                        </div>
                            <div class="form-group">
                                <label>Masukkan Gambar</label>
                                <input type="file" id="gambar" name="gambar" style="margin-left: 20px" class="form-control-file" id="exampleFormControlFile1">
                                {{-- @if ($errors->has('jumlahkamarmandi'))
                                    <div class="invalid-feedback">
                                    {{ $errors->first('jumlahkamarmandi') }}
                                    </div>
                                @endif --}}
                            </div>
                        <div class="form-group">
                            <label>Sertifikat</label>
                            <div>
                                <select id="sertifikat" name="sertifikat" class="form-control form-control-line">
                                    <option value="shm">SHM(Sertifikat Surat Hak Milik)</option>
                                    <option value="shgb">SHGB(Sertifikat Hak Guna Bangunan )</option>
                                    <option value="ajb">AJB(Akta Jual Beli)</option>
                                </select>
                                {{-- @if ($errors->has('jumlahkamarmandi'))
                                    <div class="invalid-feedback">
                                    {{ $errors->first('jumlahkamarmandi') }}
                                    </div>
                                @endif --}}
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label>Content</label>
                            <textarea class="summernote-simple"></textarea>
                        </div> --}}
                    </div>
                    {{-- <div class="card-body">
                        <div class="form-group">
                            <label>Nama Properti</label>
                            <input type="text" id="nama" name="nama" value="{{ old('nama', $properti->name) }}" placeholder="" class="form-control form-control-line @error('nama') is-invalid @enderror" autofocus>
                            <span class="text-muted" style="font-size: 12px">Masukkan Nama Properti</span>
                            @if ($errors->has('nama'))
                            <div class="invalid-feedback">
                            {{ $errors->first('nama') }}
                            </div>
                            @endif
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
                    </div> --}}

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
