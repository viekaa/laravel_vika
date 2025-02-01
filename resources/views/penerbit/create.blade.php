@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">{{ __(' Tambah Data Penerbit') }}</div>
            
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
                <form action="{{ route('penerbit.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
  <div class="form-group">
    <label>Nama Penerbit</label>
    <input type="text" class="form-control" name="nama_penerbit"><br>
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
