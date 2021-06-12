@extends('layouts.template')

{{-- content --}}
@section('content')
<div class="main-content">
    <section class="section">
      <h1 class="section-header">
        <div>Dashboard</div>
      </h1>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card card-sm-3">
            <div class="card-icon bg-primary">
              <i class="ion ion-person"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Pengguna</h4>
              </div>
              <div class="card-body">
                10
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card card-sm-3">
            <div class="card-icon bg-danger">
              <i class="ion ion-ios-box"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Properti</h4>
              </div>
              <div class="card-body">
                42
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card card-sm-3">
            <div class="card-icon bg-warning">
              <i class="ion ion-ios-cart"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Transaksi Properti</h4>
              </div>
              <div class="card-body">
                1,201
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
