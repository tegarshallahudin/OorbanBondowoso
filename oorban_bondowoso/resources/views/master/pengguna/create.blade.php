@extends('layouts.template')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Tambah Data</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Pengguna</li>
                    <li class="active">Tambah Data</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <!-- .row -->
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="white-box">
                    <form class="form-horizontal form-material" action="{{ route('pengguna.store') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label class="col-md-12">Nama Lengkap</label>
                            <div class="col-md-12">
                                <input type="text" id="nama" name="nama" value="" placeholder="Masukkan nama lengkap" class="form-control form-control-line @error('nama') is-invalid @enderror"> </div>
                                @if ($errors->has('nama'))
                                    <span class="badge badge-danger">{{ $errors->first('nama') }}</span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Username</label>
                            <div class="col-md-12">
                                <input type="text" id="username" name="username" value=""placeholder="Masukkan username" class="form-control form-control-line @error('username') is-invalid @enderror"> </div>
                                @if ($errors->has('username'))
                                    <span class="badge badge-danger">{{ $errors->first('username') }}</span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input type="password" id="password" name="password" value=""placeholder="Masukkan password" class="form-control form-control-line @error('password') is-invalid @enderror"> </div>
                                @if ($errors->has('password'))
                                    <span class="badge badge-danger">{{ $errors->first('password') }}</span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Alamat</label>
                            <div class="col-md-12">
                                <input type="text" id="alamat" name="alamat" value=""placeholder="Masukkan alamat" class="form-control form-control-line @error('alamat') is-invalid @enderror"> </div>
                                @if ($errors->has('alamat'))
                                    <span class="badge badge-danger">{{ $errors->first('alamat') }}</span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">No. Handphone</label>
                            <div class="col-md-12">
                                <input type="text" id="no_hp" name="no_hp" value=""placeholder="Masukkan No. Handphone" class="form-control form-control-line @error('no-hp') is-invalid @enderror"> </div>
                                @if ($errors->has('no_hp'))
                                    <span class="badge badge-danger">{{ $errors->first('no_hp') }}</span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="text" id="email" name="email" value=""placeholder="Masukkan email" class="form-control form-control-line @error('email') is-invalid @enderror"> </div>
                                @if ($errors->has('email'))
                                    <span class="badge badge-danger">{{ $errors->first('email') }}</span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Level</label>
                            <div class="col-sm-12">
                                <select id="level" name="level" class="form-control form-control-line @error('level') is-invalid @enderror">
                                    <option value="super_admin">Super Admin</option>
                                    <option value="admin">Admin</option>
                                </select>
                                @if ($errors->has('level'))
                                    <span class="badge badge-danger">{{ $errors->first('level') }}</span>
                                @endif
                            </div>
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
