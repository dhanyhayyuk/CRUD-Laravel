@extends('layouts.default')

@section('content')
<section>
  <div class="container-fluid">
    
    <div class="mt-3 btn-group">
      <a href="/guru" class="btn btn-danger"><i class="bi bi-backspace"></i></a>
      <a href="/guru" class="btn btn-outline-danger">Kembali</a>
      
  </div>
  <div class="text-center">
    <h1 style="color:rgb(0, 119, 255)">Edit Data Siswa</h1>
  </div>
    <form action="/guru/update/{{$datas->id}}" method="POST" class="mt-3">
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
            <label for="ttl" class="form-label">Tempat Tanggal Lahir</label>
            <input type="text" placeholder="semarang,12-12-2012" class="form-control" name="ttl" id="ttl" value="{{$datas->ttl}}">
          </div>
          <div class="mb-3">
            <label for="nohp" class="form-label">No.Handphone</label>
            <input type="number" placeholder="08xxx" class="form-control" name="nohp" id="nohp" value="{{$datas->nohp}}">
          </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" placeholder="hhh@gmail.com" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="{{$datas->email}}">
          </div>
        <div class="mb-3">
            <label for="jabatan"  class="form-label">Jabatan</label><br>
            <input type="radio" name="jabatan" id="html" name="fav_language" value="Ketua">
                <label for="html">Ketua</label><br>
            <input type="radio" name="jabatan" id="css" name="fav_language" value="Wakil">
                <label for="css">Wakil</label><br>
            <input type="radio" name="jabatan" id="javascript" name="fav_language" value="Sekretaris">
                <label for="javascript">Sekretaris</label><br>
            <input type="radio" name="jabatan" id="javascript" name="fav_language" value="Bendahara">
                <label for="javascript">Bendahara</label><br>
            <input type="radio" name="jabatan" id="javascript" name="fav_language" value="/">
                <label for="javascript">siswa biasa</label>
          </div>  
        
        <div class="row">
          <div class="col">
        <button type="submit" class="btn btn-outline-primary">Edit Siswa</button>
          </div>
        </div>
      </form>
  </div>
@endsection