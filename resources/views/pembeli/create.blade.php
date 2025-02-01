@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">{{ __(' Tambah Data Pembeli') }}</div>

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
                <form action="{{ route('pembeli.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
  <div class="form-group">
    <label>Nama pembeli</label>
    <input type="text" class="form-control" name="nama_pembeli"><br>
  </div>

  <div class="form-group">
    <label>Jenis Kelamin</label><br><br>
    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki">Laki-laki &nbsp;
    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan <br><br>
  </div>

  <div class="form-group">
    <label>Telepon</label>
    <input type="number" class="form-control" name="telepon"><br>
  </div>
  <button type="submit" class="btn btn-primary">save</button>
</form>
 </div>

            </div>
        </div>
    </div>
</div>
@endsection
