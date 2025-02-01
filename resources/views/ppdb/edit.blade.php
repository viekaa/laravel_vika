@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Ubah Data Siswa') }}</div>

                <div class="card-body">
                <form action="{{ route('ppdb.update',$ppdb->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
    <label>Nama Lengkap</label>
    <input type="text" class="form-control" value="{{ $ppdb->nama_lengkap }}" name="nama_lengkap"><br>
  </div>
  <div class="form-group">
    <label>Jenis Kelamin</label> <br><br>
    <input type="radio" class="form-check-input"  name="jenis_kelamin" value="Laki-laki">Laki-laki &nbsp;
    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan <br><br>
  </div>
  <div class="form-group">
    <label>Agama</label> <br>
    <select class="form-control" value="{{ $ppdb->agama }}"name="agama">
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Atheis">Atheis</option>
    </select> <br>
    <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" value="{{ $ppdb->alamat }}" name="alamat"></textarea>
  </div>
  <div class="form-group">
    <label>Telepon</label><br>
    <input type="number" value="{{ $ppdb->telepon }}"class="form-control" name="telepon"><br>
  </div>
  <div class="form-group">
    <label>Asal Sekolah</label><br>
    <textarea class="form-control" value="{{ $ppdb->asal_sekolah }}" name="asal_sekolah"></textarea>
 </div>


  </div>
  <br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>




            </div>
        </div>
    </div>
</div>
@endsection
