@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Update Data Kategori') }}</div>

                <div class="card-body">
                <form action="{{ route('kategori.update',$kategori->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>Id</label>
    <input type="number" class="form-control" value="{{ $kategori->id }}" name="id"><br>
  </div>
  <div class="form-group">
    <label>Nama Kategori</label>
    <input type="text" class="form-control" value="{{ $kategori->nama_kategori}}"name="nama_kategori"><br>
  </div>

  <br>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>


            </div>
        </div>
    </div>
</div>
@endsection
