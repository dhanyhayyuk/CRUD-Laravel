@extends('layouts.default')

@section('content')
<section>
  <div class="container-fluid">
    
    <div class="mt-3 btn-group">
      <a href="{{url('/')}}" class="btn btn-danger"><i class="bi bi-backspace"></i></a>
      <a href="{{url('/index')}}" class="btn btn-outline-danger">Kembali</a>
      
  </div>
  <div class="text-center">
    <h1 style="color:rgb(0, 119, 255)">Edit Data Siswa</h1>
  </div>
    <form action="/update/{{$datas->id}}" method="POST" class="mt-3">
        @csrf
        <div class="mb-3 ">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama" placeholder="Masukkan Nama" value="{{$datas->nama}}">
          
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp" name="alamat" placeholder="Masukkan Alamat" value="{{$datas->alamat}}">
            
          </div>
        <div class="mb-3">
            <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
            <input type="date" placeholder="12-12-2012" class="form-control" name="tanggallahir" id="tanggallahir" value="{{$datas->tanggallahir}}">
          </div>
        
        <div class="row">
          <div class="col">
        <button type="submit" class="btn btn-outline-primary">Edit Siswa</button>
          </div>
        </div>
      </form>
  </div>
@endsection