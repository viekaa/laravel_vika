@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Update Data Pembeli') }}</div>

                <div class="card-body">
                <form action="{{ route('pembeli.show',$pembeli->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>Id</label>
    <input type="number" class="form-control" value="{{ $pembeli->id }}" name="id" disabled><br>
  </div>
  <div class="form-group">
    <label>Nama Pembeli</label>
    <input type="text" class="form-control" value="{{ $pembeli->nama_pembeli }}"name="nama_pembeli" disabled><br>
  </div>
 <div class="form-group">
    <label>Jenis Kelamin</label> <br><br>
    <input type="text" class="form-control" value="{{ $pembeli->jenis_kelamin}}" name="jenis_kelamin" disabled><br>
  </div>
  <div class="form-group">
    <label>Telepon</label>
    <input type="number" class="form-control" value="{{ $pembeli->telepon }}" name="telepon"disabled><br>
  </div>
   <br>
  <br>
  <a href="{{ route('penerbit.index') }}" class="btn btn-primary">Back</a>
</form>


            </div>
        </div>
    </div>
</div>
@endsection
