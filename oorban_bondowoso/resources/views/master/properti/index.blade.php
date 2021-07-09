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
              <div class="card-header">
                <div class="float-right">
                  <a href=" {{ route('properti.create') }} " class="btn btn-primary">Tambah Data</a>
                </div>
                {{-- <h4>Latest Posts</h4> --}}
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Gambar</th>
                        <th>Nama Properti</th>
                        <th>Harga</th>
                        <th>Keterangan</th>
                        <th>Sertifikat</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($detail_properti as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ url($item->gambar) }}" width="75" height="75" alt="{{ $item->nama_pemilik }}" style="object-fit:contain">
                        </td>
                        <td>{{ $item->nama_pemilik }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>{{ $item->sertifikat }}</td>
                        <td>
                            <form action=" {{ route('properti.destroy', $item->id)}} " method="POST">
                                <a class="btn btn-primary btn-action mr-1" href="{{ route('properti.edit', $item->id) }}" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
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
{{-- <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Properti</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Properti</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        @elseif($message = Session::get('danger'))
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @else

        @endif
        <!-- /row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Tabel Properti</h3>
                    <a class="btn btn-primary" href=" {{ route('properti.create') }} " role="button"><i class="zmdi zmdi-plus"></i>Tambah Data</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Gambar</th>
                                    <th>Nama Properti</th>
                                    <th>Harga</th>
                                    <th>Keterangan</th>
                                    <th>Sertifikat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detail_properti as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ url($item->gambar) }}" width="75" height="75" alt="{{ $item->nama_pemilik }}" style="object-fit:contain">
                                    </td>
                                    <td>{{ $item->nama_pemilik }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>{{ $item->sertifikat }}</td>
                                    <td>
                                        <div class="btn-group" aria-label="Basic example">
                                            <form action=" {{ route('properti.destroy', $item->id)}} " method="POST">
                                                <a href="{{ route('properti.edit', $item->id) }}"  class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" data-toggle="tooltip" type="submit" data-placement="top" title="Delete">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com</footer>
</div>
<!-- /#page-wrapper --> --}}
