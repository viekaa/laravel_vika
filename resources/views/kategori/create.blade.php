@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __(' Tambah Data Kategori') }}</div>

                <div class="card-body">
                <form action="{{ route('kategori.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
  <div class="form-group">
    <label>Nama Kategori</label>
    <input type="text" class="form-control" name="nama_kategori"><br>
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
