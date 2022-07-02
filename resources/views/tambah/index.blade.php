@extends('layouts.app')
@section('content')
<div class="container">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4><i class="fas fa-plus"></i> Tambah Barang</h4>
                    <form method="POST" action="{{ url('tambah') }}">
                    	@csrf

                        <div class="form-group row">
                            <label for="nama_barang" class="col-md-2 col-form-label text-md-right">Nama Barang</label>

                            <div class="col-md-6">
                            	<input id="nama_barang" type="text" class="form-control" name="nama_barang" required autocomplete="nama_barang" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-2 col-form-label text-md-right">Harga</label>

                            <div class="col-md-6">
                            	<input id="harga" type="text" class="form-control" name="harga" required autocomplete="harga" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stok" class="col-md-2 col-form-label text-md-right">Stok</label>

                            <div class="col-md-6">
                            	<input id="stok" type="text" class="form-control" name="stok" required autocomplete="stok" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="keterangan" class="col-md-2 col-form-label text-md-right">Keterangan</label>

                            <div class="col-md-6">
                            	<input id="keterangan" type="text" class="form-control" name="keterangan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gambar" class="col-md-2 col-form-label text-md-right">Gambar</label>

                            <div class="col-md-6">
                            	<input id="gambar" type="file" name="gambar">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>

            </div>
            @endsection
