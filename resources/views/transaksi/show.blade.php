@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Ubah Data Transaksi') }}</div>
                <div class="card-body">
               <form action="{{ route('transaksi.show', $transaksi->id) }}" method="POST"enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
<div class="form-group">
    <label>Jumlah</label>
    <input type="number" class="form-control" name="jumlah" value="{{ $transaksi->jumlah }}" disabled><br>
  </div>

<div class="form-group">
    <label>Tanggal Transaksi</label>
    <input type="date" class="form-control" name="tgl_transaksi" value="{{ $transaksi->tgl_transaksi }}"disabled><br>
  </div>
   <div class="form-group">
    <label>ID Buku</label> <br>
    <select class="form-control" name="id_buku" value="{{ $transaksi->id_buku }}"disabled>
        @foreach ($buku as $data)
       <option value="{{ $data->id }}" {{ $data->id == $transaksi->id_buku? 'selected' : ''}}>{{ $data->nama_buku}}</option>
        @endforeach
    </select>
    <br>
  </div>
 <div class="form-group">
    <label>ID Pembeli</label> <br>
    <select class="form-control" name="id_pembeli" value="{{ $transaksi->id_pembeli}}"disabled>
        @foreach ($pembeli as $data)
       <option value="{{ $data->id }}" {{ $data->id == $transaksi->id_pembeli? 'selected' : ''}}>{{ $data->nama_pembeli}}</option>
        @endforeach
    </select>
    <br>
  </div>
  <br>
   <a href="{{ route('buku.index') }}" class="btn btn-primary">Back</a>
</form>
 </div>


            </div>
        </div>
    </div>
</div>
@endsection
