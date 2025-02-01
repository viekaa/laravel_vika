@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Tambah Data Order') }}</div>

                <div class="card-body">
                <form action="{{ route('order.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

     <div class="form-group">
    <label>ID Product</label> <br>
    <select class="form-control" name="id_product">
        @foreach ($product as $data)
        <option value="{{ $data->id }}">{{ $data->name_product }}</option>
        @endforeach
    </select>
    <br>
  </div>
  <div class="form-group">
    <label>Quantity</label>
    <input type="number" class="form-control" name="quantity"><br>
  </div>
 <div class="form-group">
    <label>Order Date</label>
    <input type="date" class="form-control" name="order_date"><br>
  </div>
   <div class="form-group">
    <label>ID Customer</label> <br>
    <select class="form-control" name="id_customer">
        @foreach ($customer as $data)
        <option value="{{ $data->id }}">{{ $data->name_customer }}</option>
        @endforeach
    </select>
    <br>
  </div>
  <button type="submit" class="btn btn-primary">save</button>
</form>
 </div>


            </div>
        </div>
    </div>
</div>
@endsection
