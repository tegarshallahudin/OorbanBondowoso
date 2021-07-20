@extends('layouts.template')
@section('content')
<div class="main-content">
    <section class="section">
      <h1 class="section-header">
        <div> {{ $title }} </div>
      </h1>
      @if ($message = Session::get('success'))
        <div class="alert alert-success alert-has-icon alert-dismissible show fade">
            <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
            <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            <div class="alert-title">Sukses</div>
            {{ $message }}
            </div>
        </div>
      @elseif($message = Session::get('danger'))
        <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
            <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
            <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            <div class="alert-title">Hapus</div>
                Data berhasil dihapus.
            </div>
        </div>
      @else

      @endif
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
              {{-- <div class="card-header">
                <div class="float-right">
                  <a href=" {{ route('pengguna.create') }} " class="btn btn-primary">Tambah Data</a>
                </div>
              </div> --}}
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>Alamat</th>
                        <th>NIK</th>
                        <th>No. HP</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($user_android as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_lengkap }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->gender }}</td>
                        <td>
                            <form action=" {{ route('pengguna.destroy', $item->id)}} " method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
</div>
@endsection
