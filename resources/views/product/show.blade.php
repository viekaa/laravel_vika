@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __(' Show Data Product') }}</div>

                <div class="card-body">
                <form action="{{ route('product.show',$product->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>Name Product</label>
    <input type="text" class="form-control" value="{{ $product->name_product}}" name="name_product" disabled><br>
  </div>
  <div class="form-group">
    <label>Merk</label>
    <input type="text" class="form-control" value="{{ $product->merk }}"name="merk" disabled><br>
  </div>
<div class="form-group">
    <label>Price</label>
    <input type="number" class="form-control" value="{{ $product->price}}" name="price" disabled><br>
  </div>
  <div class="form-group">
    <label>Stoct</label>
    <input type="number" class="form-control" value="{{ $product->stock }}"name="stock" disabled><br>
  </div>
  <br>
  <a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>
</form>


            </div>
        </div>
    </div>
</div>
@endsection
