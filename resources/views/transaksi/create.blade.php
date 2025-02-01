@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Tambah Data Transaksi') }}</div>
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <div class="card-body">
                <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

<div class="form-group">
    <label>Jumlah</label>
    <input type="number" class="form-control" name="jumlah"><br>
  </div>

<div class="form-group">
    <label>Tanggal Transaksi</label>
    <input type="date" class="form-control" name="tgl_transaksi"><br>
  </div>
   <div class="form-group">
    <label>ID Buku</label> <br>
    <select class="form-control" name="id_buku">
        @foreach ($buku as $data)
        <option value="{{ $data->id }}">{{ $data->nama_buku }}</option>
        @endforeach
    </select>
    <br>
  </div>
 <div class="form-group">
    <label>ID Pembeli</label> <br>
    <select class="form-control" name="id_pembeli">
        @foreach ($pembeli as $data)
        <option value="{{ $data->id }}">{{ $data->nama_pembeli }}</option>
        @endforeach
    </select>
    <br>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">save</button>
</form>
 </div>


            </div>
        </div>
    </div>
</div>
@endsection
