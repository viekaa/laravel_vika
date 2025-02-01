@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Tambah Data Buku') }}</div>
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
                <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

<div class="form-group">
    <label>Nama buku</label>
    <input type="text" class="form-control" name="nama_buku"><br>
  </div>

<div class="form-group">
    <label>Harga</label>
    <input type="number" class="form-control" name="harga"><br>
  </div>

  <div class="form-group">
    <label>Stok</label>
    <input type="number" class="form-control" name="stok"><br>
  </div><br>
 <div class="form-group">
    <label>Image</label>
    <input type="file" class="form-control" name="image"><br>
  </div>
   <div class="form-group">
    <label>ID penerbit</label> <br>
    <select class="form-control" name="id_penerbit">
        @foreach ($penerbit as $data)
        <option value="{{ $data->id }}">{{ $data->nama_penerbit }}</option>
        @endforeach
    </select>
    <br>
  </div>
  <div class="form-group">
    <label>Tanggal Terbit</label>
    <input type="date" class="form-control" name="tgl_terbit"><br>
  </div><br>
 <div class="form-group">
    <label>ID Genre</label> <br>
    <select class="form-control" name="id_genre">
        @foreach ($genre as $data)
        <option value="{{ $data->id }}">{{ $data->genre }}</option>
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
