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
           <a href="{{url ('guru/create')}}" class="btn btn-outline-primary mb-3 ms-0 "><i class="bi bi-plus-square"></i>  Tambah Siswa</a>
           </div>
        </div>
            <div class="table-responsive">
                <table class="table-bordered table-info display  py-3" id="tableSiswa" >
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">TTL</th>
                        <th scope="col">No.Hp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                        
                       
                      </tr>
                    </thead>
                    <tbody>
                        <?php  $i=1 ?>
                        @foreach ($datas as $data)
                            
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$data->nama}} /// <p class="d-inline btn-warning">{{$data->jabatan}}</p> </td>
                            <td>{{$data->alamat}}</td>
                            <td>{{$data->ttl}}</td>
                            <td>
                                <div class="btn-group">
                             <a class="btn " href="http://wa.me/{{$data->nohp}}" target="_blank" role="button" style="background-color: #3dc14f"><i class="bi bi-whatsapp me-1"></i></a>
                             <a class="btn btn-outline-success" href="http://wa.me/{{$data->nohp}}" target="_blank" role="button" >{{$data->nohp}}</a>
                            </div>
                            </td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->action}}
                                <div class="btn-group mb-1">
                                    <a href="guru/show/{{$data->id}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="guru/show/{{$data->id}}" class="btn btn-outline-warning">Edit</a>
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