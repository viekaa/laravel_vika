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
                                Data Produk
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                        @if (session('success'))
                    <div class="alert alert-success show" role="alert">
                    {{ session('success')}}
                    </div>
                    @endif
                                    <div class="table-responsive">
                                         <a href="{{ route('produk.create') }}" class="btn btn-primary">Add</a>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <tr>
                                             <th >No</th>
                                             <th >Nama Produk </th>
                                             <th >Harga </th>
                                             <th >Stok</th>
                                             <th >ID Kategori</th>
                                             <th >Foto</th>
                                             <th >Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 @php $no =1; @endphp

                                                 @foreach ($produk as $data )
                                                <tr>
                                                   <td>{{$no++}}</td>
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
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- /.row -->
                </div>
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
