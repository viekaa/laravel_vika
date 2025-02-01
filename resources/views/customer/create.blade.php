@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Tambah Data Customer') }}</div>
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
                <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
  <div class="form-group">
    <label>Name customer</label>
    <input type="text" class="form-control" name="name_customer"><br>
  </div>
  <div class="form-group">
    <label>Gender</label> <br><br>
    <input type="radio" class="form-check-input" name="gender" value="Laki-laki">Laki-laki &nbsp;
    <input type="radio" class="form-check-input" name="gender" value="Perempuan">Perempuan <br><br>
  </div>
  <div class="form-group">
    <label>Contact</label>
    <input type="number" class="form-control" name="contact"><br>
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
