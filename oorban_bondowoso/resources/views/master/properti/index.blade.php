@extends('layouts.template')
<div id="page-wrapper">
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
                                    <th>Umur Bangunan</th>
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
                                    <td>{{ $item->umurbangunan }}</td>
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
<!-- /#page-wrapper -->
