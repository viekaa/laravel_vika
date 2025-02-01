@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Data Kategori') }}</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                <a href="{{ route('kategori.create') }}" class="btn btn-primary">Add</a>

 <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Kategori</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @php $no =1; @endphp

@foreach ($kategori as $data )

    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{$data->nama_kategori}}</td>
      <td>
     <form action="{{ route('kategori.destroy', $data->id) }}" method="post">
      @csrf
      @method('DELETE')
      <a href="{{ route('kategori.edit',$data->id) }}" class="btn btn-success">Edit</a>
     <a href="{{ route('kategori.show',$data->id) }}"  class="btn btn-warning">Show</a>
     <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?')">Delete</button>
     </form>
      </td>
    </tr>
    @endforeach
    <tbody>
</table>
            </div>
        </div>
    </div>
</div>
@endsection
