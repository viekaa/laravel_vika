@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Tambah Data Product') }}</div>

                <div class="card-body">
                <form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>Nama Produk</label>
    <input type="text" class="form-control" name="nama_produk" value="{{ $produk->nama_produk }}" disabled><br>
  </div>

  <div class="form-group">
    <label>Harga</label>
    <input type="number" class="form-control" name="harga" value="{{ $produk->harga }}" disabled><br>
  </div>

  <div class="form-group">
    <label>Stoct</label>
    <input type="number" class="form-control" name="stok" value="{{ $produk->stok }}" disabled><br>
  </div>

   <div class="form-group">
    <label>ID Kategori</label> <br>
    <select class="form-control" name="id_kategori" disabled>
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
    
  </div>
  <br>
  <a href="{{ route('produk.index') }}" class="btn btn-primary">Back</a>
</form>
 </div>


            </div>
        </div>
    </div>
</div>
@endsection
