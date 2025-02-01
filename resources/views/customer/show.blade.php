@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __(' Show Data Customer') }}</div>

                <div class="card-body">
                <form action="{{ route('customer.show',$customer->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>Name Customer</label>
    <input type="text" class="form-control" value="{{ $customer->name_customer}}" name="name_customer" disabled><br>
  </div>
<div class="form-group">
    <label>Gender</label> <br><br>
    <input type="text" class="form-control" value="{{ $customer->gender}}" name="gender" disabled><br>
  </div>
<div class="form-group">
    <label>Contact</label>
    <input type="number" class="form-control" value="{{ $customer->contact}}" name="contact" disabled><br>
  </div>

  <br>
  <a href="{{ route('customer.index') }}" class="btn btn-primary">Back</a>
</form>


            </div>
        </div>
    </div>
</div>
@endsection
