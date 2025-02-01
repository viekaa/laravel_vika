@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __(' Show Data Penerbit') }}</div>

                <div class="card-body">
                <form action="{{ route('penerbit.show',$penerbit->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>Id</label>
    <input type="number" class="form-control" value="{{ $penerbit->id}}" name="id" disabled><br>
  </div>
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" value="{{ $penerbit->nama_penerbit}}" name="nama_penerbit" disabled><br>
  </div>

  <br>
  <a href="{{ route('penerbit.index') }}" class="btn btn-primary">Back</a>
</form>


            </div>
        </div>
    </div>
</div>
@endsection
