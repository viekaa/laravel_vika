@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Tambah Data Telepon') }}</div>

                <div class="card-body">
                <form action="{{ route('telepon.update', $telepon->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>Nomor</label>
    <input type="number" class="form-control" name="nomor" value="{{ $telepon->nomor }}" disabled><br>
  </div>

   <div class="form-group">
    <label>ID Pengguna</label> <br>
    <select class="form-control" name="id_pengguna" disabled>
        @foreach ($pengguna as $data)
        <option value="{{ $data->id }}" {{ $data->id == $telepon->id_pengguna ? 'selected' : ''}}>{{ $data->nama }}</option>
        @endforeach
    </select>
    <br>
  </div>
  <a href="{{ route('telepon.index') }}" class="btn btn-primary">Back</a>
</form>
 </div>


            </div>
        </div>
    </div>
</div>
@endsection
