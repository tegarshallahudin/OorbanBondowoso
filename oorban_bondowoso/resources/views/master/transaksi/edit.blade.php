@extends('layouts.template')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Tambah Data</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Transaksi</li>
                    <li class="active">Tambah Data</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <!-- .row -->
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="white-box">
                    <form class="form-horizontal form-material" action="{{ route('transaksi.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label class="col-md-12">Kode Transaksi</label>
                            <div class="col-md-12">
                                <input type="text" readonly id="kode_transaksi" name="kode_transaksi" value="" placeholder="Kode Transaksi" class="form-control form-control-line"> </div>
                                @error('kode_transaksi')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">ID Properti</label>
                            <div class="col-md-12">
                                <input type="text" id="id_properti" name="id_properti" value="" placeholder="Masukkan nama pengguna android" class="form-control form-control-line"> </div>
                                @error('id_properti')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">ID Pengguna Android</label>
                            <div class="col-md-12">
                                <input type="text" id="id_pengguna_android" name="id_pengguna_android" value="" placeholder="Masukkan nama admin" class="form-control form-control-line"> </div>
                                @error('id_pengguna_android')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Total Bayar</label>
                            <div class="col-md-12">
                                <input type="text" id="total_bayar" name="total_bayar" value="" placeholder="Masukkan total bayar" class="form-control form-control-line"> </div>
                                @error('total_bayar')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Kembalian</label>
                            <div class="col-md-12">
                                <input type="text" id="kembalian" name="kembalian" value="" placeholder="Kembalian" class="form-control form-control-line"> </div>
                                @error('kembalian')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success" type="submit">Simpan</button>
                                <button class="btn btn-danger" type="reset">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>
