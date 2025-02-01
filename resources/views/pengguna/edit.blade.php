@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Update Data Pengguna') }}</div>

                <div class="card-body">
                <form action="{{ route('pengguna.update',$pengguna->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>Id</label>
    <input type="number" class="form-control" value="{{ $pengguna->id }}" name="nis"><br>
  </div>
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" value="{{ $pengguna->nama }}"name="nama"><br>
  </div>

  <br>
  <button type="submit" class="btn btn-primary">update</button>
</form>


            </div>
        </div>
    </div>
</div>
@endsection
