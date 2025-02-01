@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Update Data Penerbit') }}</div>

                <div class="card-body">
                <form action="{{ route('penerbit.update',$penerbit->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>Id</label>
    <input type="number" class="form-control" value="{{ $penerbit->id }}" name="id"><br>
  </div>
  <div class="form-group">
    <label>Nama Penerbit</label>
    <input type="text" class="form-control" value="{{ $penerbit->nama_penerbit }}"name="nama_penerbit"><br>
  </div>

  <br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>


            </div>
        </div>
    </div>
</div>
@endsection
