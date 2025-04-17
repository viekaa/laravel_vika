@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Edit Data Produk') }}</div>

                <div class="card-body">
                <form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>Nama Produk</label>
    <input type="text" class="form-control" name="nama_produk" value="{{ $produk->nama_produk }}"><br>
  </div>

   <div class="form-group">
    <label>Harga</label>
    <input type="number" class="form-control" name="harga" value="{{ $produk->harga }}"><br>
  </div>

  <div class="form-group">
    <label>Stok</label>
    <input type="number" class="form-control" name="stok" value="{{ $produk->stok }}"><br>
  </div>

   <div class="form-group">
    <label>ID Kategori</label> <br>
    <select class="form-control" name="id_kategori">
        @foreach ($kategori as $data)
        <option value="{{ $data->id }}" {{ $data->id == $produk->id_kategori ? 'selected' : ''}}>{{ $data->nama_kategori }}</option>
        @endforeach
    </select>
    <br>
  </div>
  <div class="form-group">
    <label>Foto</label>
    <br>
     <img src="{{asset('/image/produk/'.$produk->foto)}}" width="100"><br>
    <input type="file" class="form-control" value="{{ $produk->foto }}"name="foto"><br>
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
