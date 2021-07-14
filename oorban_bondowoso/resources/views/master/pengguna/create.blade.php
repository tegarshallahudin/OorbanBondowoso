@extends('layouts.template')
@section('content')
<div class="main-content">
    <section class="section">
      <h1 class="section-header">
        <div> {{ $title }} </div>
      </h1>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <form method="POST" action=" {{ route('pengguna.store') }} " class="needs-validation" novalidate="">
                @csrf
                <div class="card">
                    <div class="card-header">
                    {{-- <h4>Q</h4> --}}
                        </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Pengguna</label>
                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="form-control  @error('nama') is-invalid @enderror" autofocus >
                            <span class="text-muted" style="font-size: 12px">Ex : Rina Pandu Winata</span>
                            @if ($errors->has('nama'))
                                <div class="invalid-feedback">
                                {{ $errors->first('nama') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" id="username" value="{{ old('username') }}" class="form-control  @error('username') is-invalid @enderror" autofocus >
                            <span class="text-muted" style="font-size: 12px">Ex : rinapandu</span>
                            @if ($errors->has('username'))
                                <div class="invalid-feedback">
                                {{ $errors->first('username') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" id="password" value="" class="form-control  @error('password') is-invalid @enderror" autofocus >
                            <span class="text-muted" style="font-size: 12px">Ex : rina12345</span>
                            @if ($errors->has('password'))
                                <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" cols="0" rows="10">{{ old('alamat') }}</textarea>
                            <span class="text-muted" style="font-size: 12px">Ex : Jln. Mawar No. 21, Bondowoso</span>
                            @if ($errors->has('alamat'))
                                <div class="invalid-feedback">
                                {{ $errors->first('nama') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>No. Handphone</label>
                            <input type="number" name="no_hp" id="no_hp" value="{{ old('no_hp') }}" class="form-control  @error('no_hp') is-invalid @enderror" autofocus >
                            <span class="text-muted" style="font-size: 12px">Ex : 085724552412</span>
                            @if ($errors->has('no_hp'))
                                <div class="invalid-feedback">
                                {{ $errors->first('no_hp') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control  @error('email') is-invalid @enderror">
                            <span class="text-muted" style="font-size: 12px">Ex : Example@gmail.com</span>
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Level Akses</label>
                            <select id="level" name="level" class="form-control form-control-line @error('level') is-invalid @enderror">
                                <option value="0">Pilih Level Anda</option>
                                <option value="super_admin">Super Admin</option>
                                <option value="admin">Admin</option>
                            </select>
                            @if ($errors->has('level'))
                                <span class="badge badge-danger">{{ $errors->first('level') }}</span>
                            @endif
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
{{-- <div id="page-wrapper">
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
</div> --}}
