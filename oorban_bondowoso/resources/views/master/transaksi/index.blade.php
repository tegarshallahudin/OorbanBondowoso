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
                  <a href=" {{ route('transaksi.create') }} " class="btn btn-primary">Tambah Data</a>
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
                    {{-- @foreach ($detail_properti as $item)
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
                    @endforeach --}}
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
