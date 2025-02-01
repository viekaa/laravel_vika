@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __(' Tambah Data Product') }}</div>
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
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
  <div class="form-group">
    <label>Name Product</label>
    <input type="text" class="form-control" name="name_product"><br>
  </div>
  <div class="form-group">
    <label>Merk</label>
    <input type="text" class="form-control" name="merk"><br>
  </div>
  <div class="form-group">
    <label>Price</label>
    <input type="number" class="form-control" name="price"><br>
  </div>
  <div class="form-group">
    <label>Stoct</label>
    <input type="number" class="form-control" name="stock"><br>
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
