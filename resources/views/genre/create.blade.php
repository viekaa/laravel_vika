@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">{{ __(' Tambah Data Genre') }}</div>

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
                <form action="{{ route('genre.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
  <div class="form-group">
    <label>Genre</label>
    <input type="text" class="form-control" name="genre"><br>
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
