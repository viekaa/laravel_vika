@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Produk') }}</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                <a href="{{ route('produk.create') }}" class="btn btn-primary">Add</a>

 <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk </th>
      <th scope="col">Harga </th>
      <th scope="col">Stok</th>
      <th scope="col">ID Kategori</th>
      <th scope="col">Foto</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @php $no =1; @endphp

@foreach ($produk as $data )

    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{$data->nama_produk}}</td>
      <td>{{$data->harga}}</td>
      <td>{{$data->stok}}</td>
      <td>{{$data->kategori->nama_kategori}}</td>
       <td>
        <img src="{{asset('/image/produk/'.$data->foto)}}" width="100">
      </td>
      <td>
     <form action="{{ route('produk.destroy', $data->id) }}" method="post">
      @csrf
      @method('DELETE')
      <a href="{{ route('produk.edit',$data->id) }}" class="btn btn-success">Edit</a>
     <a href="{{ route('produk.show',$data->id) }}"  class="btn btn-warning">Show</a>
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
