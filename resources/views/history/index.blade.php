@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
  	<div class="col-md-12">
  		<a href="{{ url('home') }}" class="btn btn-primary"><i class="far fa-arrow-alt-circle-left"></i> Kembali</a>
  	</div>
  	<div class="col-md-12 mt-3">
  		<nav aria-label="breadcrumb">
  			<ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
         <li class="breadcrumb-item active" aria-current="page"> History Order</li>
       </ol>
     </nav>
   </div>
   <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <h3><i class="fa fa-history"></i> History Order</h3>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Status</th>
              <th>Jumlah Harga</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            @foreach($pesanans as $pesanan)
            <tr>
              <td>{{ $no++  }}</td>
              <td>{{ $pesanan->tanggal  }}</td>
              <td>
                @if($pesanan->status == 1)
                Sudah Pesan & Belum Dibayar
                @else
                Sudah Dibayar
                @endif
              </td>
              <td>Rp, {{ number_format($pesanan->jumlah_harga+$pesanan->kode) }}</td>
              <td>
                <a href="{{ url('history') }}/{{ $pesanan->id }}" class="btn btn-primary btn-sm"><i class="fa fa-info"></i> Detail</a>
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
@endsection