@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __(' Show Data Kategori') }}</div>

                <div class="card-body">
                <form action="{{ route('kategori.show',$kategori->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>Id</label>
    <input type="number" class="form-control" value="{{ $kategori->id}}" name="id" disabled><br>
  </div>
  <div class="form-group">
    <label>Nama Kategori</label>
    <input type="text" class="form-control" value="{{ $kategori->nama_kategori }}"name="nama_kategori" disabled><br>
  </div>

  <br>
  <a href="{{ route('kategori.index') }}" class="btn btn-primary">Back</a>
</form>


            </div>
        </div>
    </div>
</div>
@endsection
