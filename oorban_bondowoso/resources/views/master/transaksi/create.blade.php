@extends('layouts.template')
@section('content')
<div class="main-content">
    <section class="section">
      <h1 class="section-header">
        <div> {{ $title }} </div>
      </h1>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <form method="post" action=" {{ route('transaksi.store') }} " enctype="multipart/form-data" class="needs-validation" novalidate="">
                @csrf
                <div class="card">
                    <div class="card-header">
                    {{-- <h4>Q</h4> --}}
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Kode Transaksi</label>
                            <input type="text" name="kode_transaksi" id="kode_transaksi"  placeholder="ex : KK00001" value="{{ old('kode_transaksi', $noTransaksi) }}" class="form-control"  autocomplete="off" readonly >

                        </div>
                        <div class="form-group">
                            <label for="">Nama Properti</label>
                            <select name="id_properti" id="id_properti" class="selectpicker form-control" data-live-search="true">
                                @foreach ($data_properti as $item)
                                    <option value="{{ $item->id }}"> {{ $item->nama_pemilik }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pengguna Android</label>
                            <select name="id_pengguna_android" id="id_pengguna_android" class="selectpicker form-control" data-live-search="true">
                                @foreach ($user_android as $item)
                                    <option value="{{ $item->id }}"> {{ $item->username }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Super Admin/Admin</label>
                            <select name="id_pengguna" id="id_properti" class="selectpicker form-control" data-live-search="true">
                                @foreach ($pengguna as $item)
                                    <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Total Pembayaran</label>
                            <input type="number" name="harga" id="harga" value="" class="form-control  @error('harga') is-invalid @enderror" autofocus >
                            <span class="text-muted" style="font-size: 12px">Exp : 12000000</span>
                            @if ($errors->has('harga'))
                                <div class="invalid-feedback">
                                {{ $errors->first('harga') }}
                                </div>
                            @endif
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleFormControlFile1">Tambah Foto Bukti Pembayaran</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
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
