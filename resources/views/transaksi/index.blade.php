@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Data Transaksi') }}</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Add</a>

 <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Jumlah </th>
      <th scope="col">Tanggal Transaksi </th>
      <th scope="col">ID Buku</th>
      <th scope="col">ID Pembeli</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @php $no =1; @endphp

@foreach ($transaksi as $data )

    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{$data->jumlah}}</td>
      <td>{{$data->tgl_transaksi}}</td>
      <td>{{$data->buku->nama_buku}}</td>
      <td>{{$data->pembeli->nama_pembeli}}</td>

      <td>
     <form action="{{ route('transaksi.destroy', $data->id) }}" method="post">
      @csrf
      @method('DELETE')
      <a href="{{ route('transaksi.edit',$data->id) }}" class="btn btn-success">Edit</a>
     <a href="{{ route('transaksi.show',$data->id) }}"  class="btn btn-warning">Show</a>
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
