@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Tambah Data Produk') }}</div>
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
                <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

<div class="form-group">
    <label>Nama Produk</label>
    <input type="text" class="form-control" name="nama_produk"><br>
  </div>

<div class="form-group">
    <label>Harga</label>
    <input type="number" class="form-control" name="harga"><br>
  </div>

  <div class="form-group">
    <label>Stok</label>
    <input type="number" class="form-control" name="stok"><br>
  </div>

   <div class="form-group">
    <label>ID Kategori</label> <br>
    <select class="form-control" name="id_kategori">
        @foreach ($kategori as $data)
        <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
        @endforeach
    </select>
    <br>
  </div>
   <div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="foto"><br>
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
