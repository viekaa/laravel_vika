<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{ asset('admin/css/timeline.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('admin/css/startmin.css') }}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{ asset('admin/css/morris.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- navbar -->
             @include('layouts.part.navbar')
                <!-- navbar -->
                <!-- /.navbar-top-links -->
            </nav>

            <aside class="sidebar navbar-default" role="navigation">
                <!-- sidebar -->
             @include('layouts.part.sidebar')
            </aside>
            <!-- /.sidebar -->

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Produk</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                  <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Edit Data Produk
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                             <form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                                                <div class="form-group">
                                                    <label>Nama Produk</label>
                                                    <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}"class="form-control">
                                                </div>
                                                 <div class="form-group">
                                                    <label>Harga</label>
                                                    <input type="number" name="harga"  value="{{ $produk->harga }}" class="form-control">
                                                </div>
                                               <div class="form-group">
                                                    <label>Stok</label>
                                                    <input type="number" name="stok" value="{{ $produk->stok }}" class="form-control">
                                                </div>
                                               <div class="form-group">
    <label>ID Kategori</label> <br>
    <select class="form-control" name="id_kategori">
        @foreach ($kategori as $data)
        <option value="{{ $data->id }}" {{ $data->id == $produk->id_kategori ? 'selected' : ''}}>{{ $data->nama_kategori }}</option>
        @endforeach
    </select>
    <br>

                                              </div>
   <div class="form-group">
    <label>Foto</label>
    <br>
     <img src="{{asset('/image/produk/'.$produk->foto)}}" width="100"><br>
    <input type="file" class="form-control" value="{{ $produk->foto }}"name="foto"><br>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Edit</button>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('admin/js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('admin/js/metisMenu.min.js') }}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('admin/js/raphael.min.js') }}"></script>
        <script src="{{ asset('admin/js/morris.min.js') }}"></script>
        <script src="{{ asset('admin/js/morris-data.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('admin/js/startmin.js') }}"></script>

    </body>

</html>
