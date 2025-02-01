@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __(' Show Data Pengguna') }}</div>

                <div class="card-body">
                <form action="{{ route('pengguna.show',$pengguna->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>Id</label>
    <input type="number" class="form-control" value="{{ $pengguna->id}}" name="nis" disabled><br>
  </div>
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" value="{{ $pengguna->nama }}"name="nama" disabled><br>
  </div>

  <br>
  <a href="{{ route('pengguna.index') }}" class="btn btn-primary">Back</a>
</form>


            </div>
        </div>
    </div>
</div>
@endsection
