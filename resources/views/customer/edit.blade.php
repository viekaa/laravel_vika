@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Update Data Customer') }}</div>

                <div class="card-body">
                <form action="{{ route('customer.update',$customer->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>Name Customer</label>
    <input type="text" class="form-control" value="{{ $customer->name_customer }}" name="name_customer"><br>
  </div>
   <div class="form-group">
    <label>Gender</label> <br><br>
    <input type="radio" class="form-check-input" name="gender" value="Laki-laki">Laki-laki &nbsp;
    <input type="radio" class="form-check-input" name="gender" value="Perempuan">Perempuan <br><br>
  </div>
<div class="form-group">
    <label>Contact</label>
    <input type="number" class="form-control" value="{{ $customer->contact }}"name="contact"><br>
  </div>

  <br>
  <button type="submit" class="btn btn-primary">update</button>
</form>


            </div>
        </div>
    </div>
</div>
@endsection
