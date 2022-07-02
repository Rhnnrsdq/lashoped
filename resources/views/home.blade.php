@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12 mb-4">
      <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="250" alt="">
    </div>
    @foreach($barangs as $barang)
    <div class="col-md-3">
     <div class="card">
      <img src="{{ url('uploads') }}/{{ $barang->gambar }}" class="card-img-top" alt="...">
      <div class="card-body text">
        <h5 class="card-title">{{ $barang->nama_barang}}</h5> <br>
        <p class="card-text">
          <strong>Harga : </strong>Rp. {{ number_format($barang->harga)}} <br>
          <strong>Stok : </strong> {{ $barang->stok }} <br>
          <hr>
          <strong>Keterangan : </strong> <br>
          {{ substr($barang->keterangan, 0, 50) }}
          <strong>...</strong>
        </p>
        <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></i> Pesan</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>
@endsection
