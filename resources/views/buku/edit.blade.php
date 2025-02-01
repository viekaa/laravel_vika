@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Tambah Data Buku') }}</div>

                <div class="card-body">
                <form action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>Nama buku</label>
    <input type="text" class="form-control" name="nama_buku" value="{{ $buku->nama_buku }}"><br>
  </div>

   <div class="form-group">
    <label>Harga</label>
    <input type="number" class="form-control" name="harga" value="{{ $buku->harga }}"><br>
  </div>

  <div class="form-group">
    <label>Stok</label>
    <input type="number" class="form-control" name="stok" value="{{ $buku->stok }}"><br>
  </div>
 <div class="form-group">
    <label>Image</label>
    <br>
     <img src="{{asset('/image/buku/'.$buku->image)}}" width="100"><br>
    <input type="file" class="form-control" value="{{ $buku->image }}"name="image"><br>
  </div>
   <div class="form-group">
    <label>ID Penerbit</label> <br>
    <select class="form-control" name="id_penerbit">
        @foreach ($penerbit as $data)
        <option value="{{ $data->id }}" {{ $data->id == $buku->id_penerbit ? 'selected' : ''}}>{{ $data->nama_penerbit}}</option>
        @endforeach
    </select>
    <br>
  </div>
   <div class="form-group">
    <label>Tanggal Terbit</label>
    <input type="date" class="form-control" name="tgl_terbit" value="{{ $buku->tgl_terbit }}"><br>
  </div>
  <div class="form-group">
    <label>ID Genre</label> <br>
    <select class="form-control" name="id_genre">
        @foreach ($genre as $data)
        <option value="{{ $data->id }}" {{ $data->id == $buku->id_genre ? 'selected' : ''}}>{{ $data->genre}}</option>
        @endforeach
    </select>
    <br>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
 </div>


            </div>
        </div>
    </div>
</div>
@endsection
