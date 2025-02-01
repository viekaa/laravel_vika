@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __(' Update Data Pembeli') }}</div>

                <div class="card-body">
                <form action="{{ route('pembeli.update',$pembeli->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>Id</label>
    <input type="number" class="form-control" value="{{ $pembeli->id }}" name="id"><br>
  </div>
  <div class="form-group">
    <label>Nama Pembeli</label>
    <input type="text" class="form-control" value="{{ $pembeli->nama_pembeli }}"name="nama_pembeli"><br>
  </div>
  <div class="form-group">
    <label>Jenis Kelamin</label>
    <input type="radio" class="form-check-input" name="jenis_kelamin" value="{{ $pembeli->jenis_kelamin }}">Laki-laki &nbsp;
    <input type="radio" class="form-check-input" name="jenis_kelamin" value="{{ $pembeli->jenis_kelamin }}">Perempuan <br><br>
  </div>
  <div class="form-group">
    <label>Telepon</label>
    <input type="number" class="form-control" value="{{ $pembeli->telepon }}" name="telepon"><br>
  </div>
   <br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>


            </div>
        </div>
    </div>
</div>
@endsection
