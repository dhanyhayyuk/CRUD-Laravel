@extends('layouts.default')
@section ('content')
<link rel="stylesheet" href='https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300&display=swap'/>
<style>body
    {
        font-family: 'Signika Negative', sans-serif;
    }
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"/> 
<section>
    <div class="container-fluid mt-5 me-5" >
        <div class="row">
            <div class="col-lg">
                <h1 class="mb-3" style="text-align: center;color:rgb(0, 119, 255)">Daftar Siswa</h1>
           </div>
        </div>
           <div class="row">
            <div class="col-lg">
           <a href="{{url ('create')}}" class="btn btn-outline-primary mb-3 ms-0 "><i class="bi bi-plus-square"></i>  Tambah Siswa</a>
           </div>
        </div>
            <div class="table-responsive">
                <table class="table-bordered table-info display  py-3" id="tableSiswa" >
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Action</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                        <?php  $i=1 ?>
                        @foreach ($datas as $data)
                            
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>{{$data->tanggallahir}}</td>
                            <td>{{$data->action}}
                                <div class="btn-group mb-1">
                                    <a href="/show/{{$data->id}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="/show/{{$data->id}}" class="btn btn-outline-warning">Edit</a>
                                </div>
                                <div class="btn-group mb-1">
                                    
                                    <a href="/destroy/{{$data->id}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    <a href="/destroy/{{$data->id}}" class="btn btn-outline-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        </div>
    </div>
</section>  

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>$(document).ready(function () {
    $('#tableSiswa').DataTable();
});</script>  
@endsection