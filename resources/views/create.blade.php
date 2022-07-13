@extends('layouts.default')

@section('content')
<section>
  <div class="container-fluid">
    <div class="mt-3 btn-group">
      <a href="{{url('/')}}" class="btn btn-outline-danger"><i class="bi bi-backspace"></i></a>
      <a href="{{url('/')}}" class="btn btn-outline-danger">Kembali ke halaman utama</a>
      
  </div>
    <form action="{{url('/store')}}" method="POST" class="mt-3">
        @csrf
        <div class="mb-3 ">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama" placeholder="Masukkan Nama">
          
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" placeholder="Masukkan Alamat" id="alamat" name="alamat"></textarea>
            
          </div>
        <div class="mb-3">
            <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
            <input type="date" placeholder="12-12-2012" class="form-control" name="tanggallahir" id="tanggallahir">
          </div>
        
        <div class="row">
          <div class="col">
        <button type="submit" class="btn btn-outline-primary"  >Tambah Siswa</button>
          </div>
        </div>
      </form>
  </div>
@endsection