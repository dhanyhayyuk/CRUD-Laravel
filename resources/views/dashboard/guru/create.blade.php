@extends('layouts.default')

@section('content')
<section>
  <div class="container-fluid">
    <div class="mt-3 btn-group">
      <a href="/guru" class="btn btn-outline-danger"><i class="bi bi-backspace"></i></a>
      <a href="/guru" class="btn btn-outline-danger">Kembali ke halaman utama</a>
      
  </div>
    <form action="/guru/store" method="POST" class="mt-3" enctype='multipart/form-data'>
        @csrf
        <div class="mb-3 ">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
          
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" placeholder="Masukkan Alamat" id="alamat" name="alamat"></textarea>
          </div>
        <div class="mb-3">
            <label for="ttl" class="form-label">Tempat Tanggal Lahir</label>
            <input type="text" placeholder="semarang,12-12-2012" class="form-control" name="ttl" id="ttl">
          </div>
        <div class="mb-3">
            <label for="nohp" class="form-label">No.Handphone</label>
            <input type="number" placeholder="08xxx" class="form-control" name="nohp" id="nohp">
          </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" placeholder="hhh@gmail.com" class="form-control" name="email" id="email" aria-describedby="emailHelp">
          </div>
          <form>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label><br>
            <input type="radio" name="jabatan" id="ketua" value="Ketua">
                <label for="ketua">Ketua</label><br>
            <input type="radio"  name="jabatan" id="wakil"  value="Wakil">
                <label for="wakil">Wakil</label><br>
            <input type="radio"  name="jabatan" id="sekretaris"  value="Sekretaris">
                <label for="sekretaris">Sekretaris</label><br>
            <input type="radio"  name="jabatan" id="bendahara" value="Bendahara">
                <label for="bendahara">Bendahara</label><br>
            <input type="radio" name="jabatan" id="javascript" name="fav_language" value="/">
                <label for="javascript">siswa biasa</label>
          </div>
        
        
        <div class="row">
          <div class="col">
        <button type="submit" class="btn btn-outline-primary">Tambah Siswa</button>
          </div>
        </div>
      </form>
  </div>
@endsection