@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Update Data Product') }}</div>

                <div class="card-body">
                <form action="{{ route('product.update',$product->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>Name Product</label>
    <input type="text" class="form-control" value="{{ $product->name_product }}" name="name_product"><br>
  </div>
  <div class="form-group">
    <label>Merk</label>
    <input type="text" class="form-control" value="{{ $product->merk }}"name="merk"><br>
  </div>
<div class="form-group">
    <label>Price</label>
    <input type="number" class="form-control" value="{{ $product->price }}"name="price"><br>
  </div>
  <div class="form-group">
    <label>Stoct</label>
    <input type="number" class="form-control" value="{{ $product->stock }}"name="price"><br>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">update</button>
</form>


            </div>
        </div>
    </div>
</div>
@endsection
