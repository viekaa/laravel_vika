@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Update Data Genre') }}</div>

                <div class="card-body">
                <form action="{{ route('genre.update',$genre->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>Id</label>
    <input type="number" class="form-control" value="{{ $genre->id }}" name="id"><br>
  </div>
  <div class="form-group">
    <label>Genre</label>
    <input type="text" class="form-control" value="{{ $genre->genre }}"name="genre"><br>
  </div>

  <br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>


            </div>
        </div>
    </div>
</div>
@endsection
