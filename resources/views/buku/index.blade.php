@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Data Buku') }}</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                <a href="{{ route('buku.create') }}" class="btn btn-primary">Add</a>

 <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Buku </th>
      <th scope="col">Harga </th>
      <th scope="col">Stok</th>
      <th scope="col">Image</th>
      <th scope="col">ID Penerbit</th>
      <th scope="col">Tanggal Terbit</th>
      <th scope="col">ID Genre</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @php $no =1; @endphp

@foreach ($buku as $data )

    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{$data->nama_buku}}</td>
      <td>{{$data->harga}}</td>
      <td>{{$data->stok}}</td>
        <td>
        <img src="{{asset('/image/buku/'.$data->image)}}" width="100">
      </td>
      <td>{{$data->penerbit->nama_penerbit}}</td>
      <td>{{$data->tgl_terbit}}</td>
      <td>{{$data->genre->genre}}</td>

      <td>
     <form action="{{ route('buku.destroy', $data->id) }}" method="post">
      @csrf
      @method('DELETE')
      <a href="{{ route('buku.edit',$data->id) }}" class="btn btn-success">Edit</a>
     <a href="{{ route('buku.show',$data->id) }}"  class="btn btn-warning">Show</a>
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
